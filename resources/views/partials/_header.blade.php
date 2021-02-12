<header id="header">
    <div id="header-top">
        <div class="container">
            <img src="{{asset('img/logo.png')}}" alt="logo">
        </div>
    </div>
    <nav id="navbar">
        <ul class="menu">
            <li class="link"><a href="{{ route('home') }}" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">home</a></li>
            <li class="link"><a href="{{ route('prodotti') }}" class="{{Route::currentRouteName() === 'prodotti' ? 'active' : ''}}">prodotti</a></li>
            <li class="link"><a href="{{ route('contatti') }}" class="{{Route::currentRouteName() === 'contatti' ? 'active' : ''}}">contatti</a></li>
        </ul>
    </nav>
    <!-- /#navbar -->
    <!-- /#header-top -->
</header>
<!-- /#header -->