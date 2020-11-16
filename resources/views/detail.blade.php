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
                        {!! $product->tanim_aciklama !!}
                        <a href="#" class="show-more-button">Devamı <i class="sl sl-icon-plus"></i></a>
                    </div>

                    <!-- Details -->
                    <div class="utf-desc-headline-item">
                        <h3><i class="sl sl-icon-briefcase"></i> İlan Detayları</h3>
                    </div>
                    <ul class="property-features margin-top-0">
                        @if(isset($product->urun_id))<li>Emlak No: <span>{{$product->urun_id}}</span></li>@endif
                        @if(isset($product->fiyat) && $product->fiyat > 0)<li>Fiyat: <span>{{$product->currency->para}} {{str_replace(',','.',number_format($product->fiyat))}}</span></li>@endif
                        @if(isset($product->alan) && $product->alan > 0)<li>Emlak Boyutu: <span>{{$product->alan}} m2</span></li>@endif
                        @if(isset($product->build_year->deger))<li>Bina Yaşı: <span>{{$product->build_year->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->room_count->deger))<li>Oda Sayısı: <span>{{$product->room_count->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->bath_count->deger))<li>Banyo: <span>{{$product->bath_count->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->product_fields->KAPALIGARAJ))<li>Garaj: <span>{{$product->product_fields->KAPALIGARAJ ? 'Var' : 'Yok'}}</span></li>@endif
                        @if(isset($product->product_type->cinsi))<li>Emlak Tipi: <span>{{$product->product_type->cinsi}}</span></li>@endif
                        @if(isset($product->category->kategori))<li>Emlak Durumu <span>{{$product->category->kategori}}</span></li>@endif
                    </ul>

                    <!-- Details -->
                    <div class="utf-desc-headline-item">
                        <h3><i class="icon-material-outline-business"></i> Ek Detaylar</h3>
                    </div>
                    <ul class="property-features margin-top-0">
                        @if(isset($product->fiyat_depozit) && $product->fiyat_depozit != 0)<li>Depozito: <span>{{$product->currency->para}} {{$product->fiyat_depozit ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->fiyat_aidat) && $product->fiyat_aidat != 0)<li>Aidat: <span>{{$product->currency->para}} {{$product->fiyat_aidat ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->heating_type->deger))<li>Isıtma: <span>{{$product->heating_type->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->fuel_type->deger))<li>Yakıt Tipi: <span>{{$product->fuel_type->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->balcony_count->deger))<li>Balkon Sayısı: <span>{{$product->balcony_count->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->deed_status->deger))<li>Tapu Durumu: <span>{{$product->deed_status->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->kaks->deger))<li>KAKS: <span>{{$product->kaks->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->clearance->deger))<li>Gabari: <span>{{$product->clearance->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->product_type_content->tip))<li>Ürün Sınıfı: <span>{{$product->product_type_content->tip ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->floor_count->deger))<li>Bina Kat Sayısı: <span>{{$product->floor_count->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->current_floor->deger))<li>Bulunduğu Kat: <span>{{$product->current_floor->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->product_structure_status->yapi_durumu))<li>Yapı Durumu: <span>{{$product->product_structure_status->yapi_durumu ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->deed_type->deger))<li>Tapu Tipi: <span>{{$product->deed_type->deger ?? 'Belirtilmemiş'}}</span></li>@endif
                        @if(isset($product->product_status->deger))<li>Tapu Tipi: <span>{{$product->deed_type->deger ?? 'Belirtilmemiş'}}</span></li>@endif
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
                            <a href="#"><img src="https://www.port724.com/images/site/269364/photos/1499564456/o_1bkig5quefdd14dh1hq81671172a35.jpg" alt="banner-add-2"></a>
                        </div>
                    </div>


                    <!-- Widget -->
                    <div class="widget utf-sidebar-widget-item">
                        <div class="agent-widget">
                            <div class="utf-boxed-list-headline-item">
                                <h3>Acente Ayrıntılarına Göre Listelenmiştir</h3>
                            </div>

                            <input type="text" placeholder="İsim">
                            <input type="text" placeholder="E-posta">
                            <input type="text" placeholder="Telefon">
                            <textarea>Mesajınız</textarea>
                            <button class="button fullwidth margin-top-5">Mesaj gönder</button>
                        </div>
                    </div>
                    <!-- Widget / End -->

                    <!-- Widget -->
                    @include('components.find_new_home')
                    <!-- Widget / End -->

                    <!-- Widget -->
                    @include('components.last_shown')
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
@endsection
