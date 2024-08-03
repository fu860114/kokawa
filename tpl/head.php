<?

ini_set('display_errors', 'On');
define('Usable', true);

//Define DIRECTORY_SEPARATOR
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

include_once('../config.php');

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
$bid = $_GET['bid'];
?>
<!-- Header Section Start -->
<div class="header-section section">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="header-logo col-lg-2 col-6 mt-40 mb-40">
                <a href="index.html">
                    <!-- <img src="assets/images/logo.png" alt=""><img
                                src="assets/images/light-logo.png" class="light-logo" alt=""> -->
                </a>
            </div>

            <!-- Header Menu -->
            <div class="header-menu d-lg-flex justify-content-center col-lg-8 d-none">
                <nav class="main-menu">
                    <ul>
                        <li><a href="#">HOME</a></li>

                        <?
                        $sqlstr = "SELECT * FROM `brand` where bid={$bid} order by showseries";
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
                            <li><a href="./personal-portfolio-collection.php?brand=<?= $list[$i]["id"]; ?>"></a><?= $list[$i]["name"]; ?></li>
                        <?  }  ?>
                        <!-- <li><a href="#">RESIDENTIAL</a></li>
                        <li><a href="#">COMMERCIAL</a></li> -->
                        <li><a href="./contact.html">CONTACT</a></li>
                        <!-- <li class="menu-item-has-children active"><a href="index.html">HOME</a>
                                    <ul class="sub-menu">
                                        <li class="active"><a href="index.html">Home Default</a></li>
                                        <li><a href="home-three-column.html">Home Three Column</a></li>
                                        <li><a href="home-four-column.html">Home Four Column</a></li>
                                        <li><a href="home-five-column.html">Home Five Column</a></li>
                                        <li><a href="home-blog.html">Home Blog</a></li>
                                        <li><a href="personal-portfolio.html">Personal Portfolio</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">ABOUT US</a></li>
                                <li class="menu-item-has-children"><a
                                        href="portfolio-five-column-full-width.html">PORTFOLIO</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="#">Portfolio Grid</a>
                                            <ul class="sub-menu">

                                                <li><a href="portfolio-two-column-box.html">Two Column Box</a></li>
                                                <li><a href="portfolio-three-column-box.html">Three Column Box</a></li>
                                                <li><a href="portfolio-four-column-box.html">Four Column Box</a></li>

                                                <li><a href="portfolio-three-column-full-width.html">Three Column
                                                        Fullwidth</a></li>
                                                <li><a href="portfolio-four-column-full-width.html">Four Column
                                                        Fullwidth</a></li>
                                                <li><a href="portfolio-five-column-full-width.html">Five Column
                                                        Fullwidth</a></li>

                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Portfolio Masonry</a>
                                            <ul class="sub-menu">

                                                <li><a href="portfolio-two-column-masonry-box.html">Two Column Box</a>
                                                </li>
                                                <li><a href="portfolio-three-column-masonry-box.html">Three Column
                                                        Box</a></li>
                                                <li><a href="portfolio-four-column-masonry-box.html">Four Column Box</a>
                                                </li>

                                                <li><a href="portfolio-three-column-masonry-full-width.html">Three
                                                        Column Fullwidth</a></li>
                                                <li><a href="portfolio-four-column-masonry-full-width.html">Four Column
                                                        Fullwidth</a></li>
                                                <li><a href="portfolio-five-column-masonry-full-width.html">Five Column
                                                        Fullwidth</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="portfolio-details.html">Single Portfolio</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">PAGES</a>
                                    <ul class="sub-menu">
                                        <li><a href="service.html">service</a></li>
                                        <li><a href="team.html">team</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="blog-three-column.html">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-three-column.html">Blog Three Column</a></li>
                                        <li><a href="blog-two-column-left-sidebar.html">Blog two Column Left Sidebar</a>
                                        </li>
                                        <li><a href="blog-two-column-right-sidebar.html">Blog two Column Right
                                                Sidebar</a></li>
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                        <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li> -->
                    </ul>
                </nav>
            </div>

            <!-- Header Socail -->
            <div class="header-social d-flex align-items-center justify-content-end col-lg-2 col-6">
                <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a> -->
                <button class="side-header-toggle d-block d-lg-none   ml-20"><span></span></button>
            </div>
        </div>
    </div>
</div>
<!-- Header Section End -->

<!-- Side Header Overlay Start -->
<div class="side-menu-overlay"></div>
<!-- Side Header Overlay End -->

<!-- Side Header Start -->
<div class="side-header custom-scroll mobile-side-header">
    <!-- Side Header Inner Start -->
    <div class="side-header-inner">
        <button class="side-header-close d-block d-lg-none"><span></span></button>
        <!-- Side Header Logo Start -->
        <div class="side-header-logo pt-120 pt-lg-80 pt-md-80 pt-sm-80 pt-xs-50" style="padding-right: 15px;">
            <a href="#"><img src="assets/images/kokawa-LOGO2.png" alt=""><img src="assets/images/kokawa-LOGO2.png" class="light-logo" alt=""></a>
        </div>
        <!-- Side Header Logo End -->

        <!-- Side Header Logo Start -->
        <div class="side-header-menu">
            <nav id="side-menu" class="side-menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">RESIDENTIAL</a></li>
                    <li><a href="#">COMMERCIAL</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <!-- <li class="menu-item-has-children active"><a href="index.html">HOME</a>
                                <ul class="side-sub-menu">
                                    <li class="active"><a href="index.html">Home Default</a></li>
                                    <li><a href="home-three-column.html">Home Three Column</a></li>
                                    <li><a href="home-four-column.html">Home Four Column</a></li>
                                    <li><a href="home-five-column.html">Home Five Column</a></li>
                                    <li><a href="home-blog.html">Home Blog</a></li>
                                    <li><a href="personal-portfolio.html">Personal Portfolio</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">ABOUT US</a></li>
                            <li class="menu-item-has-children"><a
                                    href="portfolio-five-column-full-width.html">PORTFOLIO</a>
                                <ul class="side-sub-menu">
                                    <li class="menu-item-has-children"><a href="#">Portfolio Grid</a>
                                        <ul class="side-sub-menu">

                                            <li><a href="portfolio-two-column-box.html">Two Column Box</a></li>
                                            <li><a href="portfolio-three-column-box.html">Three Column Box</a></li>
                                            <li><a href="portfolio-four-column-box.html">Four Column Box</a></li>

                                            <li><a href="portfolio-three-column-full-width.html">Three Column
                                                    Fullwidth</a></li>
                                            <li><a href="portfolio-four-column-full-width.html">Four Column
                                                    Fullwidth</a></li>
                                            <li><a href="portfolio-five-column-full-width.html">Five Column
                                                    Fullwidth</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Portfolio Masonry</a>
                                        <ul class="side-sub-menu">

                                            <li><a href="portfolio-two-column-masonry-box.html">Two Column Box</a></li>
                                            <li><a href="portfolio-three-column-masonry-box.html">Three Column Box</a>
                                            </li>
                                            <li><a href="portfolio-four-column-masonry-box.html">Four Column Box</a>
                                            </li>

                                            <li><a href="portfolio-three-column-masonry-full-width.html">Three Column
                                                    Fullwidth</a></li>
                                            <li><a href="portfolio-four-column-masonry-full-width.html">Four Column
                                                    Fullwidth</a></li>
                                            <li><a href="portfolio-five-column-masonry-full-width.html">Five Column
                                                    Fullwidth</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="portfolio-details.html">Single Portfolio</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">PAGES</a>
                                <ul class="side-sub-menu">
                                    <li><a href="service.html">service</a></li>
                                    <li><a href="team.html">team</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="blog-three-column.html">BLOG</a>
                                <ul class="side-sub-menu">
                                    <li><a href="blog-three-column.html">Blog Three Column</a></li>
                                    <li><a href="blog-two-column-left-sidebar.html">Blog two Column Left Sidebar</a>
                                    </li>
                                    <li><a href="blog-two-column-right-sidebar.html">Blog two Column Right Sidebar</a>
                                    </li>
                                    <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                    <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">CONTACT</a></li> -->
                </ul>
            </nav>
        </div>
        <!-- Side Header Menu End -->

        <!-- Side Header Logo Start -->
        <div class="side-header-footer pb-120 pb-lg-80 pb-md-80 pb-sm-80 pb-xs-50">

            <!-- Side Header Contact Information -->
            <div class="side-header-contact-info">
                <p><a href="#">0988500189</a></p>
                <p><a href="#">kokawadesign@gmail.com</a></p>
            </div>

            <!-- Side Header Social -->
            <!-- <div class="side-header-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div> -->

            <!-- Side Header Copyright -->
            <!-- <div class="side-header-copyright">
                        <p>&copy;
                            <script>
                                document.write(new Date().getFullYear() + ' ');
                            </script> MINIMAU. ALL RIGHT RESERVED
                        </p>
                    </div> -->

        </div>
        <!-- Side Header Footer End -->

    </div>
    <!-- Side Header Inner End -->

</div>
<!-- Side Header End -->