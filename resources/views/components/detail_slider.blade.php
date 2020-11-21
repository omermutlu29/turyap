<div class="container">
    <div class="row margin-bottom-50">
        <div class="col-md-12">
            <!-- Titlebar -->
            <div id="titlebar-dtl-item" class="property-titlebar margin-bottom-20">
                <div class="property-title">
                    <div class="property-pricing">{{$product->currency->PARA}} {{str_replace(',','.',number_format($product->FIYAT))}}</div>
                    <h2>{{$product->TANIM}}<span class="property-badge-sale">{{$product->category->KATEGORI}}</span></h2>
                    @if($product->LAT && $product->LOT)<span class="utf-listing-address"><i class="icon-material-outline-location-on"></i><a href="https://www.google.com/maps/search/?api=1&query={{$product->LAT}},{{$product->LOT}}" target="_blank"> Lokasyon </a></span>@endif
                    <ul class="property-main-features">
                        <li>Kat : <span>{{$product->current_floor->DEGER??'-'}}</span></li>
                        <li>Banyo Sayısı :<span>{{$product->bath_count->DEGER ?? '1'}}</span></li>
                        <li>BRÜT <span>{{$product->ALAN}}</span> m<sup>2</sup></li>
                        <li>NET <span>{{$product->ALAN_NET}}</span> m<sup>2</sup></li>
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
