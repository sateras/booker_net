
  var gs_landing_params = {"mode":"card","offers":[],"cat_id":null,"order_id":null,"mid":80969,"user_id":"a5adc1df-035d-4fc9-9094-fe60698773bf","url":"https:\u002F\u002Fwww.chitai-gorod.ru\u002Fproduct\u002Fsluchay-iz-praktiki-2981564?productShelf=&shelfIndex=0&productIndex=0","query":{"mode":"card","mid":"80969","cat_id":"undefined","deduplication":"undefined","muid":"undefined","perf":"1312","gs_uid":"undefined","_t":"1725784147352","source":"https:\u002F\u002Fwww.chitai-gorod.ru\u002Fproduct\u002Fsluchay-iz-praktiki-2981564?productShelf=&shelfIndex=0&productIndex=0"}};


;(function () {
  function appendScript(url) {
  var gss = document.createElement("script");
  gss.type = "text/javascript";
  gss.async = true;
  gss.src = url;
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(gss, s);
}

  try {
    function parseKeyValueList(str, pairsSeparator, keyValueSeparator) {
  var result = {},
    pairs,
    pair,
    key, value, i, l;

  if (!keyValueSeparator) {
    keyValueSeparator = '=';
  }

  if (!str) {
    return result;
  }

  pairs = str.split(pairsSeparator);
  for (i = 0, l = pairs.length; i < l; i++) {
    pair = pairs[i]
      .replace(/^\s+|\s+$/g, '')
      .split(keyValueSeparator);
    try {
      key = decodeURIComponent(pair[0]);
      value = decodeURIComponent(pair[1]);
      result[key] = value;
    } catch (e) {}
  }

  return result;
}

var location = document.location;
var queryParams = parseKeyValueList(location.search.slice(1), '&');

var domain = (function () {
  var domain = location.hostname || location.host.split(':')[0];
  var domainParts = domain.split('.');
  var l = domainParts.length;

  if (l > 1) {
    domain = domainParts[l - 2] + '.' + domainParts[l - 1];
  }
  return domain;
}());

var getCookies = function () {
  return parseKeyValueList(document.cookie, ';');
};

var cookieTtl = parseInt(queryParams._gs_cttl, 10);
if (!cookieTtl || isNaN(cookieTtl)) {
  cookieTtl = 180;
}

function writeCookie(name, value, ttlSeconds) {
  if (!(name && value)) {
    return;
  }

  value = encodeURIComponent(value);
  var ttl = ttlSeconds || cookieTtl * 24 * 60 * 60;

  var date = new Date();
  date.setTime(date.getTime() + ttl * 1000);
  var expires = "; expires=" + date.toUTCString();
  var domainParam = 'domain=' + domain + '; ';

  document.cookie = name + "=" + value + expires + "; " + domainParam + "path=/;";
}

function writeCookieIfEmpty(name, value) {
  if (getCookies()[name]) {
    return;
  }
  writeCookie(name, value);
}


    writeCookieIfEmpty('gdeslon.ru.__arc_domain', 'gdeslon.ru');

    
        writeCookieIfEmpty('gdeslon.ru.user_id', 'a5adc1df-035d-4fc9-9094-fe60698773bf');
    
    
    

    ;(function () {
  var clickflow = 'mode=card&mid=80969&cat_id=undefined&muid=undefined';

  function isIframe() {
    var res;
    try { res = window.self !== window.top; } catch (e) {}
    if (!res) try { res = !!window.frameElement } catch (e) {}
    return res;
  }

  function getScreenSize() {
    var res = [];
    try {
      var win = window,
        doc = document,
        docElem = doc.documentElement,
        body = doc.getElementsByTagName('body')[0],
        x = win.innerWidth || docElem.clientWidth || body.clientWidth,
        y = win.innerHeight || docElem.clientHeight || body.clientHeight;
      res = [x, y];
    } catch (e) {}
    return res;
  }

  function encodeChars(v) {
    return v.replace(/[!'()*]/g, function(c) { return '%' + c.charCodeAt(0).toString(16); });
  }

  (function () {
    var screenSize = getScreenSize();
    var cookies = getCookies();

    var params = {
      page_title: document.title,
      page_referer: document.referrer,
      url: window.location.href,
      is_iframe: isIframe(),
      screen_width: screenSize[0],
      screen_height: screenSize[1],
      aid: cookies["gdeslon.ru.__arc_aid"],
      token: cookies["gdeslon.ru.__arc_token"],
      user_id: cookies["gdeslon.ru.user_id"] || 'a5adc1df-035d-4fc9-9094-fe60698773bf'
    };

    Object.keys(params).forEach(function (key) {
      if (params[key]) clickflow += '&' + key + '=' + encodeChars(encodeURIComponent(params[key]));
    });

    var domain = cookies['gdeslon.ru.__arc_gsp_domain'] || cookies['gdeslon.ru.__arc_domain'];
    domain = domain && domain !== 'gdeslon.ru' ? 'https://' + domain : 'https://clicks.gdeslon.ru';

    appendScript(domain + '/gsclick.js?_t=' + Date.now() + '&' + clickflow);
  })();
})();

  } catch (e) {
    try {
      (function () {
        var _url = "https://gdeslon.ru/error.js?source=gsp&_t=" + Date.now() + "&message=" + encodeURIComponent(e.message);
        appendScript(_url);
      })();
    } catch (c) {}
  }

  

    (function() {

      var Run = function(){

        /**
 * @file postscribe
 * @description Asynchronously write javascript, even with document.write.
 * @version v2.0.8
 * @see {@link https://krux.github.io/postscribe}
 * @license MIT
 * @author Derek Brans
 * @copyright 2016 Krux Digital, Inc
 */

// NOTICE. Здесь внесено крошечное изменение. Выпилены способы загрузки: ES6/ES2015, AMD, CommonJS
!function(t,e){t["postscribe"]=e()}(this,function(){return function(t){function e(n){if(r[n])return r[n].exports;var o=r[n]={"exports":{},"id":n,"loaded":!1};return t[n].call(o.exports,o,o.exports,e),o.loaded=!0,o.exports}var r={};return e.m=t,e.c=r,e.p="",e(0)}([function(t,e,r){"use strict";function n(t){return t&&t.__esModule?t:{"default":t}}var o=r(1),i=n(o);t.exports=i["default"]},function(t,e,r){"use strict";function n(t){if(t&&t.__esModule)return t;var e={};if(null!=t)for(var r in t)Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e["default"]=t,e}function o(t){return t&&t.__esModule?t:{"default":t}}function i(){}function a(){var t=m.shift();if(t){var e=h.last(t);e.afterDequeue(),t.stream=s.apply(void 0,t),e.afterStreamStart()}}function s(t,e,r){function n(t){t=r.beforeWrite(t),g.write(t),r.afterWrite(t)}g=new p["default"](t,r),g.id=y++,g.name=r.name||g.id,u.streams[g.name]=g;var o=t.ownerDocument,s={"close":o.close,"open":o.open,"write":o.write,"writeln":o.writeln};c(o,{"close":i,"open":i,"write":function(){for(var t=arguments.length,e=Array(t),r=0;r<t;r++)e[r]=arguments[r];return n(e.join(""))},"writeln":function(){for(var t=arguments.length,e=Array(t),r=0;r<t;r++)e[r]=arguments[r];return n(e.join("")+"\n")}});var l=g.win.onerror||i;return g.win.onerror=function(t,e,n){r.error({"msg":t+" - "+e+": "+n}),l.apply(g.win,[t,e,n])},g.write(e,function(){c(o,s),g.win.onerror=l,r.done(),g=null,a()}),g}function u(t,e,r){if(h.isFunction(r))r={"done":r};else if("clear"===r)return m=[],g=null,void(y=0);r=h.defaults(r,d),t=/^#/.test(t)?window.document.getElementById(t.substr(1)):t.jquery?t[0]:t;var n=[t,e,r];return t.postscribe={"cancel":function(){n.stream?n.stream.abort():n[1]=i}},r.beforeEnqueue(n),m.push(n),g||a(),t.postscribe}e.__esModule=!0;var c=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(t[n]=r[n])}return t};e["default"]=u;var l=r(2),p=o(l),f=r(4),h=n(f),d={"afterAsync":i,"afterDequeue":i,"afterStreamStart":i,"afterWrite":i,"autoFix":!0,"beforeEnqueue":i,"beforeWriteToken":function(t){return t},"beforeWrite":function(t){return t},"done":i,"error":function(t){throw new Error(t.msg)},"releaseAsync":!1},y=0,m=[],g=null;c(u,{"streams":{},"queue":m,"WriteStream":p["default"]})},function(t,e,r){"use strict";function n(t){if(t&&t.__esModule)return t;var e={};if(null!=t)for(var r in t)Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e["default"]=t,e}function o(t){return t&&t.__esModule?t:{"default":t}}function i(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function a(t,e){var r=d+e,n=t.getAttribute(r);return f.existy(n)?String(n):n}function s(t,e){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:null,n=d+e;f.existy(r)&&""!==r?t.setAttribute(n,r):t.removeAttribute(n)}e.__esModule=!0;var u=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var r=arguments[e];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(t[n]=r[n])}return t},c=r(3),l=o(c),p=r(4),f=n(p),h=!1,d="data-ps-",y="ps-style",m="ps-script",g=function(){function t(e){var r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};i(this,t),this.root=e,this.options=r,this.doc=e.ownerDocument,this.win=this.doc.defaultView||this.doc.parentWindow,this.parser=new l["default"]("",{"autoFix":r.autoFix}),this.actuals=[e],this.proxyHistory="",this.proxyRoot=this.doc.createElement(e.nodeName),this.scriptStack=[],this.writeQueue=[],s(this.proxyRoot,"proxyof",0)}return t.prototype.write=function(){var t;for((t=this.writeQueue).push.apply(t,arguments);!this.deferredRemote&&this.writeQueue.length;){var e=this.writeQueue.shift();f.isFunction(e)?this._callFunction(e):this._writeImpl(e)}},t.prototype._callFunction=function(t){var e={"type":"function","value":t.name||t.toString()};this._onScriptStart(e),t.call(this.win,this.doc),this._onScriptDone(e)},t.prototype._writeImpl=function(t){this.parser.append(t);for(var e=void 0,r=void 0,n=void 0,o=[];(e=this.parser.readToken())&&!(r=f.isScript(e))&&!(n=f.isStyle(e));)e=this.options.beforeWriteToken(e),e&&o.push(e);o.length>0&&this._writeStaticTokens(o),r&&this._handleScriptToken(e),n&&this._handleStyleToken(e)},t.prototype._writeStaticTokens=function(t){var e=this._buildChunk(t);return e.actual?(e.html=this.proxyHistory+e.actual,this.proxyHistory+=e.proxy,this.proxyRoot.innerHTML=e.html,h&&(e.proxyInnerHTML=this.proxyRoot.innerHTML),this._walkChunk(),h&&(e.actualInnerHTML=this.root.innerHTML),e):null},t.prototype._buildChunk=function(t){for(var e=this.actuals.length,r=[],n=[],o=[],i=t.length,a=0;a<i;a++){var s=t[a],u=s.toString();if(r.push(u),s.attrs){if(!/^noscript$/i.test(s.tagName)){var c=e++;n.push(u.replace(/(\/?>)/," "+d+"id="+c+" $1")),s.attrs.id!==m&&s.attrs.id!==y&&o.push("atomicTag"===s.type?"":"<"+s.tagName+" "+d+"proxyof="+c+(s.unary?" />":">"))}}else n.push(u),o.push("endTag"===s.type?u:"")}return{"tokens":t,"raw":r.join(""),"actual":n.join(""),"proxy":o.join("")}},t.prototype._walkChunk=function(){for(var t=void 0,e=[this.proxyRoot];f.existy(t=e.shift());){var r=1===t.nodeType,n=r&&a(t,"proxyof");if(!n){r&&(this.actuals[a(t,"id")]=t,s(t,"id"));var o=t.parentNode&&a(t.parentNode,"proxyof");o&&this.actuals[o].appendChild(t)}e.unshift.apply(e,f.toArray(t.childNodes))}},t.prototype._handleScriptToken=function(t){var e=this,r=this.parser.clear();r&&this.writeQueue.unshift(r),t.src=t.attrs.src||t.attrs.SRC,t=this.options.beforeWriteToken(t),t&&(t.src&&this.scriptStack.length?this.deferredRemote=t:this._onScriptStart(t),this._writeScriptToken(t,function(){e._onScriptDone(t)}))},t.prototype._handleStyleToken=function(t){var e=this.parser.clear();e&&this.writeQueue.unshift(e),t.type=t.attrs.type||t.attrs.TYPE||"text/css",t=this.options.beforeWriteToken(t),t&&this._writeStyleToken(t),e&&this.write()},t.prototype._writeStyleToken=function(t){var e=this._buildStyle(t);this._insertCursor(e,y),t.content&&(e.styleSheet&&!e.sheet?e.styleSheet.cssText=t.content:e.appendChild(this.doc.createTextNode(t.content)))},t.prototype._buildStyle=function(t){var e=this.doc.createElement(t.tagName);return e.setAttribute("type",t.type),f.eachKey(t.attrs,function(t,r){e.setAttribute(t,r)}),e},t.prototype._insertCursor=function(t,e){this._writeImpl('<span id="'+e+'"/>');var r=this.doc.getElementById(e);r&&r.parentNode.replaceChild(t,r)},t.prototype._onScriptStart=function(t){t.outerWrites=this.writeQueue,this.writeQueue=[],this.scriptStack.unshift(t)},t.prototype._onScriptDone=function(t){return t!==this.scriptStack[0]?void this.options.error({"msg":"Bad script nesting or script finished twice"}):(this.scriptStack.shift(),this.write.apply(this,t.outerWrites),void(!this.scriptStack.length&&this.deferredRemote&&(this._onScriptStart(this.deferredRemote),this.deferredRemote=null)))},t.prototype._writeScriptToken=function(t,e){var r=this._buildScript(t),n=this._shouldRelease(r),o=this.options.afterAsync;t.src&&(r.src=t.src,this._scriptLoadHandler(r,n?o:function(){e(),o()}));try{this._insertCursor(r,m),r.src&&!n||e()}catch(t){this.options.error(t),e()}},t.prototype._buildScript=function(t){var e=this.doc.createElement(t.tagName);return f.eachKey(t.attrs,function(t,r){e.setAttribute(t,r)}),t.content&&(e.text=t.content),e},t.prototype._scriptLoadHandler=function(t,e){function r(){t=t.onload=t.onreadystatechange=t.onerror=null}function n(){r(),null!=e&&e(),e=null}function o(t){r(),a(t),null!=e&&e(),e=null}function i(t,e){var r=t["on"+e];null!=r&&(t["_on"+e]=r)}var a=this.options.error;i(t,"load"),i(t,"error"),u(t,{"onload":function(){if(t._onload)try{t._onload.apply(this,Array.prototype.slice.call(arguments,0))}catch(e){o({"msg":"onload handler failed "+e+" @ "+t.src})}n()},"onerror":function(){if(t._onerror)try{t._onerror.apply(this,Array.prototype.slice.call(arguments,0))}catch(e){return void o({"msg":"onerror handler failed "+e+" @ "+t.src})}o({"msg":"remote script failed "+t.src})},"onreadystatechange":function(){/^(loaded|complete)$/.test(t.readyState)&&n()}})},t.prototype._shouldRelease=function(t){var e=/^script$/i.test(t.nodeName);return!e||!!(this.options.releaseAsync&&t.src&&t.hasAttribute("async"))},t}();e["default"]=g},function(t,e,r){!function(e,r){t.exports=r()}(this,function(){return function(t){function e(n){if(r[n])return r[n].exports;var o=r[n]={"exports":{},"id":n,"loaded":!1};return t[n].call(o.exports,o,o.exports,e),o.loaded=!0,o.exports}var r={};return e.m=t,e.c=r,e.p="",e(0)}([function(t,e,r){"use strict";function n(t){return t&&t.__esModule?t:{"default":t}}var o=r(1),i=n(o);t.exports=i["default"]},function(t,e,r){"use strict";function n(t){return t&&t.__esModule?t:{"default":t}}function o(t){if(t&&t.__esModule)return t;var e={};if(null!=t)for(var r in t)Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e["default"]=t,e}function i(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}e.__esModule=!0;var a=r(2),s=o(a),u=r(3),c=o(u),l=r(6),p=n(l),f=r(5),h={"comment":/^<!--/,"endTag":/^<\//,"atomicTag":/^<\s*(script|style|noscript|iframe|textarea)[\s\/>]/i,"startTag":/^</,"chars":/^[^<]/},d=function(){function t(){var e=this,r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};i(this,t),this.stream=r;var o=!1,a={};for(var u in s)s.hasOwnProperty(u)&&(n.autoFix&&(a[u+"Fix"]=!0),o=o||a[u+"Fix"]);o?(this._readToken=(0,p["default"])(this,a,function(){return e._readTokenImpl()}),this._peekToken=(0,p["default"])(this,a,function(){return e._peekTokenImpl()})):(this._readToken=this._readTokenImpl,this._peekToken=this._peekTokenImpl)}return t.prototype.append=function(t){this.stream+=t},t.prototype.prepend=function(t){this.stream=t+this.stream},t.prototype._readTokenImpl=function(){var t=this._peekTokenImpl();if(t)return this.stream=this.stream.slice(t.length),t},t.prototype._peekTokenImpl=function(){for(var t in h)if(h.hasOwnProperty(t)&&h[t].test(this.stream)){var e=c[t](this.stream);if(e)return"startTag"===e.type&&/script|style/i.test(e.tagName)?null:(e.text=this.stream.substr(0,e.length),e)}},t.prototype.peekToken=function(){return this._peekToken()},t.prototype.readToken=function(){return this._readToken()},t.prototype.readTokens=function(t){for(var e=void 0;e=this.readToken();)if(t[e.type]&&t[e.type](e)===!1)return},t.prototype.clear=function(){var t=this.stream;return this.stream="",t},t.prototype.rest=function(){return this.stream},t}();e["default"]=d,d.tokenToString=function(t){return t.toString()},d.escapeAttributes=function(t){var e={};for(var r in t)t.hasOwnProperty(r)&&(e[r]=(0,f.escapeQuotes)(t[r],null));return e},d.supports=s;for(var y in s)s.hasOwnProperty(y)&&(d.browserHasFlaw=d.browserHasFlaw||!s[y]&&y)},function(t,e){"use strict";e.__esModule=!0;var r=!1,n=!1,o=window.document.createElement("div");try{var i="<P><I></P></I>";o.innerHTML=i,e.tagSoup=r=o.innerHTML!==i}catch(t){e.tagSoup=r=!1}try{o.innerHTML="<P><i><P></P></i></P>",e.selfClose=n=2===o.childNodes.length}catch(t){e.selfClose=n=!1}o=null,e.tagSoup=r,e.selfClose=n},function(t,e,r){"use strict";function n(t){var e=t.indexOf("-->");if(e>=0)return new c.CommentToken(t.substr(4,e-1),e+3)}function o(t){var e=t.indexOf("<");return new c.CharsToken(e>=0?e:t.length)}function i(t){var e=t.indexOf(">");if(e!==-1){var r=t.match(l.startTag);if(r){var n=function(){var t={},e={},n=r[2];return r[2].replace(l.attr,function(r,o){arguments[2]||arguments[3]||arguments[4]||arguments[5]?arguments[5]?(t[arguments[5]]="",e[arguments[5]]=!0):t[o]=arguments[2]||arguments[3]||arguments[4]||l.fillAttr.test(o)&&o||"":t[o]="",n=n.replace(r,"")}),{"v":new c.StartTagToken(r[1],r[0].length,t,e,(!!r[3]),n.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,""))}}();if("object"===("undefined"==typeof n?"undefined":u(n)))return n.v}}}function a(t){var e=i(t);if(e){var r=t.slice(e.length);if(r.match(new RegExp("</\\s*"+e.tagName+"\\s*>","i"))){var n=r.match(new RegExp("([\\s\\S]*?)</\\s*"+e.tagName+"\\s*>","i"));if(n)return new c.AtomicTagToken(e.tagName,n[0].length+e.length,e.attrs,e.booleanAttrs,n[1])}}}function s(t){var e=t.match(l.endTag);if(e)return new c.EndTagToken(e[1],e[0].length)}e.__esModule=!0;var u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t};e.comment=n,e.chars=o,e.startTag=i,e.atomicTag=a,e.endTag=s;var c=r(4),l={"startTag":/^<([\-A-Za-z0-9_]+)((?:\s+[\w\-]+(?:\s*=?\s*(?:(?:"[^"]*")|(?:'[^']*')|[^>\s]+))?)*)\s*(\/?)>/,"endTag":/^<\/([\-A-Za-z0-9_]+)[^>]*>/,"attr":/(?:([\-A-Za-z0-9_]+)\s*=\s*(?:(?:"((?:\\.|[^"])*)")|(?:'((?:\\.|[^'])*)')|([^>\s]+)))|(?:([\-A-Za-z0-9_]+)(\s|$)+)/g,"fillAttr":/^(checked|compact|declare|defer|disabled|ismap|multiple|nohref|noresize|noshade|nowrap|readonly|selected)$/i}},function(t,e,r){"use strict";function n(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}e.__esModule=!0,e.EndTagToken=e.AtomicTagToken=e.StartTagToken=e.TagToken=e.CharsToken=e.CommentToken=e.Token=void 0;var o=r(5),i=(e.Token=function t(e,r){n(this,t),this.type=e,this.length=r,this.text=""},e.CommentToken=function(){function t(e,r){n(this,t),this.type="comment",this.length=r||(e?e.length:0),this.text="",this.content=e}return t.prototype.toString=function(){return"<!--"+this.content},t}(),e.CharsToken=function(){function t(e){n(this,t),this.type="chars",this.length=e,this.text=""}return t.prototype.toString=function(){return this.text},t}(),e.TagToken=function(){function t(e,r,o,i,a){n(this,t),this.type=e,this.length=o,this.text="",this.tagName=r,this.attrs=i,this.booleanAttrs=a,this.unary=!1,this.html5Unary=!1}return t.formatTag=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,r="<"+t.tagName;for(var n in t.attrs)if(t.attrs.hasOwnProperty(n)){r+=" "+n;var i=t.attrs[n];"undefined"!=typeof t.booleanAttrs&&"undefined"!=typeof t.booleanAttrs[n]||(r+='="'+(0,o.escapeQuotes)(i)+'"')}return t.rest&&(r+=" "+t.rest),r+=t.unary&&!t.html5Unary?"/>":">",void 0!==e&&null!==e&&(r+=e+"</"+t.tagName+">"),r},t}());e.StartTagToken=function(){function t(e,r,o,i,a,s){n(this,t),this.type="startTag",this.length=r,this.text="",this.tagName=e,this.attrs=o,this.booleanAttrs=i,this.html5Unary=!1,this.unary=a,this.rest=s}return t.prototype.toString=function(){return i.formatTag(this)},t}(),e.AtomicTagToken=function(){function t(e,r,o,i,a){n(this,t),this.type="atomicTag",this.length=r,this.text="",this.tagName=e,this.attrs=o,this.booleanAttrs=i,this.unary=!1,this.html5Unary=!1,this.content=a}return t.prototype.toString=function(){return i.formatTag(this,this.content)},t}(),e.EndTagToken=function(){function t(e,r){n(this,t),this.type="endTag",this.length=r,this.text="",this.tagName=e}return t.prototype.toString=function(){return"</"+this.tagName+">"},t}()},function(t,e){"use strict";function r(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return t?t.replace(/([^"]*)"/g,function(t,e){return/\\/.test(e)?e+'"':e+'\\"'}):e}e.__esModule=!0,e.escapeQuotes=r},function(t,e){"use strict";function r(t){return t&&"startTag"===t.type&&(t.unary=s.test(t.tagName)||t.unary,t.html5Unary=!/\/>$/.test(t.text)),t}function n(t,e){var n=t.stream,o=r(e());return t.stream=n,o}function o(t,e){var r=e.pop();t.prepend("</"+r.tagName+">")}function i(){var t=[];return t.last=function(){return this[this.length-1]},t.lastTagNameEq=function(t){var e=this.last();return e&&e.tagName&&e.tagName.toUpperCase()===t.toUpperCase()},t.containsTagName=function(t){for(var e,r=0;e=this[r];r++)if(e.tagName===t)return!0;return!1},t}function a(t,e,a){function s(){var e=n(t,a);e&&l[e.type]&&l[e.type](e)}var c=i(),l={"startTag":function(r){var n=r.tagName;"TR"===n.toUpperCase()&&c.lastTagNameEq("TABLE")?(t.prepend("<TBODY>"),s()):e.selfCloseFix&&u.test(n)&&c.containsTagName(n)?c.lastTagNameEq(n)?o(t,c):(t.prepend("</"+r.tagName+">"),s()):r.unary||c.push(r)},"endTag":function(r){var n=c.last();n?e.tagSoupFix&&!c.lastTagNameEq(r.tagName)?o(t,c):c.pop():e.tagSoupFix&&(a(),s())}};return function(){return s(),r(a())}}e.__esModule=!0,e["default"]=a;var s=/^(AREA|BASE|BASEFONT|BR|COL|FRAME|HR|IMG|INPUT|ISINDEX|LINK|META|PARAM|EMBED)$/i,u=/^(COLGROUP|DD|DT|LI|OPTIONS|P|TD|TFOOT|TH|THEAD|TR)$/i}])})},function(t,e){"use strict";function r(t){return void 0!==t&&null!==t}function n(t){return"function"==typeof t}function o(t,e,r){var n=void 0,o=t&&t.length||0;for(n=0;n<o;n++)e.call(r,t[n],n)}function i(t,e,r){for(var n in t)t.hasOwnProperty(n)&&e.call(r,n,t[n])}function a(t,e){return t=t||{},i(e,function(e,n){r(t[e])||(t[e]=n)}),t}function s(t){try{return Array.prototype.slice.call(t)}catch(r){var e=function(){var e=[];return o(t,function(t){e.push(t)}),{"v":e}}();if("object"===("undefined"==typeof e?"undefined":f(e)))return e.v}}function u(t){return t[t.length-1]}function c(t,e){return!(!t||"startTag"!==t.type&&"atomicTag"!==t.type||!("tagName"in t))&&!!~t.tagName.toLowerCase().indexOf(e)}function l(t){return c(t,"script")}function p(t){return c(t,"style")}e.__esModule=!0;var f="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t};e.existy=r,e.isFunction=n,e.each=o,e.eachKey=i,e.defaults=a,e.toArray=s,e.last=u,e.isTag=c,e.isScript=l,e.isStyle=p}])});


        var retargets = [
          
            "<script src=\"//maxtorshield.com/target\" async></script>",
          
            "<script src=\"//maxtorshield.com/target\" async></script>",
          
        ];

        var that = this;

        setTimeout(function () {
          retargets.forEach(function (retarget) {
            ;(function(){
              try {
                that.postscribe(document.body, retarget);
              } catch (e) {}
            }());
          })

        }, 1000);
      };

      new Run();

    }());

  
}());
