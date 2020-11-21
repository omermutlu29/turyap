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
                                    <div class="utf-agent-avatar"><a href="{{route('agent.show',$agent->USER_ID)}}">
                                            <img src="{{asset('images/agent-01.jpg')}}" alt=""> <span
                                                class="view-profile-btn">Profili Göster</span> </a></div>
                                    <div class="utf-agent-content">
                                        <div class="utf-agent-name">
                                            <h4>
                                                <a href="{{route('agent.show',$agent->USER_ID)}}">{{$agent->ADI}} {{$agent->SOYADI}} {{$agent->GSM}}</a>
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
                {{$agents->onEachSide(5)->withQueryString()->links('vendor.pagination.turyap-links')}}

            <!-- Pagination / End -->
            </div>
        </div>
    </div>
@endsection
