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
                {!! $page->body ?? '<p>İçerik Bulunamadı</p>' !!}
            </div>
        </div>
    </div>
@endsection
<!-- Footer -->
