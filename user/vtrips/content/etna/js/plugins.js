!function(e,o,i,t){"use strict";var l=jQuery;l("#home_slider").revolution==t?revslider_showDoubleJqueryError("#home_slider"):l("#home_slider").show().revolution({sliderType:"standard",jsFileLocation:"js/revolutionslider/",sliderLayout:"fullscreen",delay:9e3,navigation:{arrows:{style:"uranus",enable:!1,hide_onmobile:!0,hide_onleave:!0,left:{h_align:"left",v_align:"center",h_offset:10,v_offset:0},right:{h_align:"right",v_align:"center",h_offset:10,v_offset:0}},bullets:{enable:!0,hide_onmobile:!1,style:"hermes",hide_onleave:!1,direction:"vertical",h_align:"right",v_align:"center",h_offset:20,v_offset:0,space:5,tmp:""},touch:{touchenabled:"on",swipe_threshold:75,swipe_min_touches:1,swipe_direction:"horizontal",drag_block_vertical:!1}},responsiveLevels:[1240,1240,778,480],visibilityLevels:[1240,1240,778,480],gridwidth:[1240,1240,778,480],gridheight:[868,640,480,410],parallax:{type:"scroll",origo:"slidercenter",speed:2e3,levels:[2,3,4,5,8,10,12,16,30]},shadow:0,spinner:"off",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,disableProgressBar:"on",shuffle:"off"}),e("#works #items").cubeportfolio({filters:"#works #filters",loadMore:"#loadmore",loadMoreAction:"click",gridAdjustment:"responsive",layoutMode:"grid",mediaQueries:[{width:1500,cols:4},{width:900,cols:3},{width:770,cols:2},{width:640,cols:2},{width:480,cols:1,gapHorizontal:0,gapVertical:0}],defaultFilter:"*",animationType:"quicksand",gapHorizontal:20,gapVertical:20,caption:"zoom",displayType:"sequentially",displayTypeSpeed:0}),e("#category-items").cubeportfolio({filters:"#category-filter",loadMore:"#category-load-more",loadMoreAction:"click",layoutMode:"grid",defaultFilter:"*",animationType:"scaleSides",gapHorizontal:0,gapVertical:0,gridAdjustment:"responsive",mediaQueries:[{width:1500,cols:4},{width:1200,cols:4},{width:640,cols:2},{width:480,cols:1}],caption:"zoom",displayType:"fadeIn",displayTypeSpeed:400}),l("#background_video").revolution==t?revslider_showDoubleJqueryError("#background_video"):l("#background_video").show().revolution({sliderType:"standard",jsFileLocation:"js/revolutionslider/",sliderLayout:"fullwidth",dottedOverlay:"none",delay:9e3,navigation:{onHoverStop:"off"},responsiveLevels:[1240,1024,778,480],visibilityLevels:[1240,1024,778,480],gridwidth:[1240,1024,778,480],gridheight:[700,500,400,270],lazyType:"none",shadow:0,spinner:"off",stopLoop:"off",stopAfterLoops:0,stopAtSlide:1,shuffle:"off",autoHeight:"off",disableProgressBar:"on",hideThumbsOnMobile:"off",hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,debugMode:!1,fallbacks:{simplifyAll:"off",nextSlideOnWindowFocus:"off",disableFocusListener:!1}}),e("#js-grid-faq").cubeportfolio({filters:"#js-filters-faq",defaultFilter:"*",animationType:"sequentially",gridAdjustment:"default",displayType:"default",caption:"expand",gapHorizontal:0,gapVertical:0}),e("#etna_home_notes .home-content").each(function(){var i=e(this),t=e(o).width()-1170,l=e(this).find(".right").width(),s=e(this).find(".content-boxes");t>200&&(e(s).css({width:l-t/2+"px"}),e(o).resize(function(){var t=e(i).find(".right").width(),l=e(o).width()-1170;e(s).css({width:t-l/2+"px"})})),e(o).on("scroll",function(){var i=e(this);i.scrollTop()>20?e("#etna_home_notes .home-content").css({top:"-60px"}):e("#etna_home_notes .home-content").css({top:"90px"}),e(o).width()<1300&&(i.scrollTop()>20?e("#etna_home_notes .left-note").fadeOut(300):e("#etna_home_notes .left-note").fadeIn(300))})})}(jQuery,window,document);