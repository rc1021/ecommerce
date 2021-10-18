require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import './jquery-global';
import 'owl.carousel';

if ( window.addEventListener ) {
    window.addEventListener("load", function(event) {
        $('.owl-carousel.autoload').each(function() {
            let script_data = {};
            try {
                script_data = JSON.parse($(this).next('script').text());
            }
            catch(err){}
            let opts = $.extend({
                onInitialized: function () {
                    this.$element.trigger('initialized', [this]);
                },
                onChange: function (property) {
                    this.$element.trigger('change', [this, property]);
                }
            }, script_data, $(this).data());
            $(this).owlCarousel(opts);
        });
    });
}
