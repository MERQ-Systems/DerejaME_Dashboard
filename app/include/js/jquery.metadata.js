
(function($){$.extend({metadata:{defaults:{type:'class',name:'metadata',cre:/({.*})/,single:'metadata'},setType:function(type,name){this.defaults.type=type;this.defaults.name=name;},get:function(elem,opts){var settings=$.extend({},this.defaults,opts);if(!settings.single.length)settings.single='metadata';var data=$.data(elem,settings.single);if(data)return data;data="{}";if(settings.type=="class"){var m=settings.cre.exec(elem.className);if(m)
data=m[1];}else if(settings.type=="elem"){if(!elem.getElementsByTagName)return;var e=elem.getElementsByTagName(settings.name);if(e.length)
data=$.trim(e[0].innerHTML);}else if(elem.getAttribute!=undefined){var attr=elem.getAttribute(settings.name);if(attr)
data=attr;}
if(data.indexOf('{')<0)
data="{"+data+"}";data=eval("("+data+")");$.data(elem,settings.single,data);return data;}}});$.fn.metadata=function(opts){return $.metadata.get(this[0],opts);};})(jQuery);