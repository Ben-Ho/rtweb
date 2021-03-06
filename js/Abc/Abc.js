Ext.ns('Abc');
Abc.Abc = Ext.extend(Ext.Panel, {
    initComponent: function(config)
    {
        var abc = new Kwf.Auto.GridPanel({
            controllerUrl: '/admin/abc/abc',
            title: 'Abc',
            region: 'center',
            width: 300,
            split: true
        });

        var abcParent = new Kwf.Auto.GridPanel({
            controllerUrl: '/admin/abc/abc-parent',
            title: 'AbcParent',
            region: 'west',
            width: 750,
            split: true,
            bindings: [{
            	item: abc,
            	queryParam: 'parent_id'
            }]
        });

        this.layout = 'border';
        this.items = [abc, abcParent];
        Abc.Abc.superclass.initComponent.call(this);
    }
});
Ext.reg('abc.abc', Abc.Abc);
