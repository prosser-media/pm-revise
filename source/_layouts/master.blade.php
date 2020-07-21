<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <div id="app">
            <header class="header" x-data="{ nav: false }">
                <div class="header__left">
                    <a href="#" class="header__brand">PM Revise</a>

                    <div class="header__mobile-menu">
                        <a href="#" class="header__login">Login</a>
                        <a href="#" class="header__get-started">Get Started</a>
                        <button @click="nav = !nav" :class="{ 'is-active': nav }" class="header__toggle header__toggle--squeeze" type="button">
                            <span class="header__toggle-box">
                                <span class="header__toggle-inner"></span>
                            </span>
                        </button>  
                    </div>
                </div>
                <div x-show="nav" class="header__right" @click.away="nav = false">
                    <a href="#" class="header__link">Home</a>
                    <a href="#" class="header__link">Features</a>
                    <a href="#" class="header__link header__link--last">Plans</a>
                    <div class="header__buttons">
                        <a href="#" class="header__login header__login--toggle-menu">Login</a>
                    </div>
                    <div class="header__buttons">
                        <a href="#" class="header__get-started header__get-started--toggle-menu">Get Started</a>
                    </div>
                    <a href="#" class="header__login header__login--desktop">Login</a>
                    <a href="#" class="header__get-started header__get-started--desktop">Get Started</a>
                </div>
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="footer">
                <div class="container container--narrow">
                    <div class="footer__content">
                        <div class="footer__column">
                            <h4 class="footer__heading">About Us</h4>
                            <p class="footer__about">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>

                            <p class="footer__copyright">Copyright &copy; Prosser Media 2020 <span>All Rights Reserved</span></p>
                        </div>
                        <div class="footer__column">
                            <h4 class="footer__heading">Useful Pages</h4>
                            <a href="#">Home</a>
                            <a href="#">Features</a>
                            <a href="#">Plans</a>
                            <a href="#">Login</a>
                            <a href="#">Signup</a>
                        </div>
                        <div class="footer__column">
                            <h4 class="footer__heading">Other Pages</h4>
                            <a href="#">Terms & Conditions</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Education</a>
                            <a href="#">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>


        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
