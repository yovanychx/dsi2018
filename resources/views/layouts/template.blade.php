<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="all,follow">

        <title>ResBar-0.1</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="{{ URL::asset('css/style4.css') }}">



    </head>
    <body>
        <div class="wrapper">
            @include('includes.navbar')
            <header class="header">
                    @include('includes.header')
            </header


            <div class="content">
                @yield('content')
            </div>
            <div class="footer"
            <footer class="footer">

                       @include('includes.footer')

                   </footer>
        </div>
        </div>
    </body>

</html>