{{--
    Shared layout for every error page except 404 (Statamic renders the 404
    inside the full site layout, see errors/404.antlers.html).

    Do not rename this file to errors/layout: Statamic uses a view with that
    name as the wrapper for its 404 page.

    Deliberately self-contained: no database, Stache, globals or Vite, so a
    500 or 503 still renders when those are the thing that failed. Styling is
    the Carefront "utility" page from the Webflow export plus the brand CSS.
--}}
<!DOCTYPE html>
<html lang="en" class="w-mod-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title') | HMXTECH</title>
    <link rel="preload" href="/hmxtech/fonts/brygada-1918-latin-400-normal.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/hmxtech/fonts/schibsted-grotesk-latin-400-normal.woff2" as="font" type="font/woff2" crossorigin>
    <link href="/hmxtech/6aec83b44f4f0425b95841e3/css/carefront.webflow.shared.7b60a7b06.css" rel="stylesheet" type="text/css">
    <link href="/hmxtech/css/hmxtech-brand.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="/hmxtech/brand/favicon.ico" sizes="48x48">
    <link rel="icon" href="/hmxtech/brand/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/hmxtech/brand/apple-touch-icon.png" sizes="180x180">
    <meta name="theme-color" content="#8A2BF2">
</head>
<body>
<div class="page-wrapper">
    <div class="rails">
        <nav class="nav_component">
            <a href="/" class="nav_brand w-inline-block">
                <img class="nav_brand-mark hx-logo" src="/hmxtech/brand/logo-color.svg" alt="" width="68" height="28">
                <div class="nav_brand-text hx-wordmark">HMXTECH</div>
            </a>
            <div class="nav_actions">
                <a href="/contact" class="button is-nav">Get a quote</a>
            </div>
        </nav>
        <main class="utility">
            <div class="utility_art">
                @include('errors.partials.site-board', ['code' => trim($__env->yieldContent('code')), 'board' => trim($__env->yieldContent('board'))])
            </div>
            <div class="eyebrow">Error @yield('code')</div>
            <h1 class="heading-display utility_title">@yield('heading')</h1>
            <p class="text-lead is-center utility_text">@yield('message')</p>
            <div class="button-row is-center utility_actions">
                @hasSection('actions')
                    @yield('actions')
                @else
                    <a href="/" class="button">Go to the home page</a>
                    <a href="/contact" class="button is-secondary">Contact us</a>
                @endif
            </div>
        </main>
        <footer class="hx-error_footer">
            <span>© {{ date('Y') }} HMXTECH Company Limited</span>
            <span><a href="tel:+255758526792">+255 758 526 792</a> · <a href="mailto:info@hmxtech.co.tz">info@hmxtech.co.tz</a></span>
        </footer>
    </div>
</div>
</body>
</html>
