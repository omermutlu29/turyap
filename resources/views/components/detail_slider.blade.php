<div class="container">
    <div class="row margin-bottom-50">
        <div class="col-md-12">
            <!-- Titlebar -->
            <div id="titlebar-dtl-item" class="property-titlebar margin-bottom-20">
                <div class="property-title">
                    <div
                        class="property-pricing">{{$product->currency->PARA}} {{str_replace(',','.',number_format($product->FIYAT))}}</div>
                    <h2>{{$product->TANIM}}<span class="property-badge-sale">{{$product->category->KATEGORI}}</span>
                    </h2>
                    @if($product->LAT && $product->LOT)<span class="utf-listing-address"><i
                            class="icon-material-outline-location-on"></i><a
                            href="https://www.google.com/maps/search/?api=1&query={{$product->LAT}},{{$product->LOT}}"
                            target="_blank"> Lokasyon </a></span>@endif
                    <ul class="property-main-features">
                        <li>Kat : <span>{{$product->current_floor->DEGER??'-'}}</span></li>
                        <li>Banyo Sayısı :<span>{{$product->bath_count->DEGER ?? '1'}}</span></li>
                        <li>BRÜT <span>{{$product->ALAN}}</span> m<sup>2</sup></li>
                        <li>NET <span>{{$product->ALAN_NET}}</span> m<sup>2</sup></li>
                    </ul>
                </div>
            </div>
            <!-- Slider -->
            <div class="property-slider default" >
                @foreach($product->images as $image)
                    <a style="min-height: 500px;" href="http://test7.crealive.net/old/uploads/{{$product->agency->SIRKET_ID}}/{{$product->URUN_ID}}/{{$image->RESIM_TYPE}}/{{$image->RESIM_ADI}}/original.jpg"
                       data-background-image="http://test7.crealive.net/old/uploads/{{$product->agency->SIRKET_ID}}/{{$product->URUN_ID}}/{{$image->RESIM_TYPE}}/{{$image->RESIM_ADI}}/original.jpg"
                       class="item mfp-gallery"></a>
                @endforeach
            </div>
            <!-- Slider Thumbs -->

            <div class="property-slider-nav">
                @foreach($product->images as $image)
                    <div class="item"><img style="min-height: 200px;max-height: 200px;"
                            src="http://test7.crealive.net/old/uploads/{{$product->agency->SIRKET_ID}}/{{$product->URUN_ID}}/{{$image->RESIM_TYPE}}/{{$image->RESIM_ADI}}/small.jpg"
                            alt=""></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
