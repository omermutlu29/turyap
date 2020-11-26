<section class="fullwidth" data-background-color="#fbfbfb" style="background: rgb(251, 251, 251);">
    <div class="container">
        <div class="row" style="margin-bottom: 75px;">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">
                    <div class="utf-headline-display-inner-item">YENİ OFİSLERİMİZ</div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($degrees as $degree)
                <div class="col-md-4 col-sm-6">
                    <div class="utf-icon-box-item-area"
                         style="background-image: url('{{Voyager::image($degree->image)}}');
                             background-size: cover;
                             background-position: center;
                             height: 400px;
                             width: 300px;">

                    </div>
                </div>
            @endforeach
        </div>


    </div>
</section>


