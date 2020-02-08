<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Contacts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <h1 class="text-center mt-5">Contacts Book</h1>

        <div id="app">
            <main role="main" class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-auto">
                        <contacts></contacts>
                    </div>
                </div>
            </main>
        </div>

        <script src="{{ asset("js/app.js") }}" charset="utf-8"></script>
    </body>
</html>
