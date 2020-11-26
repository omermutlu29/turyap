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
                                    src="{{asset('images/phototuryap.jpg')}}"
                                    alt="banner-add-2"></a>
                        </div>
                    </div>


                    <!-- Widget -->
                    @include('components.find_new_home')
                    <!-- Widget / End -->


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

                    <!-- Widget / End-->
                </div>
            </div>
            <!-- Sidebar / End -->
        </div>
    </div>
@endsection
@section('extra_script')
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

    </script>
@endsection
