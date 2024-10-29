const PluginManager = window.PluginManager;
PluginManager.override('AddToCart', () => import('./add-to-cart-override/add-to-cart-override.plugin'), '[data-add-to-cart]');