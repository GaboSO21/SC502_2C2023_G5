/*!
   Copyright 2010-2018 SpryMedia Ltd.

 This source file is free software, available under the following license:
   MIT license - http://datatables.net/license/mit

 This source file is distributed in the hope that it will be useful, but
 WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.

 For details please refer to: http://www.datatables.net
 AutoFill 2.3.3
 ©2008-2018 SpryMedia Ltd - datatables.net/license
*/
var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.arrayIteratorImpl=function(b){var g=0;return function(){return g<b.length?{done:!1,value:b[g++]}:{done:!0}}};$jscomp.arrayIterator=function(b){return{next:$jscomp.arrayIteratorImpl(b)}};$jscomp.ASSUME_ES5=!1;$jscomp.ASSUME_NO_NATIVE_MAP=!1;$jscomp.ASSUME_NO_NATIVE_SET=!1;$jscomp.SIMPLE_FROUND_POLYFILL=!1;
$jscomp.defineProperty=$jscomp.ASSUME_ES5||"function"==typeof Object.defineProperties?Object.defineProperty:function(b,g,h){b!=Array.prototype&&b!=Object.prototype&&(b[g]=h.value)};$jscomp.getGlobal=function(b){return"undefined"!=typeof window&&window===b?b:"undefined"!=typeof global&&null!=global?global:b};$jscomp.global=$jscomp.getGlobal(this);$jscomp.SYMBOL_PREFIX="jscomp_symbol_";$jscomp.initSymbol=function(){$jscomp.initSymbol=function(){};$jscomp.global.Symbol||($jscomp.global.Symbol=$jscomp.Symbol)};
$jscomp.Symbol=function(){var b=0;return function(g){return $jscomp.SYMBOL_PREFIX+(g||"")+b++}}();$jscomp.initSymbolIterator=function(){$jscomp.initSymbol();var b=$jscomp.global.Symbol.iterator;b||(b=$jscomp.global.Symbol.iterator=$jscomp.global.Symbol("iterator"));"function"!=typeof Array.prototype[b]&&$jscomp.defineProperty(Array.prototype,b,{configurable:!0,writable:!0,value:function(){return $jscomp.iteratorPrototype($jscomp.arrayIteratorImpl(this))}});$jscomp.initSymbolIterator=function(){}};
$jscomp.initSymbolAsyncIterator=function(){$jscomp.initSymbol();var b=$jscomp.global.Symbol.asyncIterator;b||(b=$jscomp.global.Symbol.asyncIterator=$jscomp.global.Symbol("asyncIterator"));$jscomp.initSymbolAsyncIterator=function(){}};$jscomp.iteratorPrototype=function(b){$jscomp.initSymbolIterator();b={next:b};b[$jscomp.global.Symbol.iterator]=function(){return this};return b};
$jscomp.iteratorFromArray=function(b,g){$jscomp.initSymbolIterator();b instanceof String&&(b+="");var h=0,m={next:function(){if(h<b.length){var l=h++;return{value:g(l,b[l]),done:!1}}m.next=function(){return{done:!0,value:void 0}};return m.next()}};m[Symbol.iterator]=function(){return m};return m};
$jscomp.polyfill=function(b,g,h,m){if(g){h=$jscomp.global;b=b.split(".");for(m=0;m<b.length-1;m++){var l=b[m];l in h||(h[l]={});h=h[l]}b=b[b.length-1];m=h[b];g=g(m);g!=m&&null!=g&&$jscomp.defineProperty(h,b,{configurable:!0,writable:!0,value:g})}};$jscomp.polyfill("Array.prototype.keys",function(b){return b?b:function(){return $jscomp.iteratorFromArray(this,function(b){return b})}},"es6","es3");
(function(b){"function"===typeof define&&define.amd?define(["jquery","datatables.net"],function(g){return b(g,window,document)}):"object"===typeof exports?module.exports=function(g,h){g||(g=window);h&&h.fn.dataTable||(h=require("datatables.net")(g,h).$);return b(h,g,g.document)}:b(jQuery,window,document)})(function(b,g,h,m){var l=b.fn.dataTable,w=0,k=function(a,d){if(!l.versionCheck||!l.versionCheck("1.10.8"))throw"Warning: AutoFill requires DataTables 1.10.8 or greater";this.c=b.extend(!0,{},l.defaults.autoFill,
k.defaults,d);this.s={dt:new l.Api(a),namespace:".autoFill"+w++,scroll:{},scrollInterval:null,handle:{height:0,width:0},enabled:!1};this.dom={handle:b('<div class="dt-autofill-handle"/>'),select:{top:b('<div class="dt-autofill-select top"/>'),right:b('<div class="dt-autofill-select right"/>'),bottom:b('<div class="dt-autofill-select bottom"/>'),left:b('<div class="dt-autofill-select left"/>')},background:b('<div class="dt-autofill-background"/>'),list:b('<div class="dt-autofill-list">'+this.s.dt.i18n("autoFill.info",
"")+"<ul/></div>"),dtScroll:null,offsetParent:null};this._constructor()};b.extend(k.prototype,{enabled:function(){return this.s.enabled},enable:function(a){var d=this;if(!1===a)return this.disable();this.s.enabled=!0;this._focusListener();this.dom.handle.on("mousedown",function(a){d._mousedown(a);return!1});return this},disable:function(){this.s.enabled=!1;this._focusListenerRemove();return this},_constructor:function(){var a=this,d=this.s.dt,c=b("div.dataTables_scrollBody",this.s.dt.table().container());
d.settings()[0].autoFill=this;c.length&&(this.dom.dtScroll=c,"static"===c.css("position")&&c.css("position","relative"));!1!==this.c.enable&&this.enable();d.on("destroy.autoFill",function(){a._focusListenerRemove()})},_attach:function(a){var d=this.s.dt,c=d.cell(a).index(),f=this.dom.handle,e=this.s.handle;c&&-1!==d.columns(this.c.columns).indexes().indexOf(c.column)?(this.dom.offsetParent||(this.dom.offsetParent=b(d.table().node()).offsetParent()),e.height&&e.width||(f.appendTo("body"),e.height=
f.outerHeight(),e.width=f.outerWidth()),d=this._getPosition(a,this.dom.offsetParent),this.dom.attachedTo=a,f.css({top:d.top+a.offsetHeight-e.height,left:d.left+a.offsetWidth-e.width}).appendTo(this.dom.offsetParent)):this._detach()},_actionSelector:function(a){var d=this,c=this.s.dt,f=k.actions,e=[];b.each(f,function(d,b){b.available(c,a)&&e.push(d)});if(1===e.length&&!1===this.c.alwaysAsk){var p=f[e[0]].execute(c,a);this._update(p,a)}else{var n=this.dom.list.children("ul").empty();e.push("cancel");
b.each(e,function(e,p){n.append(b("<li/>").append('<div class="dt-autofill-question">'+f[p].option(c,a)+"<div>").append(b('<div class="dt-autofill-button">').append(b('<button class="'+k.classes.btn+'">'+c.i18n("autoFill.button","&gt;")+"</button>").on("click",function(){var e=f[p].execute(c,a,b(this).closest("li"));d._update(e,a);d.dom.background.remove();d.dom.list.remove()}))))});this.dom.background.appendTo("body");this.dom.list.appendTo("body");this.dom.list.css("margin-top",this.dom.list.outerHeight()/
2*-1)}},_detach:function(){this.dom.attachedTo=null;this.dom.handle.detach()},_drawSelection:function(a,d){var c=this.s.dt;d=this.s.start;var f=b(this.dom.start),e={row:this.c.vertical?c.rows({page:"current"}).nodes().indexOf(a.parentNode):d.row,column:this.c.horizontal?b(a).index():d.column};a=c.column.index("toData",e.column);var p=c.row(":eq("+e.row+")",{page:"current"});p=b(c.cell(p.index(),a).node());if(c.cell(p).any()&&-1!==c.columns(this.c.columns).indexes().indexOf(a)){this.s.end=e;c=d.row<
e.row?f:p;var n=d.row<e.row?p:f;a=d.column<e.column?f:p;f=d.column<e.column?p:f;c=this._getPosition(c.get(0)).top;a=this._getPosition(a.get(0)).left;d=this._getPosition(n.get(0)).top+n.outerHeight()-c;f=this._getPosition(f.get(0)).left+f.outerWidth()-a;e=this.dom.select;e.top.css({top:c,left:a,width:f});e.left.css({top:c,left:a,height:d});e.bottom.css({top:c+d,left:a,width:f});e.right.css({top:c,left:a+f,height:d})}},_editor:function(a){var d=this.s.dt,c=this.c.editor;if(c){for(var b={},e=[],p=c.fields(),
n=0,h=a.length;n<h;n++)for(var g=0,l=a[n].length;g<l;g++){var q=a[n][g],t=d.settings()[0].aoColumns[q.index.column],k=t.editField;if(k===m){t=t.mData;for(var u=0,r=p.length;u<r;u++){var v=c.field(p[u]);if(v.dataSrc()===t){k=v.name();break}}}if(!k)throw"Could not automatically determine field data. Please see https://datatables.net/tn/11";b[k]||(b[k]={});t=d.row(q.index.row).id();b[k][t]=q.set;e.push(q.index)}c.bubble(e,!1).multiSet(b).submit()}},_emitEvent:function(a,d){this.s.dt.iterator("table",
function(c,f){b(c.nTable).triggerHandler(a+".dt",d)})},_focusListener:function(){var a=this,d=this.s.dt,c=this.s.namespace,f=null!==this.c.focus?this.c.focus:d.init().keys||d.settings()[0].keytable?"focus":"hover";if("focus"===f)d.on("key-focus.autoFill",function(c,d,b){a._attach(b.node())}).on("key-blur.autoFill",function(c,d,b){a._detach()});else if("click"===f)b(d.table().body()).on("click"+c,"td, th",function(c){a._attach(this)}),b(h.body).on("click"+c,function(c){b(c.target).parents().filter(d.table().body()).length||
a._detach()});else b(d.table().body()).on("mouseenter"+c,"td, th",function(c){a._attach(this)}).on("mouseleave"+c,function(c){b(c.relatedTarget).hasClass("dt-autofill-handle")||a._detach()})},_focusListenerRemove:function(){var a=this.s.dt;a.off(".autoFill");b(a.table().body()).off(this.s.namespace);b(h.body).off(this.s.namespace)},_getPosition:function(a,d){var c=0,f=0;d||(d=b(b(this.s.dt.table().node())[0].offsetParent));do{var e=a.offsetTop,h=a.offsetLeft;var g=b(a.offsetParent);c+=e+g.scrollTop();
f+=h+g.scrollLeft();c+=1*parseInt(g.css("margin-top"));c+=1*parseInt(g.css("border-top-width"));if("body"===a.nodeName.toLowerCase())break;a=g.get(0)}while(g.get(0)!==d.get(0));return{top:c,left:f}},_mousedown:function(a){var d=this,c=this.s.dt;this.dom.start=this.dom.attachedTo;this.s.start={row:c.rows({page:"current"}).nodes().indexOf(b(this.dom.start).parent()[0]),column:b(this.dom.start).index()};b(h.body).on("mousemove.autoFill",function(a){d._mousemove(a)}).on("mouseup.autoFill",function(a){d._mouseup(a)});
var f=this.dom.select;c=b(c.table().node()).offsetParent();f.top.appendTo(c);f.left.appendTo(c);f.right.appendTo(c);f.bottom.appendTo(c);this._drawSelection(this.dom.start,a);this.dom.handle.css("display","none");a=this.dom.dtScroll;this.s.scroll={windowHeight:b(g).height(),windowWidth:b(g).width(),dtTop:a?a.offset().top:null,dtLeft:a?a.offset().left:null,dtHeight:a?a.outerHeight():null,dtWidth:a?a.outerWidth():null}},_mousemove:function(a){var d=a.target.nodeName.toLowerCase();if("td"===d||"th"===
d)this._drawSelection(a.target,a),this._shiftScroll(a)},_mouseup:function(a){b(h.body).off(".autoFill");var d=this,c=this.s.dt,f=this.dom.select;f.top.remove();f.left.remove();f.right.remove();f.bottom.remove();this.dom.handle.css("display","block");f=this.s.start;var e=this.s.end;if(f.row!==e.row||f.column!==e.column){var g=c.cell(":eq("+f.row+")",f.column+":visible",{page:"current"});if(b("div.DTE",g.node()).length){var n=c.editor();n.on("submitSuccess.dtaf close.dtaf",function(){n.off(".dtaf");
setTimeout(function(){d._mouseup(a)},100)}).on("submitComplete.dtaf preSubmitCancelled.dtaf close.dtaf",function(){n.off(".dtaf")});n.submit()}else{var k=this._range(f.row,e.row);f=this._range(f.column,e.column);e=[];for(var l=c.settings()[0],r=l.aoColumns,q=0;q<k.length;q++)e.push(b.map(f,function(a){var d=c.row(":eq("+k[q]+")",{page:"current"});a=c.cell(d.index(),a+":visible");d=a.data();var b=a.index(),f=r[b.column].editField;f!==m&&(d=l.oApi._fnGetObjectDataFn(f)(c.row(b.row).data()));return{cell:a,
data:d,label:a.data(),index:b}}));this._actionSelector(e);clearInterval(this.s.scrollInterval);this.s.scrollInterval=null}}},_range:function(a,d){var c=[];if(a<=d)for(;a<=d;a++)c.push(a);else for(;a>=d;a--)c.push(a);return c},_shiftScroll:function(a){var d=this,c=this.s.scroll,b=!1,e=a.pageY-h.body.scrollTop,g=a.pageX-h.body.scrollLeft,n,k,l,m;65>e?n=-5:e>c.windowHeight-65&&(n=5);65>g?k=-5:g>c.windowWidth-65&&(k=5);null!==c.dtTop&&a.pageY<c.dtTop+65?l=-5:null!==c.dtTop&&a.pageY>c.dtTop+c.dtHeight-
65&&(l=5);null!==c.dtLeft&&a.pageX<c.dtLeft+65?m=-5:null!==c.dtLeft&&a.pageX>c.dtLeft+c.dtWidth-65&&(m=5);n||k||l||m?(c.windowVert=n,c.windowHoriz=k,c.dtVert=l,c.dtHoriz=m,b=!0):this.s.scrollInterval&&(clearInterval(this.s.scrollInterval),this.s.scrollInterval=null);!this.s.scrollInterval&&b&&(this.s.scrollInterval=setInterval(function(){c.windowVert&&(h.body.scrollTop+=c.windowVert);c.windowHoriz&&(h.body.scrollLeft+=c.windowHoriz);if(c.dtVert||c.dtHoriz){var a=d.dom.dtScroll[0];c.dtVert&&(a.scrollTop+=
c.dtVert);c.dtHoriz&&(a.scrollLeft+=c.dtHoriz)}},20))},_update:function(a,d){if(!1!==a){a=this.s.dt;var c=a.columns(this.c.columns).indexes();this._emitEvent("preAutoFill",[a,d]);this._editor(d);if(null!==this.c.update?this.c.update:!this.c.editor){for(var b=0,e=d.length;b<e;b++)for(var g=0,h=d[b].length;g<h;g++){var k=d[b][g];-1!==c.indexOf(k.index.column)&&k.cell.data(k.set)}a.draw(!1)}this._emitEvent("autoFill",[a,d])}}});k.actions={increment:{available:function(a,b){a=b[0][0].label;return!isNaN(a-
parseFloat(a))},option:function(a,b){return a.i18n("autoFill.increment",'Increment / decrement each cell by: <input type="number" value="1">')},execute:function(a,d,c){a=1*d[0][0].data;c=1*b("input",c).val();for(var f=0,e=d.length;f<e;f++)for(var g=0,h=d[f].length;g<h;g++)d[f][g].set=a,a+=c}},fill:{available:function(a,b){return!0},option:function(a,b){return a.i18n("autoFill.fill","Fill all cells with <i>"+b[0][0].label+"</i>")},execute:function(a,b,c){a=b[0][0].data;c=0;for(var d=b.length;c<d;c++)for(var e=
0,g=b[c].length;e<g;e++)b[c][e].set=a}},fillHorizontal:{available:function(a,b){return 1<b.length&&1<b[0].length},option:function(a,b){return a.i18n("autoFill.fillHorizontal","Fill cells horizontally")},execute:function(a,b,c){a=0;for(c=b.length;a<c;a++)for(var d=0,e=b[a].length;d<e;d++)b[a][d].set=b[a][0].data}},fillVertical:{available:function(a,b){return 1<b.length&&1<b[0].length},option:function(a,b){return a.i18n("autoFill.fillVertical","Fill cells vertically")},execute:function(a,b,c){a=0;for(c=
b.length;a<c;a++)for(var d=0,e=b[a].length;d<e;d++)b[a][d].set=b[0][d].data}},cancel:{available:function(){return!1},option:function(a){return a.i18n("autoFill.cancel","Cancel")},execute:function(){return!1}}};k.version="2.3.3";k.defaults={alwaysAsk:!1,focus:null,columns:"",enable:!0,update:null,editor:null,vertical:!0,horizontal:!0};k.classes={btn:"btn"};var r=b.fn.dataTable.Api;r.register("autoFill()",function(){return this});r.register("autoFill().enabled()",function(){var a=this.context[0];return a.autoFill?
a.autoFill.enabled():!1});r.register("autoFill().enable()",function(a){return this.iterator("table",function(b){b.autoFill&&b.autoFill.enable(a)})});r.register("autoFill().disable()",function(){return this.iterator("table",function(a){a.autoFill&&a.autoFill.disable()})});b(h).on("preInit.dt.autofill",function(a,d,c){"dt"===a.namespace&&(a=d.oInit.autoFill,c=l.defaults.autoFill,a||c)&&(c=b.extend({},a,c),!1!==a&&new k(d,c))});l.AutoFill=k;return l.AutoFill=k});