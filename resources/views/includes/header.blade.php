<header id="header-container" class="fullwidth">
    <!-- Header -->
    <div id="header">
        <div class="container">
            <div class="left-side">
                <div id="logo"><a href="{{url('/')}}"><img src="{{asset('images/logo.png?')}}" alt=""></a></div>

                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li><a class="current" href="#">ANA SAYFA</a>
                        </li>
                        <li><a href="{{route('about')}}">HAKKIMIZDA</a></li>
                        <li><a href="{{route('agency.list')}}">OFİSLERİMİZ</a></li>
                        <li><a href="{{route('agent.list')}}">DANIŞMANLARIMIZ</a></li>
                        <li><a href="{{route('product.index')}}">İLANLARIMIZ</a></li>
                        <li><a href="#">FRANCHISE</a></li>
                        <li><a href="https://turyapemlak.com.tr/">MÜZAYEDE</a></li>


                        <li><a href="#">HABERLER</a></li>
                        <li><a href="/">İŞTİRAKLERİMİZ</a>
                            <ul>
                                <li><a href="/">EMLAK HABER</a></li>
                                <li><a href="">TAM NOKTA</a></li>
                                <li><a href="">TAM ÇÖZÜM</a></li>
                                <li><a href="">TWORK</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            <div class="right-side">
                <ul class="right-menu hidden-xs hidden-sm">
                    <li><a href="">FRANCHISE</a></li>
                    <li><a href="">TURYAPNET</a></li>
                </ul>
                <div class="header-widget">
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
