var config =
    {
        config: {
            mixins: {
                'Magento_Checkout/js/view/minicart': {
                    'Extend_Warranty/js/view/minicart-mixin': false,
                    'Extend_PurchasePriceOffers/js/view/minicart-mixin': true
                }
            }
        },
        map:
            {
                '*':
                    {
                    extendWarrantyOffers: 'Extend_PurchasePriceOffers/js/warranty-offers-base',
                    simpleProductWarranty: 'Extend_PurchasePriceOffers/js/product/simple-warranty',
                    bundleProductWarranty: 'Extend_PurchasePriceOffers/js/product/bundle-warranty'
                    }
            },
    };
