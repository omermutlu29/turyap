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
    @include('includes.header')
    <div class="clearfix"></div>

    <!-- Banner -->
    <div class="parallax"
         data-background="{{Voyager::image(\App\Models\HomePageBanner::orderBy('created_at','DESC')->first()->path )?? 'http://test3.crealive.net/turyap/images/home-1.jpg'}}"
         data-color="#36383e"
         data-color-opacity="0.72" data-img-width="2500" data-img-height="1600">
        <div class="utf-parallax-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf-main-search-container-area">
                            <div class="utf-banner-headline-text-part">
                                <h2>Ara <span class="typed-words">Dream</span><span class="typed-cursor">|</span></h2>
                                <span>Deneyimli Turyap uzmanlarının size sunmak istediği yüzlerce portföy var.</span>
                            </div>
                            <form method="get" action="{{route('product.filter')}}" id="form"
                                  class="utf-main-search-form-item">
                                <div class="utf-search-type-block-area">
                                    <div class="search-type" style="text-align: center">
                                        <label style="display: none;" class="active">
                                            <input class="first-tab" checked="checked"
                                                   type="hidden">
                                        </label>
                                        <div class="utf-search-type-arrow"></div>
                                    </div>
                                </div>
                                <div class="utf-main-search-box-area">
                                    <div class="row with-forms">
                                        <div class="col-md-8 col-sm-12">
                                            <input type="text" name="search_text" class="ico-01" placeholder=""
                                                   value=""/>
                                        </div>

                                        <div class="col-md-2 col-sm-6">
                                            <button class="button utf-search-btn-item"><i class="fa fa-search"></i> Ara
                                            </button>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <a href="#" class="utf-utf-more-search-options-area-button"
                                               data-open-title="Detaylı Arama" data-close-title="Detaylı Arama"></a>
                                        </div>
                                    </div>

                                    <div class="utf-more-search-options-area">
                                        <div class="utf-more-search-options-area-container">
                                            <div class="row with-forms">
                                                <div class="col-md-3">
                                                    <select data-placeholder="ÜLKE" class="chosen-select"
                                                            style="display: none;" id="country">
                                                        <option value=""></option>
                                                        @foreach(\App\Models\Country::all() as $country)
                                                            <option
                                                                value="{{$country->countryID}}">{{$country->countryName}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select data-placeholder="İL" name="city" class="chosen-select"
                                                            style="display: none;" id="city">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select data-placeholder="İLÇE" name="town" class="chosen-select"
                                                            style="display: none;" id="town">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select name="category"
                                                            class="utf-chosen-select-single-item">
                                                        <option value="">İlan Tipi</option>
                                                        <option value="">Hepsi</option>
                                                        @foreach(\App\Models\Category::all() as $category)
                                                            <option
                                                                value="{{$category->KATEGORI_ID}}">{{$category->KATEGORI}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="type"
                                                            class="utf-chosen-select-single-item">

                                                        <option value=""> Mülk Türü</option>
                                                        @foreach(\App\Models\ProductType::all() as $type)
                                                            <option
                                                                value="{{$type->CINSI_ID}}"> {{$type->CINSI}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="room_count"
                                                            class="utf-chosen-select-single-item">
                                                        <option value="">Oda Sayısı</option>
                                                        @foreach(\App\Models\RoomCount::all() as $roomCount)
                                                            <option
                                                                value="{{$roomCount->ODASAYISI_ID}}">{{$roomCount->DEGER}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="bath_count"
                                                            class="utf-chosen-select-single-item">
                                                        <option value="">Banyo</option>
                                                        @foreach(\App\Models\BathCount::all() as $bathCount)
                                                            <option
                                                                value="{{$bathCount->BANYOSAYISI_ID}}">{{$bathCount->DEGER}}
                                                                Banyo
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="select-input">
                                                        <input type="number" name="min_price" placeholder="Min Fiyat"
                                                               data-unit="TL">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="select-input">
                                                        <input type="number" name="max_price" placeholder="Max Fiyat"
                                                               data-unit="TL">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="select-input">
                                                        <input type="number" name="min_place" placeholder="Min Alan"
                                                               data-unit="m2">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="select-input">
                                                        <input type="number" name="max_place" placeholder="Max Alan"
                                                               data-unit="m2">
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
    @include('components.home_products',['products'=>$sellings,'type'=>'Satılık'])
    @include('components.home_products',['products'=>$sellings,'type'=>'Kiralık'])

<!-- Featured / End -->
   @include('components.home_degree')

    <!-- Start Section Callout -->
    <div class="jbm-section-callout">
        <div class="container-fluid">
            <div class="row">
                @foreach($homePageAds as $ad)
                    <div class="col-md-6 col-sm-6 col-xs-12 callout-bg-1 callout-section-left pos-relative"
                         style="background-image: url({{Voyager::image($ad->image)}});">
                        <div class="callout-bg"></div>
                        <div class="jbm-callout-in jbm-callout-in-padding pull-right">
                            <div class="jbm-section-title margin-top-80 margin-bottom-80">
                                <h2>{{$ad->title}}</h2>
                                <span class="section-tit-line"></span>
                                <p>{{$ad->description}}</p>
                                <a href="{{url($ad->link)}}" class="button margin-top-10">İlanları Listele</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($homePageThreePage as $page)
                    <div class="col-md-4 col-sm-4 col-xs-12 callout-bg-2 callout-section-right pos-relative"
                         style="background-image: url({{Voyager::image($page->image)}});">
                        <div class="callout-bg"></div>
                        <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                            <div class="jbm-section-title margin-bottom-80 margin-top-80">
                                <h2>{{$page->title}}</h2>
                                <span class="section-tit-line"></span>
                                <p>{{$page->description}}</p>
                                <a href="{{url($page->link)}}" class="button margin-top-10">Detaylı Bilgi</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($homePageTwoPage as $page)
                <div class="col-md-6 col-sm-6 col-xs-12 callout-bg-2 callout-section-right pos-relative"
                     style="background-image: url({{Voyager::image($page->image)}});">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                        <div class="jbm-section-title margin-bottom-80 margin-top-80">
                            <h2>{{$page->title}}</h2>
                            <span class="section-tit-line"></span>
                            <p>{{$page->description}}.</p>
                            <a href="{{url($page->link)}}" class="button margin-top-10">Detaylı Bilgi</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Section Callout -->


    <!-- Footer -->
    @include('includes.footer')
    <div id="backtotop"><a href="#"></a></div>
</div>

<!-- Sign In Popup -->

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


    $(document).ready(function () {
        $("#form").submit(function () {
            var qstring = ($("#form").serialize());
            var strings = [];
            qstring = qstring.split('&');
            for (var i = 0; i < qstring.length; i++) {
                var a = qstring[i].split('=');
                if (a[1] != "") {
                    strings.push(qstring[i]);
                }
            }
            var newString = '';
            for (var i = 0; i < strings.length; i++) {
                newString += strings[i] + '&'
            }
            newString = (newString.slice(0, -1));

            window.location.href = "{{route('product.filter')}}" + '?' + newString;
            return false;
        });
        $("#country").change(function () {
            $.ajax({
                url: "{{url('get-cities')}}" + "/" + $(this).val(),
                success: function (result) {
                    $("#town").html('<option value=""></option>');
                    $('#town').trigger("chosen:updated");
                    $("#city").html('<option value=""></option>');
                    $("#city").append(result);
                    $('#city').trigger("chosen:updated");


                }
            });
        });
        $("#city").change(function () {
            $.ajax({
                url: "{{url('get-towns')}}" + "/" + $(this).val(),
                success: function (result) {
                    $("#town").html('<option value=""></option>');
                    $("#town").append(result);
                    $('#town').trigger("chosen:updated");
                }
            });
        });
    });
</script>


</body>
</html>
