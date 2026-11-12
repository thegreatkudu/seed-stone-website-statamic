<!doctype html>
<html data-wf-domain="carefront.webflow.io" data-wf-page="6aec83b44f4f0425b95841d4"
    data-wf-site="6aec83b44f4f0425b95841e3" lang="en" class="w-mod-js w-mod-ix3">

<head>
    <style>
        .wf-force-outline-none[tabindex="-1"]:focus {
            outline: none;
        }
    </style>
    <meta charset="utf-8">
    <link href="https://cdn.prod.website-files.com" rel="preconnect" crossorigin="anonymous">
    <title>Sign in to your clinic workspace | Carefront</title>
    <meta
        content="Sign in to your Carefront workspace to manage the daily schedule, patient intake, messages and billing. Your clinic admin can reset access at any time."
        name="description">
    <meta content="Sign in to your clinic workspace | Carefront" property="og:title">
    <meta
        content="Sign in to your Carefront workspace to manage the daily schedule, patient intake, messages and billing. Your clinic admin can reset access at any time."
        property="og:description">
    <meta
        content="{{ request()->getSchemeAndHttpHost() }}/hmxtech/6aec83b44f4f0425b95841e3/6aecb3a795b52ce374b10b3b_carefront-og.jpg"
        property="og:image">
    <meta content="Sign in to your clinic workspace | Carefront" name="twitter:title">
    <meta
        content="Sign in to your Carefront workspace to manage the daily schedule, patient intake, messages and billing. Your clinic admin can reset access at any time."
        name="twitter:description">
    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link
        href="{{ request()->getSchemeAndHttpHost() }}/hmxtech/6aec83b44f4f0425b95841e3/css/carefront.webflow.shared.7b60a7b06.css"
        rel="stylesheet" type="text/css"
        integrity="sha384-e2CnsGxdkBiAfIzJc3vlx1gieiX+6zWTZH0nkJ1KfYYMAj2i/JgBKKDwsPHoWk0O" crossorigin="anonymous">
    <style>
        html.w-mod-js:not(.w-mod-ix3):is(.rs-pat.is-1) {
            visibility: hidden !important;
        }

        html.w-mod-js:not(.w-mod-ix3):is(.rs-pat.is-1) * {
            visibility: hidden !important;
        }

        html.w-mod-js:not(.w-mod-ix3) :is([data-wf-target*='["6aec83b44f4f0425b95841ca","8f53d73e-da14-aadc-b6ee-3fabd5df89a4"]'], [data-wf-target*='["6aec83b44f4f0425b95841ca","8f53d73e-da14-aadc-b6ee-3fabd5df89de"]'], .feature, [data-wf-target*='["6aec83b44f4f0425b95841ca","fc1a0d03-a5a7-6eb0-ce55-d1ec96b94892"]'], [data-wf-target*='["6aec83b44f4f0425b95841ca","fc1a0d03-a5a7-6eb0-ce55-d1ec96b94894"]'], [data-wf-target*='["6aec83b44f4f0425b95841ca","fc1a0d03-a5a7-6eb0-ce55-d1ec96b94899"]'], [data-wf-target*='["6aec83b44f4f0425b95841ca","fc1a0d03-a5a7-6eb0-ce55-d1ec96b9495d"]'], .record-stack .rs-layer.is-1, .record-stack .rs-layer.is-2, .record-stack .rs-layer.is-3, .record-stack .svg-dash, .rs-pat.is-1, .rs-leader .svg-dot, .rs-leader .svg-leader, .module-scene.is-1 .ui-card, .pattern-tile .snippet > *, .pattern-tile .check-dot.is-done, .pattern-tile .progress_fill, .pattern-tile .bubble.is-reply, .pattern-tile .typing, .pattern-tile .steps_line, .pattern-tile .steps_dot, .pattern-tile .ui-card_row .chip, .nav_mobile) {
            visibility: hidden !important;
        }
    </style>
    <script
        type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link
        href="{{ request()->getSchemeAndHttpHost() }}/hmxtech/6aec83b44f4f0425b95841e3/6aecace4e86df1b0d7d6cc91_carefront-icon.png"
        rel="icon" type="image/png" sizes="32x32" media="(prefers-color-scheme: light)">
    <link
        href="{{ request()->getSchemeAndHttpHost() }}/hmxtech/6aec83b44f4f0425b95841e3/6aecace4e86df1b0d7d6cc91_carefront-icon.png"
        rel="icon" type="image/png" sizes="32x32" media="(prefers-color-scheme: dark)">
    <link
        href="{{ request()->getSchemeAndHttpHost() }}/hmxtech/6aec83b44f4f0425b95841e3/6aecace4f1e393d6b7280ad6_carefront-icon.png"
        rel="icon" type="image/png" sizes="48x48">
    <link
        href="{{ request()->getSchemeAndHttpHost() }}/hmxtech/6aec83b44f4f0425b95841e3/6aecace4d07273d1cd7e59a7_carefront-icon.png"
        rel="apple-touch-icon" sizes="180x180">
    <link
        href="{{ request()->getSchemeAndHttpHost() }}/hmxtech/6aec83b44f4f0425b95841e3/6aecace5a3fd0e69eb5dad18_carefront-icon.png"
        rel="icon" type="image/png" sizes="192x192">
    <link
        href="{{ request()->getSchemeAndHttpHost() }}/hmxtech/6aec83b44f4f0425b95841e3/6aecace414b33286f73dd85d_carefront-icon.png"
        rel="icon" type="image/png" sizes="512x512">
    <script>
        window.__WF_REVIEW_BRIDGE = {
            siteId: "6aec83b44f4f0425b95841e3",
            version: "0.3.0",
            marker: "__wf_review_snippet_v1",
            bridgeToken: "wfbt_a9f609324e6246bfa515bcdc0be0cf99",
            reviewSurface: "published-review",
            reviewScriptUrl: "https://validation-worker.createsomething.workers.dev/app-validator/snippet/review.js"
        };
    </script>
    <script src="https://validation-worker.createsomething.workers.dev/app-validator/snippet/review.js"></script>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js"></script>
</head>

<body>
    <div class="auth_page">
        <div class="auth_main">
            <div class="auth_head"><a href="/" class="auth_brand w-inline-block"><svg aria-hidden="true" height="22"
                        width="24" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="3" stroke="currentColor"
                            d="M17.6 5.3A8 8 0 1 0 17.6 16.7"></path>
                        <circle fill="#2f6bff" r="2.6" cy="11" cx="19.6"></circle>
                    </svg>
                    <div class="auth_brand-text">Carefront</div>
                </a><a href="/" class="auth_head-link w-inline-block">
                    <div>Back to carefront.health</div><svg fill="none" viewBox="0 0 14 14" height="14" width="14"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-width="1.4" stroke="currentColor"
                            d="M4 10L10 4M10 4H5M10 4V9"></path>
                    </svg>
                </a></div>
            <div class="auth_body">
                <div class="auth_content">
                    <div class="auth_intro">
                        <div class="auth_eyebrow">Sign in</div>
                        <h1 class="auth_title">Welcome back to the front desk.</h1>
                        <p class="auth_lead">Use your work email. Your clinic admin can reset access any time.</p>
                    </div>
                    <div class="w-form w-form-loading">
                        <form method="get" name="" data-name="sign-in" data-wf-page-id="6aec83b44f4f0425b95841d4"
                            data-wf-element-id="c5772096-69db-50e8-116e-a88c5e51352f"
                            data-turnstile-sitekey="0x4AAAAAAAQTptj2So4dx43e" aria-label="sign-in">
                            <div class="auth_fields">
                                <div class="auth_field"><label for="" class="auth_label">Work email</label>
                                    <div class="auth_input-wrap"><input class="auth_input w-input" maxlength="256"
                                            name="email" data-name="email" placeholder="ana@harborfamily.com"
                                            type="email" id="email"></div>
                                </div>
                                <div class="auth_field">
                                    <div class="auth_label-row"><label for="" class="auth_label">Password</label><a
                                            href="/{{ request()->getSchemeAndHttpHost() }}/hmxtech/"
                                            class="auth_small-link">Forgot password?</a></div>
                                    <div class="auth_input-wrap"><input class="auth_input w-input" maxlength="256"
                                            name="password" data-name="password" placeholder="Your password"
                                            type="password" id="password">
                                        <div class="auth_show">Show</div>
                                    </div>
                                </div>
                                <div class="auth_check-row">
                                    <div class="auth_check"><svg fill="none" viewBox="0 0 10 10" height="10" width="10"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5"
                                                stroke="currentColor" d="M2 5.2L4.2 7.4L8 3"></path>
                                        </svg></div>
                                    <div>Keep me signed in on this computer</div>
                                </div><a href="/" class="button auth_cta">Sign in</a>
                            </div>
                            <div>
                                <div>
                                    <div></div><input type="hidden" name="cf-turnstile-response"
                                        id="cf-chl-widget-vohtd_response">
                                </div>
                            </div>
                        </form>
                        <div class="w-form-done" tabindex="-1" role="region" aria-label="sign-in success">
                            <div>Signed in. Taking you to today's schedule.</div>
                        </div>
                        <div class="w-form-fail" tabindex="-1" role="region" aria-label="sign-in failure">
                            <div>That email and password don't match. Try again or reset your password.</div>
                        </div>
                    </div>
                    <div class="auth_or">
                        <div class="auth_or-line"></div>
                        <div>or</div>
                        <div class="auth_or-line"></div>
                    </div>
                    <div class="auth_alt"><a href="/onboarding-verify" class="auth_alt-btn">Email me a sign-in
                            link</a><a href="/{{ request()->getSchemeAndHttpHost() }}/hmxtech/"
                            class="auth_alt-btn">Single sign-on</a></div>
                    <div class="auth_switch">
                        <div>New to Carefront?</div><a href="/sign-up" class="auth_switch-link w-inline-block">
                            <div>Start a free trial</div><svg fill="none" viewBox="0 0 14 14" height="14" width="14"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-width="1.4" stroke="currentColor"
                                    d="M4 10L10 4M10 4H5M10 4V9"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="auth_foot">
                <div class="auth_badge">
                    <div class="auth_dot"></div>
                    <div>HIPAA</div>
                </div>
                <div class="auth_badge">
                    <div class="auth_dot"></div>
                    <div>SOC 2 Type II</div>
                </div>
                <div>Sessions time out after 30 minutes of quiet.</div>
            </div>
        </div>
        <div class="auth_art">
            <div class="auth_art-cap">
                <div>Fig. 1, three providers, 07:00 to 19:00</div>
                <div class="auth_art-now">Now 09:12</div>
            </div>
            <div class="auth_art-figure"><svg fill="none" viewBox="28 92 616 616" xmlns="http://www.w3.org/2000/svg"
                    aria-label="A day dial for three providers from 07:00 to 19:00, with 38 visits and two open slots offered to the waitlist"
                    role="img" class="ill-art auth-art_svg ia-dial">
                    <g>
                        <g>
                            <g>
                                <path
                                    d="M336 650C474.0 650 586 538.0 586 400C586 261.9 474.0 150 336 150C197.9 150 86 261.9 86 400C86 538.0 197.9 650 336 650Z"
                                    data-i="0.0" class="ill-s-line-panel"></path>
                                <path
                                    d="M336 610C451.9 610 546 515.9 546 400C546 284.0 451.9 190 336 190C220.0 190 126 284.0 126 400C126 515.9 220.0 610 336 610Z"
                                    data-i="0.02" class="ill-s-line-panel"></path>
                                <path
                                    d="M336 570C429.8 570 506 493.8 506 400C506 306.1 429.8 230 336 230C242.1 230 166 306.1 166 400C166 493.8 242.1 570 336 570Z"
                                    data-i="0.04" class="ill-s-line-panel"></path>
                                <path
                                    d="M336 530C407.7 530 466 471.7 466 400C466 328.2 407.7 270 336 270C264.2 270 206 328.2 206 400C206 471.7 264.2 530 336 530Z"
                                    data-i="0.06" class="ill-s-line-panel"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M336 138V128" data-i="0.08"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M467 173.1L472 164.4" data-i="0.11"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M562.9 269L571.6 264" data-i="0.13"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M598 400H608" data-i="0.15"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M562.9 531L571.6 536" data-i="0.17"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M467 626.9L472 635.6" data-i="0.19"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M336 662V672" data-i="0.21"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M205 626.9L200 635.6" data-i="0.23"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M109.1 531L100.4 536" data-i="0.25"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M74 400H64" data-i="0.28"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M109.1 269L100.4 264" data-i="0.3"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-linecap="round" stroke-width="1.2" d="M205 173.1L200 164.4" data-i="0.32"
                                    class="ill-s-panel-muted ill-s-panel-muted"></path>
                                <path stroke-width="22" d="M455.1 203.3C469.5 212.0 483.0 222.3 495.2 234.0"
                                    data-i="0.34" class="ill-s-accent ill-s-accent"></path>
                                <path stroke-width="22" d="M502 240.8C513.6 253 523.9 266.4 532.7 280.9" data-i="0.36"
                                    class="ill-s-accent ill-s-accent"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M550.3 316.5C556.4 332.2 560.8 348.5 563.4 365.2" data-i="0.38"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M565.9 404.8C565.5 421.6 563.4 438.4 559.4 454.9" data-i="0.4"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M546.6 492.4C535.7 517.1 520.6 539.7 502 559.2" data-i="0.42"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M331.2 629.9C314.3 629.5 297.5 627.4 281.1 623.4" data-i="0.44"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M271.8 620.9C245.9 613.3 221.5 601.3 199.8 585.4" data-i="0.47"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M170 559.2C158.3 547 148.0 533.5 139.3 519.1" data-i="0.49"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M121.7 483.5C115.5 467.7 111.1 451.4 108.6 434.8" data-i="0.51"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M106.1 395.2C106.4 378.3 108.6 361.5 112.6 345.1" data-i="0.53"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M139.3 280.9C148.0 266.4 158.3 253 170 240.8" data-i="0.55"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" d="M434.4 237.5C453.4 249.0 470.3 263.8 484.3 281.2"
                                    data-i="0.57" class="ill-s-accent ill-s-accent"></path>
                                <path stroke-width="22" d="M502.5 308.5C509.2 320.7 514.5 333.6 518.5 347" data-i="0.59"
                                    class="ill-s-accent ill-s-accent"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M520.5 354.6C525.8 376.3 527.3 398.6 524.9 420.7" data-i="0.61"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M498.5 498.4C486.9 517.4 472.1 534.3 454.8 548.3" data-i="0.63"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M381.3 584.5C367.7 587.8 353.9 589.6 340 590" data-i="0.66"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M307.3 587.8C285.2 584.4 264.0 577.2 244.5 566.5" data-i="0.68"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M198.9 531.5C183.4 515.4 170.9 496.7 162 476.4" data-i="0.7"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M151.5 445.3C148.1 431.7 146.3 417.9 146 404" data-i="0.72"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M148.2 371.3C151.5 349.2 158.7 328.0 169.5 308.5" data-i="0.74"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M187.7 281.1C196.4 270.3 206.3 260.4 217.2 251.6" data-i="0.76"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" d="M429.8 282.9C443.5 293.9 455.1 307.2 464.3 322.3"
                                    data-i="0.78" class="ill-s-accent ill-s-accent"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M481.7 364.1C484.3 374.9 485.7 385.8 486 396.8" data-i="0.8"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M480 441.8C476.9 452.4 472.7 462.6 467.4 472.3" data-i="0.83"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M332.9 550.0C315.3 549.6 297.9 546.1 281.5 539.8" data-i="0.85"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M258.3 528.3C248.8 522.6 240.1 515.9 232.2 508.3" data-i="0.87"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M204.6 472.3C199.2 462.6 195.0 452.4 192 441.8" data-i="0.89"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-width="22" stroke-opacity="0.2"
                                    d="M186 396.9C186.3 379.3 189.8 361.9 196.2 345.5" data-i="0.91"
                                    class="ill-s-text-panel ill-s-text-panel"></path>
                                <path stroke-dasharray="3 5" stroke-width="20"
                                    d="M472.2 585.4C450.4 601.3 426.0 613.3 400.2 620.9" data-i="0.93"
                                    class="ill-s-accent ill-s-accent"></path>
                                <path stroke-dasharray="3 5" stroke-width="20"
                                    d="M518.5 453C514.5 466.3 509.2 479.2 502.5 491.5" data-i="0.95"
                                    class="ill-s-accent ill-s-accent"></path>
                                <path stroke-linecap="round" stroke-width="1.6" d="M336 400L575.3 293.4" data-i="0.97"
                                    class="ill-s-accent ill-s-accent"></path>
                                <path
                                    d="M336 405C338.7 405 341 402.7 341 400C341 397.2 338.7 395 336 395C333.2 395 331 397.2 331 400C331 402.7 333.2 405 336 405Z"
                                    data-i="0.99" class="ill-f-accent ill-f-accent"></path>
                                <path
                                    d="M575.3 297.4C577.5 297.4 579.3 295.6 579.3 293.4C579.3 291.1 577.5 289.4 575.3 289.4C573.0 289.4 571.3 291.1 571.3 293.4C571.3 295.6 573.0 297.4 575.3 297.4Z"
                                    data-i="1.02" class="ill-f-accent ill-f-accent"></path>
                            </g>
                        </g>
                    </g><text font-weight="500" font-size="12" data-i="0.5"
                        class="ill-t ill-f-panel-muted ill-t ill-f-panel-muted">
                        <tspan y="112.312" x="329">07</tspan>
                    </text><text font-weight="500" font-size="12" data-i="0.56"
                        class="ill-t ill-f-panel-muted ill-t ill-f-panel-muted">
                        <tspan y="404.312" x="622">10</tspan>
                    </text><text font-weight="500" font-size="12" data-i="0.63"
                        class="ill-t ill-f-panel-muted ill-t ill-f-panel-muted">
                        <tspan y="696.312" x="330">13</tspan>
                    </text><text font-weight="500" font-size="12" data-i="0.69"
                        class="ill-t ill-f-panel-muted ill-t ill-f-panel-muted">
                        <tspan y="404.312" x="38">16</tspan>
                    </text><text font-weight="500" font-size="13" data-i="0.75"
                        class="ill-t ill-f-panel-muted ill-t ill-f-panel-muted">
                        <tspan y="357.172" x="304.5">Thu 5 Nov</tspan>
                    </text><text letter-spacing="-0.01em" font-size="44" data-i="0.82"
                        class="ill-t is-serif ill-f-text-panel ill-t is-serif ill-f-text-panel">
                        <tspan y="406.74" x="255">38 visits</tspan>
                    </text><text font-size="13" data-i="0.88" class="ill-t ill-f-panel-muted ill-t ill-f-panel-muted">
                        <tspan y="436.172" x="251.1">2 open slots, both offered to</tspan>
                        <tspan y="452.172" x="303.297">the waitlist</tspan>
                    </text>
                </svg></div>
            <div class="auth_art-legend">
                <div class="auth_art-key">
                    <div class="auth_art-seen"></div>
                    <div>Seen</div>
                </div>
                <div class="auth_art-key">
                    <div class="auth_art-booked"></div>
                    <div>Booked</div>
                </div>
                <div class="auth_art-key">
                    <div class="auth_art-open"></div>
                    <div>Open, offered</div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6aec83b44f4f0425b95841e3"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script
        src="{{ request()->getSchemeAndHttpHost() }}/hmxtech/6aec83b44f4f0425b95841e3/js/webflow.schunk.efb220150c6bf06b.js"
        type="text/javascript" integrity="sha384-M5g7g8L9HlkqeyHNOn9zSh8ZtiN83Kb/VMbJFMdWVs4hUgzrCr701of4XbZzJRGY"
        crossorigin="anonymous"></script>
    <script
        src="{{ request()->getSchemeAndHttpHost() }}/hmxtech/6aec83b44f4f0425b95841e3/js/webflow.3e78af3c.f091fcab5f62be66.js"
        type="text/javascript" integrity="sha384-d6nPGYxcWIkP50JsUsxnuG/dr2GOdT7dFk9Z89rbCOELaJQtPGUFwndvTzwx5xHs"
        crossorigin="anonymous"></script>
    <script src="{{ request()->getSchemeAndHttpHost() }}/hmxtech/gsap/3.15.0/gsap.min.js"
        type="text/javascript"></script>
    <script src="{{ request()->getSchemeAndHttpHost() }}/hmxtech/gsap/3.15.0/ScrollTrigger.min.js"
        type="text/javascript"></script>
</body>

</html>