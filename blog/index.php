<!DOCTYPE html>
<html lang="en">

<head>
    <title>کافه کامنت</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="assets/img/icon/fabicon.png">

    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="assets/css/plugins/modal-video.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/stellarnav.css">
    <link rel="stylesheet" href="assets/css/theme.css">
</head>

<body class="theme-3 theme3_bg">

    <div class="preloader">
        <div>
            <div class="nb-spinner"></div>
        </div>
    </div>


    <div class="topbar white_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 align-self-center">
                    <div class="trancarousel_area">
                        <p class="trand">پرطرفدار </p>
                        <div class="trancarousel owl-carousel nav_style1">
                            <div class="trancarousel_item">
                                <p><a href="#">10 فیلم برتر برتر 1399 تاکنون: فیلم های عالی تماشا کنید</a>
                                </p>
                            </div>
                            <div class="trancarousel_item">
                                <p><a href="#">10 فیلم برتر برتر 1399 تاکنون: فیلم های عالی تماشا کنید</a>
                                </p>
                            </div>
                            <div class="trancarousel_item">
                                <p><a href="#">10 فیلم برتر برتر 1399 تاکنون: فیلم های عالی تماشا کنید</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 align-self-center">
                    <div class="top_date_social text-right">
                        <div class="social1">
                            <ul class="inline">
                                <li><a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="user3"> <i class="fal fa-user-circle"></i>
                        </div>
                        <div class="lang-3"> <a href="#">فارسی <i class="fal fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border_black"></div>

    <div class="logo_area white_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 align-self-center">
                    <div class="logo">
                        <a href="/">
                            <img src="assets/img/logo/logo.png" alt="logo" class="w-50 m-2">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="signup_form header_search3">
                        <form action="https://quomodosoft.com/html/newsprk/theme-3/index.html">
                            <input class="signup" type="email" placeholder="ایمیل یا شماره تلفن خود را وارد کنید!">
                            <input type="button" class="cbtn" value="ثبت نام">
                        </form>
                    </div>
                </div>
                <!-- <div class="col-lg-2 align-self-center offset-lg-1">
                    <div class="temp d-none d-lg-block">
                        <div class="temp_wap">
                            <div class="temp_icon">
                                <img src="assets/img/icon/temp.png" alt="">
                            </div>
                            <h3 class="temp_count">13</h3>
                            <p>سان فرانسیسکو </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>


    <div class="container">
        <div class="main-menu">
            <div class="main-nav clearfix is-ts-sticky">
                <div class="row justify-content-between">
                    <div class="col-4 col-lg-9 align-self-center">
                        <div class="newsprk_nav stellarnav">
                            <ul id="newsprk_menu">
                                <li class="active"><a href="business.html">شرکتی </a>
                                </li>
                                <li><a href="entertainment.html">سرگرمی </a>
                                </li>
                                <li><a href="feature.html">ویژگی ها </a>
                                </li>
                                <li><a href="sports.html">ورزشی </a>
                                </li>
                                <li><a href="trending.html">پرطرفدار </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8 col-lg-3 text-right align-self-center">
                        <div class="date3">
                            <p>دوشنبه, 1400/1/1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="total3 mb30">
        <div class="space-30"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="business3 padding20 white_bg border-radious5">
                        <?php
                        include "./db/index.php";
                        $items = SelectNLastRecordsNewPostArticlesPosts(7);
                while ($row = $items->fetch_assoc()) {
                    echo '<div class="single_post post_type12 type20">
                    <div class="post_img border-radious5">
                        <div class="img_wrap">
                            <a href="#">
                                <img src="/blog' . $row["image"] . '" alt="">
                            </a>
                        </div> <span class="tranding border_tranding">
                            <i class="fas fa-bolt"></i>
                        </span>
                    </div>
                    <div class="single_post_text">
                        <h4><a href="post1.html">' . $row["title"] . '</a></h4>
                        <div class="row">
                            <div class="col-6 align-self-center">
                                <div class="meta_col">
                                    <p>فروردین 1400</p>
                                </div>
                            </div>
                            <div class="col-6 text-right align-self-center">
                                <ul class="meta_share inline">
                                    <li><a href="#"><i class="far fa-bookmark"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-share"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="post-p">' . $row["short_description"] . '</p>
                        <div class="space-10"></div> <a href="#" class="readmore3">ادامه مطلب <img src="assets/img/icon/arrow3.png" alt=""></a>
                    </div>
                </div>';
                }
                        ?>
                        <h4 class="widget-title">آخرین کامنت ها </h4>
                         <a href="#" class="showmore">نمایش بیشتر</a>
                    </div>
                    <div class="white_bg tranding3 padding20 border-radious5 mb30">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading">
                                    <h2 class="widget-title">اخبار پرطرفدار </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single_post post_type3 xs-mb90 post_type15">
                                    <div class="post_img border-radious5">
                                        <a href="#">
                                            <img src="assets/img/trending/trend22.jpg" alt="">
                                        </a> <span class="tranding border_tranding">
                                            <i class="fas fa-bolt"></i>
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                                        <div class="space-20"></div>
                                        <div class="meta3"> <a href="#">تکنولوژی </a>
                                            <a href="#">فروردین 1400</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="popular_carousel owl-carousel nav_style1">

                                    <div class="popular_items mt0">
                                        <div class="single_post type10 type16 widgets_small mb15">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/trending/transm23.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post type10 type16 widgets_small mb15">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/trending/transm24.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post type10 type16 widgets_small mb15">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/trending/transm25.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post type10 type16 widgets_small mb15">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/trending/transm26.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post type10 type16 widgets_small">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/trending/transm27.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popular_items">
                                        <div class="single_post type10 type16 widgets_small mb15">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/trending/transm23.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post type10 type16 widgets_small mb15">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/trending/transm24.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post type10 type16 widgets_small mb15">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/trending/transm25.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post type10 type16 widgets_small mb15">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/trending/transm26.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post type10 type16 widgets_small">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/trending/transm27.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="feature3 mb30">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading padding20 white_bg mb20 border-radious5">
                                    <h3 class="widget-title margin0">ویژگی ها </h3>
                                </div>
                            </div>
                        </div>
                        <div class="feature3_carousel owl-carousel nav_style1">
                            <div class="single_post type19 border-radious5 white_bg">
                                <div class="post_img">
                                    <div class="img_wrap">
                                        <a href="#">
                                            <img src="assets/img/feature/feature21.jpg" alt="">
                                        </a>
                                    </div> <span class="batch3 date">
                                        پربازدید
                                    </span>
                                </div>
                                <div class="single_post_text padding20">
                                    <p class="post-p">پزشکان نگران پس از دور زدن کنار هم ایستادند و خطرات را ارزیابی کردند.</p>
                                </div>
                            </div>
                            <div class="single_post type19  border-radious5 white_bg">
                                <div class="post_img">
                                    <div class="img_wrap">
                                        <a href="#">
                                            <img src="assets/img/feature/feature22.jpg" alt="">
                                        </a>
                                    </div> <span class="batch3 date">
                                        پربازدید
                                    </span>
                                </div>
                                <div class="single_post_text padding20">
                                    <p class="post-p">پزشکان نگران پس از دور زدن کنار هم ایستادند و خطرات را ارزیابی کردند.</p>
                                </div>
                            </div>
                            <div class="single_post type19 border-radious5 white_bg">
                                <div class="post_img">
                                    <div class="img_wrap">
                                        <a href="#">
                                            <img src="assets/img/feature/feature23.jpg" alt="">
                                        </a>
                                    </div> <span class="batch3 date">
                                        پربازدید
                                    </span>
                                </div>
                                <div class="single_post_text padding20">
                                    <p class="post-p">حتی زنان باردار سالم نیز مضطرب هستند. "آنها خوشبختی نیستند..</p>
                                </div>
                            </div>
                            <div class="single_post type19 border-radious5 white_bg">
                                <div class="post_img">
                                    <div class="img_wrap">
                                        <a href="#">
                                            <img src="assets/img/feature/feature23.jpg" alt="">
                                        </a>
                                    </div> <span class="batch3 date">
                                        پربازدید
                                    </span>
                                </div>
                                <div class="single_post_text padding20">
                                    <p class="post-p">پرونده خانم اندرسون به ویژه آزار دهنده بوده است. او بیمار بود.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-12">
                            <div class="most_widget3 padding20 white_bg border-radious5 mb30 sm-mt30">
                                <div class="heading">
                                    <h2 class="widget-title">بازدید اخیر </h2>
                                </div>
                                <div class="post_type2_carousel owl-carousel nav_style1">

                                    <div class="single_post2_carousel">
                                        <div class="single_post widgets_small type8 type17">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/blog/blog_small4.jpg" alt="">
                                                    </a>
                                                </div> <span class="tranding tranding_border">
                                                    1
                                                </span>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                                    <a href="#">فروردین 1400</a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post widgets_small type8 type17">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/blog/blog_small1.jpg" alt="">
                                                    </a>
                                                </div> <span class="tranding tranding_border">
                                                    2
                                                </span>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">نیکوکار میلیاردر برای یادگیری مطالعه کرد</a></h4>
                                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                                    <a href="#">فروردین 1400</a>
                                                </div>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                        <div class="single_post widgets_small type8 type17">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/blog/blog_small5.jpg" alt="">
                                                    </a>
                                                </div> <span class="tranding tranding_border">
                                                    3
                                                </span>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">حسگر تلفن هوشمند ارزان می تواند به شما کمک کند</a></h4>
                                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                                    <a href="#">فروردین 1400</a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post widgets_small type8 type17">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/blog/blog_small4.jpg" alt="">
                                                    </a>
                                                </div> <span class="tranding tranding_border">
                                                    4
                                                </span>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">دارایی کلاس از منچستر یونایتد استفاده می کند</a></h4>
                                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                                    <a href="#">فروردین 1400</a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post widgets_small type8 type17">
                                            <div class="post_img">
                                                <div class="img_wrap">
                                                    <a href="#">
                                                        <img src="assets/img/blog/blog_small2.jpg" alt="">
                                                    </a>
                                                </div> <span class="tranding tranding_border">
                                                    5
                                                </span>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">بهترین لوازم بال باغ برای هارتیکال را به خوبی بدانید</a></h4>
                                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                                    <a href="#">فروردین 1400</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_post2_carousel">
                                        <div class="single_post widgets_small type8 type17">
                                            <div class="post_img">
                                                <a href="#">
                                                    <img src="assets/img/blog/blog_small4.jpg" alt="">
                                                </a> <span class="tranding tranding_border">
                                                    1
                                                </span>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                                    <a href="#">فروردین 1400</a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post widgets_small type8 type17">
                                            <div class="post_img">
                                                <a href="#">
                                                    <img src="assets/img/blog/blog_small2.jpg" alt="">
                                                </a> <span class="tranding tranding_border">
                                                    2
                                                </span>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">نیکوکار میلیاردر برای یادگیری مطالعه کرد</a></h4>
                                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                                    <a href="#">فروردین 1400</a>
                                                </div>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                        <div class="single_post widgets_small type8 type17">
                                            <div class="post_img">
                                                <a href="#">
                                                    <img src="assets/img/blog/blog_small3.jpg" alt="">
                                                </a> <span class="tranding tranding_border">
                                                    3
                                                </span>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">حسگر تلفن هوشمند ارزان می تواند به شما کمک کند</a></h4>
                                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                                    <a href="#">فروردین 1400</a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post widgets_small type8 type17">
                                            <div class="post_img">
                                                <a href="#">
                                                    <img src="assets/img/blog/blog_small4.jpg" alt="">
                                                </a> <span class="tranding tranding_border">
                                                    4
                                                </span>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">دارایی کلاس از منچستر یونایتد استفاده می کند</a></h4>
                                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                                    <a href="#">فروردین 1400</a>
                                                </div>
                                                <div class="space-5"></div>
                                                <div class="border_black"></div>
                                                <div class="space-15"></div>
                                            </div>
                                        </div>
                                        <div class="single_post widgets_small type8 type17">
                                            <div class="post_img">
                                                <a href="#">
                                                    <img src="assets/img/blog/blog_small5.jpg" alt="">
                                                </a> <span class="tranding tranding_border">
                                                    5
                                                </span>
                                            </div>
                                            <div class="single_post_text">
                                                <h4><a href="post1.html">بهترین لوازم بال باغ برای هارتیکال را به خوبی بدانید</a></h4>
                                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                                    <a href="#">فروردین 1400</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 d-md-none d-lg-block">
                            <div class="banner2 mb30 border-radious5">
                                <a href="#">
                                    <img src="assets/img/add/add21.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="finance mb30 white_bg border-radious5 padding20 sm-mt30">
                                <div class="heading">
                                    <h3 class="widget-title">مالی </h3>
                                </div>
                                <div class="single_post mb30 type18 d-md-none d-lg-block">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/finance/finance21.jpg" alt="">
                                            </a>
                                        </div> <span class="batch3 date">
                                            فروردین 1400
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                                        <ul class="mt20 like_cm">
                                            <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single_post mb30 type18 d-md-none d-lg-block">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/finance/finance22.jpg" alt="">
                                            </a>
                                        </div> <span class="batch3 date">
                                            فروردین 1400
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                                        <ul class="mt20 like_cm">
                                            <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single_post mb30 type18 d-md-none d-lg-block">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/finance/finance23.jpg" alt="">
                                            </a>
                                        </div> <span class="batch3 date">
                                            فروردین 1400
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                                        <ul class="mt20 like_cm">
                                            <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single_post type18 mb30">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/finance/finance24.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">موفقیت ویروس ژاپن متحیر کننده شانس جهانی است؟</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">این ملک کامل با غربالگری صندلی ها از حوضچه آمفی تئاتر اتاق است</p>
                                        <ul class="mt20 like_cm">
                                            <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> <a href="#" class="showmore">نمایش بیشتر</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="post_gallary_area theme3_bg mb40 padding-top-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-6">
                    <div class="single_post post_type6 border-radious7 xs-mb30">
                        <div class="post_img gradient1">
                            <div class="img_wrap">
                                <a href="#">
                                    <img src="assets/img/header/sider-top3.jpg" alt="">
                                </a>
                            </div>
                            <span class="tranding">
                                <i class="fas fa-play"></i>
                            </span>
                        </div>
                        <div class="single_post_text">
                            <h4><a href="video_post1.html">موفقیت ویروس ژاپن جهان را متحیر کرده است. آیا شانس آن تمام می شود؟</a></h4>
                            <div class="space-5"></div>
                            <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                            <div class="space-20"></div>
                            <div class="meta meta_separator1"> <a href="#">تکنولوژی </a>
                                <a href="#">فروردین 1400</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-block col-xl-3">
                    <div class="white_bg padding15 border-radious5 sm-mt30">
                        <div class="single_post type14 widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <a href="#">
                                        <img src="assets/img/header/widget/col21.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                </div>
                                <div class="space-5"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                            </div>
                        </div>
                        <div class="single_post type14 widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <a href="#">
                                        <img src="assets/img/header/widget/col22.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">آتش نشان می دهد که شما را بهبود می بخشد…</a></h4>
                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                </div>
                                <div class="space-5"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                            </div>
                        </div>
                        <div class="single_post type14 widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <a href="#">
                                        <img src="assets/img/header/widget/col23.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">علامت صندوق اعتباری از پایین تا 15.</a></h4>
                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                </div>
                                <div class="space-5"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                            </div>
                        </div>
                        <div class="single_post type14 widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <a href="#">
                                        <img src="assets/img/header/widget/col24.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">دنی میر آخرین رستوران ها را تشکیل می دهد…</a></h4>
                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                </div>
                                <div class="space-5"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                            </div>
                        </div>
                        <div class="single_post type14 widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <a href="#">
                                        <img src="assets/img/header/widget/col25.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">دنی میر آخرین رستوران ها را تشکیل می دهد…</a></h4>
                                <div class="meta4"> <a href="#">تکنولوژی </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-4 col-xl-3">
                    <div class="single_post post_type3 post_type15 mb30 border-radious5 sm-mt30">
                        <div class="post_img">
                            <div class="img_wrap">
                                <a href="#">
                                    <img src="assets/img/header/widget/col26.jpg" alt="">
                                </a>
                            </div> <span class="tranding border_tranding">
                                <i class="fas fa-bolt"></i>
                            </span>
                        </div>
                        <div class="single_post_text white_bg padding20">
                            <h4><a href="post1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</a></h4>
                            <div class="space-10"></div>
                            <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                            <div class="space-20"></div>
                            <div class="meta3"> <a href="#">تکنولوژی </a>
                                <a href="#">فروردین 1400</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mb30">
        <div class="container">
            <div class="video_posts padding20 white_bg border-radious5">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <h2 class="widget-title">ویدئو های اخیر </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="single_post post_type3 post_type11 post_type21 xs-mb30">
                            <div class="post_img border-radious7">
                                <div class="img_wrap">
                                    <a href="#" class="play_btn">
                                        <img src="assets/img/video/video21.jpg" alt="">
                                    </a>
                                </div> <a href="#" class="youtube_middle"><i class="fab fa-youtube"></i></a>
                                <div class="sport_meta_ab inline">
                                    <ul>
                                        <li>ورزشی </li>
                                        <li>فروردین 1400</li>
                                        <li>8:00 صبح</li>
                                    </ul>
                                </div>
                                <div class="social_share">
                                    <ul class="meta_share inline">
                                        <li><a href="#"><i class="far fa-bookmark"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fas fa-share"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">محتوای دیجیتالی ICC مر کریکت باز ایران اعداد رکوردشکن را ارائه می دهد</a></h4>
                                <div class="space-10"></div>
                                <ul class=" like_cm">
                                    <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                    </li>
                                    <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="space-lg-30"></div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="single_post type14 type22 widgets_small sm-mt30">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <div class="img_wrap">
                                        <a href="#" class="play_btn">
                                            <img src="assets/img/video/video22.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">این ملک با یک اتاق 30 صفحه نمایش کامل است.</a></h4>
                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                    <a href="#">فروردین 1400</a>
                                </div>
                                <div class="space-5"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                            </div>
                        </div>
                        <div class="single_post type14 type22 widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <div class="img_wrap">
                                        <a href="#" class="play_btn">
                                            <img src="assets/img/video/video23.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">این ملک با یک اتاق 30 صفحه نمایش کامل است.</a></h4>
                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                    <a href="#">فروردین 1400</a>
                                </div>
                                <div class="space-5"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                            </div>
                        </div>
                        <div class="single_post type14 type22 widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <div class="img_wrap">
                                        <a href="#" class="play_btn">
                                            <img src="assets/img/video/video24.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">این ملک با یک اتاق 30 صفحه نمایش کامل است.</a></h4>
                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                    <a href="#">فروردین 1400</a>
                                </div>
                                <div class="space-5"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                            </div>
                        </div>
                        <div class="single_post type14 type22 widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <div class="img_wrap">
                                        <a href="#" class="play_btn">
                                            <img src="assets/img/video/video25.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">این ملک با یک اتاق 30 صفحه نمایش کامل است.</a></h4>
                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                    <a href="#">فروردین 1400</a>
                                </div>
                                <div class="space-5"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                            </div>
                        </div>
                        <div class="single_post type14 type22 widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <div class="img_wrap">
                                        <a href="#" class="play_btn">
                                            <img src="assets/img/video/video26.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">این ملک با یک اتاق 30 صفحه نمایش کامل است.</a></h4>
                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                    <a href="#">فروردین 1400</a>
                                </div>
                                <div class="space-5"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                            </div>
                        </div>
                        <div class="single_post type14 type22 widgets_small">
                            <div class="post_img">
                                <div class="img_wrap">
                                    <div class="img_wrap">
                                        <a href="#" class="play_btn">
                                            <img src="assets/img/video/video27.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">این ملک با یک اتاق 30 صفحه نمایش کامل است.</a></h4>
                                <div class="meta2"> <a href="#">تکنولوژی </a>
                                    <a href="#">فروردین 1400</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mix3 mb30">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="widget_tab tab3 border-radious5 margin_lg_top_0">
                        <ul class="nav nav-tabs white_bg">
                            <li><a class="active" data-toggle="tab" href="#post1">اخیر </a>
                            </li>
                            <li><a data-toggle="tab" href="#post2">پربازدید </a>
                            </li>
                            <li><a data-toggle="tab" href="#post3">محبوب </a>
                            </li>
                        </ul>
                        <div class="tab-content  padding15 white_bg">
                            <div id="post1" class="tab-pane fade show in active">
                                <div class="widget tab_widgets">
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab21.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab23.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab25.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab26.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="post2" class="tab-pane fade">
                                <div class="widget tab_widgets">
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab21.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab23.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab25.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab26.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="post3" class="tab-pane fade">
                                <div class="widget tab_widgets">
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab21.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab23.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab25.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                            <div class="space-5"></div>
                                            <div class="border_black"></div>
                                            <div class="space-15"></div>
                                        </div>
                                    </div>
                                    <div class="single_post widgets_small type8 type17">
                                        <div class="post_img">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/tab/tab26.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_post_text">
                                            <h4><a href="post1.html">شهری با بالاترین کیفیت زندگی در جهان.</a></h4>
                                            <div class="meta4"> <a href="#">تکنولوژی </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-5 d-lg-none d-xl-block">
                    <div class="opinion white_bg padding20 border-radious5">
                        <h3 class="widget-title">نظر </h3>
                        <div class="single_post post_type3 post_type15">
                            <div class="post_img border-radious5">
                                <a href="#">
                                    <img src="assets/img/tab/tab21.jpg" alt="">
                                </a>
                            </div>
                            <div class="single_post_text">
                                <h4><a href="post1.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</a></h4>
                                <div class="space-10"></div>
                                <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                                <div class="space-20"></div>
                                <div class="meta3"> <a href="#">تکنولوژی </a>
                                    <a href="#">فروردین 1400</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="white_bg padding20 border-radious5 sm-mt30">
                        <h3 class="widget-title">چه خبر </h3>
                        <div class="popular_carousel owl-carousel nav_style1">

                            <div class="popular_items">
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/whats/whats21.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="meta4"> <a href="#">تکنولوژی </a>
                                        </div>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/whats/whats22.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="meta4"> <a href="#">تکنولوژی </a>
                                        </div>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/whats/whats23.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="meta4"> <a href="#">تکنولوژی </a>
                                        </div>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/whats/whats24.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="meta4"> <a href="#">تکنولوژی </a>
                                        </div>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/whats/whats25.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="meta4"> <a href="#">تکنولوژی </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="popular_items">
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/whats/whats21.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="meta4"> <a href="#">تکنولوژی </a>
                                        </div>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/whats/whats22.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="meta4"> <a href="#">تکنولوژی </a>
                                        </div>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/whats/whats23.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="meta4"> <a href="#">تکنولوژی </a>
                                        </div>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/whats/whats24.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="meta4"> <a href="#">تکنولوژی </a>
                                        </div>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/whats/whats25.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="meta4"> <a href="#">تکنولوژی </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mix_elements">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-12">
                    <div class="banner_area mb30 xs-mt60">
                        <a href="#">
                            <img src="assets/img/bg/banner1.png" alt="">
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box widget news_letter mb30 white_bg border-radious5">
                                <h2 class="widget-title">نامه خبری </h2>
                                <p>آدرس ایمیل شما منتشر نخواهد شد زمینه های مورد نیاز ضروری است.</p>
                                <div class="space-20"></div>
                                <div class="signup_form">
                                    <form action="https://quomodosoft.com/html/newsprk/theme-3/index.html">
                                        <input class="signup" type="email" placeholder="آدرس ایمیل شما">
                                        <input type="button" class="cbtn" value="ثبت نام">
                                    </form>
                                    <div class="space-10"></div>
                                    <p>ما از هرزنامه متنفریم همانطور که شما هستید</p>
                                </div>
                            </div>
                            <div class="sport_side3 white_bg padding20 border-radious5">
                                <h3 class="widget-title">ورزشی </h3>
                                <div class="single_post mb30 type18">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/sports/sports21.jpg" alt="">
                                            </a>
                                        </div> <span class="batch3 date">
                                            فروردین 1400
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                                        <ul class="mt20 like_cm">
                                            <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/sports/sports22.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <p class="meta meta2">تکنولوژی </p>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/sports/sports23.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <p class="meta meta2">تکنولوژی </p>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/sports/sports24.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <p class="meta meta2">تکنولوژی </p>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small mb15">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/sports/sports25.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <p class="meta meta2">تکنولوژی </p>
                                        <div class="space-5"></div>
                                        <div class="border_black"></div>
                                        <div class="space-15"></div>
                                    </div>
                                </div>
                                <div class="single_post type10 type16 widgets_small">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/sports/sports26.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <p class="meta meta2">تکنولوژی </p>
                                    </div>
                                </div>
                                <div class="space-20"></div> <a href="#" class="showmore">نمایش بیشتر</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="most_view3 white_bg padding20 border-radiuos5">
                                <h3 class="widget-title">بیشترین بازدید </h3>
                                <div class="single_post type18">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/most_view/most26.jpg" alt="">
                                            </a>
                                        </div> <span class="batch3 date">
                                            فروردین 1400
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                                        <div class="view_author_details">
                                            <div class="space-10"></div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="view_author align-self-center"> <i class="fal fa-user-circle"></i>
                                                        <a href="#">سافت نیوز</a>
                                                    </div>
                                                </div>
                                                <div class="col-6 text-right align-self-center">
                                                    <p>فروردین 1400</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-20"></div>
                                <div class="border_black"></div>
                                <div class="space-20"></div>
                                <div class="single_post type18">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/most_view/most27.jpg" alt="">
                                            </a>
                                        </div> <span class="batch3 date">
                                            فروردین 1400
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                                        <div class="view_author_details">
                                            <div class="space-10"></div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="view_author align-self-center"> <i class="fal fa-user-circle"></i>
                                                        <a href="#">سافت نیوز</a>
                                                    </div>
                                                </div>
                                                <div class="col-6 text-right align-self-center">
                                                    <p>فروردین 1400</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-20"></div>
                                <div class="border_black"></div>
                                <div class="space-20"></div>
                                <div class="single_post type18 mb30">
                                    <div class="post_img">
                                        <div class="img_wrap">
                                            <a href="#">
                                                <img src="assets/img/most_view/most28.jpg" alt="">
                                            </a>
                                        </div> <span class="batch3 date">
                                            فروردین 1400
                                        </span>
                                    </div>
                                    <div class="single_post_text">
                                        <h4><a href="post1.html">کوپا آمریکا: لوئیز سوارز از ایالات متحده ویران شده</a></h4>
                                        <div class="space-10"></div>
                                        <p class="post-p">این ملک ، با نمایش 30 صندلی از اتاق ، آمفی تئاتر 100 نفری و استخر شنا با دوش شنی کامل است.…</p>
                                        <div class="view_author_details">
                                            <div class="space-10"></div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="view_author align-self-center"> <i class="fal fa-user-circle"></i>
                                                        <a href="#">سافت نیوز</a>
                                                    </div>
                                                </div>
                                                <div class="col-6 text-right align-self-center">
                                                    <p>فروردین 1400</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <a href="#" class="showmore">نمایش بیشتر</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-md-none d-xl-block col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <div class="follow_box widget mb30 border-radious5 white_bg padding20 sm-mt30">
                                <h2 class="widget-title">تماس با ما</h2>
                                <div class="social_shares">
                                    <a class="single_social social_facebook" href="#"> <span class="follow_icon"><i class="fab fa-facebook-f"></i></span>
                                        34,456 <span class="icon_text">هوادار </span>
                                    </a>
                                    <a class="single_social social_twitter" href="#"> <span class="follow_icon"><i class="fab fa-twitter"></i></span>
                                        34,456 <span class="icon_text">فالوور </span>
                                    </a>
                                    <a class="single_social social_youtube" href="#"> <span class="follow_icon"><i class="fab fa-youtube"></i></span>
                                        34,456 <span class="icon_text">مشترک </span>
                                    </a>
                                    <a class="single_social social_instagram" href="#"> <span class="follow_icon"><i class="fab fa-instagram"></i></span>
                                        34,456 <span class="icon_text">فالوور </span>
                                    </a>
                                    <a class="single_social social_vimeo" href="#"> <span class="follow_icon"><i class="fab fa-vimeo-v"></i></span>
                                        34,456 <span class="icon_text">فالوور </span>
                                    </a>
                                    <a class="single_social social_medium" href="#"> <span class="follow_icon"><i class="fab fa-medium-m"></i></span>
                                        34,456 <span class="icon_text">فالوور </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="international_news white_bg padding20 border-radious5 sm-mt30">
                                <h3 class="widget-title">خارجی </h3>
                                <div class="single_international">
                                    <p class="meta before">تکنولوژی </p>
                                    <h4><a href="post1.html">چرا سلامت معنوی پزشک در بحران covid-19 اهمیت دارد: شما نمی توانید از یک فنجان خالی بریزید…</a></h4>
                                    <div class="space-10"></div>
                                    <div class="view_author"> <i class="fal fa-user-circle"></i>
                                        <a href="#">سافت نیوز</a>
                                    </div>
                                    <div class="space-5"></div>
                                    <div class="row">
                                        <div class="col-8 align-self-center">
                                            <p>این ملک ، با غربالگری صندلی از اتاق ، آمفی تئاتر 100 نفری و یک استخر شنا با شن و ماسه کامل است</p>
                                        </div>
                                        <div class="col-4 align-self-center">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/most_view/most21.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="mt20 like_cm">
                                        <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                        </li>
                                        <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                        </li>
                                        <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="space-15"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                                <div class="single_international">
                                    <p class="meta before">تکنولوژی </p>
                                    <h4><a href="post1.html">چرا سلامت معنوی پزشک در بحران covid-19 اهمیت دارد: شما نمی توانید از یک فنجان خالی بریزید…</a></h4>
                                    <div class="space-10"></div>
                                    <div class="view_author"> <i class="fal fa-user-circle"></i>
                                        <a href="#">سافت نیوز</a>
                                    </div>
                                    <div class="space-5"></div>
                                    <div class="row">
                                        <div class="col-8 align-self-center">
                                            <p>این ملک ، با غربالگری صندلی از اتاق ، آمفی تئاتر 100 نفری و یک استخر شنا با شن و ماسه کامل است</p>
                                        </div>
                                        <div class="col-4 align-self-center">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/most_view/most22.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="mt20 like_cm">
                                        <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                        </li>
                                        <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                        </li>
                                        <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="space-15"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                                <div class="single_international">
                                    <p class="meta before">تکنولوژی </p>
                                    <h4><a href="post1.html">چرا سلامت معنوی پزشک در بحران covid-19 اهمیت دارد: شما نمی توانید از یک فنجان خالی بریزید…</a></h4>
                                    <div class="space-10"></div>
                                    <div class="view_author"> <i class="fal fa-user-circle"></i>
                                        <a href="#">سافت نیوز</a>
                                    </div>
                                    <div class="space-5"></div>
                                    <div class="row">
                                        <div class="col-8 align-self-center">
                                            <p>این ملک ، با غربالگری صندلی از اتاق ، آمفی تئاتر 100 نفری و یک استخر شنا با شن و ماسه کامل است</p>
                                        </div>
                                        <div class="col-4 align-self-center">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/most_view/most23.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="mt20 like_cm">
                                        <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                        </li>
                                        <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                        </li>
                                        <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="space-15"></div>
                                <div class="border_black"></div>
                                <div class="space-15"></div>
                                <div class="single_international">
                                    <p class="meta before">تکنولوژی </p>
                                    <h4><a href="post1.html">چرا سلامت معنوی پزشک در بحران covid-19 اهمیت دارد: شما نمی توانید از یک فنجان خالی بریزید…</a></h4>
                                    <div class="space-10"></div>
                                    <div class="view_author"> <i class="fal fa-user-circle"></i>
                                        <a href="#">سافت نیوز</a>
                                    </div>
                                    <div class="space-5"></div>
                                    <div class="row">
                                        <div class="col-8 align-self-center">
                                            <p>این ملک ، با غربالگری صندلی از اتاق ، آمفی تئاتر 100 نفری و یک استخر شنا با شن و ماسه کامل است...</p>
                                        </div>
                                        <div class="col-4 align-self-center">
                                            <div class="img_wrap">
                                                <a href="#">
                                                    <img src="assets/img/most_view/most24.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="mt20 like_cm">
                                        <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                        </li>
                                        <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                        </li>
                                        <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-100"></div>

    <div class="footer footer_area3 white_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single_footer3 mb30">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo.png" alt="logo">
                            </a>
                            <div class="space-20"></div>
                            <p><span>نیوزپارک </span> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                        </div>
                    </div>
                    <div class="footer_contact">
                        <h3 class="widget-title2">خدمات خبری نیوزپارک</h3>
                        <div class="single_fcontact">
                            <div class="fcicon">
                                <img src="assets/img/icon/phone_black.png" alt="">
                            </div> <a href="#">روی موبایل شما</a>
                        </div>
                        <div class="single_fcontact">
                            <div class="fcicon">
                                <img src="assets/img/icon/speaker_black.png" alt="">
                            </div> <a href="#">در بلندگوهای هوشمند</a>
                        </div>
                        <div class="single_fcontact">
                            <div class="fcicon">
                                <img src="assets/img/icon/envelope_black.png" alt="">
                            </div> <a href="#">با اخبار نیوزپارک تماس بگیرید</a>
                        </div>
                    </div>
                    <div class="space-30"></div>
                    <div class="border_black"></div>
                    <div class="space-30"></div>
                    <div class="single_footer_nav mb30">
                        <h3 class="widget-title2">دسته بندی اخبار ها</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="#">سیاست </a>
                                    </li>
                                    <li><a href="#">شرکتی </a>
                                    </li>
                                    <li><a href="#">تکنولوژی </a>
                                    </li>
                                    <li><a href="#">علوم پایه </a>
                                    </li>
                                    <li><a href="#">سلامت </a>
                                    </li>
                                    <li><a href="#">ورزشی </a>
                                    </li>
                                    <li><a href="#">سرگرمی </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="#">آموزشی </a>
                                    </li>
                                    <li><a href="#">مطبوعات </a>
                                    </li>
                                    <li><a href="#">اصلاحات </a>
                                    </li>
                                    <li><a href="#">آموزشی </a>
                                    </li>
                                    <li><a href="#">مقاله امروز </a>
                                    </li>
                                    <li><a href="#">اصلاحات </a>
                                    </li>
                                    <li><a href="#">غذاها </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                    <div class="border_black"></div>
                    <div class="space-30"></div>
                    <div class="twitter_feeds mb30">
                        <h3 class="widget-title2">خوراک توییتر </h3>
                        <div class="single_twitter_feed">
                            <div class="twitter_feed_icon"> <i class="fab fa-twitter"></i>
                            </div>
                            <h6>فروش دوشنبه سایبری ، در فروش پایان سال ما 33٪ در موضوع نیوزپارک صرفه جویی کنید ، برای پروژه بعدی خود مجوز جدید بخرید… <span>@newspark #تکنولوژی</span></h6>
                            <p>فروردین 1400</p>
                        </div>
                        <div class="space-30"></div>
                        <div class="border_black"></div>
                        <div class="space-30"></div>
                        <div class="single_twitter_feed">
                            <div class="twitter_feed_icon"> <i class="fab fa-twitter"></i>
                            </div>
                            <h6>فروش دوشنبه سایبری ، در فروش پایان سال ما 33٪ در موضوع نیوزپارک صرفه جویی کنید ، برای پروژه بعدی خود مجوز جدید بخرید… <span>@newspark #تکنولوژی</span></h6>
                            <p>فروردین 1400</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="contacts3">
                        <div class="single_contact3">
                            <h6>در تماس باشید</h6>
                            <a href="#">+41 27 966 26690</a>
                            <a href="#">+880 1945 381758</a>
                        </div>
                        <div class="single_contact3">
                            <h6>چت کنید</h6>
                            <a href="https://quomodosoft.com/cdn-cgi/l/email-protection#0c64696060634c62697b7f7c6d7e67226f6361"><span class="__cf_email__" data-cfemail="d2bab7bebebd92bcb7a5a1a2b3a0b9fcb1bdbf">[چت کنید]</span></a>
                            <a href="https://quomodosoft.com/cdn-cgi/l/email-protection#17767364767b726457797260646776657c3974787a"><span class="__cf_email__" data-cfemail="85e4e1f6e4e9e0f6c5ebe0f2f6f5e4f7eeabe6eae8">[چت کنید]</span></a>
                        </div>
                        <div class="single_contact3">
                            <h6>مرکز فرماندهی</h6>
                            <p>ایران، ارومیه
                                <br>شاهین دژ، پلاک 4
                            </p>
                        </div>
                    </div>
                    <div class="space-30"></div>
                    <div class="border_black"></div>
                    <div class="space-30"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer_more_news mb30">
                                <h3 class="widget-title">اخبار بیشتر</h3>
                                <div class="more_newss">
                                    <div class="single_more_news">
                                        <p class="meta">تکنولوژی </p>
                                        <h4><a href="#">موفقیت ویروس ژاپن متحیر کننده شانس جهانی است؟</a></h4>
                                        <p>این ملک کامل با غربالگری صندلی ها از حوضچه آمفی تئاتر اتاق است</p>
                                        <ul class="mt20 like_cm">
                                            <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="space-15"></div>
                                    <div class="border_black"></div>
                                    <div class="space-15"></div>
                                    <div class="single_more_news">
                                        <p class="meta">تکنولوژی </p>
                                        <h4><a href="#">موفقیت ویروس ژاپن متحیر کننده شانس جهانی است؟</a></h4>
                                        <p>این ملک کامل با غربالگری صندلی ها از حوضچه آمفی تئاتر اتاق است</p>
                                        <ul class="mt20 like_cm">
                                            <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="space-15"></div>
                                    <div class="border_black"></div>
                                    <div class="space-15"></div>
                                    <div class="single_more_news">
                                        <p class="meta">تکنولوژی </p>
                                        <h4> <a href="#">موفقیت ویروس ژاپن متحیر کننده شانس جهانی است؟</a></h4>
                                        <p>این ملک کامل با غربالگری صندلی ها از حوضچه آمفی تئاتر اتاق است</p>
                                        <ul class="mt20 like_cm">
                                            <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="space-15"></div>
                                    <div class="border_black"></div>
                                    <div class="space-15"></div>
                                    <div class="single_more_news">
                                        <p class="meta">تکنولوژی </p>
                                        <h4><a href="#">موفقیت ویروس ژاپن متحیر کننده شانس جهانی است؟</a></h4>
                                        <p>این ملک کامل با غربالگری صندلی ها از حوضچه آمفی تئاتر اتاق است</p>
                                        <ul class="mt20 like_cm">
                                            <li><a href="#"><i class="far fa-eye"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="far fa-heart"></i> 6745</a>
                                            </li>
                                            <li><a href="#"><i class="fas fa-share"></i> 6745</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box widget news_letter news3bg mb30 border-radious5">
                                <h2 class="widget-title">نامه خبری </h2>
                                <p>آدرس ایمیل شما منتشر نخواهد شد زمینه های مورد نیاز ضروری است.</p>
                                <div class="space-20"></div>
                                <div class="signup_form">
                                    <form action="https://quomodosoft.com/html/newsprk/theme-3/index.html">
                                        <input class="signup white_bg" type="email" placeholder="ایمیل شما">
                                        <input type="button" class="cbtn" value="ثبت نام">
                                    </form>
                                    <div class="space-10"></div>
                                    <p>ما از هرزنامه متنفریم همانطور که شما هستید</p>
                                </div>
                            </div>
                            <div class="follow_box widget mb30">
                                <h2 class="widget-title">دنبال کردن ما </h2>
                                <div class="social_shares">
                                    <a class="single_social social_facebook" href="#"> <span class="follow_icon"><i class="fab fa-facebook-f"></i></span>
                                        34,456 <span class="icon_text">هوادار </span>
                                    </a>
                                    <a class="single_social social_twitter" href="#"> <span class="follow_icon"><i class="fab fa-twitter"></i></span>
                                        34,456 <span class="icon_text">فالوور </span>
                                    </a>
                                    <a class="single_social social_youtube" href="#"> <span class="follow_icon"><i class="fab fa-youtube"></i></span>
                                        34,456 <span class="icon_text">مشترک </span>
                                    </a>
                                    <a class="single_social social_instagram" href="#"> <span class="follow_icon"><i class="fab fa-instagram"></i></span>
                                        34,456 <span class="icon_text">فالوور </span>
                                    </a>
                                    <a class="single_social social_vimeo" href="#"> <span class="follow_icon"><i class="fab fa-vimeo-v"></i></span>
                                        34,456 <span class="icon_text">فالوور </span>
                                    </a>
                                    <a class="single_social social_medium" href="#"> <span class="follow_icon"><i class="fab fa-medium-m"></i></span>
                                        34,456 <span class="icon_text">فالوور </span>
                                    </a>
                                </div>
                            </div>
                            <div class="banner2 mb30 ">
                                <a href="#" class="border-radious5">
                                    <img src="assets/img/add/add21.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="download_btn">
                        <div class="space-15"></div>
                        <div class="border_black"></div>
                        <div class="space-15"></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="widget-title">دانلود اپ نیوزپارک</h3>
                                <p>دانلود رایگان اپ برای آندروید و آی او اس</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="download_btn_group">
                                    <a class="app_btn" href="#"><i class="fab fa-google-play"></i>
                                        دانلود از <span>گوگل پلی </span>
                                    </a>
                                    <a class="app_btn" href="#"> <i class="fab fa-apple"></i>
                                        دانلود از <span>اپ استور</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p>&copy; کپی رایت 1400، کلیه حقوق محفوظ است</p>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="copyright_menus text-right">
                            <div class="language"></div>
                            <div class="copyright_menu inline">
                                <ul>
                                    <li><a href="#">درباره ما </a>
                                    </li>
                                    <li><a href="#">تبلیغاتی </a>
                                    </li>
                                    <li><a href="#">حریم خصوصی</a>
                                    </li>
                                    <li><a href="#">تماس با ما</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/plugins/jquery.2.1.0.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/jquery.nav.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
    <script src="assets/js/plugins/jquery-modal-video.min.js"></script>
    <script src="assets/js/plugins/owl.carousel.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/stellarnav.js"></script>
    <script src="assets/js/plugins/circle-progress.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>