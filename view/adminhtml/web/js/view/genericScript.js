define(['jquery', 'ko', 'uiRegistry', 'domReady!'], function($, ko, uiRegistry){
    var genericScriptView = function(config, element){
        var self = this;
        this.config = config;
        this.element = element;
        this.formElement = null;

        this.changeType = function()
        {
            var extractTypeAllowed;
            var extractType = self.formElement.find('.advencedimport_fieldset_extract_type');
            extractType.addClass('hidden');

            var value = $(this).val();
            if (value) {
                extractTypeAllowed = self.formElement.find('.advencedimport_fieldset_extract_type_' + value);
                extractTypeAllowed.removeClass('hidden');
            }
        }

        this.init = function(){
            var fieldset = this.element.closest('fieldset');
            var typeField = $(fieldset).find(this.config.typeField);
            this.formElement = $(fieldset).closest('.entry-edit');

            this.changeType.apply(typeField.get(0));
            typeField.on('change', this.changeType);
        }

        this.init();
    }

    return function(config, element){
        return new (function(config, element){
            ko.applyBindings(new genericScriptView(config, element), element);
        })(config, element);
    };
});