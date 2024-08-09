<?

ini_set('display_errors', 'On');
define('Usable', true);

//Define DIRECTORY_SEPARATOR
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

include_once('config.php');

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
$bid = $_GET['brand'];

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
            object-fit: cover !important;
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

        <?php include('./tpl/head.php'); ?>

        <!-- Content Body Start -->
        <div class="section pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50 pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50 bg-grey" style="padding-top: 40vh!important;">
            <div class="container">
                <?
                $sqlstr = "SELECT * FROM `product` where bid={$bid} order by showseries";
                // if ($bid === "0") {
                //     $sqlstr = "SELECT * FROM `product` order by showseries";
                // }
                $sqlary = array();
                $list = $g_db->getAll($sqlstr, $sqlary);
                // 補品牌名稱
                for ($i = 0; $i < sizeof($list); $i++) {
                    $bid = $list[$i]["bid"];
                    $sqlstr = "SELECT brand FROM `brand` where serno={$bid}";
                    $sqlstrchinese = "SELECT brandchinese FROM `brand` where serno={$bid}";

                    $sqlary = array();
                    $sqlarychinese = array();

                    $list[$i]["brand"] = $g_db->getOne($sqlstr, $sqlary);
                    $list[$i]["brandchinese"] = $g_db->getOne($sqlstrchinese, $sqlarychinese);
                }

                for ($i = 0; $i < sizeof($list); $i++) {
                ?>
                    <!-- 頁面tilte -->
                    <div class="row" style="margin-bottom: 60px;">
                        <div class="col-12">
                            <div class="section-title text-center mb-40">
                                <h2 class="title"><?= $list[$i]["brand"]; ?></h2>
                                <h4 class="sub-title fw200 letterspacing"><?= $list[$i]["brandchinese"]; ?></h4>
                            </div>
                        </div>
                    </div>
                <?  }  ?>

                <div class="row portfolio-column-four mb-40">
                    <?
                    $sqlstr = "SELECT * FROM `product` where bid={$bid} order by showseries";
                    $sqlary = array();
                    $list = $g_db->getAll($sqlstr, $sqlary);
                    // 補品牌名稱
                    // for ($i = 0; $i < sizeof($list); $i++) {
                    //     $bid = $list[$i]["bid"];
                    //     $sqlstr = "SELECT brand FROM `brand` where serno={$bid}";
                    //     $list[$i]["brand"] = $g_db->getOne($sqlstr, $sqlary);
                    // }

                    for ($i = 0; $i < sizeof($list); $i++) {
                    ?>
                        <!-- Portfolio Item -->
                        <div class="col-12 work-div">
                            <div class="portfolio-item">
                                <a href="portfolio-details.html" class="portfolio-image">
                                    <img src="assets/images/<?= $list[$i]["iconpic"]; ?>" class="design-work" alt="">
                                </a>
                                <div style="margin-top: 15px;">
                                    <h4 class="text-end h5-color fw200"><?= $list[$i]["name"]; ?></h4>
                                    <h4 class="text-end h5-color fw200"><?= $list[$i]["material"]; ?></h4>
                                </div>
                                <!-- <div class="work-shadow"></div> -->
                            </div>

                            <div class="work-div-shadow"></div>
                        </div>
                    <?  }  ?>


                </div>
            </div>
        </div>
        <!-- Content Body End -->

        <?php ('./tpl/footer.php'); ?>
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