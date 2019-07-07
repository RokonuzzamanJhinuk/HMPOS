<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>HM POS</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <!-- Styles -->

    </head>

    <body>

    <div class="content-main container-fluid" id="app">

        <div class="card">
            <div class="card-title">
                <h2 class="text-primary">Welcome To HM POS</h2>
            </div>
            <div class="card-body">
                <a href="{{route('login')}}"> Click Here To Proceed </a>
            </div>

        </div>



            {{--<div class="content" >--}}
                {{--<example-component></example-component>--}}
            {{--</div>--}}
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
