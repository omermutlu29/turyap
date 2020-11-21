<div class="parallax titlebar" data-background="{{asset('images/ornek.jpg')}}" data-color="rgba(48, 48, 48, 1)" data-color-opacity="0.8" data-img-width="800" data-img-height="505">
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{{$title ?? ' '}}</h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route('index')}}">Anasayfa</a></li>
                            <li>{{$title ?? ''}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
