<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 20px;
        }

        #app {
            width: 800px;
            margin: auto;
            padding: 10px;
        }

        @media screen and (max-width: 800px) {
            #app {
                width: 100%;
            }
        }

        h1 {
            border-bottom: 1px solid #CCC;
            padding-bottom: 10px;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div id="app" class="content">
        <switch-langage></switch-langage>
        <router-view :lang="lang"></router-view>
    </div>
</div>
<script src="{{ mix('./js/app.js') }}"></script>
</body>
</html>
