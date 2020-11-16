@extends('layouts.master')
@section('content')
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Agency -->
                <div class="agent agents-profile agency margin-bottom-40"> <a href="{{route('agent.show',$agent->user_id)}}" class="utf-agent-avatar"> <img src="{{asset('images/agency-01.jpg')}}" alt=""> </a>
                    <div class="utf-agent-content">
                        <div class="utf-agent-name">
                            <h4><a href="agency-profile.html">{{$agent->adi}} {{$agent->soyadi}} {{$agent->gsm}}</a></h4>
                            <ul class="utf-agent-contact-details">
                                <li><i class="icon-feather-smartphone"></i>{{$agent->gsm}}</li>
                                <li><i class="icon-material-outline-email"></i><a href="#">{{$agent->email}}</a></li>
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
                    <h3><i class="icon-material-outline-description"></i> My Listings</h3>
                </div>
                <!-- Sorting -->
                <div class="utf-sort-box-aera">
                    <div class="sort-by">
                        <label>Sort By:</label>
                        <div class="sort-by-select">
                            <select data-placeholder="Default Properties" class="utf-chosen-select-single-item" >
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
                    <!-- Listing Item  İLANLAR-->
                    @foreach($agent->products as $product)
                        @include('components.utf_list_item_ad',['product'=>$product])
                    @endforeach
                    <!-- Listing Item / End -->
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
                    <!-- Widget -->
                    @include('components.featured_props')
                    <!-- Widget / End -->
                </div>
            </div>
            <!-- Sidebar / End -->
        </div>
    </div>
@endsection
