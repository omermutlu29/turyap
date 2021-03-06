@extends('layouts.master')
@section('content')

    <!-- Content -->
    @include('components.detail_slider')
    <div class="container">
        <div class="row">
            <!-- Property Description -->
            <div class="col-lg-8 col-md-7">
                <div class="property-description">
                    <!-- Description -->
                    <div class="utf-desc-headline-item">
                        <h3><i class="icon-material-outline-description"></i>  Emlak Tanımı</h3>
                    </div>
                    <div class="show-more">
                        {!! $product->TANIM_ACIKLAMA !!}
                        <a href="#" class="show-more-button">Devamı <i class="sl sl-icon-plus"></i></a>
                    </div>

                    <!-- Details -->
                    <div class="utf-desc-headline-item">
                        <h3><i class="sl sl-icon-briefcase"></i> İlan Detayları</h3>
                    </div>
                    <ul class="property-features margin-top-0">
                        @if(isset($product->URUN_ID))<li>Emlak No: <span>{{$product->urun_id}}</span></li>@endif
                        @if(isset($product->FIYAT) && $product->FIYAT > 0)<li>Fiyat: <span>{{$product->currency->PARA}} {{str_replace(',','.',number_format($product->FIYAT))}}</span></li>@endif
                        @if(isset($product->ALAN) && $product->ALAN > 0)<li>Emlak Boyutu: <span>{{$product->ALAN}} m2</span></li>@endif
                        @if(isset($product->build_year->DEGER))<li>Bina Yaşı: <span>{{$product->build_year->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->room_count->DEGER))<li>Oda Sayısı: <span>{{$product->room_count->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->bath_count->DEGER))<li>Banyo: <span>{{$product->bath_count->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->product_fields->KAPALIGARAJ))<li>Garaj: <span>{{$product->product_fields->KAPALIGARAJ ? 'Var' : 'Yok'}}</span></li>@endif
                        @if(isset($product->product_type->CINSI))<li>Emlak Tipi: <span>{{$product->product_type->CINSI}}</span></li>@endif
                        @if(isset($product->category->KATEGORI))<li>Emlak Durumu <span>{{$product->category->KATEGORI}}</span></li>@endif
                    </ul>

                    <!-- Details -->
                    <div class="utf-desc-headline-item">
                        <h3><i class="icon-material-outline-business"></i> Ek Detaylar</h3>
                    </div>
                    <ul class="property-features margin-top-0">
                        @if(isset($product->FIYAT_DEPOZIT) && $product->FIYAT_DEPOZIT != 0)<li>Depozito: <span>{{$product->currency->PARA}} {{$product->FIYAT_DEPOZIT ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->FIYAT_AIDAT) && $product->FIYAT_AIDAT != 0)<li>Aidat: <span>{{$product->currency->PARA}} {{$product->FIYAT_AIDAT ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->heating_type->DEGER))<li>Isıtma: <span>{{$product->heating_type->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->fuel_type->DEGER))<li>Yakıt Tipi: <span>{{$product->fuel_type->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->balcony_count->DEGER))<li>Balkon Sayısı: <span>{{$product->balcony_count->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->deed_status->DEGER))<li>Tapu Durumu: <span>{{$product->deed_status->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->kaks->DEGER))<li>KAKS: <span>{{$product->kaks->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->clearance->DEGER))<li>Gabari: <span>{{$product->clearance->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->product_type_content->TIP))<li>Ürün Sınıfı: <span>{{$product->product_type_content->TIP ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->floor_count->DEGER))<li>Bina Kat Sayısı: <span>{{$product->floor_count->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->current_floor->DEGER))<li>Bulunduğu Kat: <span>{{$product->current_floor->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->product_structure_status->YAPI_DURUMU))<li>Yapı Durumu: <span>{{$product->product_structure_status->YAPI_DURUMU ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->deed_type->DEGER))<li>Tapu Tipi: <span>{{$product->deed_type->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->product_status->DEGER))<li>Tapu Tipi: <span>{{$product->deed_type->DEGER ?? 'Belirtilmemiş'}}</span></li>@endif
                    </ul>

                    <!-- Features -->
                    <div class="utf-desc-headline-item">
                        <h3><i class="sl sl-icon-briefcase"></i> Mülk özellikleri</h3>
                    </div>
                    <ul class="property-features checkboxes margin-top-0">
                        @if(count($fields)>0)
                        @foreach($fields as $key=>$value)
                            <li>{{$key}}</li>
                        @endforeach
                        @else
                            <p>Özellik bulunamadı</p>
                        @endif

                    </ul>
                    <!-- Location -->
                    <div class="utf-desc-headline-item">
                        <h3><i class="icon-material-outline-location-on"></i> Harita</h3>
                    </div>
                    <div id="propertyMap-container">

                        <div id="propertyMap" data-latitude="48.8566" data-longitude="2.3522" data-map-icon="im im-icon-Hamburger"></div>
                        <a href="#" id="streetView">Sokak Görünümü</a>
                    </div>


                    <div class="clearfix"></div>
                    <div class="margin-top-35"></div>


                </div>
            </div>
            <!-- Property Description / End -->

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-5">
                <div class="sidebar">
                    <div class="widget utf-sidebar-widget-item">
                        <div class="utf-detail-banner-add-section">
                            <a href="#"><img src="{{asset('images/phototuryap.jpg')}}" alt="banner-add-2"></a>
                        </div>
                    </div>


                    <!-- Widget -->
                    @include('components.agency_contact')
                    <!-- Widget / End -->

                    <!-- Widget -->
                    @include('components.find_new_home')
                    <!-- Widget / End -->

                    <!-- Widget -->
                    <!-- Widget / End-->

                    <!-- Widget -->
                    @include('components.category_widget')

                <!-- Widget / End-->

                    <!-- Widget -->

                    <!-- Widget / End-->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_script')
    <!-- Container / End -->
    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
    <script src="{{asset('scripts/infobox.min.js')}}"></script>
    <script src="{{asset('scripts/markerclusterer.js')}}"></script>
    <script src="{{asset('scripts/maps.js')}}"></script>
    <script>
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
            var newString='';
            for(var i=0;i < strings.length; i++){
                newString+=strings[i]+'&'
            }
            newString=(newString.slice(0,-1));

            window.location.href="{{route('product.filter')}}"+'?'+newString;
            return false;
        });
        $("#country").change(function () {
            $.ajax({
                url: "{{url('get-cities')}}"+"/"+$(this).val(),
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
                url: "{{url('get-towns')}}"+"/"+$(this).val(),
                success: function (result) {
                    $("#town").html('<option value=""></option>');
                    $("#town").append(result);
                    $('#town').trigger("chosen:updated");
                }
            });
        });
    </script>
@endsection
