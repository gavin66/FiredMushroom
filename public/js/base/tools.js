/**
 * Created by Gavin on 2015/8/24.
 */
(function($){
    var methods = {
        getFormParams: function(){
            var names=this.find("input,textarea");
            var params={};
            for(var i=0;i<names.length;i++){
                if(names[i].id){
                    params[names[i].id]=names[i].value;
                }
                else{
                    params[names[i].name]=names[i].value;
                }
            }
            return params;
        }
    };

    $.fn.Gtools = function(method){
        if(methods[method]){
            return methods[method].apply(this,Array.prototype.slice.call(arguments,1));
        }else if(typeof method === 'object' || !method){
            return methods.getFormParams.apply(this, arguments);
        }else{
            $.error('Method' + method + 'does not exist on jQuery.Gform');
        }
    }

})(jQuery)