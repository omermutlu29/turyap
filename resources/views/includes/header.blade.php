<header id="header-container" class="fullwidth">
    <!-- Header -->
    <div id="header">
        <div class="container">
            <div class="left-side">
                <div id="logo"><a href="{{url('/')}}"><img src="{{asset('images/logo.png?')}}" alt=""></a></div>

                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li><a class="current" href="{{url('/')}}">ANA SAYFA</a>
                        </li>
                        <li><a href="{{route('page',['page'=>'hakkimizda'])}}">HAKKIMIZDA</a></li>
                        <li><a href="{{route('agency.list')}}">OFİSLERİMİZ</a></li>
                        <li><a href="{{route('agent.list')}}">DANIŞMANLARIMIZ</a></li>
                        <li><a href="{{route('product.index')}}">İLANLARIMIZ</a></li>
                        <li><a href="{{route('contact')}}">İLETİŞİM</a></li>
                        <li><a href="{{route('franchise')}}">FRANCHISE</a></li>
                        <li><a href="{{route('page',['page'=>'muzayede'])}}">MÜZAYEDE</a></li>
                        <li><a href="{{route('page',['page'=>'turyap-global'])}}">TURYAP GLOBAL</a></li>
                        <li><a href="{{route('page',['page'=>'turyap-global'])}}">TURYAPNET</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
            <div class="right-side">
                <ul class="right-menu hidden-xs hidden-sm">
                    <li><a href="{{url('franchise')}}">FRANCHISE</a></li>
                    <li><a href="{{route('page',['page'=>'muzayede'])}}">TURYAPNET</a></li>
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
