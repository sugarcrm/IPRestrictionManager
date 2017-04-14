({
    extendsFrom: 'CreateView',

    initialize: function (options) {
        if (!app.acl.hasAccess('view', 'Administration')) {
            app.controller.loadView({
                layout: 'access-denied'
            });
        } else {
            this._super('initialize', [options]);
        }
    },

    _dispose: function() {
        this._super('_dispose');
    },
})
