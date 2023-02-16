<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hotel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.png" />
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/css/dashlite.css" />
    <link rel="stylesheet" href="/css/theme.css" />
    <link id="skin-default" rel="stylesheet" href="/css/theme.css" />
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" type="text/css" href="/css/libs/fontawesome-icons.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" type="text/css" href="/css/libs/themify-icons.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" type="text/css" href="/css/libs/bootstrap-icons.css">

    <!-- Scripts -->
</head>

<body class="nk-body bg-lighter npc-default has-sidebar">
    <div class="nk-app-root">
        <div class="nk-main">
            @include('layouts.sidebar')
            <div class="nk-wrap">
                @include('layouts.navbar')
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.footer')
            </div>

        </div>
    </div>

    <script>
        let docTitle = document.title;
        window.addEventListener('blur', () => {
            document.title = "Come Back ;(";
        });

        window.addEventListener('focus', () => {
            document.title = docTitle;
        });
    </script>

    <script src="/js/bundle.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="/js/charts/chart-ecommerce.js"></script>
    <script src="/js/libs/tagify.js"></script>
</body>

</html>
