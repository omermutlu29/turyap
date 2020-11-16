<div class="utf-listing-item"><a href="single-property-page-1.html"
                                 class="utf-smt-listing-img-container">
        <div class="utf-listing-badges-item"><span
                class="for-sale">{{$product->category->kategori}}</span></div>

        <div class="utf-listing-carousel-item">
            @if(count($product->images)>0)
            <div><img
                    src="https://www.port724.com/images/firm/893169/products/61353114/photos/1604407763/1/42652853155749357.JPG"
                    alt=""></div>
            <div><img
                    src="https://www.port724.com/images/firm/893169/products/61353114/photos/1604407763/1/42652853155749357.JPG"
                    alt=""></div>
            <div><img
                    src="https://www.port724.com/images/firm/893169/products/61353114/photos/1604407763/1/42652853155749357.JPG"
                    alt=""></div>
            @endif
        </div>
    </a>
    <div class="utf-listing-content">
        <div class="utf-listing-title">
            <span class="utf-listing-price">{{$product->currency->para}} {{str_replace(',','.',number_format($product->fiyat))}}</span>
            <h4><a href="{{route('product.show',$product->urun_id)}}">{{$product->tanim}}</a></h4>
            <span class="utf-listing-address"><i class="icon-material-outline-location-on"></i> {{$product->city->city}} / {{$product->town->town}}</span>
        </div>
        <ul class="utf-listing-features">
            <li><i class="fa fa-building"></i>Kat : <span>{{$product->current_floor->deger??'-'}}</span> </li>
            <li><i class="icon-feather-codepen"></i> Banyo Sayısı :<span>{{$product->bath_count->deger ?? '1'}}</span></li>
            <li><i class="icon-line-awesome-arrows"></i>BRÜT <span>{{$product->alan}}</span> m<sup>2</sup></li>
            <li><i class="icon-line-awesome-arrows"></i>NET <span>{{$product->alan_net}}</span> m<sup>2</sup></li>
        </ul>
        <div class="utf-listing-user-info"><a href="{{route('agent.show',$product->agent->user_id)}}"><i
                    class="icon-line-awesome-user"></i>{{$product->agent->adi}} {{$product->agent->soyadi}} {{$product->agent->gsm}}</a>
        </div>
    </div>
</div>
