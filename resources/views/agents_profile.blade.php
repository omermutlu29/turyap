@extends('layouts.master')
@section('content')
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Agency -->
                <div class="agent agents-profile agency margin-bottom-40"><a
                        href="{{route('agent.show',$agent->USER_ID)}}" class="utf-agent-avatar"> <img
                            src="{{asset('images/agency-01.jpg')}}" alt=""> </a>
                    <div class="utf-agent-content">
                        <div class="utf-agent-name">
                            <h4><a href="agency-profile.html">{{$agent->ADI}} {{$agent->SOYADI}} {{$agent->GSM}}</a>
                            </h4>
                            <ul class="utf-agent-contact-details">
                                <li><i class="icon-feather-smartphone"></i>{{$agent->GSM}}</li>
                                <li><i class="icon-material-outline-email"></i><a href="#">{{$agent->EMAIL}}</a></li>
                            </ul>
                            <ul class="utf-social-icons">
                                <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                                <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="row sticky-wrapper">
            <div class="col-lg-8 col-md-8">
                <div class="utf-desc-headline-item margin-top-0">
                    <h3><i class="icon-material-outline-description"></i> İLANLAR</h3>
                </div>
                <!-- Sorting -->
                <div class="utf-sort-box-aera">
                    <div class="sort-by">
                        <label>Şuna Göre Sırala:</label>
                        <div class="sort-by-select">
                            <select data-placeholder="Seçin" class="utf-chosen-select-single-item">
                                <option value="">Seçin</option>
                                <option value="price_asc">Fiyata Göre Artan</option>
                                <option value="price_desc">Fiyata Göre Azalan</option>
                                <option value="new">Önce En Yeni</option>
                                <option value="old">Önce En Eski</option>
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
                    <!-- Listing Item  İLANLAR-->
                @foreach($products as $product)
                    @include('components.utf_list_item_ad',['product'=>$product])
                @endforeach
                <!-- Listing Item / End -->
                </div>
                <!-- Listings Container / End -->

                <!-- Pagination -->
            {{$products->onEachSide(5)->withQueryString()->links('vendor.pagination.turyap-links')}}

            <!-- Pagination / End -->
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-4">
                <div class="sidebar">
                    <!-- Widget -->
                    <div class="widget utf-sidebar-widget-item">
                        <div class="utf-detail-banner-add-section">
                            <a href="#"><img src="{{asset('images/banner-add-2.jpg')}}" alt="banner-add-2"></a>
                        </div>
                    </div>
                    <!-- Widget / End-->
                    <!-- Widget -->
                @include('components.find_new_home')
                <!-- Widget / End -->

                <!-- Widget / End -->
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

