<?

    // ini_set('display_errors', 'On');  
	define('Usable', true);

	//Define DIRECTORY_SEPARATOR
	if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
	}

	include_once('config.php');

?>	


<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>俥亭停車</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/logo.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>

    <!-- CSS -->
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/structure.css'>
    <link rel='stylesheet' id='style-static' href='css/be_style.css'>
    <link rel='stylesheet' href='css/tabs.css'>
    <link rel='stylesheet' href='css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">

	<? include("inc/googlehead.php"); ?>
</head>

<body class="page-parent template-slider color-blue layout-full-width header-fixed subheader-transparent sticky-header sticky-white subheader-title-left">
	<? include("inc/googlebody.php"); ?>

    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper">
            <!-- Header -->
            <header id="Header">
                <!-- Header -  Logo and Menu area -->
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <!-- Logo-->
                                <div class="logo">
                                    <a id="logo" href="index.php" title="俥亭停車">
                                        <img class="scale-with-grid" src="images/logo-retina.png" alt="俥亭停車" />
                                    </a>
                                </div>
                                <!-- Main menu-->
                                <? include("inc/menu.php"); ?>
								
                                <!-- Banner area - only for certain pages-->
                                <div class="banner_wrapper">
                                    <a href="#" target="_blank"><img src="images/468x60.gif" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="section flv_sections_14">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- Page Title-->
                                <!-- One full width row-->
                                <div class="column one column_fancy_heading">
                                    <div class="fancy_heading fancy_heading_icon">
                                        <!-- Animated area -->
                                        <div class="animate" data-anim-type="zoomInLeftLarge">
                                            <span class="icon_top"><i class="icon-briefcase"></i></span>
                                            <h2 class="title">合作提案</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr_zigzag" style="margin: 0 auto 30px">
                                    <i class="icon-down-open"></i><i class="icon-down-open"></i><i class="icon-down-open"></i>
                                </div>
                                <div class="section mcb-section">
                                    <div class="section_wrapper mcb-section-inner">
                                        <div class="wrap mcb-wrap one valign-top clearfix">
                                            <div class="mcb-wrap-inner">
                                                <div class="column mcb-column one column_column">
                                                    <div id="contactWrapper" class="form-align-center">
                                                        <form id="contactform">
                                                            <!-- One Second (1/2) Column -->
                                                            <div class="column one-second">
                                                                <input placeholder="公司名稱" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false">
                                                            </div>
                                                            <!-- One Second (1/2) Column -->
                                                            <div class="column one-second">
                                                                <input placeholder="聯絡人姓名(必填)" type="text" name="contactname" id="contactname" size="40" aria-invalid="false">
                                                            </div>
                                                            <div class="column one-second">
                                                                <input placeholder="聯絡電話(必填)" type="text" name="tel" id="tel" size="40" aria-invalid="false">
                                                            </div>
                                                            <div class="column one-second">
                                                                <input placeholder="傳真號碼" type="text" name="fax" id="fax" size="40" aria-invalid="false">
                                                            </div>
                                                            <div class="column one">
                                                                <input placeholder="聯絡信箱" type="text" name="email" id="email" size="40" aria-required="true" aria-invalid="false">
                                                            </div>
                                                            <div class="column one-second">
                                                                <input placeholder="預計樓層" type="text" name="floors" id="floors" size="40" aria-invalid="false">
                                                            </div>
                                                            <div class="column one-second">
                                                                <input placeholder="預計坪數" type="text" name="pings" id="pings" size="40" aria-invalid="false">
                                                            </div>
                                                            <div class="column one">
                                                                <select name="type">
                                                                    <option>型態</option>
                                                                    <option>空地平面</option>
                                                                    <option>地下室平面</option>
                                                                    <option>河堤平面</option>
                                                                    <option>機械車位</option>
                                                                    <option>立體平面</option>
                                                                </select>
                                                            </div>
                                                            <div class="column one">
                                                                <select name="class">
                                                                    <option>類型</option>
                                                                    <option>無人停車場</option>
                                                                    <option>需收費停車場</option>
                                                                </select>
                                                            </div>
                                                            <div class="column one">
                                                                <textarea placeholder="提案說明(必填)" name="demand" id="demand" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                            </div>
															<!--
                                                            <div class="column two-third">
                                                                <input placeholder="驗證碼" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false">
                                                            </div>
                                                            <div class="column one-third">
                                                                <img src="images/verify-demo.jpg" alt="">
                                                            </div>
															-->
                                                            <div class="column one">
                                                                <input class="button button_blue button_large button_js button_full_width" type="button" value="送出" id="submit" onclick="contactgo();">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="column one column_image">
                                    <div class="image_frame no_link scale-with-grid no_border aligncenter">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="images/proposal.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <? include("inc/footer.php"); ?>
		
    </div>
    <!-- JS -->

    <script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/email.js"></script>
    <script src="js/scripts.js"></script>

    <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        var tpj = jQuery;
        tpj.noConflict();
        var revapi34;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_34_2").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_34_2");
            } else {
                revapi34 = tpj("#rev_slider_34_2").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 7000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 0.7,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: false,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            }
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: true,
                            style: "hephaistos",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 10,
                            space: 5,
                            tmp: ''
                        }
                    },

                    gridwidth: 1180,
                    gridheight: 750,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "on",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "on",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: "off",
                    }
                });
            }
        });
    </script>

    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/logo-retina.png").width(retinaLogoW).height(retinaLogoH)
            }
        });
    </script>

	<script>
    function contactgo() {
        if ( document.forms["contactform"].elements["contactname"].value=="" ) { alert("請輸入聯絡人姓名"); }
 	    else if ( document.forms["contactform"].elements["tel"].value=="" ) { alert("請輸入聯絡人電話"); }
		else if ( document.forms["contactform"].elements["demand"].value=="" ) { alert("請輸入提案內容"); }
 	    else { 
	       jQuery.ajax({
		       type:"POST",
		       url:"inc/ajax/proposalsave.php",
	           data:jQuery("#contactform").serialize(),
		       dataType: "text",
		       success: function(content) {
			      alert("我們已收到您的資料會盡快與您聯絡，謝謝您!");
			      location.href = "index.php";
		       },
		       error: function( objRequest ){
			      // alert(objRequest.status);
		       }

	       }); 
        }	

    }	
	</script>	
	
</body>

</html>