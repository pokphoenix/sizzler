/*! modernizr 3.3.1 (Custom Build) | MIT *
 * http://modernizr.com/download/?-audio-backgroundsize-boxshadow-canvas-canvastext-cssanimations-csscolumns-cssgradients-csstransforms-csstransforms3d-csstransitions-flexbox-forcetouch-generatedcontent-geolocation-hashchange-history-hsla-indexeddb-input-inputtypes-localizednumber-localstorage-multiplebgs-opacity-placeholder-postmessage-rgba-sessionstorage-svg-svgclippaths-textshadow-touchevents-webp-webpalpha-webpanimation-webplossless_webp_lossless-websockets-websqldatabase-webworkers-addtest-domprefixes-hasevent-mq-prefixed-prefixes-setclasses-shiv-testallprops-testprop !*/
!function(e,t,n){function a(e,t){return typeof e===t}function r(){var e,t,n,r,o,i,s;for(var l in y)if(y.hasOwnProperty(l)){if(e=[],t=y[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(r=a(t.fn,"function")?t.fn():t.fn,o=0;o<e.length;o++)i=e[o],s=i.split("."),1===s.length?Modernizr[s[0]]=r:(!Modernizr[s[0]]||Modernizr[s[0]]instanceof Boolean||(Modernizr[s[0]]=new Boolean(Modernizr[s[0]])),Modernizr[s[0]][s[1]]=r),w.push((r?"":"no-")+s.join("-"))}}function o(e){var t=T.className,n=Modernizr._config.classPrefix||"";if(x&&(t=t.baseVal),Modernizr._config.enableJSClass){var a=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(a,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),x?T.className.baseVal=t:T.className=t)}function i(e,t){if("object"==typeof e)for(var n in e)k(e,n)&&i(n,e[n]);else{e=e.toLowerCase();var a=e.split("."),r=Modernizr[a[0]];if(2==a.length&&(r=r[a[1]]),"undefined"!=typeof r)return Modernizr;t="function"==typeof t?t():t,1==a.length?Modernizr[a[0]]=t:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=t),o([(t&&0!=t?"":"no-")+a.join("-")]),Modernizr._trigger(e,t)}return Modernizr}function s(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):x?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function l(){var e=t.body;return e||(e=s(x?"svg":"body"),e.fake=!0),e}function d(e,n,a,r){var o,i,d,u,c="modernizr",f=s("div"),p=l();if(parseInt(a,10))for(;a--;)d=s("div"),d.id=r?r[a]:c+(a+1),f.appendChild(d);return o=s("style"),o.type="text/css",o.id="s"+c,(p.fake?p:f).appendChild(o),p.appendChild(f),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(t.createTextNode(e)),f.id=c,p.fake&&(p.style.background="",p.style.overflow="hidden",u=T.style.overflow,T.style.overflow="hidden",T.appendChild(p)),i=n(f,e),p.fake?(p.parentNode.removeChild(p),T.style.overflow=u,T.offsetHeight):f.parentNode.removeChild(f),!!i}function u(e,t){return!!~(""+e).indexOf(t)}function c(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function f(t,a){var r=t.length;if("CSS"in e&&"supports"in e.CSS){for(;r--;)if(e.CSS.supports(c(t[r]),a))return!0;return!1}if("CSSSupportsRule"in e){for(var o=[];r--;)o.push("("+c(t[r])+":"+a+")");return o=o.join(" or "),d("@supports ("+o+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return n}function p(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function A(e,t,r,o){function i(){d&&(delete R.style,delete R.modElem)}if(o=a(o,"undefined")?!1:o,!a(r,"undefined")){var l=f(e,r);if(!a(l,"undefined"))return l}for(var d,c,A,m,h,g=["modernizr","tspan"];!R.style;)d=!0,R.modElem=s(g.shift()),R.style=R.modElem.style;for(A=e.length,c=0;A>c;c++)if(m=e[c],h=R.style[m],u(m,"-")&&(m=p(m)),R.style[m]!==n){if(o||a(r,"undefined"))return i(),"pfx"==t?m:!0;try{R.style[m]=r}catch(v){}if(R.style[m]!=h)return i(),"pfx"==t?m:!0}return i(),!1}function m(e,t){return function(){return e.apply(t,arguments)}}function h(e,t,n){var r;for(var o in e)if(e[o]in t)return n===!1?e[o]:(r=t[e[o]],a(r,"function")?m(r,n||t):r);return!1}function g(e,t,n,r,o){var i=e.charAt(0).toUpperCase()+e.slice(1),s=(e+" "+D.join(i+" ")+i).split(" ");return a(t,"string")||a(t,"undefined")?A(s,t,r,o):(s=(e+" "+S.join(i+" ")+i).split(" "),h(s,t,n))}function v(e,t,a){return g(e,n,n,t,a)}var y=[],b={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){y.push({name:e,fn:t,options:n})},addAsyncTest:function(e){y.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=b,Modernizr=new Modernizr;var w=[],T=t.documentElement,x="svg"===T.nodeName.toLowerCase(),C="Moz O ms Webkit",S=b._config.usePrefixes?C.toLowerCase().split(" "):[];b._domPrefixes=S;var E=b._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):[];b._prefixes=E;var k;!function(){var e={}.hasOwnProperty;k=a(e,"undefined")||a(e.call,"undefined")?function(e,t){return t in e&&a(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),b._l={},b.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},b._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,a;for(e=0;e<n.length;e++)(a=n[e])(t)},0),delete this._l[e]}},Modernizr._q.push(function(){b.addTest=i});var B=function(){function e(e,t){var r;return e?(t&&"string"!=typeof t||(t=s(t||"div")),e="on"+e,r=e in t,!r&&a&&(t.setAttribute||(t=s("div")),t.setAttribute(e,""),r="function"==typeof t[e],t[e]!==n&&(t[e]=n),t.removeAttribute(e)),r):!1}var a=!("onblur"in t.documentElement);return e}();b.hasEvent=B;var _=function(){var t=e.matchMedia||e.msMatchMedia;return t?function(e){var n=t(e);return n&&n.matches||!1}:function(t){var n=!1;return d("@media "+t+" { #modernizr { position: absolute; } }",function(t){n="absolute"==(e.getComputedStyle?e.getComputedStyle(t,null):t.currentStyle).position}),n}}();b.mq=_;var D=b._config.usePrefixes?C.split(" "):[];b._cssomPrefixes=D;var Q={elem:s("modernizr")};Modernizr._q.push(function(){delete Q.elem});var R={style:Q.elem.style};Modernizr._q.unshift(function(){delete R.style}),b.testAllProps=g;var U=function(t){var a,r=E.length,o=e.CSSRule;if("undefined"==typeof o)return n;if(!t)return!1;if(t=t.replace(/^@/,""),a=t.replace(/-/g,"_").toUpperCase()+"_RULE",a in o)return"@"+t;for(var i=0;r>i;i++){var s=E[i],l=s.toUpperCase()+"_"+a;if(l in o)return"@-"+s.toLowerCase()+"-"+t}return!1};b.atRule=U;var P=b.prefixed=function(e,t,n){return 0===e.indexOf("@")?U(e):(-1!=e.indexOf("-")&&(e=p(e)),t?g(e,t,n):g(e,"pfx"))};b.testAllProps=v;var N=b.testProp=function(e,t,a){return A([e],n,t,a)};x||!function(e,t){function n(e,t){var n=e.createElement("p"),a=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",a.insertBefore(n.lastChild,a.firstChild)}function a(){var e=y.elements;return"string"==typeof e?e.split(" "):e}function r(e,t){var n=y.elements;"string"!=typeof n&&(n=n.join(" ")),"string"!=typeof e&&(e=e.join(" ")),y.elements=n+" "+e,d(t)}function o(e){var t=v[e[h]];return t||(t={},g++,e[h]=g,v[g]=t),t}function i(e,n,a){if(n||(n=t),c)return n.createElement(e);a||(a=o(n));var r;return r=a.cache[e]?a.cache[e].cloneNode():m.test(e)?(a.cache[e]=a.createElem(e)).cloneNode():a.createElem(e),!r.canHaveChildren||A.test(e)||r.tagUrn?r:a.frag.appendChild(r)}function s(e,n){if(e||(e=t),c)return e.createDocumentFragment();n=n||o(e);for(var r=n.frag.cloneNode(),i=0,s=a(),l=s.length;l>i;i++)r.createElement(s[i]);return r}function l(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return y.shivMethods?i(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+a().join().replace(/[\w\-:]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(y,t.frag)}function d(e){e||(e=t);var a=o(e);return!y.shivCSS||u||a.hasCSS||(a.hasCSS=!!n(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),c||l(e,a),e}var u,c,f="3.7.3",p=e.html5||{},A=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,m=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,h="_html5shiv",g=0,v={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",u="hidden"in e,c=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(n){u=!0,c=!0}}();var y={elements:p.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",version:f,shivCSS:p.shivCSS!==!1,supportsUnknownElements:c,shivMethods:p.shivMethods!==!1,type:"default",shivDocument:d,createElement:i,createDocumentFragment:s,addElements:r};e.html5=y,d(t),"object"==typeof module&&module.exports&&(module.exports=y)}("undefined"!=typeof e?e:this,t),Modernizr.addTest("audio",function(){var e=s("audio"),t=!1;try{(t=!!e.canPlayType)&&(t=new Boolean(t),t.ogg=e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),t.mp3=e.canPlayType('audio/mpeg; codecs="mp3"').replace(/^no$/,""),t.opus=e.canPlayType('audio/ogg; codecs="opus"').replace(/^no$/,""),t.wav=e.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),t.m4a=(e.canPlayType("audio/x-m4a;")||e.canPlayType("audio/aac;")).replace(/^no$/,""))}catch(n){}return t}),Modernizr.addTest("canvas",function(){var e=s("canvas");return!(!e.getContext||!e.getContext("2d"))}),Modernizr.addTest("canvastext",function(){return Modernizr.canvas===!1?!1:"function"==typeof s("canvas").getContext("2d").fillText}),Modernizr.addTest("forcetouch",function(){return B(P("mouseforcewillbegin",e,!1),e)?MouseEvent.WEBKIT_FORCE_AT_MOUSE_DOWN&&MouseEvent.WEBKIT_FORCE_AT_FORCE_MOUSE_DOWN:!1}),Modernizr.addTest("geolocation","geolocation"in navigator),Modernizr.addTest("hashchange",function(){return B("hashchange",e)===!1?!1:t.documentMode===n||t.documentMode>7}),Modernizr.addTest("history",function(){var t=navigator.userAgent;return-1===t.indexOf("Android 2.")&&-1===t.indexOf("Android 4.0")||-1===t.indexOf("Mobile Safari")||-1!==t.indexOf("Chrome")||-1!==t.indexOf("Windows Phone")?e.history&&"pushState"in e.history:!1});var O;try{O=P("indexedDB",e)}catch(z){}Modernizr.addTest("indexeddb",!!O),O&&Modernizr.addTest("indexeddb.deletedatabase","deleteDatabase"in O);var M=s("input"),W="autocomplete autofocus list placeholder max min multiple pattern required step".split(" "),I={};Modernizr.input=function(t){for(var n=0,a=t.length;a>n;n++)I[t[n]]=!!(t[n]in M);return I.list&&(I.list=!(!s("datalist")||!e.HTMLDataListElement)),I}(W);var L="search tel url email datetime date month week time datetime-local number range color".split(" "),V={};Modernizr.inputtypes=function(e){for(var a,r,o,i=e.length,s="1)",l=0;i>l;l++)M.setAttribute("type",a=e[l]),o="text"!==M.type&&"style"in M,o&&(M.value=s,M.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(a)&&M.style.WebkitAppearance!==n?(T.appendChild(M),r=t.defaultView,o=r.getComputedStyle&&"textfield"!==r.getComputedStyle(M,null).WebkitAppearance&&0!==M.offsetHeight,T.removeChild(M)):/^(search|tel)$/.test(a)||(o=/^(url|email)$/.test(a)?M.checkValidity&&M.checkValidity()===!1:M.value!=s)),V[e[l]]=!!o;return V}(L),Modernizr.addTest("postmessage","postMessage"in e),Modernizr.addTest("svg",!!t.createElementNS&&!!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect);var j=b.testStyles=d;Modernizr.addTest("touchevents",function(){var n;if("ontouchstart"in e||e.DocumentTouch&&t instanceof DocumentTouch)n=!0;else{var a=["@media (",E.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");j(a,function(e){n=9===e.offsetTop})}return n}),Modernizr.addTest("websockets","WebSocket"in e&&2===e.WebSocket.CLOSING),Modernizr.addTest("cssanimations",v("animationName","a",!0)),Modernizr.addTest("backgroundsize",v("backgroundSize","100%",!0)),Modernizr.addTest("boxshadow",v("boxShadow","1px 1px",!0)),function(){Modernizr.addTest("csscolumns",function(){var e=!1,t=v("columnCount");try{(e=!!t)&&(e=new Boolean(e))}catch(n){}return e});for(var e,t,n=["Width","Span","Fill","Gap","Rule","RuleColor","RuleStyle","RuleWidth","BreakBefore","BreakAfter","BreakInside"],a=0;a<n.length;a++)e=n[a].toLowerCase(),t=v("column"+n[a]),("breakbefore"===e||"breakafter"===e||"breakinside"==e)&&(t=t||v(n[a])),Modernizr.addTest("csscolumns."+e,t)}(),Modernizr.addTest("flexbox",v("flexBasis","1px",!0)),j('#modernizr{font:0/0 a}#modernizr:after{content:":)";visibility:hidden;font:7px/1 a}',function(e){Modernizr.addTest("generatedcontent",e.offsetHeight>=7)}),Modernizr.addTest("cssgradients",function(){for(var e,t="background-image:",n="gradient(linear,left top,right bottom,from(#9f9),to(white));",a="",r=0,o=E.length-1;o>r;r++)e=0===r?"to ":"",a+=t+E[r]+"linear-gradient("+e+"left top, #9f9, white);";Modernizr._config.usePrefixes&&(a+=t+"-webkit-"+n);var i=s("a"),l=i.style;return l.cssText=a,(""+l.backgroundImage).indexOf("gradient")>-1}),Modernizr.addTest("hsla",function(){var e=s("a").style;return e.cssText="background-color:hsla(120,40%,100%,.5)",u(e.backgroundColor,"rgba")||u(e.backgroundColor,"hsla")}),Modernizr.addTest("multiplebgs",function(){var e=s("a").style;return e.cssText="background:url(https://),url(https://),red url(https://)",/(url\s*\(.*?){3}/.test(e.background)}),Modernizr.addTest("opacity",function(){var e=s("a").style;return e.cssText=E.join("opacity:.55;"),/^0.55$/.test(e.opacity)}),Modernizr.addTest("rgba",function(){var e=s("a").style;return e.cssText="background-color:rgba(150,255,150,.5)",(""+e.backgroundColor).indexOf("rgba")>-1}),Modernizr.addTest("textshadow",N("textShadow","1px 1px")),Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&v("transform","scale(1)",!0)});var G="CSS"in e&&"supports"in e.CSS,J="supportsCSS"in e;Modernizr.addTest("supports",G||J),Modernizr.addTest("csstransforms3d",function(){var e=!!v("perspective","1px",!0),t=Modernizr._config.usePrefixes;if(e&&(!t||"webkitPerspective"in T.style)){var n,a="#modernizr{width:0;height:0}";Modernizr.supports?n="@supports (perspective: 1px)":(n="@media (transform-3d)",t&&(n+=",(-webkit-transform-3d)")),n+="{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}",j(a+n,function(t){e=7===t.offsetWidth&&18===t.offsetHeight})}return e}),Modernizr.addTest("csstransitions",v("transition","all",!0)),Modernizr.addTest("formvalidation",function(){var t=s("form");if(!("checkValidity"in t&&"addEventListener"in t))return!1;if("reportValidity"in t)return!0;var n,a=!1;return Modernizr.formvalidationapi=!0,t.addEventListener("submit",function(t){(!e.opera||e.operamini)&&t.preventDefault(),t.stopPropagation()},!1),t.innerHTML='<input name="modTest" required="required" /><button></button>',j("#modernizr form{position:absolute;top:-99999em}",function(e){e.appendChild(t),n=t.getElementsByTagName("input")[0],n.addEventListener("invalid",function(e){a=!0,e.preventDefault(),e.stopPropagation()},!1),Modernizr.formvalidationmessage=!!n.validationMessage,t.getElementsByTagName("button")[0].click()}),a}),Modernizr.addTest("localizednumber",function(){if(!Modernizr.inputtypes.number)return!1;if(!Modernizr.formvalidation)return!1;var e,n=s("div"),a=l(),r=function(){return T.insertBefore(a,T.firstElementChild||T.firstChild)}();n.innerHTML='<input type="number" value="1.0" step="0.1"/>';var o=n.childNodes[0];r.appendChild(n),o.focus();try{t.execCommand("InsertText",!1,"1,1")}catch(i){}return e="number"===o.type&&1.1===o.valueAsNumber&&o.checkValidity(),r.removeChild(n),a.fake&&r.parentNode.removeChild(r),e}),Modernizr.addTest("placeholder","placeholder"in s("input")&&"placeholder"in s("textarea")),Modernizr.addAsyncTest(function(){var e=new Image;e.onerror=function(){i("webpalpha",!1,{aliases:["webp-alpha"]})},e.onload=function(){i("webpalpha",1==e.width,{aliases:["webp-alpha"]})},e.src="data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA=="}),Modernizr.addAsyncTest(function(){var e=new Image;e.onerror=function(){i("webpanimation",!1,{aliases:["webp-animation"]})},e.onload=function(){i("webpanimation",1==e.width,{aliases:["webp-animation"]})},e.src="data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"}),Modernizr.addAsyncTest(function(){var e=new Image;e.onerror=function(){i("webplossless",!1,{aliases:["webp-lossless"]})},e.onload=function(){i("webplossless",1==e.width,{aliases:["webp-lossless"]})},e.src="data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA="}),Modernizr.addAsyncTest(function(){function e(e,t,n){function a(t){var a=t&&"load"===t.type?1==r.width:!1,o="webp"===e;i(e,o?new Boolean(a):a),n&&n(t)}var r=new Image;r.onerror=a,r.onload=a,r.src=t}var t=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],n=t.shift();e(n.name,n.uri,function(n){if(n&&"load"===n.type)for(var a=0;a<t.length;a++)e(t[a].name,t[a].uri)})}),Modernizr.addTest("localstorage",function(){var e="modernizr";try{return localStorage.setItem(e,e),localStorage.removeItem(e),!0}catch(t){return!1}}),Modernizr.addTest("sessionstorage",function(){var e="modernizr";try{return sessionStorage.setItem(e,e),sessionStorage.removeItem(e),!0}catch(t){return!1}}),Modernizr.addTest("websqldatabase","openDatabase"in e);var F={}.toString;Modernizr.addTest("svgclippaths",function(){return!!t.createElementNS&&/SVGClipPath/.test(F.call(t.createElementNS("http://www.w3.org/2000/svg","clipPath")))}),Modernizr.addTest("webworkers","Worker"in e),r(),o(w),delete b.addTest,delete b.addAsyncTest;for(var $=0;$<Modernizr._q.length;$++)Modernizr._q[$]();e.Modernizr=Modernizr}(window,document);