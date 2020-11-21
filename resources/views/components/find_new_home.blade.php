<form method="GET" action="{{route('product.filter')}}" id="form">
<div class="widget utf-sidebar-widget-item">
    <div class="utf-boxed-list-headline-item">
        <h3>Yeni Ev Bul</h3>
    </div>
    <div class="row with-forms">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <select name="category"
                    class="utf-chosen-select-single-item">
                <option value="">İlan Tipi</option>
                <option value="">Hepsi</option>
                @foreach(\App\Models\Category::all() as $category)
                    <option
                        value="{{$category->kategori_id}}">{{$category->kategori}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <select name="type"
                    class="utf-chosen-select-single-item">

                <option value=""> Mülk Türü</option>
                @foreach(\App\Models\ProductType::all() as $type)
                    <option
                        value="{{$type->cinsi_id}}"> {{$type->cinsi}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- Row / End -->

    <!-- Row -->
    <div class="row with-forms">
        <div class="col-md-6">
            <select name="room_count"
                    class="utf-chosen-select-single-item">
                <option value="">Oda Sayısı</option>
                @foreach(\App\Models\RoomCount::all() as $roomCount)
                    <option
                        value="{{$roomCount->odasayisi_id}}">{{$roomCount->deger}}</option>
                @endforeach

            </select>
        </div>

        <div class="col-md-6">
            <select name="bath_count"
                    class="utf-chosen-select-single-item">
                <option value="">Banyo</option>
                @foreach(\App\Models\BathCount::all() as $bathCount)
                    <option
                        value="{{$bathCount->banyosayisi_id}}">{{$bathCount->deger}}
                        Banyo
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- Row / End -->

    <!-- Row -->
    <div class="row with-forms">
        <div class="col-md-12">
            <select data-placeholder="ÜLKE" name="country" class="chosen-select" style="display: none;" id="country">
                <option value=""></option>
                @foreach(\App\Models\Country::all() as $country)
                    <option value="{{$country->countryID}}">{{$country->countryName}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- Row / End -->

    <!-- Row -->
    <div class="row with-forms">
        <div class="col-md-12">
            <select data-placeholder="İL" name="city" class="chosen-select" style="display: none;" id="city">
                <option value=""></option>
            </select>
        </div>
    </div>
    <div class="row with-forms">
        <div class="col-md-12">
            <select data-placeholder="İLÇE" name="town" class="chosen-select" style="display: none;" id="town">
                <option value=""></option>
            </select>
        </div>
    </div>
    <!-- Row / End -->

    <!-- Area Range -->
    <!-- Area Range -->
    <div class="utf-range-slider-item margin-top-10 margin-bottom-25">
        <label>Alan Aralığı</label>
        <div id="utf-area-range-item" data-min="0" data-max="1500" data-unit="m2"></div>
        <div class="clearfix"></div>
    </div>

    <!-- Price Range -->
    <div class="utf-range-slider-item margin-bottom-10">
        <label>Fiyat Aralığı</label>
        <div id="utf-price-range-item" data-min="0" data-max="400000" data-unit="TL "></div>
        <div class="clearfix"></div>
    </div>



    <button class="button fullwidth margin-top-20">Arama</button>
</div>
</form>

