<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('custom-css')

</head>

<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('jumbotron')

        @yield('content')

        <div class="call_to_actions">
            <div class="actions container">
                <div class="action">
                    <img src="{{URL::asset('/img/buy-comics-digital-comics.png')}}">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="action">
                    <img src="{{URL::asset('/img/buy-comics-merchandise.png')}}">
                    <span>DC MERCHANDISE</span>
                </div>
                <div class="action">
                    <img src="{{URL::asset('/img/buy-comics-shop-locator.png')}}">
                    <span>COMIC SHOP LOCATOR</span>
                </div>
                <div class="action">
                    <img src="{{URL::asset('/img/buy-comics-subscriptions.png')}}">
                    <span>SUBSCRIPTIONS</span>
                </div>
                <div class="action">
                    <img src="{{URL::asset('/img/buy-dc-power-visa.svg')}}">
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
    <script src="{{asset('js/app.js')}}"></script>
    @yield('script-footer')
</body>

</html>