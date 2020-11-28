<div class="container">
    <div class="row">
        <div class="col-md-12 margin-top-75">
            <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                <div class="utf-headline-display-inner-item">{{$type}} EN YENİLER</div>
                <p class="utf-slogan-text"></p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="carousel">
                @foreach($products as $product)
                    <div class="utf-carousel-item-area">
                        <div class="utf-listing-item compact">
                            <a href="{{route('product.show',$product->URUN_ID)}}" class="utf-smt-listing-img-container">
                                <div class="utf-listing-badges-item"><span class="featured">Öne Çıkan</span> <span
                                        class="for-sale">{{$type}}</span></div>
                                <div class="utf-listing-img-content-item">
                                    <span class="utf-listing-compact-title-item">{{$product->TANIM ?? ''}}<i>{{$product->currency->PARA}} {{str_replace(',','.',number_format($product->FIYAT))}}</i></span>
                                </div>
                                @if(count($product->images))
                                    <img src="http://test7.crealive.net/old/uploads/{{$product->agency->SIRKET_ID}}/{{$product->URUN_ID}}/{{$product->images[0]->RESIM_TYPE}}/{{$product->images[0]->RESIM_ADI}}/xsmall.jpg"
                                        alt="">
                                @else
                                    <img src="https://www.port724.com/images/firm/844029/products/57223170/photos/1604408666/1/4119887316125249.JPG"
                                         alt="">
                                @endif

                                <ul class="listing-hidden-content">
                                    <li><i class="fa fa-building"></i>Kat : <span>{{$product->current_floor->DEGER??'-'}}</span></li>
                                    <li><i class="icon-feather-codepen"></i> Banyo Sayısı :<span>{{$product->bath_count->DEGER ?? '1'}}</span></li>
                                    <li><i class="icon-line-awesome-arrows"></i>BRÜT <span>{{$product->ALAN}}</span> m<sup>2</sup></li>
                                    <li><i class="icon-line-awesome-arrows"></i>NET <span>{{$product->ALAN_NET}}</span> m<sup>2</sup></li>
                                </ul>
                            </a>
                        </div>
                    </div>
            @endforeach
            <!-- Listing Item / End -->
            </div>
        </div>
        <!-- Carousel / End -->
    </div>
</div>  <!-- Featured -->
