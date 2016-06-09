({
    extendsFrom: 'CreateView',

    initialize: function (options) {
        if (!app.acl.hasAccess('view', 'Administration'))
        {
            app.controller.loadView({
                layout: 'access-denied'
            });
        }
        else
        {
            app.view.invokeParent(this, {type: 'view', name: 'create', method: 'initialize', args: [options]});
        }
    },

    _dispose: function() {
        this._super('_dispose');
    },
})