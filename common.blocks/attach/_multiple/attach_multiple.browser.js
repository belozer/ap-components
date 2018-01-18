/* global modules:false */

modules.define('attach',
               function(provide, Attach) {

    provide(Attach.declMod({ modName : 'multiple' }, {

        _onChange : function() {
            var control = this.findElem('control');
            this._files = control[0].files;
            this.__base.apply(this, arguments);
        },

        getFile : function(){
            return this._files[0];
        },

        getFiles : function(){
            return this._files;
        }
    }));

});

