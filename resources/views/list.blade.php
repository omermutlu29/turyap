@extends('layouts.master')
@section('content')
    <!-- Content -->
    <div class="container">
        <div class="row sticky-wrapper">
            <div class="col-md-8">
                <!-- Sorting -->
                <div class="utf-sort-box-aera">
                    <div class="sort-by">
                        <label>Sırala:</label>
                        <div class="sort-by-select">
                            <select data-placeholder="Default Properties" class="utf-chosen-select-single-item">
                                <option> Varsayılan Özellikler</option>
                                <option> Düşükten Yükseğe Fiyat</option>
                                <option> Yüksekten Düşüğe Fiyat</option>
                                <option> En Yeni Özellikler</option>
                                <option> En Eski Özellikler</option>
                            </select>
                        </div>
                    </div>
                    <div class="utf-layout-switcher">
                        <a href="#" class="list"><i class="sl sl-icon-list"></i></a>
                        <a href="#" class="grid"><i class="sl sl-icon-grid"></i></a>
                    </div>
                </div>

                <!-- Listings -->
                <div class="utf-listings-container-area list-layout">

                @foreach($products as $product)
                    @include('components.utf_list_item_ad',['product'=>$product])
                @endforeach

                </div>
                {{$products->onEachSide(5)->withQueryString()->links('vendor.pagination.turyap-links')}}
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget utf-sidebar-widget-item">
                        <div class="utf-detail-banner-add-section">
                            <a href="#"><img
                                    src="https://www.port724.com/images/site/269364/photos/1499564456/o_1bkig5quefdd14dh1hq81671172a35.jpg"
                                    alt="banner-add-2"></a>
                        </div>
                    </div>


                    <!-- Widget -->
                    <div class="widget utf-sidebar-widget-item">
                        <div class="utf-boxed-list-headline-item">
                            <h3>Yeni Ev Bul</h3>
                        </div>
                        <div class="row with-forms">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select data-placeholder="Any Status" class="utf-chosen-select-single-item"
                                        style="display: none;">
                                    <option>Tümü</option>
                                    <option>Satılık</option>
                                    <option>Kiralık</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select data-placeholder="Any Type" class="utf-chosen-select-single-item"
                                        style="display: none;">
                                    <option>Tümü</option>
                                    <option>Daireler</option>
                                    <option>Evler</option>
                                    <option>Ticari</option>
                                    <option>Garajlar</option>
                                    <option>Çok</option>
                                </select>
                            </div>
                        </div>
                        <!-- Row / End -->

                        <!-- Row -->
                        <div class="row with-forms">
                            <div class="col-md-6">
                                <select data-placeholder="Beds" class="utf-chosen-select-single-item"
                                        style="display: none;">
                                    <option label="blank"></option>
                                    <option>Yataklar (Herhangi biri)</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <select data-placeholder="Baths" class="utf-chosen-select-single-item"
                                        style="display: none;">
                                    <option label="blank"></option>
                                    <option>Baths (Any)</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <!-- Row / End -->

                        <!-- Row -->
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <select data-placeholder="All States" class="chosen-select" style="display: none;">
                                    <option>All States</option>
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>Arizona</option>
                                    <option>Arkansas</option>
                                    <option>California</option>
                                    <option>Colorado</option>
                                    <option>Connecticut</option>
                                    <option>Delaware</option>
                                    <option>Florida</option>
                                    <option>Georgia</option>
                                </select>
                            </div>
                        </div>
                        <!-- Row / End -->

                        <!-- Row -->
                        <div class="row with-forms">
                            <div class="col-md-12">
                                <select data-placeholder="All Cities" class="chosen-select" style="display: none;">
                                    <option>All Cities</option>
                                    <option>New York</option>
                                    <option>Los Angeles</option>
                                    <option>Chicago</option>
                                    <option>Brooklyn</option>
                                    <option>Queens</option>
                                    <option>Houston</option>
                                    <option>Manhattan</option>
                                </select>
                            </div>
                        </div>
                        <!-- Row / End -->

                        <!-- Area Range -->
                        <!-- Area Range -->
                        <div class="utf-range-slider-item margin-top-10 margin-bottom-25">
                            <label>Alan Aralığı</label>
                            <div id="utf-area-range-item" data-min="0" data-max="1500" data-unit="m<sup>2</sup>"></div>
                            <div class="clearfix"></div>
                        </div>

                        <!-- Price Range -->
                        <div class="utf-range-slider-item margin-bottom-10">
                            <label>Fiyat Aralığı</label>
                            <div id="utf-price-range-item" data-min="0" data-max="400000" data-unit="$"></div>
                            <div class="clearfix"></div>
                        </div>

                        <!-- More Search Options -->
                        <a href="#" class="utf-utf-more-search-options-area-button margin-bottom-10 margin-top-20"
                           data-open-title="Daha Fazla" data-close-title="Daha Az"></a>
                        <div class="utf-more-search-options-area relative">
                            <div class="checkboxes one-in-row margin-bottom-10">
                                <input id="check-2" type="checkbox" name="check">
                                <label for="check-2">Air Conditioning</label>
                                <input id="check-3" type="checkbox" name="check">
                                <label for="check-3">Swimming Pool</label>
                                <input id="check-4" type="checkbox" name="check">
                                <label for="check-4">Central Heating</label>
                                <input id="check-5" type="checkbox" name="check">
                                <label for="check-5">Laundry Room</label>
                                <input id="check-6" type="checkbox" name="check">
                                <label for="check-6">Gym</label>
                                <input id="check-7" type="checkbox" name="check">
                                <label for="check-7">Alarm</label>
                                <input id="check-8" type="checkbox" name="check">
                                <label for="check-8">Window Covering</label>
                            </div>
                            <!-- Checkboxes / End -->
                        </div>
                        <!-- More Search Options / End -->
                        <button class="button fullwidth margin-top-10">Arama</button>
                    </div>
                    <!-- Widget / End -->

                    <!-- Widget -->
                    <div class="widget utf-sidebar-widget-item">
                        <div class="utf-boxed-list-headline-item">
                            <h3>Son Görüntülenen</h3>
                        </div>
                        <ul class="widget-tabs">
                            <!-- Post #1 -->
                            <li>
                                <div class="widget-content">
                                    <div class="widget-thumb"><a href="#"><img src="images/blog-widget-03.jpg"
                                                                               alt=""></a></div>
                                    <div class="widget-text">
                                        <h5><a href="#">İşe Alım Uzmanı Nasıl "Kurulur" ve Hayalinizdeki İşe Nasıl Yer
                                                Verilir</a></h5>
                                        <span>22.000 TL / ay</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>

                            <!-- Post #2 -->
                            <li>
                                <div class="widget-content">
                                    <div class="widget-thumb"><a href="#"><img src="images/blog-widget-02.jpg"
                                                                               alt=""></a></div>
                                    <div class="widget-text">
                                        <h5><a href="#">Hey İş Arayan, Kalkma ve İşe Alma Zamanı.</a></h5>
                                        <span>18.000 TL / ay</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>

                            <!-- Post #3 -->
                            <li>
                                <div class="widget-content">
                                    <div class="widget-thumb"><a href="#"><img src="images/blog-widget-01.jpg"
                                                                               alt=""></a></div>
                                    <div class="widget-text">
                                        <h5><a href="#">En İyi Kanadalı Tüccar Hesabı Sağlayıcıları.</a></h5>
                                        <span>15.000 TL / ay</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Widget / End-->

                    <!-- Widget -->
                    <div class="widget utf-sidebar-widget-item">
                        <div class="utf-boxed-list-headline-item">
                            <h3>Emlak Kategorisi</h3>
                            <div class="utf-sidebar-categorie">
                                <ul>
                                    <li><a href="#">Apartman</a><span>10 Emlak</span></li>
                                    <li><a href="#">Apartman dairesi</a><span>14 Emlak</span></li>
                                    <li><a href="#">Aile Evi</a><span>18 Emlak</span></li>
                                    <li><a href="#">Modern Villa</a><span>12 Emlak</span></li>
                                    <li><a href="#">Town House</a><span>10 Emlak</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Widget / End-->

                    <!-- Widget -->
                    <div class="widget utf-sidebar-widget-item">
                        <div class="utf-boxed-list-headline-item">
                            <h3>Özellik Etiketleri</h3>
                            <div class="task-tags">
                                <a href="#"><span>Apartman</span></a>
                                <a href="#"><span>Aile Evi</span></a>
                                <a href="#"><span>Modern Villa</span></a>
                                <a href="#"><span>Town House</span></a>
                                <a href="#"><span>Apartman dairesi</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget utf-sidebar-widget-item">
                        <div class="utf-boxed-list-headline-item">
                            <h3>Sosyal paylaşım</h3>
                        </div>
                        <ul class="utf-social-icons rounded">
                            <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                            <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Widget / End-->
                </div>
            </div>
            <!-- Sidebar / End -->
        </div>
    </div>
@endsection

