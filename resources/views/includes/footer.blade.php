<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <a href="{{route('index')}}"><img class="footer-logo" src="{{asset('images/footer_logo.png')}}" alt=""></a>
                <p>{{setting('site.footer_text')}}</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h4>Sayfalar</h4>
                <ul class="utf-footer-links-item">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li><a href="{{route('page',['page'=>'hakkimizda'])}}">Hakkımızda</a></li>
                    <li><a href="{{route('franchise')}}">Franchise</a></li>
                    <li><a href="{{route('page',['page'=>'turyap-global'])}}">Turyap Global</a></li>
                    <li><a href="{{route('page',['page'=>'muzayede'])}}">Müzayede</a></li>
                    <li><a href="{{route('contact')}}">İletişim</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-6">
                <h4>Kaynaklar</h4>
                <ul class="utf-footer-links-item">
                    <li><a href="{{route('product.index')}}">İlanlar</a></li>
                    <li><a href="{{route('agency.list')}}">Acentalar</a></li>
                    <li><a href="{{route('agent.list')}}">Danışmanlar</a></li>
                    <li><a href="{{route('page',['page'=>'banka-gayrimenkulleri'])}}">Banka Gayrimenkulleri</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <h4>Gizlilik ve Politikalar</h4>
                <ul class="utf-footer-links-item">
                    <li><a href="#">Gizlilik Sözleşmesi</a></li>
                    <li><a href="#">Koşullar ve Şartlar</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights">Copyright © 2020 All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>
