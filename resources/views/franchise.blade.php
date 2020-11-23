@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <h2>Franchise</h2>
            <p>1985 yılında kurulan Turyap, 300'e yakın yurtiçi ve yurtdışı temsilciliği ve 2000'ne yakın çalışanıyla
                gayrimenkul sektörünün en köklü ve yaygın organizasyonudur.
                Gayrimenkul danışmanlığını batıdaki gibi saygın ve popüler bir meslek olarak tanınmasını sağlayan
                Turyap,
                bu markayla ofis açanları seçkin bir kimlik sahibi yapmaktadır.</p>
            <p></p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_64h454ZIKA" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
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
                    <input type="text" name="city_turkey" class="form-control" placeholder="TEMSİLCİLİK İSTENİLEN İL (TÜRKİYE)">
                    <input type="text" name="city_germany" class="form-control" placeholder="TEMSİLCİLİK İSTENİLEN İL (ALMANYA)">
                    <input type="text" name="office_address" class="form-control" placeholder="ADAY OFİS ADRESİ (VARSA)">
                    <input type="submit" value="GÖNDER" style="width: 100%;text-align: center;padding-bottom: 10px;" class="text-center">
                </form>
            </div>
        </div>
    </div>
@endsection
