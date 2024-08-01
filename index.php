<?

ini_set('display_errors', 'On');
define('Usable', true);

//Define DIRECTORY_SEPARATOR
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

include_once('./config.php');

$_PageShowNum = 12;
if ($_PageShowNum == "" or $_PageShowNum == 0) {
    $_PageShowNum = 9;
}

$CurrentPageNO = $_GET["page"];
if ($CurrentPageNO == "") {
    $CurrentPageNO = 1;
}
$pageno = $CurrentPageNO - 1;

$startuprow = $pageno * $_PageShowNum;
$EndRec = $startuprow + $_PageShowNum;
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>孤川</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/kokawa-LOGO2.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cactus+Classical+Serif&display=swap" rel="stylesheet">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cactus+Classical+Serif&display=swap" rel="stylesheet">
    <style>
        /* @font-face {
            font-family: adobe-ming-std, sans-serif;
            src: url('./assets/fonts/ADOBEMINGSTD-LIGHT.OTF') format("opentype"),
                url('./assets/fonts/adobe.woff') format("woff")
                url('../fonts/Helvetica.eot') format("embedded-opentype");
        } */

        body {
            margin-left: 8px;
        }

        h2 {
            font-size: 25px !important;
            color: rgb(128, 128, 128) !important;
            font-weight: 300 !important;
        }

        h4 {
            color: rgb(128, 128, 128) !important;

        }

        .mygreycolor {
            color: rgb(128, 128, 128) !important;
        }

        .fw200 {
            font-weight: 200 !important;
            font-size: 18px;
        }

        .fw200P {
            font-weight: 200 !important;
            font-size: 14px !important;
        }

        .onlyfw200 {
            font-weight: 200 !important;
        }

        .fw600 {
            font-weight: 500 !important;
        }

        .mywh {
            height: 100vh !important;
        }

        h1,
        h3,
        h5,
        p {
            color: rgb(128, 128, 128) !important;
        }

        .main-slider-1 {
            height: 100vh !important;
        }

        .work-shadow,
        .landing-img-shadow {
            background-color: rgba(0, 0, 0, 0.11);
        }

        .work-shadow {
            position: absolute;
            height: 100%;
            width: 100%;
        }

        .landing-img-shadow {
            height: 100vh;
            width: 100vw;
            position: absolute;
        }

        /*----- new hero style start -----*/
        .slider-bg-1 {
            /* background-image: url(./assets/images/landscape-sea-horizon-mountain-snow-winter-133888-pxhere.com.jpg); */
            position: relative;
            /* background-attachment: scroll; */
        }

        .header-section {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            z-index: 999;
        }

        .design-work {
            height: 100%;
            object-fit: cover;
        }

        .portfolio-item {
            height: 400px !important;
            position: relative;
        }

        .portfolio-item,
        .portfolio-image {
            height: 100%;
        }

        .work-div {
            position: relative;
            margin-bottom: 150px;
        }

        .pb-120 {
            padding-bottom: 180px !important;
        }

        .main-slider-content {
            /* transform: translate3d(7.04603px, 15.8536px, 0px) scale(0.765132, 0.765132); */
        }

        .work-div-shadow {
            position: absolute;
            /* padding-right: calc(var(--bs-gutter-x)* .5);
            padding-left: calc(var(--bs-gutter-x)* .5); */
            right: 0;
            top: 0;
            width: 100%;
            height: 100%;
            /* outline: 1px solid black; */
            background-color: white;
            opacity: 0.5;
            z-index: 2;
            -webkit-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
        }

        .work-div-shadow:hover {
            opacity: 0 !important;
            -webkit-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
        }

        .ver-write-mode {
            font-family: adobe-ming-std, sans-serif;
            font-style: normal;
            font-weight: 300;
            -webkit-writing-mode: vertical-lr;
            margin: 0 3vw;
            /* writing-mode: vertical-lr */
        }

        .googleCactusFont {
            font-family: "Cactus Classical Serif", serif;
            font-weight: 300;
            font-style: normal;
            font-size: 28px;
        }

        .activeY {
            /*for element move in(tanslateY)*/
            z-index: 0;
            opacity: 1;
            transform: translateY(0%);
        }

        .fadeIn {
            animation: fadeInOut 3s ease-in;
        }

        .fadeInKokawa {
            animation: fadeInOutKokawa 5s ease-in;
        }

        .move {
            /* animation: move 5s ease-in; */
        }

        .cust-grey {
            color: #e1e1e1 !important;
        }

        .h5-color {
            color: rgb(128, 128, 128) !important;
        }

        .letterspacing {
            letter-spacing: 5px;
        }

        @-webkit-keyframes fadeInOut {
            0% {
                opacity: 0;
            }

            25% {
                opacity: 0.25;
            }

            50% {
                opacity: 0.5;
            }

            75% {
                opacity: 1;
                /* transform: translateY(100px); */
            }
        }

        @-webkit-keyframes fadeInOutKokawa {
            0% {
                opacity: 0;
            }

            10% {
                opacity: 0;
            }

            50% {
                opacity: 0.5;
            }

            75% {
                opacity: 1;
                /* transform: translateY(100px); */
            }
        }

        @-webkit-keyframes move {
            from {
                left: 0;
            }

            to {
                left: 375px;
            }
        }

        .bg-grey {
            background-color: white !important;
        }

        @media only screen and (min-width: 768px) {
            .myWorkFlow {
                height: 100vh !important;
            }
        }

        @media only screen and (min-width: 577px) {
            .myBreakWord {
                display: flex !important;
                justify-content: center !important;
            }
        }
    </style>
</head>

<body>
    <div class="main-wrapper p-0">
        <?php require_once './tpl/headind.php' ?>
        <!--Main Slider Section Start-->
        <div class="section main-slider-1 bg-grey" style="position: relative;">
            <div class="container">
                <!--Main Slider Content Start-->
                <div class="main-slider-content fadeIn" style="padding-bottom: 100px;display: flex;justify-content: center;">
                    <h3 class="cust-grey googleCactusFont" style="color: black;text-align: center;"><span style="color: white; opacity: 0;">息</span>城市</h3>
                    <div style="display: flex; flex-direction:column;align-items: center;">
                        <h3 class="ver-write-mode googleCactusFont" style="margin-top:-2px;color: black !important;text-align: center;letter-spacing: 1rem;">孤川
                        </h3>
                        <h4 class="ver-write-mode googleCactusFont" style="color: black !important;text-align: center;font-size: 24px;">
                            空間制作</h4>
                    </div>
                    <div>
                        <h3 class="cust-grey googleCactusFont" style="color: black;margin-bottom: 20px;">島</h3>
                        <h3 class="cust-grey googleCactusFont" style="color: black;text-align: center;">流不息</h3>
                    </div>
                </div>
                <div class="fadeInKokawa" style="position: absolute;right:0; bottom: 30px;width: 100%;">
                    <h4 style="text-align: center;">KOKAWA</h4>
                    <h5 style="text-align: center;">Interior Design</h5>
                </div>
                <!--Main Slider Content End-->
            </div>
            <!-- <div class="landing-img-shadow"></div> -->
        </div>
        <!--Main Slider Section End-->

        <!-- Content Body Start -->
        <div class="section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50 bg-grey" style="padding-top: 20vh!important;">
            <div class="container">
                <div class="row col-12 pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50" style="margin: auto;">
                    <h4 class="sub-title onlyfw200 myBreakWord">
                        <div style="text-align: center;padding-left: 13px;">在屬於你的島嶼上，</div>
                        <div style="text-align: center;padding-left: 13px;">找到川流不息的美。</div>
                    </h4>
                    <h4 class="sub-title onlyfw200" style="text-align: center;">On your own island, discover the
                        ceaseless flow of
                        beauty.
                    </h4>
                </div>
                <!-- about -->
                <div class="section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50 bg-grey">
                    <div class="row">
                        <!-- About Item -->
                        <div class="col-md-9 col-12 work-div">
                            <div class="portfolio-item">
                                <a href="portfolio-details.html" class="portfolio-image">
                                    <img src="assets/images/interior-design.jpeg" class="design-work" alt="">
                                </a>
                                <!-- <div class="portfolio-content">
                                <h4 class="title"><a href="portfolio-details.html">Oil Paint Dog</a></h4>
                                <span class="category"><a href="#">Design</a></span>
                            </div> -->
                            </div>
                            <div class="work-div-shadow"></div>
                        </div>
                        <div class="col-md-3 col-12 work-div column" style="display: flex;flex-direction: column; justify-content: space-between;">
                            <h2 class="title" style="font-weight: 300!important;">about</h2>
                            <h5></h5>
                            <h5 class="sub-title onlyfw200">經過業界陶冶十餘年 </h5>
                            <h5 class="sub-title onlyfw200">成立孤川</h5>
                            <h5 class="sub-title onlyfw200">是想將我們看到的畫面、可能性</h5>
                            <h5 class="sub-title onlyfw200">以最完整的樣貌呈現</h5>
                            <h5></h5>
                            <h5 class="sub-title onlyfw200">我們擅長</h5>
                            <h5 class="sub-title onlyfw200">在有限的空間，發揮無限的想像</h5>
                            <h5 class="sub-title onlyfw200">在浪漫的同時，兼顧坪效與機能</h5>
                            <h5></h5>
                            <h5 class="sub-title onlyfw200">我們認為</h5>
                            <h5 class="sub-title onlyfw200">「空間與設計，應是美與機能並存」</h5>
                        </div>
                    </div>
                </div>
                <!-- about -->

                <div class="row" style="margin-bottom: 60px;">
                    <div class="col-12">
                        <div class="section-title text-center mb-40">
                            <h2 class="title">SELECTED PROJECTS</h2>
                            <h4 class="sub-title fw200 letterspacing">精選作品</h4>
                        </div>
                    </div>
                </div>

                <div class="row portfolio-column-four mb-40">
                    <!-- Portfolio Item -->
                    <div class="col-12 work-div">
                        <div class="portfolio-item">
                            <a href="portfolio-details.html" class="portfolio-image">
                                <img src="assets/images/interior-design.jpeg" class="design-work" alt="">
                            </a>
                            <!-- <div class="portfolio-content">
                                <h4 class="title"><a href="portfolio-details.html">Oil Paint Dog</a></h4>
                                <span class="category"><a href="#">Design</a></span>
                            </div> -->
                            <div style="margin-top: 15px;">
                                <h4 class="text-end h5-color fw200">中和區 R宅 25坪</h4>
                                <h4 class="text-end h5-color fw200">純白 梧桐木 長虹玻璃</h4>
                            </div>
                            <!-- <div class="work-shadow"></div> -->
                        </div>

                        <div class="work-div-shadow"></div>
                    </div>
                </div>
                <div class="row portfolio-column-four mb-40">
                    <!-- Portfolio Item -->
                    <div class="col-12 work-div">
                        <div class="portfolio-item">
                            <a href="portfolio-details.html" class="portfolio-image">
                                <img src="assets/images/interior-design.jpeg" class="design-work" alt="">
                            </a>
                            <!-- <div class="portfolio-content">
                                <h4 class="title"><a href="portfolio-details.html">Oil Paint Dog</a></h4>
                                <span class="category"><a href="#">Design</a></span>
                            </div> -->
                            <div style="margin-top: 15px;">
                                <h4 class="text-end h5-color fw200">中和區 R宅 25坪</h4>
                                <h4 class="text-end h5-color fw200">純白 梧桐木 長虹玻璃</h4>
                            </div>
                            <!-- <div class="work-shadow"></div> -->
                        </div>

                        <div class="work-div-shadow"></div>
                    </div>
                </div>
                <div class="row portfolio-column-four mb-40">
                    <!-- Portfolio Item -->
                    <div class="col-12 work-div">
                        <div class="portfolio-item">
                            <a href="portfolio-details.html" class="portfolio-image">
                                <img src="assets/images/interior-design.jpeg" class="design-work" alt="">
                            </a>
                            <!-- <div class="portfolio-content">
                                <h4 class="title"><a href="portfolio-details.html">Oil Paint Dog</a></h4>
                                <span class="category"><a href="#">Design</a></span>
                            </div> -->
                            <div style="margin-top: 15px;">
                                <h4 class="text-end h5-color fw200">中和區 R宅 25坪</h4>
                                <h4 class="text-end h5-color fw200">純白 梧桐木 長虹玻璃</h4>
                            </div>
                            <!-- <div class="work-shadow"></div> -->
                        </div>

                        <div class="work-div-shadow"></div>
                    </div>
                </div>
                <div class="row portfolio-column-four mb-40">
                    <!-- Portfolio Item -->
                    <div class="col-12 work-div">
                        <div class="portfolio-item">
                            <a href="portfolio-details.html" class="portfolio-image">
                                <img src="assets/images/interior-design.jpeg" class="design-work" alt="">
                            </a>
                            <!-- <div class="portfolio-content">
                                <h4 class="title"><a href="portfolio-details.html">Oil Paint Dog</a></h4>
                                <span class="category"><a href="#">Design</a></span>
                            </div> -->
                            <div style="margin-top: 15px;">
                                <h4 class="text-end h5-color fw200">中和區 R宅 25坪</h4>
                                <h4 class="text-end h5-color fw200">純白 梧桐木 長虹玻璃</h4>
                            </div>
                            <!-- <div class="work-shadow"></div> -->
                        </div>

                        <div class="work-div-shadow"></div>
                    </div>
                </div>
                <div class="row portfolio-column-four mb-40">
                    <!-- Portfolio Item -->
                    <div class="col-12 work-div">
                        <div class="portfolio-item">
                            <a href="portfolio-details.html" class="portfolio-image">
                                <img src="assets/images/interior-design.jpeg" class="design-work" alt="">
                            </a>
                            <!-- <div class="portfolio-content">
                                <h4 class="title"><a href="portfolio-details.html">Oil Paint Dog</a></h4>
                                <span class="category"><a href="#">Design</a></span>
                            </div> -->
                            <div style="margin-top: 15px;">
                                <h4 class="text-end h5-color fw200">中和區 R宅 25坪</h4>
                                <h4 class="text-end h5-color fw200">純白 梧桐木 長虹玻璃</h4>
                            </div>
                            <!-- <div class="work-shadow"></div> -->
                        </div>

                        <div class="work-div-shadow"></div>
                    </div>
                </div>
                <div class="row portfolio-column-four mb-40">
                    <!-- Portfolio Item -->
                    <div class="col-12 work-div">
                        <div class="portfolio-item">
                            <a href="portfolio-details.html" class="portfolio-image">
                                <img src="assets/images/interior-design.jpeg" class="design-work" alt="">
                            </a>
                            <!-- <div class="portfolio-content">
                                <h4 class="title"><a href="portfolio-details.html">Oil Paint Dog</a></h4>
                                <span class="category"><a href="#">Design</a></span>
                            </div> -->
                            <div style="margin-top: 15px;">
                                <h4 class="text-end h5-color fw200">中和區 R宅 25坪</h4>
                                <h4 class="text-end h5-color fw200">純白 梧桐木 長虹玻璃</h4>
                            </div>
                            <!-- <div class="work-shadow"></div> -->
                        </div>

                        <div class="work-div-shadow"></div>
                    </div>
                </div>
                <div class="row portfolio-column-four mb-40">
                    <!-- Portfolio Item -->
                    <div class="col-12 work-div">
                        <div class="portfolio-item">
                            <a href="portfolio-details.html" class="portfolio-image">
                                <img src="assets/images/interior-design.jpeg" class="design-work" alt="">
                            </a>
                            <!-- <div class="portfolio-content">
                                <h4 class="title"><a href="portfolio-details.html">Oil Paint Dog</a></h4>
                                <span class="category"><a href="#">Design</a></span>
                            </div> -->
                            <div style="margin-top: 15px;">
                                <h4 class="text-end h5-color fw200">中和區 R宅 25坪</h4>
                                <h4 class="text-end h5-color fw200">純白 梧桐木 長虹玻璃</h4>
                            </div>
                            <!-- <div class="work-shadow"></div> -->
                        </div>

                        <div class="work-div-shadow"></div>
                    </div>
                </div>
                <div class="row portfolio-column-four mb-40">
                    <!-- Portfolio Item -->
                    <div class="col-12 work-div">
                        <div class="portfolio-item">
                            <a href="portfolio-details.html" class="portfolio-image">
                                <img src="assets/images/interior-design.jpeg" class="design-work" alt="">
                            </a>
                            <!-- <div class="portfolio-content">
                                <h4 class="title"><a href="portfolio-details.html">Oil Paint Dog</a></h4>
                                <span class="category"><a href="#">Design</a></span>
                            </div> -->
                            <div style="margin-top: 15px;">
                                <h4 class="text-end h5-color fw200">中和區 R宅 25坪</h4>
                                <h4 class="text-end h5-color fw200">純白 梧桐木 長虹玻璃</h4>
                            </div>
                            <!-- <div class="work-shadow"></div> -->
                        </div>

                        <div class="work-div-shadow"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Content Body End -->

        <!-- Content Body Start -->
        <div class="bg-grey section service-bg d-flex myWorkFlow" style="flex-direction: column;justify-content: space-evenly;">
            <div class="section-wrap section pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50">
                <div class="container ">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center mb-40">
                                <h2 class="title">WORK FLOW</h2>
                                <h5 class="sub-title fw200 letterspacing">作業流程</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Service Item -->
                        <div class="service-item col-md-4 col-12 mb-40 mb-xs-30">
                            <h4 class="fw600">1</h4>
                            <h4 class="fw200">確認需求</h4>
                            <p class="fw200P">起居環境、特殊偏好、工程預算、日期安排等</p>
                        </div>
                        <!-- Service Item -->
                        <div class="service-item col-md-4 col-12 mb-40 mb-xs-30">
                            <h4 class="fw600">2</h4>
                            <h4 class="fw200">現場丈量</h4>
                            <p class="fw200P">至現場溝通需求，並丈量現場、拍攝現況照、測量方位<br>
                                (丈量酌收3000元，會提供現況圖，可折抵設計費)</p>
                        </div>
                        <!-- Service Item -->
                        <div class="service-item col-md-4 col-12 mb-40 mb-xs-30">
                            <h4 class="fw600">3</h4>
                            <h4 class="fw200">平面規劃</h4>
                            <p class="fw200P">彙整需求，提出多種配置方案，擇一調整定案 <br>(提案費用酌收10000元，會提供平面圖，可折抵設計費)</p>
                        </div>
                        <!-- Service Item -->
                        <div class="service-item col-md-4 col-12 mb-40 mb-xs-30">
                            <h4 class="fw600">4</h4>
                            <h4 class="fw200">設計委任</h4>
                            <p class="fw200P">簽訂設計合約，確認後續深化方向<br>(設計費每坪5000~7000元)</p>
                        </div>
                        <!-- Service Item -->
                        <div class="service-item col-md-4 col-12 mb-40 mb-xs-30">
                            <h4 class="fw600">5</h4>
                            <h4 class="fw200">空間效果</h4>
                            <p class="fw200P">進行3D效果圖，呈現空間配色、燈光氛圍、造型材質等</p>
                        </div>
                        <!-- Service Item -->
                        <div class="service-item col-md-4 col-12 mb-40 mb-xs-30">
                            <h4 class="fw600">6</h4>
                            <h4 class="fw200">細部設計</h4>
                            <p class="fw200P">完善平面系統圖、立面系統圖、詳圖等施工圖說</p>
                        </div>
                        <!-- Service Item -->
                        <div class="service-item col-md-4 col-12 mb-40 mb-xs-30">
                            <h4 class="fw600">7</h4>
                            <h4 class="fw200">工程報價</h4>
                            <p class="fw200P">設計圖面及工程選材用料完成後，提出完整工程報價</p>
                        </div>
                        <!-- Service Item -->
                        <div class="service-item col-md-4 col-12 mb-40 mb-xs-30">
                            <h4 class="fw600">8</h4>
                            <h4 class="fw200">工程委任</h4>
                            <p class="fw200P">簽訂工程合約，確認所需工期與進場時間，進場施工</p>
                        </div>
                        <!-- Service Item -->
                        <div class="service-item col-md-4 col-12 mb-40 mb-xs-30">
                            <h4 class="fw600">9</h4>
                            <h4 class="fw200">完工交屋</h4>
                            <p class="fw200P">驗收，細部調整，交屋</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Content Body End -->

        <?php require_once './tpl/footer.php' ?>
        <!-- Footer Section Start -->
        <!-- <div class="footer-section section position-static pt-30 pb-30 bg-grey">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="footer-copyright text-center col-12">
                        <p>&copy;
                            <script>
                                document.write(new Date().getFullYear() + ' ');
                            </script> KOKAWA. ALL RIGHT RESERVED
                        </p>
                    </div>

                </div>
            </div>
        </div> -->
        <!-- Footer Section End -->
        <!-- Contact -->

    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- Google Map Api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs"></script>
    <!-- Google Map Activation -->
    <script src="assets/js/map.js"></script>

</body>

</html>