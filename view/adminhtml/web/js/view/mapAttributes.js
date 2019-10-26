define(['jquery', 'ko', 'uiRegistry'], function($, ko, uiRegistry){
    var viewModel = {
        rowCounter: 0,
        rowData: ko.observableArray(),
        element: null,
        fieldName: null,

        actionAdd: function() {
            this.rowCounter++;

            this.rowData.push({
                "csv": "",
                "attribute": "",
                "rowId": this.rowCounter,
                "parentModel": this
            });

            this.encodeValueString();
        },

        actionRemove: function(observableData, ev) {
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

        changeValue: function(observableData, ev)
        {
            var object = $(ev.target);
            var key = object.attr('name');
            var keyPrefix = "field_attributes_";
            if (key.substring(0, keyPrefix.length) == keyPrefix) {
                key = key.substring(keyPrefix.length);
            }

            observableData[key] = object.val();
            this.parentModel.encodeValueString();
        },

        encodeValueString: function()
        {
            var data = [];
            $(this.rowData()).each(function(key, value){
                if (!value.csv || !value.attribute) {
                    return;
                }
                data.push({'key': value.csv, 'value': value.attribute});
            });
            var jsonData = JSON.stringify(data);
            uiRegistry.get('advencedimport_form.advencedimport_form_data_source').data.mapping_attribute = jsonData;
        },

        decodeValueString: function()
        {
            var _this = this;
            var mappingAttribute = uiRegistry.get('advencedimport_form.advencedimport_form_data_source').data.mapping_attribute;
            if (typeof mappingAttribute == 'undefined') {
                mappingAttribute = '[]';
            }

            var data = JSON.parse(mappingAttribute);
            var rowData = [];

            $(data).each(function(key, item){
                _this.rowCounter++;
                rowData.push({
                    "csv": item.key,
                    "attribute": item.value,
                    "rowId": _this.rowCounter,
                    "parentModel": _this
                });
            });

            this.rowData(rowData);
        }
    };

    var attributesMapping = function(config, element){
        this.element = element;
        this.config = config;

        this.init = function(){
            viewModel.element = this.element;
            viewModel.fieldName = this.config.fieldName;
            viewModel.decodeValueString();
            var binded = ko.applyBindings(viewModel, this.element);
        }

        this.init();
    }

    return function(config, element){
        return new attributesMapping(config, element);
    };
})