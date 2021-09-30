define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'allsecureexchange_creditcard',
                component: 'AllsecureExchange_AllsecureExchange/js/view/payment/method-renderer/creditcard'
            },
        );

        return Component.extend({});
    }
);
