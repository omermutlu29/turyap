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
                            value="{{$category->KATEGORI_ID}}">{{$category->KATEGORI}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <select name="type"
                        class="utf-chosen-select-single-item">

                    <option value=""> Mülk Türü</option>
                    @foreach(\App\Models\ProductType::all() as $type)
                        <option
                            value="{{$type->CINSI_ID}}"> {{$type->CINSI}}</option>
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
                            value="{{$roomCount->ODASAYISI_ID}}">{{$roomCount->DEGER}}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-md-6">
                <select name="bath_count"
                        class="utf-chosen-select-single-item">
                    <option value="">Banyo</option>
                    @foreach(\App\Models\BathCount::all() as $bathCount)
                        <option
                            value="{{$bathCount->BANYOSAYISI_ID}}">{{$bathCount->DEGER}}
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
                <select data-placeholder="ÜLKE" name="country" class="chosen-select" style="display: none;"
                        id="country">
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
        <div class="row with-forms">
            <div class="col-md-6">
                <input type="number" name="min_price" value="{{\request()->has('min_price') ? \request()->get('min_price') : ''}}" placeholder="Minimum Fiyat">
            </div>
            <div class="col-md-6">
                <input type="number" name="max_price" value="{{\request()->has('max_price') ? \request()->get('max_price') : ''}}" placeholder="Maksimum Fiyat">
            </div>
        </div>

        <div class="row with-forms">
            <div class="col-md-6">
                <input type="number" name="min_place" value="{{\request()->has('min_place') ? \request()->get('min_place') : ''}}" placeholder="Minimum Alan">
            </div>
            <div class="col-md-6">
                <input type="number" name="max_place" value="{{\request()->has('max_place') ? \request()->get('max_place') : ''}}" placeholder="Maksimum Alan">
            </div>
        </div>

        <button class="button fullwidth margin-top-20">Arama</button>
    </div>
</form>

