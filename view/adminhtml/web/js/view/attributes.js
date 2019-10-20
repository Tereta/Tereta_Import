define(['jquery', 'ko', 'uiRegistry'], function($, ko, uiRegistry){
    var viewModel = function(element, fieldCode){
        this.rowCounter = 0;
        this.rowData = ko.observableArray();
        this.element = element;
        this.fieldCode = fieldCode;

        this.actionAdd = function() {
            this.rowCounter++;

            this.rowData.push({
                "attribute": "",
                "rowId": this.rowCounter,
                "parentModel": this
            });

            this.encodeValueString();
        },

        this.actionRemove = function(observableData, ev) {
            var rowId = observableData.rowId;
            var viewModel = observableData.parentModel;
            var indexRemove = null;

            $(viewModel.rowData()).each(function(index, value){
                if (value.rowId == rowId) {
                    indexRemove = index;
                }
            })

            if (typeof indexRemove != 'null') {
                viewModel.rowData.splice(indexRemove, 1);
            }

            viewModel.encodeValueString();
        },

        this.changeValue = function(observableData, ev)
        {
            var object = $(ev.target);
            var key = object.attr('name');
            var keyPrefix = this.parentModel.fieldCode + "_";
            if (key.substring(0, keyPrefix.length) == keyPrefix) {
                key = key.substring(keyPrefix.length);
            }

            observableData[key] = object.val();
            this.parentModel.encodeValueString();
        },

        this.encodeValueString = function()
        {
            var data = [];
            $(this.rowData()).each(function(key, value){
                if (!value.attribute) {
                    return;
                }
                data.push(value.attribute);
            });
            var jsonData = JSON.stringify(data);
            uiRegistry.get('advencedimport_form.advencedimport_form_data_source').data[this.fieldCode] = jsonData;
        },

        this.decodeValueString = function()
        {
            var _this = this;
            var listingAttribute = uiRegistry.get('advencedimport_form.advencedimport_form_data_source').data[this.fieldCode];
            var data = [];
            if (listingAttribute) {
                data = JSON.parse(listingAttribute);
            }
            var rowData = [];

            $(data).each(function(key, item){
                _this.rowCounter++;
                rowData.push({
                    "attribute": item,
                    "rowId": _this.rowCounter,
                    "parentModel": _this
                });
            });

            this.rowData(rowData);
        }

        this.decodeValueString();
    };

    var attributesObject = function(config, element){
        this.element = element;
        this.config = config;

        this.init = function(){
            var currentViewModel = new viewModel(this.element, this.config.fieldCode);
            var binded = ko.applyBindings(currentViewModel, this.element);
        }

        this.init();
    }

    return function(config, element){
        return new attributesObject(config, element);
    };
})