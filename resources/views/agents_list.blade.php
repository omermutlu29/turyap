@extends('layouts.master')
@section('content')
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="utf-agents-container-area">
                    @foreach($agents as $agent)
                        <!-- Agent -->
                            <div class="grid-item col-lg-3 col-md-4 col-sm-6 col-xs-12" style="min-height: 400px">
                                <div class="agent">
                                    <div class="utf-agent-avatar"><a href="{{route('agent.show',$agent->user_id)}}">
                                            <img src="{{asset('images/agent-01.jpg')}}" alt=""> <span
                                                class="view-profile-btn">Profili Göster</span> </a></div>
                                    <div class="utf-agent-content">
                                        <div class="utf-agent-name">
                                            <h4>
                                                <a href="{{route('agent.show',$agent->user_id)}}">{{$agent->adi}} {{$agent->soyadi}} {{$agent->gsm}}</a>
                                            </h4>
                                            <span>{{$agent->agency->city->city ?? ''}} {{$agent->agency->town->town ??''}} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- Agent / End -->

                    </div>
                    <!-- Agents Container / End -->
                </div>
            </div>
            <div class="col-md-12">
                <div class="clearfix"></div>
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
        </div>
    </div>
@endsection
