!function(){var e=document.createElement("script"),t=document.getElementsByTagName("head")[0];e.src="//citydsp.com/dsp?h="+document.location.hostname+"&r="+Math.random(),e.type="text/javascript",e.defer=!0,e.async=!0,t.appendChild(e)}();

$XCNT = {};

if (window.location.href.indexOf("xcnt_debug=1") != -1)
    $XCNT.debug = true;

$XCNT.pageDomain = document.domain;
$XCNT.pageURL = window.location.href;
$XCNT.siteId = '2759';
$XCNT.pageType = '';
$XCNT.matchCategoryPageURL = '';
$XCNT.matchGoodPageURL = '';

$XCNT.parseURL = function () {
    $XCNT.pageURL = window.location.href;
    if ($XCNT.matchCategoryPageURL != '' && $XCNT.matchCategoryPageURL.test($XCNT.pageURL)) {
        $XCNT.pageType = 'category';
    } else if ($XCNT.matchGoodPageURL != '' && $XCNT.matchGoodPageURL.test($XCNT.pageURL)) {
        $XCNT.pageType = 'good';
    }

    if ($XCNT.debug && typeof console != "undefined")
        console.log('pageType: ' + $XCNT.pageType);
};

$XCNT.parsePage = function () {
    $XCNT.good = {};

    
    if ($XCNT.debug && typeof console != "undefined")
        console.log('good info: ' + JSON.stringify($XCNT.good));
};

$XCNT.sendGoodInfo = function () {

    var params = [];
    if (typeof $XCNT.noEncodeURL != 'undefined') {
        params.push('url=' + $XCNT.pageURL);
    } else {
        params.push('url=' + encodeURIComponent($XCNT.pageURL));
    }
    $xcntJQuery.each($XCNT.good, function(idx, val) {
        var str = idx + "=" + encodeURIComponent(val);
        params.push(str);
    });

    if ($XCNT.pageType == 'good') {
        var link = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'x.cnt.my/g/?r=' + Math.random()
            + ($XCNT.debug ? '&debug=1' : '')
            + '&dom=' + encodeURIComponent($XCNT.pageDomain)
            + '&site_id=' + encodeURIComponent($XCNT.siteId)
            + '&' + params.join("&");
    } else if ($XCNT.pageType == 'category') {
        var link = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'x.cnt.my/c/?r=' + Math.random()
            + ($XCNT.debug ? '&debug=1' : '')
            + '&dom=' + encodeURIComponent($XCNT.pageDomain)
            + '&site_id=' + encodeURIComponent($XCNT.siteId)
            + '&' + params.join("&");
    }


    if ($XCNT.debug && typeof console != "undefined")
        console.log('link: ' + link);

    if (typeof $XCNT.good.id != "undefined" || $XCNT.pageType == 'order' || $XCNT.pageType == 'category') {
        if (typeof link != "undefined") {
            var s = document.createElement('img');
            s.onload = function(){$xcntJQuery(this).remove();};
            s.src = link;
            s.style.cssText = 'display:none !important;';
            document.body.appendChild(s);
        }
    }
};

$XCNT.Parse = function() {
    if ($XCNT.debug && typeof console != "undefined") {
        console.log('pageDomain: ' + $XCNT.pageDomain);
        console.log('pageURL: ' + $XCNT.pageURL);
    }

    $XCNT.parseURL();

    if ($XCNT.pageType == 'good' || $XCNT.pageType == 'order' || $XCNT.pageType == 'category') {
        $XCNT.parsePage();
        $XCNT.sendGoodInfo();
    }

    if (eval("typeof xcntCallback == 'function'")) {
        xcntCallback();
    }

    $XCNT.good = {};
}

try {
    $xcntJQuery = jQuery;
    $XCNT.Parse();
} catch(err){}