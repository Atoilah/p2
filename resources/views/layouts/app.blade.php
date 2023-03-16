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
    {{-- <link rel="stylesheet" href="/css/dashlite.rtl.css" /> --}}
    <link rel="stylesheet" href="/css/style-email.css" />
    <link rel="stylesheet" href="/css/theme.css" />
    <link id="skin-default" rel="stylesheet" href="/css/theme.css" />
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" type="text/css" href="/css/libs/fontawesome-icons.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" type="text/css" href="/css/libs/themify-icons.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" type="text/css" href="/css/libs/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="/css/libs/jstree.css">

    <!-- Scripts -->
    {{-- <link rel="stylesheet" type="text/css" href="/css/skins/theme-blue.css"> --}}
    <link rel="stylesheet" type="text/css" href="/css/skins/theme-bluelite.css">
    {{-- <link rel="stylesheet" type="text/css" href="/css/skins/theme-egyptain.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="/css/skins/theme-green.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="/css/skins/theme-red.css"> --}}


    <link rel="stylesheet" type="text/css" href="/css/editors/quill.css">
    <link rel="stylesheet" type="text/css" href="/css/editors/summernote.css">
    <link rel="stylesheet" type="text/css" href="/css/editors/tinymce.css">
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
    <script src="/js/editors.js"></script>
    <script src="/js/example-chart.js"></script>
    <script src="/js/example-dargula.js"></script>
    <script src="/js/example-listbox.js"></script>
    <script src="/js/example-map.js"></script>
    <script src="/js/example-sweetalert.js"></script>
    <script src="/js/example-toastr.js"></script>
    <script src="/js/example-tree.js"></script>

    <script src="/js/apps/calendar.js"></script>
    <script src="/js/apps/chats.js"></script>
    <script src="/js/apps/file-manager.js"></script>
    <script src="/js/apps/inbox.js"></script>
    <script src="/js/apps/kanban.js"></script>
    <script src="/js/apps/messages.js"></script>

    <script src="/js/charts/chart-ecommerce.js"></script>
    <script src="/js/charts/chart-analytics.js"></script>
    <script src="/js/charts/chart-lms.js"></script>
    <script src="/js/charts/chart-sales.js"></script>
    <script src="/js/charts/chart-widgets.js"></script>


    <script src="/js/libs/tagify.js"></script>
    <script src="/js/libs/datatable-btns.js"></script>
    <script src="/js/libs/dragula.js"></script>
    <script src="/js/libs/dual-listbox.js"></script>
    <script src="/js/libs/fullcalendar.js"></script>
    <script src="/js/libs/jkanban.js"></script>
    <script src="/js/libs/jqvmap.js"></script>
</body>

</html>
