<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('titulo')
        @yield('icono')

        {!! Html::style('css/stylePDF.css')  !!}
        <link rel="stylesheet" href="">
    </head>

    <body>
        <div class="container">
            <div class="">
                @yield('content')
            </div>
        </div>
    </body>
</html>

