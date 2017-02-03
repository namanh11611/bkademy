define(
    [
        'jquery',
        'ko',
        'uiClass',
        'Magento_Catalog/js/price-utils'
    ],
    function ($,ko, UiClass, PriceUtils) {
        "use strict";
        return UiClass.extend({
            initialize: function () {
                this._super();
                /**
                 * Object init fields key
                 * @type {string[]}
                 */
                this.initFields = [
                    'title',
                    'value',
                    'code'
                ];
            },
            /**
             * Init data to object
             * @param data
             */
            init: function(data){
                var self = this;
                $.each(self.initFields, function(index, fieldKey){
                    self[fieldKey] = ko.observable((typeof data[fieldKey] != "undefined")?data[fieldKey]:'');
                })

                self.valueFormated = ko.pureComputed(function(){
                    var value = self.value();
                    return PriceUtils.formatPrice(value, window.webposConfig.priceFormat);
                });
            },
            /**
             * Set total data
             * @param key
             * @param value
             */
            setData: function(key,value){
                if(typeof this[key] != "undefined"){
                    if(this.autoValue() == true){
                        if(key == 'value'){
                            this[key] = value;
                        }
                    }else{
                        this[key](value);
                    }
                }
            },
            /**
             * Get total data
             * @param key
             * @returns {{}}
             */
            getData: function(key){
                var self = this;
                var data = {};
                if(typeof key != "undefined"){
                    data = self[this]();
                }else{
                    var data = {};
                    $.each(this.initFields, function(){
                        data[this] = self[this]();
                    });
                }
                return data;
            },
        });
    }
);