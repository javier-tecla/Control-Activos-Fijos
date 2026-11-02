<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Adminator · Dashboard')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Inter+Tight:wght@500;600;700&family=JetBrains+Mono:wght@400;500&display=swap">

    <script>
        !function(){try{var t=localStorage.getItem("dash26-theme"),e=window.matchMedia("(prefers-color-scheme: dark)").matches;document.documentElement.setAttribute("data-theme",t||(e?"dark":"light"))}catch(t){document.documentElement.setAttribute("data-theme","light")}}()
    </script>
    <script defer="defer" src="{{ asset('assets/runtime.096d507f.js') }}"></script>
    <script defer="defer" src="{{ asset('assets/2026.5a84696f.js') }}"></script>
    <link href="{{ asset('assets/style.76ee5eee.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/custom.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body data-active="@yield('active_nav', 'dashboard')" data-crumbs="@yield('breadcrumbs', 'Workspace | Dashboard')">
    @hasSection('standalone')
        @yield('content')
    @else
        <div class="shell">
            @include('layouts.partials.sidebar')
            <div class="main">
                @include('layouts.partials.topbar')
                <main class="content">
                    @include('layouts.partials.alerts')
                    @yield('content')
                </main>
                @include('layouts.partials.footer')
            </div>
        </div>
    @endif

    @stack('scripts')
</body>
</html>
