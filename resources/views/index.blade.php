<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turyap</title>

    <!--  Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/stylesheet.css?v1.2?v2">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
</head>

<body>

<!--Loader-->
<div class="vfx-loader">
    <div class="loader-wrapper">
        <div class="loader-content">
            <div class="loader-dot dot-1"></div>
            <div class="loader-dot dot-2"></div>
            <div class="loader-dot dot-3"></div>
            <div class="loader-dot dot-4"></div>
            <div class="loader-dot dot-5"></div>
            <div class="loader-dot dot-6"></div>
            <div class="loader-dot dot-7"></div>
            <div class="loader-dot dot-8"></div>
            <div class="loader-dot dot-center"></div>
        </div>
    </div>
</div>
<!-- Loader end -->

<!-- Wrapper -->
<div id="wrapper">
    <!-- Header Container -->
    <header id="header-container" class="fullwidth">
        <!-- Header -->
        <div id="header">
            <div class="container">
                <div class="left-side">
                    <div id="logo"><a href="index.html"><img src="{{asset('images/logo.png?')}}" alt=""></a></div>

                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">
                            <li><a class="current" href="#">ANA SAYFA</a>
                            </li>
                            <li><a href="/">HAKKIMIZDA</a></li>
                            <li><a href="/">FRANCHISE</a></li>
                            <li><a href="https://turyapemlak.com.tr/">MÜZAYEDE</a></li>
                            <li><a href="/">GLOBAL</a></li>
                            <li><a href="/">VIP OFİS</a></li>
                            <li><a href="/">HABERLER</a></li>
                            <li><a href="/">TURYAP.NET</a></li>
                            <li><a href="/">İŞTİRAKLERİMİZ</a>
                                <ul>
                                    <li><a href="/">EMLAK HABER</a></li>
                                    <li><a href="">TAM NOKTA</a></li>
                                    <li><a href="">TAM ÇÖZÜM</a></li>
                                    <li><a href="">TWORK</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                </div>
                <div class="right-side">
                    <ul class="right-menu hidden-xs hidden-sm">
                        <li><a href="">FRANCHISE</a></li>
                        <li><a href="">TURYAPNET</a></li>
                    </ul>
                    <div class="header-widget">
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>

    <!-- Banner -->
    <div class="parallax" data-background="http://test3.crealive.net/turyap/images/home-1.jpg" data-color="#36383e" data-color-opacity="0.72" data-img-width="2500" data-img-height="1600">
        <div class="utf-parallax-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf-main-search-container-area">
                            <div class="utf-banner-headline-text-part">
                                <h2>Best Place To Find <span class="typed-words">Dream</span><span class="typed-cursor">|</span></h2>
                                <span>From as low as $10 per day with limited time offer discounts.</span>
                            </div>
                            <form class="utf-main-search-form-item">
                                <div class="utf-search-type-block-area">
                                    <div class="search-type">
                                        <label class="active">
                                            <input class="first-tab" name="tab" checked="checked" type="radio">Satılık</label>
                                        <label>
                                            <input name="tab" type="radio">Kiralık</label>
                                        <label>
                                            <input name="tab" type="radio">Danışmanlarımız</label>
                                        <label>
                                            <input name="tab" type="radio">Ofislerimiz</label>
                                        <div class="utf-search-type-arrow"></div>
                                    </div>
                                </div>
                                <div class="utf-main-search-box-area">
                                    <div class="row with-forms">
                                        <div class="col-md-8 col-sm-12">
                                            <input type="text" class="ico-01" placeholder="" value=""/>
                                        </div>

                                        <div class="col-md-2 col-sm-6">
                                            <button class="button utf-search-btn-item"><i class="fa fa-search"></i> Ara</button>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <a href="#" class="utf-utf-more-search-options-area-button" data-open-title="Detaylı Arama" data-close-title="Detaylı Arama"></a>
                                        </div>
                                    </div>

                                    <div class="utf-more-search-options-area">
                                        <div class="utf-more-search-options-area-container">
                                            <div class="row with-forms">
                                                <div class="col-md-4">
                                                    <select data-placeholder="Property Status" class="utf-chosen-select-single-item">
                                                        <option>İlan Tipi</option>
                                                        <option>Hepsi</option>
                                                        <option>Kiralık</option>
                                                        <option>Satılık</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select data-placeholder="Property Type" class="utf-chosen-select-single-item">
                                                        <option> Mülk Türü </option>
                                                        <option> Konut </option>
                                                        <option> Ticari </option>
                                                        <option> Arazi </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select data-placeholder="Max Rooms" class="utf-chosen-select-single-item">
                                                        <option>Oda Sayısı</option>
                                                        <option>1 Oda</option>
                                                        <option>2 Oda</option>
                                                        <option>3 Oda</option>
                                                        <option>4 Oda</option>
                                                        <option>5 Oda</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select data-placeholder="Bed" class="utf-chosen-select-single-item">
                                                        <option>Yatak</option>
                                                        <option>1 Yatak</option>
                                                        <option>2 Yatak</option>
                                                        <option>3 Yatak</option>
                                                        <option>4 Yatak</option>
                                                        <option>5 Yatak</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select data-placeholder="Bath" class="utf-chosen-select-single-item">
                                                        <option>Banyo</option>
                                                        <option>1 Banyo</option>
                                                        <option>2 Banyo</option>
                                                        <option>3 Banyo</option>
                                                        <option>4 Banyo</option>
                                                        <option>5 Banyo</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="select-input">
                                                        <input type="text" placeholder="Min Fiyat" data-unit="TL">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="select-input">
                                                        <input type="text" placeholder="Max Fiyat" data-unit="TL">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="select-input">
                                                        <input type="text" placeholder="Min Alan" data-unit="m2">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="select-input">
                                                        <input type="text" placeholder="Max Alan" data-unit="m2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 margin-top-75">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                    <h3 class="headline"><span>Satılık İlanlar</span>Satılık İlanlar</h3>
                    <div class="utf-headline-display-inner-item">Öne Çıkan Satılık İlanlar</div>
                    <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="carousel">
                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Satılık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/893169/products/61353114/photos/1604407763/1/42652853155749357.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Satılık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/844029/products/57223170/photos/1604408666/1/4119887316125249.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Satılık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/893169/products/61353114/photos/1604407763/1/42652853155749357.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Satılık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/844029/products/57223170/photos/1604408666/1/4119887316125249.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Satılık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/893169/products/61353114/photos/1604407763/1/42652853155749357.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Satılık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/844029/products/57223170/photos/1604408666/1/4119887316125249.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->
                </div>
            </div>
            <!-- Carousel / End -->
        </div>
    </div>  <!-- Featured -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 margin-top-75">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                    <h3 class="headline"><span>Kiralık İlanlar</span>Kiralık İlanlar</h3>
                    <div class="utf-headline-display-inner-item">Öne Çıkan Kiralık İlanlar</div>
                    <p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="carousel">
                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Kiralık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/893169/products/61353114/photos/1604407763/1/42652853155749357.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Kiralık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/844029/products/57223170/photos/1604408666/1/4119887316125249.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Kiralık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/893169/products/61353114/photos/1604407763/1/42652853155749357.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Kiralık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/844029/products/57223170/photos/1604408666/1/4119887316125249.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Kiralık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/893169/products/61353114/photos/1604407763/1/42652853155749357.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="single-property-page-2.html" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"> <span class="featured">Öne Çıkan</span> <span class="for-sale">Kiralık</span> </div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">Yenilenmiş Lüks Daire <i>$18,000/Ay</i></span>
                                </div>
                                <img src="https://www.port724.com/images/firm/844029/products/57223170/photos/1604408666/1/4119887316125249.JPG" alt="">
                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-bed"></i> Yatak <span>3</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo <span>2</span></li>
                                    <li><i class="fa fa-car"></i> Garaj <span>2</span></li>
                                    <li><i class="fa fa-arrows-alt"></i> m2 <span>780</span></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <!-- Listing Item / End -->
                </div>
            </div>
            <!-- Carousel / End -->
        </div>
    </div>
    <!-- Featured / End -->
    <section class="fullwidth" data-background-color="#fbfbfb" style="background: rgb(251, 251, 251);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                        <h3 class="headline"><span>Geçen Ayın Birinci Ofisi</span>Geçen Ayın Birinci Ofisi</h3>
                        <div class="utf-headline-display-inner-item">Geçen Ayın Birinci Ofisi</div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="utf-icon-box-item-area">
                        <div class="icon-container"><img class="utf-user-picture" src="images/user_1.jpg" alt="user_1"></div>
                        <h3>Geçen Ayın Birincisi</h3>
                        <p>Ad Soyad</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="utf-icon-box-item-area">
                        <div class="icon-container"><img class="utf-user-picture" src="images/user_1.jpg" alt="user_1"></div>
                        <h3>Geçen Haftanın Birincisi</h3>
                        <p>Ad Soyad</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="utf-icon-box-item-area">
                        <div class="icon-container"><img class="utf-user-picture" src="images/user_1.jpg" alt="user_1"></div>
                        <h3>Günün Birincisi</h3>
                        <p>Ad Soyad</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Section Callout -->
    <div class="jbm-section-callout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 callout-bg-1 callout-section-left pos-relative" style="background-image: url(https://www.port724.com/images/site/269364/photos/1499564456/o_1bkig5quefdd14dh1hq81671172a35.jpg);">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-right">
                        <div class="jbm-section-title margin-top-80 margin-bottom-80">
                            <h2>SATILIK</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="add-new-property.html" class="button margin-top-10">İlanları Listele</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 callout-bg-2 callout-section-right pos-relative" style="background-image: url(https://www.port724.com/images/site/269364/photos/1499564548/o_1bkig8k9k4q2iour2v1aj01n2a4c.jpg);">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                        <div class="jbm-section-title margin-bottom-80 margin-top-80">
                            <h2>KİRALIK</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="listings-list-with-sidebar.html" class="button margin-top-10">İlanları Listele</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 callout-bg-2 callout-section-right pos-relative" style="background-image: url(https://www.port724.com/images/site/269364/photos/1499564483/o_1bkig6ldv1edh1sj31bla18jo158f3i.jpg);">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                        <div class="jbm-section-title margin-bottom-80 margin-top-80">
                            <h2>KURUMSAL SATIŞ</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="listings-list-with-sidebar.html" class="button margin-top-10">Detaylı Bilgi</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 callout-bg-2 callout-section-right pos-relative" style="background-image: url(https://www.port724.com/images/site/269364/photos/1499564548/o_1bkig8k9k4q2iour2v1aj01n2a4c.jpg);">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                        <div class="jbm-section-title margin-bottom-80 margin-top-80">
                            <h2>GOLF KENT</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="listings-list-with-sidebar.html" class="button margin-top-10">Detaylı Bilgi</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 callout-bg-2 callout-section-right pos-relative" style="background-image: url(https://www.port724.com/images/site/269364/photos/1499564456/o_1bkig5quefdd14dh1hq81671172a35.jpg);">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                        <div class="jbm-section-title margin-bottom-80 margin-top-80">
                            <h2>VIP OFİSLER</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="listings-list-with-sidebar.html" class="button margin-top-10">Detaylı Bilgi</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 callout-bg-2 callout-section-right pos-relative" style="background-image: url(https://www.port724.com/images/site/269364/photos/1499564548/o_1bkig8k9k4q2iour2v1aj01n2a4c.jpg);">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                        <div class="jbm-section-title margin-bottom-80 margin-top-80">
                            <h2>FRANCHISE BAŞVURUSU</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="listings-list-with-sidebar.html" class="button margin-top-10">Detaylı Bilgi</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 callout-bg-2 callout-section-right pos-relative" style="background-image: url(https://www.port724.com/images/site/269364/photos/1499564548/o_1bkig8k9k4q2iour2v1aj01n2a4c.jpg);">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                        <div class="jbm-section-title margin-bottom-80 margin-top-80">
                            <h2>DANIŞMAN BAŞVURUSU</h2>
                            <span class="section-tit-line"></span>
                            <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                            <a href="listings-list-with-sidebar.html" class="button margin-top-10">Detaylı Bilgi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Callout -->



    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <a href="index.html"><img class="footer-logo" src="images/logo.png?" alt=""></a>
                    <p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when unknown printer took a galley type scrambled.</p>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <h4>Useful Links</h4>
                    <ul class="utf-footer-links-item">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Properties</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <h4>My Account</h4>
                    <ul class="utf-footer-links-item">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Add Property</a></li>
                        <li><a href="#">My Listing</a></li>
                        <li><a href="#">Favorites</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <h4>Resources</h4>
                    <ul class="utf-footer-links-item">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">How It Work</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Term & Condition</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <h4>Pages</h4>
                    <ul class="utf-footer-links-item">
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">How It Work</a></li>
                        <li><a href="#">FAQ Page</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Term & Condition</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights">Copyright © 2020 All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
    <div id="backtotop"><a href="#"></a></div>
</div>

<!-- Sign In Popup -->
<div id="utf-signin-dialog-block" class="zoom-anim-dialog mfp-hide dialog-with-tabs">
    <div class="utf-signin-form-part">
        <ul class="utf-popup-tabs-nav-item">
            <li><a href="#login">Log In</a></li>
            <li><a href="#register">Register</a></li>
        </ul>
        <div class="utf-popup-container-part-tabs">
            <!-- Login -->
            <div class="utf-popup-tab-content-item" id="login">
                <div class="utf-welcome-text-item">
                    <h3>Welcome Back Sign in to Continue</h3>
                    <span>Don't Have an Account? <a href="#" class="register-tab">Sign Up!</a></span>
                </div>
                <form method="post" id="login-form">
                    <div class="utf-no-border">
                        <input type="text" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
                    </div>
                    <div class="utf-no-border">
                        <input type="password" name="password" id="password" placeholder="Password" required/>
                    </div>
                    <div class="checkbox margin-top-0">
                        <input type="checkbox" id="two-step">
                        <label for="two-step"><span class="checkbox-icon"></span> Remember Me</label>
                    </div>
                    <a href="forgot_password.html" class="forgot-password">Forgot Password?</a>
                </form>
                <button class="button full-width utf-button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-feather-chevrons-right"></i></button>
                <div class="utf-social-login-separator-item"><span>or</span></div>
                <div class="utf-social-login-buttons-block">
                    <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook</button>
                    <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Google+</button>
                    <button class="twitter-login ripple-effect"><i class="icon-brand-twitter"></i> Twitter</button>
                </div>
            </div>

            <!-- Register -->
            <div class="utf-popup-tab-content-item" id="register">
                <div class="utf-welcome-text-item">
                    <h3>Create your Account!</h3>
                    <span>Don't Have an Account? <a href="#" class="register-tab">Sign Up!</a></span>
                </div>
                <form method="post" id="utf-register-account-form">
                    <div class="utf-no-border margin-bottom-20">
                        <select class="utf-chosen-select-single-item utf-with-border" title="Single User">
                            <option>Single User</option>
                            <option>Agent</option>
                            <option>Multi User</option>
                        </select>
                    </div>
                    <div class="utf-no-border">
                        <input type="text" name="name" id="name" placeholder="User Name" required/>
                    </div>
                    <div class="utf-no-border">
                        <input type="text" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required/>
                    </div>
                    <div class="utf-no-border">
                        <input type="password" name="password-register" id="password-register" placeholder="Password" required/>
                    </div>
                    <div class="utf-no-border">
                        <input type="password" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
                    </div>
                    <div class="checkbox margin-top-0">
                        <input type="checkbox" id="two-step0">
                        <label for="two-step0"><span class="checkbox-icon"></span> By Registering You Confirm That You Accept <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                </form>
                <button class="margin-top-10 button full-width utf-button-sliding-icon ripple-effect" type="submit" form="utf-register-account-form">Register <i class="icon-feather-chevrons-right"></i></button>
                <div class="utf-social-login-separator-item"><span>or</span></div>
                <div class="utf-social-login-buttons-block">
                    <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook</button>
                    <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Google+</button>
                    <button class="twitter-login ripple-effect"><i class="icon-brand-twitter"></i> Twitter</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign In Popup / End -->

<!-- Scripts -->
<script src="scripts/jquery-3.3.1.min.js"></script>
<script src="scripts/chosen.min.js"></script>
<script src="scripts/magnific-popup.min.js"></script>
<script src="scripts/owl.carousel.min.js"></script>
<script src="scripts/rangeSlider.js"></script>
<script src="scripts/sticky-kit.min.js"></script>
<script src="scripts/slick.min.js"></script>
<script src="scripts/masonry.min.js"></script>
<script src="scripts/mmenu.min.js"></script>
<script src="scripts/tooltips.min.js"></script>
<script src="scripts/typed.js"></script>
<script src="scripts/custom_jquery.js?v2"></script>

<script>
    var typed = new Typed('.typed-words', {
        strings: ["Dream Home."," Apartments."," Residential."," Commercial."],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script>
</body>
</html>
