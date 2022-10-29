define(['jquery', 'ko', 'uiRegistry'], function($, ko, uiRegistry){
    var viewModel = function(element, fieldCode){
        this.rowCounter = 0;
        this.rowData = ko.observableArray();
        this.element = element;
        this.fieldCode = fieldCode;

        this.actionAdd = function() {
            this.rowCounter++;

            this.rowData.push({
                "key": "",
                "value": "",
                "type": "",
                "rowId": this.rowCounter,
                "parentModel": this
            });

            this.encodeValueString();
        };

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
        };

        this.changeValue = function(observableData, ev)
        {
            var object = $(ev.target);
            var key = object.attr('name');
            var keyPrefix = "field_";
            if (key.substring(0, keyPrefix.length) == keyPrefix) {
                key = key.substring(keyPrefix.length);
            }

            observableData[key] = object.val();
            this.parentModel.encodeValueString();
        };

        this.encodeValueString = function()
        {
            var data = [];
            $(this.rowData()).each(function(key, value){
                if (!value.key || !value.value) {
                    return;
                }
                data.push({'key': value.key, 'value': value.value, 'type': value.type});
            });

            var jsonData = JSON.stringify(data);

            uiRegistry.get('advencedimport_form.advencedimport_form_data_source').data[this.fieldCode] = jsonData;
        };

        this.decodeValueString = function()
        {
            var _this = this;

            var mappingAttribute = uiRegistry.get('advencedimport_form.advencedimport_form_data_source').data[this.fieldCode];
            if (typeof mappingAttribute == 'undefined') {
                mappingAttribute = '[]';
            }

            var data = JSON.parse(mappingAttribute);
            var rowData = [];

            $(data).each(function(key, item){
                _this.rowCounter++;
                rowData.push({
                    "key": item.key,
                    "value": item.value,
                    "type": item.type,
                    "rowId": _this.rowCounter,
                    "parentModel": _this
                });
            });

            this.rowData(rowData);
        }

        this.decodeValueString();
    };

    var mapValues = function(config, element){
        this.element = element;
        this.config = config;

        this.init = function(){
            var currentViewModel = new viewModel(this.element, this.config.fieldCode);
            ko.applyBindings(currentViewModel, this.element);
        }

        this.init();
    }

    return function(config, element){
        return new mapValues(config, element);
    };
})
