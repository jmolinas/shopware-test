import template from './extension/sw-product-cross-selling-form/sw-product-cross-selling-form.html.twig';

Shopware.Component.override('sw-product-cross-selling-form', {
    template,
    inject: ['repositoryFactory'],
    created() {
        this.loadExtension();
    },
    computed: {
        showOffcanvas: {
            get() {
                return this.crossSelling.extensions.crossSellingOffcanvas?.show ?? 0;
            },
            set(value) {
                this.crossSelling.extensions.crossSellingOffcanvas.show = value === 1 ? true : false;
            },
        },
    },
    methods: {
        loadExtension() {
            if (!this.crossSelling.extensions.crossSellingOffcanvas) {
                this.crossSelling.extensions.crossSellingOffcanvas = this.repositoryFactory.create('cross_selling_offcanvas').create();
            }
        }
    },
});