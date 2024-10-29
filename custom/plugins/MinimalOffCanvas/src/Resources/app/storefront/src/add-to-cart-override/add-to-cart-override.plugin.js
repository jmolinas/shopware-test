import AddToCartPlugin from '../../../../../../../../../vendor/shopware/storefront/Resources/app/storefront/src/plugin/add-to-cart/add-to-cart.plugin'
import DomAccess from '../../../../../../../../../vendor/shopware/storefront/Resources/app/storefront/src/helper/dom-access.helper';

export default class AddToCartOverride extends AddToCartPlugin {
    static options = {
        redirectSelector: '[name="redirectTo"]',
        redirectParamSelector: '[data-redirect-parameters="true"]',
        redirectTo: 'frontend.cart.minimaloffcanvas',
    };

    init() {
        super.init();
        const redirectInput = DomAccess.querySelector(this._form, this.options.redirectSelector);
        const redirectParamInput = DomAccess.querySelector(this._form, this.options.redirectParamSelector);

        redirectInput.value = this.options.redirectTo;
        redirectParamInput.disabled = false;
    }
}