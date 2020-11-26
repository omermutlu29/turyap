@extends('layouts.master')
@section('content')
    <!-- Contact -->
    <div class="margin-top-65 padding-bottom-55">
        <div class="container">
            @if($page->image)
                <div class="row">
                    <img src="{{Voyager::image($page->image)}}" alt="">
                </div>
            @endif
            <div class="row">
                @if($is_form_page > 0)
                    <div class="col-md-6">
                        {!! $page->body ?? '<p>İçerik Bulunamadı</p>' !!}
                    </div>
                    <div class="col-md-6">
                        <h3>Temsilcilik Başvuru Formu</h3>
                        @if(session('notification'))
                            <h5>{{session('notification')}}</h5>
                        @endif
                        <form action="{{route('franchise.post')}}" method="POST" class="form">
                            @csrf
                            <input type="text" name="name" class="form-control" placeholder="AD SOYAD">
                            <textarea name="address" id="" cols="30" rows="3" placeholder="İKAMET ADRESİ"></textarea>
                            <input type="text" name="home_phone" class="form-control" placeholder="EV/İŞ TELEFONU">
                            <input type="text" name="gsm" class="form-control" placeholder="CEP TELEFONU">
                            <input type="text" name="email" class="form-control" placeholder="E-POSTA">
                            <input type="text" name="education" class="form-control" placeholder="ÖĞRENİM DURUMU">
                            <input type="text" name="job" class="form-control" placeholder="MESLEK">
                            <input type="text" name="city_turkey" class="form-control"
                                   placeholder="TEMSİLCİLİK İSTENİLEN İL (TÜRKİYE)">
                            <input type="text" name="city_germany" class="form-control"
                                   placeholder="TEMSİLCİLİK İSTENİLEN İL (ALMANYA)">
                            <input type="text" name="office_address" class="form-control"
                                   placeholder="ADAY OFİS ADRESİ (VARSA)">
                            <input type="submit" value="GÖNDER"
                                   style="width: 100%;text-align: center;padding-bottom: 10px;" class="text-center">
                        </form>
                    </div>
                @else
                    <div class="col-md-12">
                        {!! $page->body ?? '<p>İçerik Bulunamadı</p>' !!}
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
<!-- Footer -->
