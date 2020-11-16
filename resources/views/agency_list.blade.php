@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($agencies as $agency)
                <div class="col-md-6">
                    <div class="agent agents-profile agency" style="min-height: 300px"><a href="{{route('agency.show',$agency->sirket_id)}}"
                                                                class="utf-agent-avatar"> <img
                                src="{{asset('images/agency-01.jpg')}}" alt=""> </a>
                        <div class="utf-agent-content">
                            <div class="utf-agent-name">
                                <h4><a href="{{route('agency.show',$agency->sirket_id)}}">{{$agency->sirket_adi}}</a></h4>
                                <ul class="utf-agent-contact-details">
                                    <li>
                                        <i class="icon-material-outline-business"></i>{{$agency->country->country_name}}
                                        /{{$agency->city->city}}</li>
                                    <li><i class="icon-feather-smartphone"></i>{{$agency->telefon}}</li>
                                    <li><i class="icon-material-outline-email"></i><a href="#">{{$agency->email}}</a>
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
            @endforeach

        </div>
    </div>
@endsection
