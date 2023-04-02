<header class="header header-headroom" id="header" data-plugin="headroom" data-options='{"offset":100,"tolerance":5}'>
    <div class="header-top">
        <div class="container">
            <button class="navbar-toggle hamburger hamburger--slider d-lg-none" id="navbar-toggle"><span
                        class="hamburger-box d-block"><span class="hamburger-inner"></span></span></button>
            <a class="header-logo" href="{{$home['menu']['logo_href'] ?? "https://dinotech.edu.vn"}}">
                <img class="header-logo-img" src="{{URL::asset($home['menu']['logo'] ?? '/images/logo-dino.png')}}" alt="">
            </a>
            <form class="search header-search search-simple search-pill me-3 d-none d-lg-block"
                  action="{{URL::asset('search')}}"
                  method="GET"
            >
                <div class="input-group">
                    <input class="form-control" placeholder="Tìm kiếm" name="title" />
                    <button class="btn btn-primary" type="submit">
                        <svg class="iconsvg-search">
                            <use xlink:href="{{URL::asset('/images/sprite.svg#search')}}"></use>
                        </svg>
                        <span class="visually-hidden">Tìm kiếm</span>
                    </button>
                </div>
            </form>

            <div class="header-hotline hotline d-none d-lg-flex ms-auto">
                <a class="hotline-item" href="tel:{{$home['menu']['hotline'] ?? '02462947586' }}">
                    <span class="hotline-icon"><svg class="iconsvg-phone">
                            <use xlink:href="{{URL::asset('/images/sprite.svg#phone')}}"></use>
                        </svg></span>
                    <span class="d-none d-xl-inline ms-2">{{$home['menu']['hotline'] ?? '02462947586' }}</span>
                </a>
                <a class="hotline-item" href="mailto:{{$home['menu']['mail'] ?? 'dinotechschool@imap.edu.vn' }}">
                    <span class="hotline-icon"><svg class="iconsvg-mail">
                            <use xlink:href="{{URL::asset('images/sprite.svg#mail')}}"></use>
                        </svg></span>
                    <span class="d-none d-xl-inline ms-2"><span class="__cf_email__">{{$home['menu']['mail'] ?? 'dinotechschool@imap.edu.vn' }}</span></span>
                </a>
            </div>


        </div>
    </div>
    <nav class="header-navbar navbar navbar-expand-lg navbar-flat" id="navbar">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <div class="navbar-top d-lg-none">
                    <button class="navbar-close" id="navbar-close"><i class="icont-close"></i></button>

                </div>
                <div class="navbar-scroll">

                    <ul class="navbar-nav navbar-nav-hover navbar-nav-effect" id="navbar-nav">
                        @foreach($home['menu']['list_menu'] ?? [] as $menu)
                            <li
                                @if(isset($menu['children']))
                                    class="nav-item dropdown menu-1"
                                @else
                                    class="nav-item"
                                @endif
                            >
                                <a
                                   @if(isset($menu['children']))
                                        class="nav-link dropdown-toggle"
                                   @else
                                        class="nav-link"
                                   @endif
                                   href="{{$menu['href']}}">
                                    {{$menu['label']}}
                                </a>
                                @if(isset($menu['children']))
                                    <div class="dropdown-menu">
                                    @foreach($menu['children'] as $childMenu)
                                            <a class="dropdown-item menu-2 " href="{{$childMenu['href']}}">
                                                {{$childMenu['label']}}
                                            </a>
                                    @endforeach
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    <div class="navbar-bottom d-lg-none">
                        <div class="navbar-hotline hotline">
                            <a class="hotline-item" href="tel:{{$home['menu']['hotline'] ?? '02462947586' }}">
                                <span class="hotline-icon"><svg class="iconsvg-phone">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#phone')}}"></use>
                                    </svg></span>
                                <span class="ms-2">{{$home['menu']['hotline'] ?? '02462947586' }}</span>
                            </a>
                            <a class="hotline-item" href="/cdn-cgi/l/email-protection#92f6fbfcfde6f7f1fae1f1fafdfdfed2fbfff3e2bcf7f6e7bce4fc">
                                <span class="hotline-icon"><svg class="iconsvg-mail">
                                        <use xlink:href="{{URL::asset('/images/sprite.svg#mail')}}"></use>
                                    </svg></span>
                                <span class="ms-2"><span class="__cf_email__" data-cfemail="15717c7b7a6170767d66767d7a7a79557c7874653b7071603b637b">[email&#160;protected]</span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script data-cfasync="false" src="{{URL::asset('js/email-decode.min.js')}}"></script>
    <script>
        window.addEventListener("load", function(event) {
            $('a.menu-2.active').closest('li').addClass('active');
        }, false);
    </script>
</header>
