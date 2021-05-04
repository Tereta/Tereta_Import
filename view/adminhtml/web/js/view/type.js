define(['jquery', 'ko', 'uiRegistry'], function($, ko, uiRegistry){
    var viewModel = function(element, fieldCode){
        var field = $(element).find('select[name=' + fieldCode + ']');

        this.changeValue = function() {
            uiRegistry.get('advencedimport_form.advencedimport_form_data_source').data[fieldCode] = field.val();

            $('.advencedimport_type').addClass('hidden');
            $('.advencedimport_type_' + field.val()).removeClass('hidden');
        }

        this.changeValue();
    };

    var filterObject = function(config, element){
        this.element = element;
        this.config = config;

        this.init = function(){
            var currentViewModel = new viewModel(this.element, this.config.fieldCode);
            ko.applyBindings(currentViewModel, this.element);
        }

        this.init();
    }

    return function(config, element){
        return new filterObject(config, element);
    };
})
