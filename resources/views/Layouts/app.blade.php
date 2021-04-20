<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_token" content="{{csrf_token()}}" />

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="/img/org.png" type="image/x-icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/7e2d3ac16a.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('Include.navbar')
        <div class="px-5 mt-3">
            @include('Include.messages')
            @yield('content')
        </div>
    </div>
    <script src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                theme: 'paper',
                toolbar: [
                    ['style', ['style']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['height', ['height']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ]
            });
        });
    </script>
</body>
</html>
