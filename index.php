
<!DOCTYPE html>
<html lang="tr" class="no-js not-logged-in client-root">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>
Giriş Yap • Instagram
</title>

        
        <meta name="robots" content="noimageindex, noarchive">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#000000">
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
        <link rel="manifest" href="/data/manifest.json">

        <link rel="preload" href="/static/bundles/es6/Vendor.js/1254883211b5.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/tr_TR.js/5a1bd22df4c9.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/ConsumerLibCommons.js/8b48a733b4a3.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/ConsumerUICommons.js/4d7118160f43.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/ConsumerAsyncCommons.js/686caf084b8f.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/Consumer.js/0d1c70eefeee.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/FBSignupPage.js/c7d3886b2382.js" as="script" type="text/javascript" crossorigin="anonymous" />
<link rel="preload" href="/static/bundles/es6/LoginAndSignupPage.js/f698bcfbca7f.js" as="script" type="text/javascript" crossorigin="anonymous" />
        <link rel="prefetch" href="/static/bundles/es6/FeedPageContainer.js/d9a298ac30fd.js" as="script" type="text/javascript" crossorigin="anonymous" />
        

        <script type="text/javascript">
        (function() {
  var docElement = document.documentElement;
  var classRE = new RegExp('(^|\\s)no-js(\\s|$)');
  var className = docElement.className;
  docElement.className = className.replace(classRE, '$1js$2');
})();
</script>
        <script type="text/javascript">
(function() {
  if ('PerformanceObserver' in window && 'PerformancePaintTiming' in window) {
    window.__bufferedPerformance = [];
    var ob = new PerformanceObserver(function(e) {
      window.__bufferedPerformance.push.apply(window.__bufferedPerformance,e.getEntries());
    });
    ob.observe({entryTypes:['paint']});
  }

  window.__bufferedErrors = [];
  window.onerror = function(message, url, line, column, error) {
    window.__bufferedErrors.push({
      message: message,
      url: url,
      line: line,
      column: column,
      error: error
    });
    return false;
  };
  window.__initialData = {
    pending: true,
    waiting: []
  };
  function asyncFetchSharedData(extra) {
    var sharedDataReq = new XMLHttpRequest();
    sharedDataReq.onreadystatechange = function() {
          if (sharedDataReq.readyState === 4) {
            if(sharedDataReq.status === 200){
              var sharedData = JSON.parse(sharedDataReq.responseText);
              window.__initialDataLoaded(sharedData, extra);
            }
          }
        }
    sharedDataReq.open('GET', '/data/shared_data/', true);
    sharedDataReq.send(null);
  }
  window.__initialDataLoadFromCache = function(sharedData) {
    var extra = { entry_data: sharedData.entry_data };
    try {
      var cachedSharedData = localStorage.getItem("ig_sdc");
      if (!cachedSharedData) {
        throw new Error();
      }
      cachedSharedData = JSON.parse(cachedSharedData);
      if (cachedSharedData.expiry < Date.now() || cachedSharedData.schemaVersion != sharedData.cache_schema_version) {
        throw new Error();
      }
    } catch (ex) {
      return asyncFetchSharedData(extra);
    }
    window.__initialDataLoaded(sharedData, cachedSharedData.data);
  };

  function notifyLoaded(item, data) {
    item.pending = false;
    item.data = data;
    for (var i = 0;i < item.waiting.length; ++i) {
      item.waiting[i].resolve(item.data);
    }
    item.waiting = [];
  }
  function notifyError(item, msg) {
    item.pending = false;
    item.error = new Error(msg);
    for (var i = 0;i < item.waiting.length; ++i) {
      item.waiting[i].reject(item.error);
    }
    item.waiting = [];
  }
  window.__initialDataLoaded = function(initialData, extraData) {
    if (extraData) {
      for (var key in extraData) {
        initialData[key] = extraData[key];
      }
    }
    notifyLoaded(window.__initialData, initialData);
  };
  window.__initialDataError = function(msg) {
    notifyError(window.__initialData, msg);
  };
  window.__additionalData = {};
  window.__pendingAdditionalData = function(paths) {
    for (var i = 0;i < paths.length; ++i) {
      window.__additionalData[paths[i]] = {
        pending: true,
        waiting: []
      };
    }
  };
  window.__additionalDataLoaded = function(path, data) {
    if (path in window.__additionalData) {
      notifyLoaded(window.__additionalData[path], data);
    } else {
      console.error('Unexpected additional data loaded "' + path + '"');
    }
  };
  window.__additionalDataError = function(path, msg) {
    if (path in window.__additionalData) {
      notifyError(window.__additionalData[path], msg);
    } else {
      console.error('Unexpected additional data encountered an error "' + path + '": ' + msg);
    }
  };
  
})();
</script><script type="text/javascript">

/*
 Copyright 2018 Google Inc. All Rights Reserved.
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
*/

(function(){function g(a,c){b||(b=a,f=c,h.forEach(function(a){removeEventListener(a,l,e)}),m())}function m(){b&&f&&0<d.length&&(d.forEach(function(a){a(b,f)}),d=[])}function n(a,c){function k(){g(a,c);d()}function b(){d()}function d(){removeEventListener("pointerup",k,e);removeEventListener("pointercancel",b,e)}addEventListener("pointerup",k,e);addEventListener("pointercancel",b,e)}function l(a){if(a.cancelable){var c=performance.now(),b=a.timeStamp;b>c&&(c=+new Date);c-=b;"pointerdown"==a.type?n(c,
a):g(c,a)}}var e={passive:!0,capture:!0},h=["click","mousedown","keydown","touchstart","pointerdown"],b,f,d=[];h.forEach(function(a){addEventListener(a,l,e)});window.perfMetrics=window.perfMetrics||{};window.perfMetrics.onFirstInputDelay=function(a){d.push(a);m()}})();
</script>
    
                <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/static/images/ico/apple-touch-icon-76x76-precomposed.png/4272e394f5ad.png">
                <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/static/images/ico/apple-touch-icon-120x120-precomposed.png/02ba5abf9861.png">
                <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/static/images/ico/apple-touch-icon-152x152-precomposed.png/419a6f9c7454.png">
                <link rel="apple-touch-icon-precomposed" sizes="167x167" href="/static/images/ico/apple-touch-icon-167x167-precomposed.png/a24e58112f06.png">
                <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/static/images/ico/apple-touch-icon-180x180-precomposed.png/85a358fb3b7d.png">
                
                    <link rel="icon" sizes="192x192" href="/static/images/ico/favicon-192.png/68d99ba29cc8.png">
                
            
            
                    <link rel="mask-icon" href="/static/images/ico/favicon.svg/fc72dd4bfde8.svg" color="#262626">
                  
                  <link rel="shortcut icon" type="image/x-icon" href="/static/images/ico/favicon.ico/36b3ee2d91ed.ico">
                
            
            
            
    
                    <meta content="Instagram'a tekrar hoş geldin. Arkadaşlarının, ailenin ve tüm dünyadan ilgi alanların hakkındaki Sayfaların çekip paylaştığı fotoğrafları ve videoları görmek için kaydol." name="description" />
                    <link rel="canonical" href="sda" />
                
    <link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher" hreflang="x-default" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=en" hreflang="en" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=fr" hreflang="fr" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=it" hreflang="it" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=de" hreflang="de" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es" hreflang="es" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=zh-cn" hreflang="zh-cn" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=zh-tw" hreflang="zh-tw" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ja" hreflang="ja" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ko" hreflang="ko" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=pt" hreflang="pt" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=pt-br" hreflang="pt-br" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=af" hreflang="af" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=cs" hreflang="cs" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=da" hreflang="da" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=el" hreflang="el" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=fi" hreflang="fi" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=hr" hreflang="hr" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=hu" hreflang="hu" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=id" hreflang="id" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ms" hreflang="ms" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=nb" hreflang="nb" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=nl" hreflang="nl" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=pl" hreflang="pl" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ru" hreflang="ru" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=sk" hreflang="sk" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=sv" hreflang="sv" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=th" hreflang="th" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=tl" hreflang="tl" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=tr" hreflang="tr" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=hi" hreflang="hi" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=bn" hreflang="bn" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=gu" hreflang="gu" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=kn" hreflang="kn" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ml" hreflang="ml" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=mr" hreflang="mr" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=pa" hreflang="pa" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ta" hreflang="ta" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=te" hreflang="te" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ne" hreflang="ne" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=si" hreflang="si" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ur" hreflang="ur" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=vi" hreflang="vi" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=bg" hreflang="bg" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=fr-ca" hreflang="fr-ca" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=ro" hreflang="ro" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=sr" hreflang="sr" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=uk" hreflang="uk" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=zh-hk" hreflang="zh-hk" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-ar" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-bo" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-mx" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-cr" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-do" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-ni" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-gt" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-pa" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-py" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-pe" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-pr" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-cl" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-co" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-sv" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-uy" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-ve" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-hn" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-cu" />
<link rel="alternate" href="https://www.instagram.com/accounts/login/?source=auth_switcher&amp;hl=es-la" hreflang="es-ec" />
</head>
    <body class="">
        
    <span id="react-root"><svg width="50" height="50" viewBox="0 0 50 50" style="position:absolute;top:50%;left:50%;margin:-25px 0 0 -25px;fill:#c7c7c7"><path d="M25 1c-6.52 0-7.34.03-9.9.14-2.55.12-4.3.53-5.82 1.12a11.76 11.76 0 0 0-4.25 2.77 11.76 11.76 0 0 0-2.77 4.25c-.6 1.52-1 3.27-1.12 5.82C1.03 17.66 1 18.48 1 25c0 6.5.03 7.33.14 9.88.12 2.56.53 4.3 1.12 5.83a11.76 11.76 0 0 0 2.77 4.25 11.76 11.76 0 0 0 4.25 2.77c1.52.59 3.27 1 5.82 1.11 2.56.12 3.38.14 9.9.14 6.5 0 7.33-.02 9.88-.14 2.56-.12 4.3-.52 5.83-1.11a11.76 11.76 0 0 0 4.25-2.77 11.76 11.76 0 0 0 2.77-4.25c.59-1.53 1-3.27 1.11-5.83.12-2.55.14-3.37.14-9.89 0-6.51-.02-7.33-.14-9.89-.12-2.55-.52-4.3-1.11-5.82a11.76 11.76 0 0 0-2.77-4.25 11.76 11.76 0 0 0-4.25-2.77c-1.53-.6-3.27-1-5.83-1.12A170.2 170.2 0 0 0 25 1zm0 4.32c6.4 0 7.16.03 9.69.14 2.34.11 3.6.5 4.45.83 1.12.43 1.92.95 2.76 1.8a7.43 7.43 0 0 1 1.8 2.75c.32.85.72 2.12.82 4.46.12 2.53.14 3.29.14 9.7 0 6.4-.02 7.16-.14 9.69-.1 2.34-.5 3.6-.82 4.45a7.43 7.43 0 0 1-1.8 2.76 7.43 7.43 0 0 1-2.76 1.8c-.84.32-2.11.72-4.45.82-2.53.12-3.3.14-9.7.14-6.4 0-7.16-.02-9.7-.14-2.33-.1-3.6-.5-4.45-.82a7.43 7.43 0 0 1-2.76-1.8 7.43 7.43 0 0 1-1.8-2.76c-.32-.84-.71-2.11-.82-4.45a166.5 166.5 0 0 1-.14-9.7c0-6.4.03-7.16.14-9.7.11-2.33.5-3.6.83-4.45a7.43 7.43 0 0 1 1.8-2.76 7.43 7.43 0 0 1 2.75-1.8c.85-.32 2.12-.71 4.46-.82 2.53-.11 3.29-.14 9.7-.14zm0 7.35a12.32 12.32 0 1 0 0 24.64 12.32 12.32 0 0 0 0-24.64zM25 33a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm15.68-20.8a2.88 2.88 0 1 0-5.76 0 2.88 2.88 0 0 0 5.76 0z"/></svg></span>

        


        
            <script type="text/javascript">window._sharedData = {"config":{"csrf_token":"Rvfa06ypuUT2GyXMckJ6l9AJ87ZLlTx3","viewer":null,"viewerId":null},"country_code":"unknown","language_code":"tr","locale":"tr_TR","entry_data":{"LoginAndSignupPage":[{"captcha":{"enabled":false,"key":""},"gdpr_required":false,"tos_version":"row","username_hint":""}]},"hostname":"www.instagram.com","deployment_stage":"c2","platform":"windows_nt_10","rhx_gis":"d9c710d56d090e1e11dcb6711df12a48","nonce":"Is9MAFKkEPHcuy5Xuw6/Dg==","mid_pct":97.50318,"zero_data":{},"cache_schema_version":3,"server_checks":{},"knobs":{"acct:ntb":0,"cb":0,"captcha":0,"fr":0},"to_cache":{"gatekeepers":{"3":false,"4":true,"5":false,"6":false,"7":false,"8":false,"9":false,"10":false,"11":false,"12":false,"13":true,"14":true,"15":true,"16":true,"18":true,"19":false,"20":false,"21":false,"23":false,"24":false,"25":true,"26":true,"27":false,"28":false,"29":true,"30":true,"31":false},"qe":{"sdc":{"g":"","p":{}},"app_upsell":{"g":"test_non_dismissable_half_sheet","p":{"has_new_app_upsell_sheet":"false","has_new_half_sheet":"true"}},"igl_app_upsell":{"g":"","p":{}},"notif":{"g":"","p":{}},"p_edit":{"g":"","p":{}},"comment_ta":{"g":"","p":{}},"log_cont":{"g":"","p":{}},"onetaplogin":{"g":"","p":{}},"onetap":{"g":"","p":{}},"multireg_iter":{"g":"control_12_21","p":{"has_new_phone_form":"false"}},"felix":{"g":"","p":{}},"felix_clear_fb_cookie":{"g":"","p":{}},"felix_creation_duration_limits":{"g":"","p":{}},"felix_creation_fb_crossposting":{"g":"","p":{}},"felix_creation_fb_crossposting_v2":{"g":"","p":{}},"felix_creation_validation":{"g":"","p":{}},"mweb_topical_explore":{"g":"","p":{}},"web_hashtag":{"g":"","p":{}},"post_options":{"g":"","p":{}},"igtv_public_viewing":{"g":"","p":{}},"nux":{"g":"","p":{}},"igwsvl":{"g":"","p":{}},"iglscioi":{"g":"","p":{}},"wpn":{"g":"","p":{}},"wfvu":{"g":"","p":{}},"wss2":{"g":"","p":{}},"sticker_tray":{"g":"","p":{}},"web_sentry":{"g":"","p":{}},"0":{"p":{"3":true,"4":false,"5":false},"qex":true},"2":{"p":{"0":true},"qex":true},"4":{"p":{"0":true},"qex":true},"5":{"p":{"0":false},"qex":true},"6":{"p":{"0":"12","1":true,"2":false,"3":false,"4":false,"5":false,"6":false,"7":false},"qex":true},"7":{"p":{"0":false},"qex":true},"8":{"p":{"0":false,"1":false,"2":true,"3":false,"4":false},"qex":true},"9":{"p":{"0":true,"1":true,"2":2000,"3":100,"4":25,"5":false},"qex":true},"10":{"p":{"0":false,"2":false,"3":true,"4":false},"qex":true},"11":{"p":{"0":true},"qex":true},"12":{"p":{"0":5},"qex":true},"13":{"p":{"0":false},"qex":true},"14":{"p":{"0":true},"qex":true},"16":{"p":{"0":false},"qex":true},"17":{"p":{"0":false,"1":true},"qex":true},"18":{"p":{"0":false,"1":false},"qex":true},"19":{"p":{"0":true},"qex":true},"20":{"p":{"0":true},"qex":true},"21":{"p":{"0":true,"1":true},"qex":true},"22":{"p":{"0":false,"1":false,"2":8.0,"3":0.85,"4":0.95,"5":10.0,"6":false},"qex":true},"23":{"p":{"0":false,"1":false},"qex":true},"24":{"p":{"0":true},"qex":true},"25":{"p":{},"qex":true},"26":{"p":{"0":""},"qex":true},"27":{"p":{"0":false},"qex":true}},"probably_has_app":false,"cb":false},"rollout_hash":"01ad059a0eb4","bundle_variant":"es6","is_canary":false};</script>
<script type="text/javascript">window.__initialDataLoaded(window._sharedData);</script>
<script type="text/javascript">var __BUNDLE_START_TIME__=this.nativePerformanceNow?nativePerformanceNow():Date.now(),__DEV__=false,process=this.process||{};process.env=process.env||{};process.env.NODE_ENV=process.env.NODE_ENV||"production";!(function(t){"use strict";function e(){return s=Object.create(null)}function r(t){const e=t,r=s[e];return r&&r.isInitialized?r.publicModule.exports:i(e,r)}function n(t){const e=t;if(s[e]&&s[e].importedDefault!==f)return s[e].importedDefault;const n=r(e),o=n&&n.__esModule?n.default:n;return s[e].importedDefault=o}function o(t){const e=t;if(s[e]&&s[e].importedAll!==f)return s[e].importedAll;const n=r(e);let o;if(n&&n.__esModule)o=n;else{if(o={},n)for(const t in n)a.call(n,t)&&(o[t]=n[t]);o.default=n}return s[e].importedAll=o}function i(e,r){if(!p&&t.ErrorUtils){p=!0;let n;try{n=c(e,r)}catch(e){t.ErrorUtils.reportFatalError(e)}return p=!1,n}return c(e,r)}function l(t){return{segmentId:t>>>h,localId:t&m}}function c(e,i){if(!i&&I.length>0){const t=l(e),r=t.segmentId,n=t.localId,o=I[r];null!=o&&(o(n),i=s[e])}const c=t.nativeRequire;if(!i&&c){const t=l(e),r=t.segmentId;c(t.localId,r),i=s[e]}if(!i)throw u(e);if(i.hasError)throw d(e,i.error);i.isInitialized=!0;const f=i,a=f.factory,p=f.dependencyMap;try{const l=i.publicModule;if(l.id=e,g.length>0)for(let t=0;t<g.length;++t)g[t].cb(e,l);return a(t,r,n,o,l,l.exports,p),i.factory=void 0,i.dependencyMap=void 0,l.exports}catch(t){throw i.hasError=!0,i.error=t,i.isInitialized=!1,i.publicModule.exports=void 0,t}}function u(t){let e='Requiring unknown module "'+t+'".';return Error(e)}function d(t,e){const r=t;return Error('Requiring module "'+r+'", which threw an exception: '+e)}t.__r=r,t.__d=function(t,e,r){null==s[e]&&(s[e]={dependencyMap:r,factory:t,hasError:!1,importedAll:f,importedDefault:f,isInitialized:!1,publicModule:{exports:{}}})},t.__c=e,t.__registerSegment=function(t,e){I[t]=e};var s=e();const f={},a={}.hasOwnProperty;r.importDefault=n,r.importAll=o;let p=!1;const h=16,m=65535;r.unpackModuleId=l,r.packModuleId=function(t){return(t.segmentId<<h)+t.localId};const g=[];r.registerHook=function(t){const e={cb:t};return g.push(e),{release:()=>{for(let t=0;t<g.length;++t)if(g[t]===e){g.splice(t,1);break}}}};const I=[]})('undefined'!=typeof global?global:'undefined'!=typeof window?window:this);
__s={"js":{"50":"/static/bundles/es6/AllTranslationMappings_af_ZA.js/e8438a49f319.js","52":"/static/bundles/es6/AllTranslationMappings_cs_CZ.js/a6da01b53a3b.js","54":"/static/bundles/es6/AllTranslationMappings_da_DK.js/0cf3e302b437.js","56":"/static/bundles/es6/AllTranslationMappings_de_DE.js/dc108186cdda.js","58":"/static/bundles/es6/AllTranslationMappings_el_GR.js/515b0e955ea0.js","60":"/static/bundles/es6/AllTranslationMappings_en_US.js/bbebd7dc5a0b.js","62":"/static/bundles/es6/AllTranslationMappings_es_ES.js/253eb781b6d3.js","64":"/static/bundles/es6/AllTranslationMappings_es_LA.js/0383289ae73f.js","66":"/static/bundles/es6/AllTranslationMappings_fi_FI.js/605c5a976fe2.js","68":"/static/bundles/es6/AllTranslationMappings_fr_FR.js/388af41c3c4f.js","70":"/static/bundles/es6/AllTranslationMappings_id_ID.js/d99cfa9dd1c0.js","72":"/static/bundles/es6/AllTranslationMappings_it_IT.js/567588cea57a.js","74":"/static/bundles/es6/AllTranslationMappings_ja_JP.js/f43af43ad70e.js","76":"/static/bundles/es6/AllTranslationMappings_ko_KR.js/5cf8e607d973.js","78":"/static/bundles/es6/AllTranslationMappings_ms_MY.js/4f803c7c1fb3.js","80":"/static/bundles/es6/AllTranslationMappings_nb_NO.js/a95c1c130cc0.js","82":"/static/bundles/es6/AllTranslationMappings_nl_NL.js/f8f69cc93718.js","84":"/static/bundles/es6/AllTranslationMappings_pl_PL.js/98ed7f5dbb60.js","86":"/static/bundles/es6/AllTranslationMappings_pt_BR.js/0e299eee1b2f.js","88":"/static/bundles/es6/AllTranslationMappings_pt_PT.js/5c5757e4cd9b.js","90":"/static/bundles/es6/AllTranslationMappings_ru_RU.js/b0963c80f4b4.js","92":"/static/bundles/es6/AllTranslationMappings_sv_SE.js/7749bca8165c.js","94":"/static/bundles/es6/AllTranslationMappings_th_TH.js/29befcb347ce.js","96":"/static/bundles/es6/AllTranslationMappings_tl_PH.js/8a8d6c58dfd7.js","98":"/static/bundles/es6/AllTranslationMappings_tr_TR.js/4b760e70fae8.js","100":"/static/bundles/es6/AllTranslationMappings_zh_CN.js/f514aeb636cf.js","102":"/static/bundles/es6/AllTranslationMappings_zh_TW.js/799705ac9f13.js","104":"/static/bundles/es6/AllTranslationMappings_bn_IN.js/76236f91b7a1.js","106":"/static/bundles/es6/AllTranslationMappings_gu_IN.js/c8edd779fff8.js","108":"/static/bundles/es6/AllTranslationMappings_hi_IN.js/ab0812c8c26e.js","110":"/static/bundles/es6/AllTranslationMappings_hr_HR.js/2aa0a361df4b.js","112":"/static/bundles/es6/AllTranslationMappings_hu_HU.js/e8c7ff8ccb46.js","114":"/static/bundles/es6/AllTranslationMappings_kn_IN.js/a8ea7cd961a5.js","116":"/static/bundles/es6/AllTranslationMappings_ml_IN.js/e5cae78c349f.js","118":"/static/bundles/es6/AllTranslationMappings_mr_IN.js/7a26248728f1.js","120":"/static/bundles/es6/AllTranslationMappings_ne_NP.js/60f7f797101d.js","122":"/static/bundles/es6/AllTranslationMappings_pa_IN.js/6fa80f3e4d34.js","124":"/static/bundles/es6/AllTranslationMappings_si_LK.js/e26c5d6ae95b.js","126":"/static/bundles/es6/AllTranslationMappings_sk_SK.js/cf12e31acb87.js","128":"/static/bundles/es6/AllTranslationMappings_ta_IN.js/fb6b36ae31f5.js","130":"/static/bundles/es6/AllTranslationMappings_te_IN.js/98a558709008.js","132":"/static/bundles/es6/AllTranslationMappings_vi_VN.js/897176b8cc58.js","134":"/static/bundles/es6/AllTranslationMappings_zh_HK.js/54b515c9f30c.js","136":"/static/bundles/es6/AllTranslationMappings_bg_BG.js/e14fb19ecefb.js","138":"/static/bundles/es6/AllTranslationMappings_fr_CA.js/ea036357f167.js","140":"/static/bundles/es6/AllTranslationMappings_ro_RO.js/a0bad59af388.js","142":"/static/bundles/es6/AllTranslationMappings_sr_RS.js/b430ffe8afdf.js","144":"/static/bundles/es6/AllTranslationMappings_uk_UA.js/732007a095a1.js","146":"/static/bundles/es6/MobileStoriesLoginPage.js/8f42957fb5b9.js","147":"/static/bundles/es6/DesktopStoriesLoginPage.js/afb1e9c86815.js","148":"/static/bundles/es6/shaka-player.ui.js/92ff0a4cd850.js","149":"/static/bundles/es6/DirectNewThread.js/956c584b7079.js","150":"/static/bundles/es6/DirectMQTT.js/86345f1ac0ef.js","151":"/static/bundles/es6/MobileStoriesPage.js/d568643085c4.js","152":"/static/bundles/es6/DesktopStoriesPage.js/b4d27790fc58.js","153":"/static/bundles/es6/ActivityFeedBox.js/45098bcf2681.js","154":"/static/bundles/es6/ActivityFeedPage.js/dd899b56b3cf.js","155":"/static/bundles/es6/AdsSettingsPage.js/9451dc0e9fcb.js","156":"/static/bundles/es6/DonateCheckoutPage.js/0d29ba6bdfcb.js","157":"/static/bundles/es6/CameraPage.js/a48809825e56.js","158":"/static/bundles/es6/SettingsModules.js/2c935299a1f0.js","159":"/static/bundles/es6/ContactHistoryPage.js/249f16b82fbf.js","160":"/static/bundles/es6/AccessToolPage.js/f72395b63fdb.js","161":"/static/bundles/es6/AccessToolViewAllPage.js/951911866acc.js","162":"/static/bundles/es6/AccountPrivacyBugPage.js/bde453b27508.js","163":"/static/bundles/es6/FirstPartyPlaintextPasswordLandingPage.js/e88108c521d2.js","164":"/static/bundles/es6/ThirdPartyPlaintextPasswordLandingPage.js/532c61363baa.js","165":"/static/bundles/es6/PlaintextPasswordBugPage.js/813d15e055a9.js","166":"/static/bundles/es6/PrivateAccountMadePublicBugPage.js/ac9248e09a5e.js","167":"/static/bundles/es6/PublicAccountNotMadePrivateBugPage.js/e22a555017de.js","168":"/static/bundles/es6/BlockedAccountsBugPage.js/e79aa50f4587.js","169":"/static/bundles/es6/AndroidBetaPrivacyBugPage.js/d0c7e52ba893.js","170":"/static/bundles/es6/DataControlsSupportPage.js/a16a61cd2adc.js","171":"/static/bundles/es6/DataDownloadRequestPage.js/3302b1a4a827.js","172":"/static/bundles/es6/DataDownloadRequestConfirmPage.js/8201c4f3dea7.js","173":"/static/bundles/es6/CheckpointUnderageAppealPage.js/9d69b88b12f7.js","174":"/static/bundles/es6/AccountRecoveryLandingPage.js/9d0cc11fba8f.js","175":"/static/bundles/es6/ContactInvitesOptOutPage.js/d53f162d622a.js","176":"/static/bundles/es6/ParentalConsentPage.js/96885faba7ef.js","177":"/static/bundles/es6/ParentalConsentNotParentPage.js/c2a232fbfc73.js","178":"/static/bundles/es6/TermsAcceptPage.js/a96d190f3c47.js","179":"/static/bundles/es6/TermsUnblockPage.js/efdd523cdd25.js","180":"/static/bundles/es6/NewTermsConfirmPage.js/a2faa71435ab.js","181":"/static/bundles/es6/ContactInvitesOptOutStatusPage.js/c05d95658b2c.js","182":"/static/bundles/es6/CreationModules.js/254571f6b18c.js","183":"/static/bundles/es6/StoryCreationPage.js/1d48a0683abe.js","184":"/static/bundles/es6/ExploreMediaPageContainer.js/e9921f634f72.js","185":"/static/bundles/es6/LikedByListContainer.js/4a6cfe13fd3c.js","186":"/static/bundles/es6/CommentLikedByListContainer.js/e7ee185bf3d5.js","187":"/static/bundles/es6/DiscoverMediaPageContainer.js/63eca44c1148.js","188":"/static/bundles/es6/DiscoverPeoplePageContainer.js/b61629c07206.js","189":"/static/bundles/es6/EmailConfirmationPage.js/3cd13e274395.js","190":"/static/bundles/es6/FBSignupPage.js/c7d3886b2382.js","191":"/static/bundles/es6/NewUserInterstitial.js/5816a5512387.js","192":"/static/bundles/es6/MultiStepSignupPage.js/7fcafa61aff8.js","193":"/static/bundles/es6/FeedSidebarContainer.js/ee1f18cbd814.js","194":"/static/bundles/es6/FeedPageContainer.js/d9a298ac30fd.js","195":"/static/bundles/es6/FollowListModal.js/4936afe4c247.js","196":"/static/bundles/es6/FollowListPage.js/b9b5f69febe7.js","197":"/static/bundles/es6/SimilarAccountsModal.js/fbf7aaa7368c.js","198":"/static/bundles/es6/SimilarAccountsPage.js/4e2ea2d055cb.js","199":"/static/bundles/es6/LandingPage.js/0a016abed76c.js","200":"/static/bundles/es6/LocationsDirectoryCountryPage.js/42301c0c011f.js","201":"/static/bundles/es6/LocationsDirectoryCityPage.js/7c24751750aa.js","202":"/static/bundles/es6/LocationPageContainer.js/8f3ec49a6680.js","203":"/static/bundles/es6/LocationsDirectoryLandingPage.js/c0f494e85558.js","204":"/static/bundles/es6/LoginAndSignupPage.js/f698bcfbca7f.js","205":"/static/bundles/es6/ResetPasswordPageContainer.js/53aa9adfa5d1.js","206":"/static/bundles/es6/MobileAllCommentsPage.js/c428e85ac386.js","207":"/static/bundles/es6/MediaChainingPageContainer.js/34c334fa9b7f.js","208":"/static/bundles/es6/PostPageContainer.js/4083bffb6e40.js","209":"/static/bundles/es6/ProfilesDirectoryLandingPage.js/a57bb06451f6.js","210":"/static/bundles/es6/HashtagsDirectoryLandingPage.js/c8072a350be6.js","211":"/static/bundles/es6/SuggestedDirectoryLandingPage.js/7f15dba99b4b.js","212":"/static/bundles/es6/TagPageContainer.js/2a7bcf1d6b5a.js","213":"/static/bundles/es6/PhoneConfirmPage.js/0becf99118cc.js","214":"/static/bundles/es6/ProfilePageContainer.js/94b89f387141.js","215":"/static/bundles/es6/HttpErrorPage.js/2b2f5f5a9bec.js","216":"/static/bundles/es6/IGTVVideoDraftsPageContainer.js/daba4820fc76.js","217":"/static/bundles/es6/IGTVVideoUploadPageContainer.js/e3c680cbe667.js","218":"/static/bundles/es6/OAuthPermissionsPage.js/5446ea7bde1d.js","219":"/static/bundles/es6/MobileDirectPage.js/1a9b808b6a88.js","220":"/static/bundles/es6/OneTapUpsell.js/86c7ab416f0a.js","221":"/static/bundles/es6/NametagLandingPage.js/9a59c3e530f8.js","222":"/static/bundles/es6/DebugInfoNub.js/8d9c8a140cef.js","224":"/static/bundles/es6/Consumer.js/0d1c70eefeee.js","225":"/static/bundles/es6/Challenge.js/965a5b9483f7.js","226":"/static/bundles/es6/NotificationLandingPage.js/5ffddfa31ce3.js","240":"/static/bundles/es6/EmbedAsyncLogger.js/3d29ea9a0aee.js","242":"/static/bundles/es6/EmbedRich.js/e7ec2e9f40ed.js"},"css":{"242":"/static/bundles/es6/EmbedRich.css/251cb3943b3d.css"}}</script>
<script type="text/javascript" src="/static/bundles/es6/Vendor.js/1254883211b5.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/bundles/es6/tr_TR.js/5a1bd22df4c9.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/bundles/es6/ConsumerLibCommons.js/8b48a733b4a3.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/bundles/es6/ConsumerUICommons.js/4d7118160f43.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/bundles/es6/ConsumerAsyncCommons.js/686caf084b8f.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/bundles/es6/Consumer.js/0d1c70eefeee.js" crossorigin="anonymous" charset="utf-8" async=""></script>
<script type="text/javascript" src="/static/bundles/es6/FBSignupPage.js/c7d3886b2382.js" crossorigin="anonymous" charset="utf-8" async=""></script>
<script type="text/javascript" src="/static/bundles/es6/LoginAndSignupPage.js/f698bcfbca7f.js" crossorigin="anonymous" charset="utf-8" async=""></script>

            
        

        <script type="text/javascript">
(function(){
  function normalizeError(err) {
    var errorInfo = err.error || {};
    var getConfigProp = function(propName, defaultValueIfNotTruthy) {
      var propValue = window._sharedData && window._sharedData[propName];
      return propValue ? propValue : defaultValueIfNotTruthy;
    };
    return {
      line: err.line || errorInfo.message || 0,
      column: err.column || 0,
      name: 'InitError',
      message: err.message || errorInfo.message || '',
      script: errorInfo.script || '',
      stack: errorInfo.stackTrace || errorInfo.stack || '',
      timestamp: Date.now(),
      ref: window.location.href,
      deployment_stage: getConfigProp('deployment_stage', ''),
      is_canary: getConfigProp('is_canary', false),
      rollout_hash: getConfigProp('rollout_hash', ''),
      is_prerelease: window.__PRERELEASE__ || false,
      bundle_variant: getConfigProp('bundle_variant', null),
      request_url: err.url || window.location.href,
      response_status_code: errorInfo.statusCode || 0
    }
  }
  window.addEventListener('load', function(){
    if (window.__bufferedErrors && window.__bufferedErrors.length) {
      if (window.caches && window.caches.keys && window.caches.delete) {
        window.caches.keys().then(function(keys) {
          keys.forEach(function(key) {
            window.caches.delete(key)
          })
        })
      }
      window.__bufferedErrors.map(function(error) {
        return normalizeError(error)
      }).forEach(function(normalizedError) {
        var request = new XMLHttpRequest();
        request.open('POST', '/client_error/', true);
        request.setRequestHeader('Content-Type', 'application/json; charset=utf-8');
        request.send(JSON.stringify(normalizedError));
      })
    }
  })
}());
</script>
    </body>
</html>
