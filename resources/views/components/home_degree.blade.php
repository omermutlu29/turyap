<section class="fullwidth" data-background-color="#fbfbfb" style="background: rgb(251, 251, 251);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf-section-headline-item centered margin-bottom-30 margin-top-0">

                    <div class="utf-headline-display-inner-item">Yeni Ofislerimiz</div>

                </div>
            </div>
            @foreach($degrees as $degree)
                <div class="col-md-4 col-sm-6">
                    <div class="utf-icon-box-item-area" style="background-image: url('{{Voyager::image($degree->image)}}')">
                        <div class="icon-container">
                        </div>
                        <h3>{{$degree->degree}}</h3>
                        <p>{{$degree->name_surname}}</p>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>


