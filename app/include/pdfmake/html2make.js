
window.htmlToPdfMake=function(htmlText,options){var wndw=(options&&options.window?options.window:window);var defaultStyles={b:{bold:true},strong:{bold:true},u:{decoration:'underline'},s:{decoration:'lineThrough'},em:{italics:true},i:{italics:true},h1:{fontSize:24,bold:true,marginBottom:5},h2:{fontSize:22,bold:true,marginBottom:5},h3:{fontSize:20,bold:true,marginBottom:5},h4:{fontSize:18,bold:true,marginBottom:5},h5:{fontSize:16,bold:true,marginBottom:5},h6:{fontSize:14,bold:true,marginBottom:5},a:{color:'blue',decoration:'underline'},strike:{decoration:'lineThrough'},p:{margin:[0,5,0,10]},ul:{marginBottom:5},li:{marginLeft:5},table:{marginBottom:5},th:{bold:true,fillColor:'#EEEEEE'}}
var inlineTags=['p','li','span','strong','em','b','i','u','th','td'];function changeDefaultStyles(){for(var keyStyle in options.defaultStyles){if(defaultStyles.hasOwnProperty(keyStyle)){if(options.defaultStyles.hasOwnProperty(keyStyle)&&!options.defaultStyles[keyStyle]){delete defaultStyles[keyStyle];}else{for(var k in options.defaultStyles[keyStyle]){if(!options.defaultStyles[keyStyle][k])delete defaultStyles[keyStyle][k];else defaultStyles[keyStyle][k]=options.defaultStyles[keyStyle][k];}}}}}
if(options&&options.defaultStyles){changeDefaultStyles();}
var convertHtml=function(htmlText){var docDef=[];var parser=new wndw.DOMParser();var parsedHtml=parser.parseFromString(htmlText,'text/html');[].forEach.call(parsedHtml.body.childNodes,function(child){var ret=parseElement(child);if(ret){if(Array.isArray(ret)&&ret.length===1)ret=ret[0];docDef.push(ret);}});return docDef;}
var parseElement=function(element,parentNode,parents){var nodeName=element.nodeName.toLowerCase();var parentNodeName=(parentNode?parentNode.nodeName.toLowerCase():'');var ret,text,cssClass,dataset,key,dist,isInlineTag;parents=parents||[];switch(element.nodeType){case 3:{if(element.textContent){text=element.textContent.replace(/\n(\s+)?/g,"");if(text){if(/^\s+$/.test(text)&&['table','thead','tbody','tr'].indexOf(parentNodeName)>-1)return ret;ret={'text':text};if(parentNodeName){applyParentsStyle(ret,element);if(parentNodeName==="a"){ret.link=parentNode.getAttribute("href");}}else{ret=text;}}}
return ret;}
case 1:{ret=[];parents.push(nodeName);if(element.childNodes.length===0&&(nodeName==="th"||nodeName==="td"))ret.push({text:''});else{[].forEach.call(element.childNodes,function(child){child=parseElement(child,element,parents);if(child){if(Array.isArray(child)&&child.length===1)child=child[0];ret.push(child);}});parents.pop();}
if(ret.length===0)ret="";switch(nodeName){case"svg":{ret={svg:element.outerHTML}
ret.style=['html-'+nodeName];break;}
case"br":{ret='\n';break;}
case"ol":case"ul":{ret={"_":ret};ret[nodeName]=ret._;delete ret._;ret.style=['html-'+nodeName];cssClass=element.getAttribute("class");if(cssClass){ret.style=ret.style.concat(cssClass.split(' '));}
setComputedStyle(ret,element.getAttribute("style"));break;}
case"table":{ret={"_":ret,table:{body:[]}};ret._.forEach(function(re){if(re.stack){var td=[],rowspan={};re.stack.forEach(function(r,indexRow){var c,cell,i,indexCell;if(r.stack){if(rowspan[indexRow]){rowspan[indexRow].forEach(function(cell){r.stack.splice(cell.index,0,{text:'',style:['html-td','html-tr'],colSpan:cell.colspan});});}
for(c=0,cell;c<r.stack.length;){cell=r.stack[c];if(cell.colSpan>1){for(i=0;i<cell.colSpan-1;i++){r.stack.splice(c+1,0,"")}
c+=cell.colSpan;}else c++;}
indexCell=0;r.stack.forEach(function(cell){if(cell.rowSpan){for(var i=0;i<cell.rowSpan;i++){if(!rowspan[indexRow+i])rowspan[indexRow+i]=[];rowspan[indexRow+i].push({index:indexCell,colspan:cell.colSpan||1});}}
indexCell+=cell.colSpan||1;});ret.table.body.push(r.stack)}else{td.push(r);if(r.colSpan>1){for(i=0;i<r.colSpan-1;i++){td.push("");}}}});if(td.length>0)ret.table.body.push(td);}else{ret.table.body.push([re]);}});delete ret._;setComputedStyle(ret,element.getAttribute("style"));break;}
case"img":{ret={image:element.getAttribute("src")};ret.style=['html-img'];cssClass=element.getAttribute("class");if(cssClass){ret.style=ret.style.concat(cssClass.split(' '));}
if(element.getAttribute("width")){ret.width=parseFloat(element.getAttribute("width"))}
if(element.getAttribute("height")){ret.height=parseFloat(element.getAttribute("height"))}
setComputedStyle(ret,element.getAttribute("style"));break;}}
if(ret){if(Array.isArray(ret)){if(ret.length===1&&nodeName!=="tr"){ret=ret[0];if(typeof ret==="string")ret={text:ret};if(ret.text){applyDefaultStyle(ret,nodeName);setComputedStyle(ret,element.getAttribute("style"));}
ret.style=(ret.style||[]).concat(['html-'+nodeName]);if(nodeName==="td"||nodeName==="th")ret.style.push('html-tr');}else{isInlineTag=(inlineTags.indexOf(nodeName)>-1);ret=(!isInlineTag||/{"(stack|table|ol|ul|image)"/.test(JSON.stringify(ret))?{stack:ret}:{text:ret});if(isInlineTag){applyDefaultStyle(ret,nodeName);}
ret.style=['html-'+nodeName];}
applyParentsStyle(ret,element);if(nodeName==="td"||nodeName==="th"){if(element.getAttribute("rowspan"))ret.rowSpan=element.getAttribute("rowspan")*1;if(element.getAttribute("colspan"))ret.colSpan=element.getAttribute("colspan")*1;}
cssClass=element.getAttribute("class");if(cssClass){ret.style=(ret.style||[]).concat(cssClass.split(' '));}
if(ret.text){setComputedStyle(ret,element.getAttribute("style"));}}else if(ret.table||ret.ol||ret.ul){ret.style=['html-'+nodeName];cssClass=element.getAttribute("class");if(cssClass){ret.style=ret.style.concat(cssClass.split(' '));}
applyDefaultStyle(ret,nodeName);}
if(element.dataset&&element.dataset.pdfmake){dataset=JSON.parse(element.dataset.pdfmake);dist=ret[nodeName]||ret;for(key in dataset){dist[key]=dataset[key];}}
cssClass=element.getAttribute("class");if(cssClass&&typeof ret==='object'){ret.style=(ret.style||[]).concat(cssClass.split(' '))}
if(typeof ret==='object'&&Array.isArray(ret.style)){ret.style=ret.style.filter(function(value,index,self){return self.indexOf(value)===index;});}}
return ret;}}
return"";}
var applyDefaultStyle=function(ret,nodeName){if(defaultStyles[nodeName]){for(var style in defaultStyles[nodeName]){if(defaultStyles[nodeName].hasOwnProperty(style)){ret[style]=defaultStyles[nodeName][style];}}}}
var applyParentsStyle=function(ret,node){var classes=[],defaultStyles=[],cssClass;var inlineParentNode=node.parentNode;while(inlineParentNode){var defaultStyle={};var inlineParentNodeName=inlineParentNode.nodeName.toLowerCase();if(inlineTags.indexOf(inlineParentNodeName)>-1){cssClass=inlineParentNode.getAttribute("class");classes=classes.concat(['html-'+inlineParentNodeName],cssClass||[]);applyDefaultStyle(defaultStyle,inlineParentNodeName);defaultStyles.push(defaultStyle);inlineParentNode=inlineParentNode.parentNode;}else break;}
ret.style=(ret.style||[]).concat(classes);defaultStyles.forEach(function(defaultStyle){for(var key in defaultStyle){if(key.indexOf("margin")===-1&&ret[key]===undefined)ret[key]=defaultStyle[key];}})}
var computeStyle=function(style){var styleDefs=style.split(';').map(function(style){return style.replace(/\s/g,'').toLowerCase().split(':')});var ret=[];styleDefs.forEach(function(styleDef){var key=styleDef[0];var value=styleDef[1];switch(key){case"margin":{value=value.replace(/(\d+)(\.\d+)?([^\d]+)/g,"$1$2 ").trim().split(' ');if(value.length===1)value=+value[0];else if(value.length===2)value=[+value[1],+value[0]];else if(value.length===3)value=[+value[1],+value[0],+value[1],+value[2]];else if(value.length===4)value=[+value[3],+value[0],+value[1],+value[2]];ret.push({key:key,value:value});break;}
case"text-align":{ret.push({key:"alignment",value:value})
break;}
case"font-weight":{if(value==="bold")ret.push({key:"bold",value:true});break;}
case"text-decoration":{ret.push({key:"decoration",value:toCamelCase(value)})
break;}
case"font-style":{if(value==="italic")ret.push({key:"italics",value:true});break;}
case"color":{ret.push({key:"color",value:parseColor(value)})
break;}
case"background-color":{ret.push({key:"background",value:parseColor(value)})
break;}
case"font-size":{value=value.replace(/(\d+)(\.\d+)?([^\d]+)/g,"$1$2 ").trim();if(!isNaN(value))ret.push({key:"fontSize",value:value});break;}}});return ret;}
var setComputedStyle=function(ret,cssStyle){if(cssStyle){cssStyle=computeStyle(cssStyle);cssStyle.forEach(function(style){ret[style.key]=style.value;})}}
var toCamelCase=function(str){return str.replace(/-([a-z])/g,function(g){return g[1].toUpperCase()});}
var parseColor=function(color){var haxRegex=new RegExp('^#([0-9a-f]{3}|[0-9a-f]{6})$');var rgbRegex=new RegExp('^rgb\\((\\d+),\\s*(\\d+),\\s*(\\d+)\\)$');var nameRegex=new RegExp('^[a-z]+$');if(haxRegex.test(color)){return color;}else if(rgbRegex.test(color)){var decimalColors=rgbRegex.exec(color).slice(1);for(var i=0;i<3;i++){var decimalValue=+decimalColors[i];if(decimalValue>255){decimalValue=255;}
var hexString='0'+decimalValue.toString(16);hexString=hexString.slice(-2);decimalColors[i]=hexString;}
return'#'+decimalColors.join('');}else if(nameRegex.test(color)){return color;}else{console.error('Could not parse color "'+color+'"');return color;}}
return convertHtml(htmlText)}