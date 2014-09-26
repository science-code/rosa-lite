function empty(e){if("number"==typeof e||"boolean"==typeof e)return!1;if("undefined"==typeof e||null===e)return!0;if("undefined"!=typeof e.length)return 0===e.length;var t=0;for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&t++;return 0===t}function extend(e,t){for(var i in t)t.hasOwnProperty(i)&&(e[i]=t[i]);return e}function hasParent(e,t){if(!e)return!1;for(var i=e.target||e.srcElement||e||!1;i&&i.id!=t;)i=i.parentNode||!1;return i!==!1}function mobilecheck(){var e=!1;return function(t){(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4)))&&(e=!0)}(navigator.userAgent||navigator.vendor||window.opera),e}function setQueryParameter(e,t,i){var a=new RegExp("([?|&])"+t+"=.*?(&|$)","i");return separator=-1!==e.indexOf("?")?"&":"?",e.match(a)?e.replace(a,"$1"+t+"="+i+"$2"):e+separator+t+"="+i}function isElementInViewport(e){e instanceof jQuery&&(e=e[0]);var t=e.getBoundingClientRect();return t.top>=0&&t.left>=0&&t.bottom<=(window.innerHeight||document.documentElement.clientHeight)&&t.right<=(window.innerWidth||document.documentElement.clientWidth)}var phone,touch,ltie9,dh,ar,fonts,ieMobile,ua=navigator.userAgent,winLoc=window.location.toString(),is_webkit=ua.match(/webkit/i),is_firefox=ua.match(/gecko/i),is_newer_ie=ua.match(/msie (9|([1-9][0-9]))/i),is_older_ie=ua.match(/msie/i)&&!is_newer_ie,is_ancient_ie=ua.match(/msie 6/i),is_ie=is_ancient_ie||is_older_ie||is_newer_ie,is_mobile_ie=-1!==navigator.userAgent.indexOf("IEMobile"),is_mobile=ua.match(/mobile/i),is_OSX=ua.match(/(iPad|iPhone|iPod|Macintosh)/g)?!0:!1,nua=navigator.userAgent,is_android=-1!==nua.indexOf("Mozilla/5.0")&&-1!==nua.indexOf("Android ")&&-1!==nua.indexOf("AppleWebKit")&&-1===nua.indexOf("Chrome"),isAndroid=ua.indexOf("android")>-1,useTransform=!0,use2DTransform=ua.match(/msie 9/i)||winLoc.match(/transform\=2d/i),transform,prefixes={webkit:"webkitTransform",firefox:"MozTransform",ie:"msTransform",w3c:"transform"};useTransform&&(is_webkit?transform=prefixes.webkit:is_firefox?transform=prefixes.firefox:is_newer_ie&&(transform=prefixes.ie));var windowWidth=window.innerWidth,windowHeight=window.innerHeight,globalDebug=!1,timestamp,gifImages;!function(e,t,i){function a(){wh=e(t).height(),ww=e(t).width(),dh=e(document).height(),ar=ww/wh}function o(){e.support.touch="ontouchend"in document;{var i=navigator.userAgent.toLowerCase(),a=navigator.platform.toLowerCase(),o=a.indexOf("iphone"),n=a.indexOf("ipod"),r=a.indexOf("android"),s=-1!=i.indexOf("safari")&&-1==i.indexOf("chrome")?!0:!1;t.SVGAngle?!0:!1,document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")?!0:!1,/gecko/i.test(i)&&/rv:1.9/i.test(i)?!0:!1}ieMobile=navigator.userAgent.match(/Windows Phone/i)?!0:!1,phone=o>-1||n>-1||r>-1?!0:!1,touch=e.support.touch?!0:!1,ltie9=e.support.leadingWhitespace?!1:!0;var l=e("body");touch&&e("html").addClass("touch"),ieMobile&&e("html").addClass("is--winmob"),is_android&&e("html").addClass("is--ancient-android"),s&&l.addClass("safari"),phone&&l.addClass("phone")}function n(){globalDebug&&console.log("Magnific Popup - Init"),e(".js-post-gallery").each(function(){e(this).magnificPopup({tPrev:objectl10n.tPrev,tNext:objectl10n.tNext,tCounter:objectl10n.tCounter,delegate:'a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"]',type:"image",closeOnContentClick:!1,closeBtnInside:!1,removalDelay:500,mainClass:"mfp-fade",image:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><div class="mfp-img"></div><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></div>',titleSrc:function(e){var t="";return"undefined"!=typeof e.el.attr("data-alt")&&""!==e.el.attr("data-alt")&&(t+="<small>"+e.el.attr("data-alt")+"</small>"),t}},gallery:{enabled:!0,navigateByImgClick:!0},callbacks:{elementParse:function(t){this.currItem!=i&&(t=this.currItem);var a="";"undefined"!=typeof t.el.attr("data-alt")&&""!==t.el.attr("data-alt")&&(a+="<small>"+t.el.attr("data-alt")+"</small>"),e(".mfp-title").html(a)},change:function(t){var i="";"undefined"!=typeof t.el.attr("data-alt")&&""!==t.el.attr("data-alt")&&(i+="<small>"+t.el.attr("data-alt")+"</small>"),e(".mfp-title").html(i)}}})})}function r(t){globalDebug&&console.log("Royal Slider - Init"),t="undefined"!=typeof t?t:e("body"),t.find(".wp-gallery").each(function(){l(e(this))}),t.find(".js-pixslider").each(function(){s(e(this))})}function s(t){t.find("img").removeClass("invisible");var i=e(this).children(),a="undefined"!=typeof t.data("arrows"),o="undefined"!=typeof t.data("bullets")?"bullets":"none",n="undefined"!=typeof t.data("autoheight"),r=!1,s=t.data("autoscalesliderwidth"),l=t.data("autoscalesliderheight"),c="undefined"!=typeof t.data("customarrows"),u="undefined"!=typeof t.data("slidesspacing")?parseInt(t.data("slidesspacing")):0,p="undefined"!=typeof t.data("fullscreen"),h=t.data("imagescale"),m="undefined"!=typeof t.data("visiblenearby")?!0:!1,f="undefined"!=typeof t.data("imagealigncenter"),g="undefined"!=typeof t.data("slidertransition")&&""!=t.data("slidertransition")?t.data("slidertransition"):"move",v="undefined"!=typeof t.data("sliderautoplay")?!0:!1,w="undefined"!=typeof t.data("sliderdelay")&&""!=t.data("sliderdelay")?t.data("sliderdelay"):"1000",b=!0,y="undefined"!=typeof t.data("showcaptions")?!0:!1,x=t.hasClass("header--slideshow")?!0:!1,T="undefined"!=typeof t.data("hoverarrows");1==i.length&&(a=!1,o="none",c=!1,p=!1,b=!1,g="fade",c=!1),c&&(arrows=!1);var _={autoHeight:n,autoScaleSlider:r,loop:!0,autoScaleSliderWidth:s,autoScaleSliderHeight:l,imageScaleMode:h,imageAlignCenter:f,slidesSpacing:u,arrowsNav:a,controlNavigation:o,keyboardNavEnabled:p,arrowsNavAutoHide:!1,sliderDrag:b,transitionType:g,autoPlay:{enabled:v,stopAtAction:!0,pauseOnHover:!0,delay:w},globalCaption:y,numImagesToPreload:4};m&&(_.visibleNearby={enabled:!0,center:!0,breakpoint:0,navigateByCenterClick:!1}),t.royalSlider(_),t.addClass("slider--loaded");var S=t.data("royalSlider"),k=S.numSlides;if(S&&c){var M="";x&&(M="slider-arrows-header"),T&&!Modernizr.touch&&(M+=" arrows--hover ");var O=e('<div class="'+M+'"><div class="rsArrow rsArrowLeft js-arrow-left" style="display: block;"><div class="rsArrowIcn"></div></div><div class="rsArrow rsArrowRight js-arrow-right" style="display: block;"><div class="rsArrowIcn"></div></div></div>');"left"==t.data("customarrows")&&O.addClass("gallery-control--left"),O.insertBefore(t),O.on("click",".js-arrow-left",function(e){e.preventDefault(),S.prev()}),O.on("click",".js-arrow-right",function(e){e.preventDefault(),S.next()})}T&&!Modernizr.touch&&d(e(".slider-arrows-header .rsArrow")),1==k&&t.addClass("single-slide"),t.addClass("slider--loaded")}function l(t){var i=t,a=t.data(),o=i.find("img"),n=e('<div class="pixslider js-pixslider">');o.prependTo(n).addClass("rsImg"),e.each(a,function(e,t){n.attr("data-"+e,t)}),i.replaceWith(n)}function d(t){function i(t){var i,o;t.mousemove(function(e){i=e.pageX-t.offset().left-40,o=e.pageY-t.offset().top-40});var n=t.find(".rsArrowIcn");a=setInterval(function(){pixGS.TweenMax.to(n,0,{x:i,y:o,z:.01})},10),t.mouseleave(function(){e(this).removeClass("visible"),clearInterval(a)})}t.mouseenter(function(){e(this).addClass("visible"),i(e(this))});var a}function c(){function t(e,t){var i=t.split("?")[1];if("undefined"==typeof i)return i;i=i.split("&");for(var a=0;a<i.length;a++){var o=i[a].split("=");if(o[0]==e)return o[1]}}if(e("#gmap").length){globalDebug&&console.log("GMap Init");var i,a,o,n;i=e("#gmap").data("url"),n="undefined"!=typeof e("#gmap").data("customstyle")?"style1":google.maps.MapTypeId.ROADMAP;var r=e("#gmap").data("markercontent");Math.log=function(){var e=Math.log;return function(t,i){return e(t)/(i?e(i):1)}}();var o,s=[];if(i){var a=t("ll",i);if("undefined"==typeof a&&(a=t("sll",i)),"undefined"==typeof a)if(i.split("!3d")!=i){var l,d,c,u;l=i.split("!3d"),d=l[1],l=l[0].split("!2d"),c=l[1],l=l[0].split("!1d"),u=l[1],o=21-Math.round(Math.log(Math.round(u/218),2)),s=[d,c]}else{var p;p=i.split("@")[1],p=p.split("z/")[0],p=p.split(",");var h=p[0],m=p[1],f=p[2];f.indexOf("z")>=0&&(f=f.substring(0,f.length-1)),s[0]=h,s[1]=m,o=f}else o=t("z",i),"undefined"==typeof o&&(o=10),s=a.split(",")}e("#gmap").gmap3({map:{options:{center:new google.maps.LatLng(s[0],s[1]),zoom:parseInt(o),mapTypeId:n,mapTypeControlOptions:{mapTypeIds:[]},scrollwheel:!1}},overlay:{latLng:new google.maps.LatLng(s[0],s[1]),options:{content:'<div class="map__marker-wrap"><div class="map__marker">'+r+"</div></div>"}},styledmaptype:{id:"style1",options:{name:"Style 1"},styles:[{stylers:[{saturation:-100},{gamma:2.45},{visibility:"simplified"}]},{featureType:"road",stylers:[{hue:e("body").data("color")?e("body").data("color"):"#ffaa00"},{saturation:48},{gamma:.4},{visibility:"on"}]},{featureType:"administrative",stylers:[{visibility:"on"}]}]}})}}function u(){var t=".site-header",i=e(t),a=i.outerHeight(),o=e(".article__header"),n=o.length?o.first().outerHeight():0;i.headroom({tolerance:15,offset:n-a-1,onPin:function(){},onUnpin:function(){e("html").hasClass("navigation--is-visible")}})}function p(){globalDebug&&console.log("NiceScroll Init");{var a=e("body").data("smoothscrolling")!==i;document.documentElement}if(a&&!Modernizr.touch&&!is_mobile_ie&&!is_OSX){var o=e(t);o.on("mousewheel DOMMouseScroll",function(e){var t,i,a=400;"mousewheel"==e.type?i=e.originalEvent.wheelDelta/120:"DOMMouseScroll"==e.type&&(i=-e.originalEvent.detail/3),t=H-i*a,t&&(e.preventDefault(),pixGS.TweenMax.to(o,.6,{scrollTo:{y:t,autoKill:!0},ease:pixGS.Power1.easeOut,autoKill:!0,overwrite:5}))})}}function h(i,a){a="undefined"==typeof a?1:a;var o=Math.abs(H-i),n=a*o/2e3;pixGS.TweenMax.to(e(t),n,{scrollTo:{y:i,autoKill:!0,ease:pixGS.Quint.easeInOut}})}function m(){e(".js-nav-trigger").on("click",function(t){t.preventDefault(),t.stopPropagation();var i=e("html");i.hasClass("navigation--is-visible")?(e("body").css("overflow",""),i.removeClass("navigation--is-visible")):(e("body").css({overflow:"hidden"}),i.addClass("navigation--is-visible"),i.is(".is--ancient-android, .is--winmob, .is--ie")&&e(".navigation--main").height(windowHeight))})}function f(){var t=e("iframe, video");t.each(function(){e(this).data("aspectRatio",this.width/this.height).removeAttr("height").removeAttr("width")}),e("iframe").each(function(){var t=e(this).attr("src");empty(t)||e(this).attr("src",setQueryParameter(t,"wmode","transparenartt"))})}function g(){var t=e("iframe, video");t.each(function(){var t=e(this),i=t.data("aspectRatio"),a=t.css("width","100%").width(),o=a/i;t.height(o)})}function v(){globalDebug&&console.group("Init"),touch=!1,("undefined"!=typeof isIe||!t.ActiveXObject&&"ActiveXObject"in t)&&e("html").addClass("is--ie"),a(),o(),O(),(is_android||t.opera)&&e("html").addClass("android-browser").removeClass("no-android-browser");var i=t.retina||t.devicePixelRatio>1;i&&e(".site-logo--image-2x").length&&e(".site-logo--image-2x").children("img").each(function(){"undefined"!=typeof e(this).data("logo2x")&&(e(this).attr("src",e(this).data("logo2x")),e(".site-logo--image-2x").addClass("using-retina-logo"))}),w(),b(),globalDebug&&console.groupEnd()}function w(){globalDebug&&console.group("Event Handlers Once"),m(),globalDebug&&console.groupEnd()}function b(){globalDebug&&console.group("Event Handlers"),e("body").off("click",".js-arrow-popup-prev",y).on("click",".js-arrow-popup-prev",y),e("body").off("click",".js-arrow-popup-next",x).on("click",".js-arrow-popup-next",x);var t;t=touch?"click":"hover",ieMobile&&(t="click"),e(".pix-dropdown").on(t,function(t){t.preventDefault(),t.stopPropagation(),e(this).toggleClass("active")}),globalDebug&&console.groupEnd()}function y(t){globalDebug&&console.log("Magnific Popup Prev"),t.preventDefault();var i=e.magnificPopup.instance;return i.prev(),!1}function x(t){globalDebug&&console.log("Magnific Popup Next"),t.preventDefault();var i=e.magnificPopup.instance;return i.next(),!1}function T(e,t,i){var a=(H-t)/(i-t);return 0>a?void e.progress(0):a>1?void e.progress(1):void e.progress(a)}function _(){P=!1,e("html").is(".ie9, .lt-ie9")||(G.update(),I.update()),$.update(),A.update(),C.update()}function S(){P||requestAnimationFrame(_),P=!0}function k(){return gifImages[Math.floor(Math.random()*gifImages.length)]}function M(){e(".error404").css("background-image","url("+k()+")")}function O(){t.addthis&&(globalDebug&&console.log("AddThis Load Script"),addthis.addEventListener("addthis.ready",z),addthis.init())}function z(){globalDebug&&console.log("AddThis Ready"),D()}function D(){t.addthis&&(globalDebug&&console.log("AddThis Toolbox INIT"),addthis.toolbox(".addthis_toolbox"))}var G={selector:".article__parallax",amount:.5,$el:e(this.selector),initialize:function(){Modernizr.touch&&(this.amount=0),this.prepare(),this.update(H,!1)},prepare:function(){var t=this;e(this.selector).each(function(i,a){var o=e(a),n=o.parent(),r=n.offset().top,s=n.outerWidth(),l=n.outerHeight(),d={start:r-windowHeight,end:r+l},c=-1*(windowHeight+l)*t.amount/2;finalTop=-1*c,o.css({height:l+windowHeight*t.amount,top:-1*windowHeight*t.amount/2}),o.hasClass("article__parallax--img")&&o.find("img").length&&o.find("img").each(function(i,a){var o=e(a),n=o.height(),r=o.width(),d=((windowHeight-l)*t.amount+l)/n,c=s/r,u=Math.max(c,d);Modernizr.touch&&(d=(d*n+80)/n,u=Math.max(c,d)),o.css({width:parseInt(r*u+1,10),height:parseInt(n*u+1,10)}),pixGS.TweenMax.to(o,.5,{opacity:1})});var u=new pixGS.TimelineMax({paused:!0});u.append(pixGS.TweenMax.fromTo(o,1,{y:c},{y:finalTop,ease:pixGS.Linear.easeNone})),d.timeline=u,o.data("parallax",d)})},update:function(){0!=this.amount&&e(this.selector).length&&e(this.selector).each(function(t,i){var a=e(i),o=a.data("parallax"),n=0;if(!empty(o)&&o.end-o.start!==0){if(n=1/(o.end-o.start)*(H-o.start),0>n)return void o.timeline.progress(0);if(n>1)return void o.timeline.progress(1);o.timeline.progress(n)}})}},C={selector:".down-arrow",$arrow:null,timeline:null,start:0,end:0,bubble:!1,initialize:function(){var t=this;this.$arrow=e(this.selector),empty(this.$arrow)||(this.start=0,this.end=this.start+300,this.timeline=new pixGS.TimelineMax({paused:!0}),this.$next=this.$arrow.closest(".article__header").nextAll(".article__header, .article--page").first(),empty(this.$next)||(this.nextTop=this.$next.offset().top,this.nextHeight=this.$next.outerHeight()),this.$arrow.hasClass("down-arrow--bubble")?(this.timeline.to(this.$arrow,.2,{y:10,opacity:0,ease:pixGS.Linear.easeNone,overwrite:"none"}),this.timeline.to(".blurp--top",.3,{scaleY:0,ease:pixGS.Linear.easeNone,overwrite:"none"}),this.bubble=!0):this.timeline.to(this.$arrow,1,{y:100,opacity:0,ease:pixGS.Linear.easeNone,overwrite:"none"}),this.$arrow.on("click",function(i){i.preventDefault(),empty(t.$next)||h(t.$next.is(".article__header")?t.nextTop-windowHeight/2+t.nextHeight/2:t.nextTop-e(".site-header").outerHeight())}))},update:function(){return empty(this.$arrow)||this.bubble?void 0:Modernizr.touch&&is_OSX?void this.timeline.progress(0):void T(this.timeline,this.start,this.end)}},A={selector:".btn--top",$button:null,offsetTop:0,start:0,end:0,timeline:null,played:!1,initialize:function(){if(this.$button=e(this.selector),!empty(this.$button)){var t=e(".copyright-area").outerHeight();this.offsetTop=this.$button.offset().top,this.start=this.offsetTop-windowHeight+3*t/4,this.end=this.start+windowHeight,this.timeline=new pixGS.TimelineMax({paused:!0}),this.timeline.fromTo(".blurp--bottom",.6,{y:40,scale:.5},{y:0,scale:1,ease:pixGS.Power3.easeOut,force3D:!0}),this.timeline.fromTo(e(".btn__arrow--top"),.4,{y:15,opacity:0},{y:0,scale:1,opacity:1,ease:pixGS.Back.easeOut},"-=0.1"),this.timeline.fromTo(e(".btn__arrow--bottom"),.4,{y:15,opacity:0},{y:0,scale:1,opacity:1,ease:pixGS.Back.easeOut},"-=0.25"),this.$button.on("click",function(e){e.preventDefault(),h(0)}),this.update()}},update:function(){return empty(this.$button)?void 0:Modernizr.touch&&is_OSX?void this.timeline.progress(1):void(this.start<H&&H<=this.end?this.played||(this.timeline.play(),this.played=!0):this.played&&(this.timeline.reverse(),this.played=!1))}},I={selector:".article__header",initialized:!1,animated:!1,initialize:function(){this.initialized||(this.initialized=!0,e(this.selector).each(function(t,i){var a=e(i),o=a.find(".article__headline"),n=new pixGS.TimelineMax,r=o.find(".headline__primary"),s=o.find(".headline__secondary"),l=o.find(".headline__description"),d=o.find(".star"),c=o.find(".line"),u=l.find(".arrow"),p=l.find("hr"),h=a.offset().top,m=a.outerHeight();a.find(".pixcode--separator").width(r.width()),l.css({opacity:1}),l=l.children().not(".pixcode--separator"),l.css({opacity:0}),n.fromTo(r,.72,{"letter-spacing":"1em","margin-right":"-0.9em"},{"letter-spacing":"0.2em","margin-right":"-0.1em",ease:pixGS.Expo.easeOut}),n.fromTo(r,.89,{opacity:0},{opacity:1,ease:pixGS.Expo.easeOut},"-=0.72"),n.fromTo(r,1,{y:30},{y:0,ease:pixGS.Expo.easeOut},"-=0.89"),n.fromTo(s,.65,{opacity:0},{opacity:1,ease:pixGS.Quint.easeOut},"-=0.65"),n.fromTo(s,.9,{y:30},{y:0,ease:pixGS.Quint.easeOut},"-=0.65"),n.fromTo(d,.15,{opacity:0},{opacity:1,ease:pixGS.Quint.easeOut},"-=0.6"),n.fromTo(d,.55,{rotation:-270},{rotation:0,ease:pixGS.Back.easeOut},"-=0.5"),n.fromTo(c,.6,{width:0},{width:"42%",opacity:1,ease:pixGS.Quint.easeOut},"-=0.55"),n.fromTo(p,.6,{width:0},{width:"100%",opacity:1,ease:pixGS.Quint.easeOut},"-=0.6"),n.fromTo(u,.2,{opacity:0},{opacity:1,ease:pixGS.Quint.easeOut},"-=0.27"),n.fromTo(l,.5,{opacity:0},{opacity:1,ease:pixGS.Quint.easeOut},"-=0.28"),n.fromTo(l,.75,{y:-20},{y:0},"-=0.5"),n.addLabel("animatedIn"),0==t?(n.to(o,1.08,{y:150,ease:pixGS.Linear.easeNone}),n.to(r,1.08,{opacity:0,y:-60,ease:pixGS.Quad.easeIn},"-=1.08")):n.to(r,1.08,{opacity:0,y:-60,ease:pixGS.Quad.easeIn}),n.to(l,1.08,{y:60,opacity:0,ease:pixGS.Quad.easeIn},"-=1.08"),n.to(s,1.08,{opacity:0,y:-90,ease:pixGS.Quad.easeIn},"-=1.08"),n.to(c,.86,{width:0,opacity:0,ease:pixGS.Quad.easeIn},"-=0.94"),n.to(p,.86,{width:0,opacity:0,ease:pixGS.Quad.easeIn},"-=0.86"),n.to(d,1,{rotation:180},"-=1.08"),n.to(d,.11,{opacity:0},"-=0.03"),n.to(u,.14,{opacity:0},"-=1.08"),n.addLabel("animatedOut");var f,g,v=n.getLabelTime("animatedIn"),w=n.getLabelTime("animatedOut"),b=h+m/2-wh/2,y=b+m/2;return 0==t&&(b=h,y=b+windowHeight/2),f=v/w,g=1-f,Modernizr.touch&&is_OSX?void n.tweenTo("animatedIn"):(n.tweenTo("animatedOut",{onComplete:function(){o.data("animated",!0)},onUpdate:function(){var e=1/(y-b)*(H-b),t=0>e?f:f+g*e,i=n.progress();Math.abs(t-i)<.01&&(o.data("animated",!0),this.kill())}}),void o.data("tween",{timeline:n,ab:f,bc:g,start:b,end:y}))}),this.update())},update:function(){e(this.selector).each(function(t,i){var a=e(i).find(".article__headline"),o=a.data("tween"),n=0;if(!empty(o)&&o.end-o.start!==0){n=1/(o.end-o.start)*(H-o.start);var r=o.ab+o.bc*n;if(a.data("progress",r),!a.data("animated")||Modernizr.touch&&is_OSX)return;if(0>n&&(r=o.ab),1>r)return void o.timeline.progress(r);o.timeline.progress(1)}})}},$={$el:e('<div class="navigator"></div>'),sectionSelector:".article__header",scrollDuration:300,currentSelected:0,lastSelected:0,isWhite:!0,wasWhite:!0,initialized:!1,timeline:new pixGS.TimelineMax({paused:!0}),initialize:function(){var t=this,i=this.$el;this.initialized=!0,this.$sections=e(t.sectionSelector),this.$sections.length<2||(this.$sections.each(function(t,a){var o=e(a),n=o.offset().top,r=o.outerHeight(),s=e('<a href="#" class="navigator__item"><div class="bullet"></div></a>');s.appendTo(i),o.data("offsetTop",n),s.on("click",function(e){return e.preventDefault(),e.stopPropagation(),h(n-windowHeight/2+r/2),!1})}),this.$selected=e('<div class="navigator__item  navigator__item--selected"><div class="bullet"></div></div>').appendTo(i),this.$selectedBullet=this.$selected.find(".bullet"),this.timeline.add(pixGS.TweenMax.to(t.$selectedBullet,0,{})),this.timeline.add(pixGS.TweenMax.to(t.$selectedBullet,.1,{"border-top-left-radius":20,"border-top-right-radius":20,scaleY:2,scaleX:.6})),this.timeline.add(pixGS.TweenMax.to(t.$selectedBullet,.1,{"border-top-left-radius":50,"border-top-right-radius":50,scaleY:1,scaleX:1})),this.timeline.add(pixGS.TweenMax.to(t.$selectedBullet,0,{scale:1.2})),i.css({"margin-top":-1*i.height()/2}).prependTo("body"),this.update(),e(".navigator__item").each(function(t,i){var a=e(".navigator__item").length,o=3e3+400*t,n=e(i);n.is(".navigator__item--selected")&&(o+=100*a),setTimeout(function(){pixGS.TweenMax.fromTo(n,1,{opacity:0,scale:.7},{opacity:1.25,scale:1,ease:pixGS.Elastic.easeOut})},o)}),i.hasClass("navigator--transparent")?pixGS.TweenMax.to(i,2,{opacity:.2}):pixGS.TweenMax.to(i,.3,{opacity:1}))},update:function(){var t=this,i=this.$el;this.initialized&&(this.$sections.each(function(i,a){var o=e(a),n=o.data("offsetTop"),r=n+o.outerHeight(),s=H+windowHeight/2;s>n&&(t.currentSelected=i,t.isWhite=!0,s>r&&(t.isWhite=!1))}),this.lastSelected!=this.currentSelected&&(this.lastSelected=this.currentSelected,pixGS.TweenMax.to(this.$selected,.3,{top:24*t.currentSelected}),t.timeline.tweenFromTo(0,.3)),this.wasWhite!=this.isWhite&&(this.wasWhite=this.isWhite,i.toggleClass("navigator--black",!t.isWhite)))}};e(document).ready(function(){globalDebug&&console.group("OnDocumentReady"),v(),globalDebug&&console.groupEnd()}),e(t).load(function(){if(globalDebug&&console.group("OnWindowLoad"),u(),is_mobile_ie&&e("html").addClass("mobile-ie"),e("textarea").length&&e("textarea").autosize(),e(".pixcode--tabs").organicTabs(),e("html").is(".ie9, .lt-ie9")?setTimeout(function(){I.initialize()},400):(G.initialize(),setTimeout(function(){I.initialize()},600)),$.initialize(),A.initialize(),C.initialize(),p(),S(),r(),n(),f(),g(),c(),!empty(e("#date-otreservations"))){var t=new Pikaday({field:document.getElementById("date-otreservations"),format:"MM/DD/YYYY",minDate:moment().toDate()});t.setDate(moment().format("MM/DD/YYYY"))}e(".pixcode--tabs").organicTabs()}),e(t).on("debouncedresize",function(){globalDebug&&console.group("OnResize"),windowWidth=e(t).width(),windowHeight=e(t).height(),g(),r(),e("html").is(".ie9, .lt-ie9")||Modernizr.touch||(G.initialize(),I.initialize())}),e(t).on("orientationchange",function(){setTimeout(function(){G.initialize(),I.initialize()},300)});var H=e("html").scrollTop()||e("body").scrollTop(),P=!1;if(e(t).on("scroll",function(){H=e("html").scrollTop()||e("body").scrollTop(),S()}),navigator.userAgent.match(/iPad;.*CPU.*OS 7_\d/i)&&t.innerHeight!=document.documentElement.clientHeight){var j=function(){e("html, body").outerHeight(t.innerHeight)};t.addEventListener("scroll",j,!1),t.addEventListener("orientationchange",j,!1),j()}e(function(){var t=e(".site-header"),i=parseInt(t.outerHeight(),10);e(".site-header a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=e(this.hash);if(t=t.length?t:e("[name="+this.hash.slice(1)+"]"),t.length)return e("html,body").animate({scrollTop:t.offset().top-i},1e3),!1}})}),gifImages=["http://i.imgur.com/ShiZM6m.gif","http://i.imgur.com/8ZYNp.gif","http://i.imgur.com/Xb4fq.gif","http://i.imgur.com/UYPLKwN.gif","http://media.tumblr.com/d9e792a91d5391b8a7aa22689d4e2555/tumblr_inline_mwq1hmelce1qmoozl.gif","http://www.teen.com/wp-content/uploads/2013/10/world-without-jennifer-lawrence-gifs-food-uproxx-2.gif"],e(t).on("load",function(){e(".error404").length&&M()}),e(t).keydown(function(e){32==e.keyCode&&M()}),Date.now||(Date.now=function(){return(new Date).getTime()}),function(){"use strict";for(var e=["webkit","moz"],i=0;i<e.length&&!t.requestAnimationFrame;++i){var a=e[i];t.requestAnimationFrame=t[a+"RequestAnimationFrame"],t.cancelAnimationFrame=t[a+"CancelAnimationFrame"]||t[a+"CancelRequestAnimationFrame"]}if(/iP(ad|hone|od).*OS 6/.test(t.navigator.userAgent)||!t.requestAnimationFrame||!t.cancelAnimationFrame){var o=0;t.requestAnimationFrame=function(e){var t=Date.now(),i=Math.max(o+16,t);return setTimeout(function(){e(o=i)},i-t)},t.cancelAnimationFrame=clearTimeout}}()}(jQuery,window);