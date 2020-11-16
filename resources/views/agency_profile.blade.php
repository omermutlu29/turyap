@extends('layouts.master')
@section('content')
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Agency -->
                <div class="agent agents-profile agency"><a href="{{route('agency.show',$agency->sirket_id)}}"
                                                            class="utf-agent-avatar"> <img
                            src="{{asset('images/agency-01.jpg')}}" alt=""> </a>
                    <div class="utf-agent-content">
                        <div class="utf-agent-name">
                            <h4><a href="{{route('agency.show',$agency->sirket_id)}}">{{$agency->sirket_id}}</a></h4>
                            <ul class="utf-agent-contact-details">
                                <li><i class="icon-material-outline-business"></i>{{$agency->country->country_name}}
                                    /{{$agency->city->city}}</li>
                                <li><i class="icon-feather-smartphone"></i>{{$agency->telefon}}</li>
                                <li><i class="icon-material-outline-email"></i><a href="#">{{$agency->email ?? '-'}}</a>
                                </li>
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
                        <p>{{$agency->adres_satiri}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="row sticky-wrapper">
            <div class="col-lg-8 col-md-8">
                <div class="style-1 agency-tabs">
                    <!-- Tabs Navigation -->
                    <ul class="tabs-nav">
                        <li class="active"><a href="#tab1">İLANLARIMIZ</a></li>
                        <li><a href="#tab2">DANIŞMANLARIMIZ</a></li>
                    </ul>

                    <!-- Tabs Content -->
                    <div class="tabs-container">
                        <div class="tab-content" id="tab1">
                            <!-- Sorting -->
                            <div class="utf-sort-box-aera">
                                <div class="sort-by">
                                    <label>Sort By:</label>
                                    <div class="sort-by-select">
                                        <select data-placeholder="Default Properties"
                                                class="utf-chosen-select-single-item">
                                            <option>Default Properties</option>
                                            <option>Low to High Price</option>
                                            <option>High to Low Price</option>
                                            <option>Newest Properties</option>
                                            <option>Oldest Properties</option>
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
                                <!-- Listing Item -->
                                @foreach($products as $product)
                                    @include('components.utf_list_item_ad',['product'=>$product])
                                @endforeach
                            </div>
                            <!-- Listings Container / End -->

                            <!-- Pagination -->
                            <div class="utf-pagination-container margin-top-20">
                                <nav class="pagination">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#" class="current-page">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="blank">...</li>
                                        <li><a href="#">10</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Pagination / End -->
                        </div>
                        <div class="tab-content" id="tab2">
                            <!-- Agents Container -->
                            <div class="row">

                            @foreach($agency->agents as $agent)
                                @include('components.agent',['agent'=>$agent])
                            @endforeach
                            <!-- Agent / End -->

                                <!-- Agent -->

                                <!-- Agent / End -->
                            </div>
                            <!-- Agents Container / End -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-4">
                <div class="sidebar">
                    <div class="widget utf-sidebar-widget-item">
                        <div class="utf-detail-banner-add-section">
                            <a href="#"><img src="{{asset('images/banner-add-2.jpg')}}" alt="banner-add-2"></a>
                        </div>
                    </div>

                    <div class="utf-sidebar-widget-item">
                        <div class="utf-boxed-list-headline-item">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="widget">
                            <div class="agefnt-widget">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Phone">
                                <textarea>Message...</textarea>
                                <button class="button fullwidth margin-top-5">Send Message</button>
                            </div>
                        </div>
                    </div>
                    <!-- Widget / End -->

                    <!-- Widget -->
                    <div class="utf-sidebar-widget-item">
                        <div class="utf-boxed-list-headline-item">
                            <h3>Our Location</h3>
                        </div>
                        <div class="widget">
                            <div id="propertyMap-container" class="agency-map">
                                <div id="propertyMap" data-latitude="48.8566" data-longitude="2.3522"
                                     data-map-icon="im im-icon-Hamburger"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Widget / End -->

                </div>
            </div>
            <!-- Sidebar / End -->

        </div>
    </div>
@endsection
<!-- Maps -->
@section('extra_script')
    <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>
    <script src="{{asset('scripts/infobox.min.js')}}"></script>
    <script src="{{asset('scripts/markerclusterer.js')}}"></script>
    <script src="{{asset('scripts/maps.js')}}"></script>
@endsection

