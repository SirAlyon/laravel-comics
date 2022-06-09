<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Se necessario aggiungere un'altro segnaposto per css customizzato per pagine -->
    @yield('custom-css')

</head>

<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        <div class="jumbotron">
            <img src="{{URL::asset('/img/jumbotron.jpg')}}" alt="">
        </div>

        @yield('content')

        <div class="call_to_actions">
            <div class="actions container">
                <div class="action">
                    <img src="{{URL::asset('/img/buy-comics-digital-comics.png')}}">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="action">
                    <img src="{{URL::asset('/img/buy-comics-digital-comics.png')}}">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="action">
                    <img src="{{URL::asset('/img/buy-comics-digital-comics.png')}}">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="action">
                    <img src="{{URL::asset('/img/buy-comics-digital-comics.png')}}">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="action">
                    <img src="{{URL::asset('/img/buy-comics-digital-comics.png')}}">
                    <span>DIGITAL COMICS</span>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
    <script src="{{asset('js/app.js')}}"></script>
    <!-- Se necessario aggiungere un'altro segnaposto per js customizzato per pagine -->
    @yield('script-footer')
</body>

</html>