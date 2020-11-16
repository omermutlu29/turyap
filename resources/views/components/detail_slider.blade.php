<div class="container">
    <div class="row margin-bottom-50">
        <div class="col-md-12">
            <!-- Titlebar -->
            <div id="titlebar-dtl-item" class="property-titlebar margin-bottom-20">
                <div class="property-title">
                    <div class="property-pricing">{{$product->currency->para}} {{str_replace(',','.',number_format($product->fiyat))}}</div>
                    <h2>{{$product->tanim}}<span class="property-badge-sale">{{$product->category->kategori}}</span></h2>
                    @if($product->lat && $product->lot)<span class="utf-listing-address"><i class="icon-material-outline-location-on"></i><a href="https://www.google.com/maps/search/?api=1&query={{$product->lat}},{{$product->lot}}" target="_blank"> Lokasyon </a></span>@endif
                    <ul class="property-main-features">
                        <li>Kat : <span>{{$product->current_floor->deger??'-'}}</span></li>
                        <li>Banyo Sayısı :<span>{{$product->bath_count->deger ?? '1'}}</span></li>
                        <li>BRÜT <span>{{$product->alan}}</span> m<sup>2</sup></li>
                        <li>NET <span>{{$product->alan_net}}</span> m<sup>2</sup></li>
                    </ul>
                </div>
            </div>
            <!-- Slider -->
            <div class="property-slider default">
                <a href="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" data-background-image="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" class="item mfp-gallery"></a>
                <a href="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" data-background-image="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" class="item mfp-gallery"></a>
                <a href="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" data-background-image="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" class="item mfp-gallery"></a>
                <a href="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" data-background-image="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" class="item mfp-gallery"></a>
                <a href="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" data-background-image="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" class="item mfp-gallery"></a>
                <a href="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" data-background-image="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" class="item mfp-gallery"></a>
            </div>
            <!-- Slider Thumbs -->
            <div class="property-slider-nav">
                <div class="item"><img src="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" alt=""></div>
                <div class="item"><img src="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" alt=""></div>
                <div class="item"><img src="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" alt=""></div>
                <div class="item"><img src="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" alt=""></div>
                <div class="item"><img src="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" alt=""></div>
                <div class="item"><img src="https://www.port724.com/images/firm/893169/products/62576427/photos/1604407443/0/43050823155228708.JPG" alt=""></div>
            </div>
        </div>
    </div>
</div>
