/* global modules:false */
modules.define('typehead',
               ['vow'],
               function(provide, Vow, Typehead){

Typehead.decl({block: 'typehead', modName: 'source', modVal:'array'}, {

    searchField: 'name',

    search: function(val){
        return this.__base.apply(this, arguments);
    },
    /**
     * Get autocompletion array
     * @returns {Object} Promise
     */
    _getVariants: function(val){
        if(this._source == null)
            throw Error('source is empty. Use setSource(str)');

        var defer = Vow.defer();
        var res = [];
        var matcher = new RegExp("^(?:" + val + ")(.+$)", 'i');
        var field = this.searchField;

        for (i=0; i<this._source.length; i++){
            if(matcher.test(this._source[i][field])){
                res.push(this._source[i]);
            }
        }
        res.length? defer.resolve(res) : defer.reject();
        return defer.promise();
    }
}, {
});

provide(Typehead);
});
