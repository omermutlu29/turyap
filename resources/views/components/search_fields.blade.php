<div class="utf-more-search-options-area" id="">
    <div class="utf-more-search-options-area-container">
        <div class="row with-forms">

            <div class="col-md-3">
                <select data-placeholder="İL" name="city" class="chosen-select"
                        style="display: none;" id="city">
                    <option value="">İL</option>
                    @foreach(\App\Models\City::where('countryID',1)->get() as $city)
                        <option value="{{$city->cityID}}">{{$city->city}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <select data-placeholder="İLÇE" name="town"
                        class="chosen-select"
                        style="display: none;" id="town">
                    <option value=""></option>
                </select>
            </div>

            <div class="col-md-3">
                <select name="type"
                        class="utf-chosen-select-single-item">

                    <option value=""> Mülk Türü</option>
                    @foreach(\App\Models\ProductType::all() as $type)
                        <option
                            value="{{$type->CINSI_ID}}"> {{$type->CINSI}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <select name="room_count"
                        class="utf-chosen-select-single-item">
                    <option value="">Oda Sayısı</option>
                    @foreach(\App\Models\RoomCount::all() as $roomCount)
                        <option
                            value="{{$roomCount->ODASAYISI_ID}}">{{$roomCount->DEGER}}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-md-3">
                <div class="select-input">
                    <input type="number" name="min_price"
                           placeholder="Min Fiyat"
                           data-unit="TL">
                </div>
            </div>
            <div class="col-md-3">
                <div class="select-input">
                    <input type="number" name="max_price"
                           placeholder="Max Fiyat"
                           data-unit="TL">
                </div>
            </div>
            <div class="col-md-3">
                <div class="select-input">
                    <input type="number" name="min_place" placeholder="Min Alan"
                           data-unit="m2">
                </div>
            </div>
            <div class="col-md-3">
                <div class="select-input">
                    <input type="number" name="max_place" placeholder="Max Alan"
                           data-unit="m2">
                </div>
            </div>
        </div>
    </div>
</div>
