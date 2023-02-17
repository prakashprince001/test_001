<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        *:focus {
            outline: none;
        }

        .nik_go-back {
            display: flex !important;
            align-items: center !important;
            height: 25px !important;
            margin: 15px 0 !important;
        }

        .nik_go-back img {
            max-width: 100% !important;
            height: 100% !important;
            border-radius: inherit !important;
            margin-bottom: 0 !important;
        }

        .nik_go-back h2 {
            color: #59331A !important;
            font-size: 25px !important;
            margin-left: 5px !important;
            letter-spacing: 0 !important;
            line-height: 25px !important;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .nik_horizontal_line {
            height: 1px !important;
            /* color: #000; */
            width: 100% !important;
            background-color: #59331A !important;
            margin-top: 15px !important;
        }

        .nik_dessertBox_wrapper {
            display: flex !important;
            justify-content: space-between !important;
            padding: 15px 20px !important;
            flex-wrap: wrap !important;

        }

        .nik_leftSide_content {
            width: 50% !important;
        }

        .nik_leftSide_content h2 {
            font-size: 22px !important;
            line-height: 32px !important;
            color: #000 !important;
        }

        .nik_leftSide_content P {
            font-size: 18px !important;
            line-height: 26px !important;
            color: #000 !important;
            margin: 10px 0 15px 0px !important;
        }

        .nik_dessertbox_pricebtn {
            background: #D5CDC6 !important;
            border-radius: 8px !important;
            padding: 8px 20px !important;
            font-size: 18px !important;
            line-height: 32px !important;
            color: #000000 !important;
            font-weight: 600 !important;
            vertical-align: middle !important;
            text-align: center !important;
            align-items: center !important;
            text-decoration: none !important;
            border: none !important;
            border-bottom: none !important !important;
        }

        .nik_dealbuilder_accordion .ui-accordion-header-icon,
        .nik_dealbuilder_accordion .ui-state-active .ui-icon,
        .nik_dealbuilder_accordion .ui-button:active .ui-icon {
            float: right !important;
        }

        .nik_dealbuilder_accordion .ui-state-active .ui-icon,
        .nik_dealbuilder_accordion .ui-button:active .ui-icon {
            background-image: url(https://cdn.shopify.com/s/files/1/0587/0292/1915/files/topArrow.png?v=1661173765) !important;
            height: 15px !important;
            width: 25px !important;
            background-size: contain !important;
            opacity: 1 !important;
            background-position: inherit !important;
            background-position: center center !important;
            margin-top: 2px !important;
            transition: .03s !important;
        }

        .ui-icon,
        .ui-widget-content .ui-icon {
            background-image: url(https://cdn.shopify.com/s/files/1/0587/0292/1915/files/leftarrow.png?v=1661173667) !important;
            height: 15px !important;
            width: 25px !important;
            background-size: contain !important;
            opacity: 1 !important;
            background-position: inherit !important;
            background-position: center center !important;
            margin-top: 2px !important;
        }

        .nik_dealbuilder_accordion .ui-state-active,
        .nik_dealbuilder_accordion .ui-widget-content .ui-state-active,
        .nik_dealbuilder_accordion .ui-widget-header .ui-state-active,
        .nik_dealbuilder_accordion a.ui-button:active,
        .nik_dealbuilder_accordion .ui-button:active,
        .nik_dealbuilder_accordion .ui-button.ui-state-active:hover {
            border: 1px solid #59331A !important;
            background: #fff !important;
            font-weight: normal !important;
            color: #59331A !important;
            /* font-size: 12px !important; */
            line-height: 18px !important;
            border-radius: 7px !important;
        }

        .nik_dealbuilder_accordion .ui-state-default {
            border: 1px solid #59331A !important;
            background: transparent !important;
            font-weight: normal !important;
            color: #59331A !important;
            line-height: 18px !important;
            border-radius: 7px !important;
            margin-top: 25px !important;
            padding: 12px 10px !important;
        }

        .ui-accordion-header-active.ui-state-active {
            border-bottom: none !important;
            border-radius: 7px 7px 0px 0px !important;
            padding: 12px 10px !important;
            margin: 0 !important;
            margin-top: 25px !important;
        }

        .ui-accordion-content-active {
            border: 1px solid #59331A !important;
            border-radius: 0px 0px 7px 7px !important;
            background: transparent !important;
            border-top: none !important;
        }

        .nik_dealbuilder_accordion {
            padding: 15px 20px !important;
        }

        .nik_dealbuilder_card {
            width: 312px !important;
            background: #D5CDC6 !important;
            height: 370px !important;
            border-radius: 3px !important;
            opacity: 1 !important;
            text-align: center !important;
            margin: 15px 0px !important;
            border-radius: 8px !important;
            position: relative !important;
            margin-right: 20px !important;
        }

        .nik_card_image {
            position: relative !important;
            width: 45% !important;
            margin: 0 auto !important;
            padding-top: 8px !important;
            padding-bottom: 20px !important;
        }

        .nik_hover_text {
            width: 100% !important;
            background-color: #59331A !important;
            border-radius: 8px 8px 0px 0px !important;
            border: none !important;

        }

        .nik_hover_text p {
            color: #fff !important;
            font-size: 18px !important;
            line-height: 24px !important;
            transition: 0.5s !important;
            background: #59331A !important;
            border: none !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            font-weight: 600 !important;
            border-radius: 8px 8px 0px 0px !important;
            border: none !important;
        }

        #choose_flavour,
        #choose_icing {
            width: 80% !important;
            background: transparent !important;
            border: 0.5px solid #59331A !important;
            border-radius: 3px !important;
            padding: 5px 10px !important;
            outline: none !important;
        }

        #choose_icing {
            margin-top: 10px !important;
        }

        #choose_flavour option,
        #choose_icing option {
            font-size: 12px !important;
            line-height: 18px !important;
            color: #59331A !important;
            background: #D5CDC6 !important;

        }

        .nik_card_addtocart_btn {
            background: #59331A;
            border: none !important;
            text-align: center !important;
            height: 34px !important;
            position: absolute !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            border-radius: 0px 0px 8px 8px !important;
            cursor: pointer !important;
            vertical-align: bottom !important;
            bottom: 0 !important;
            width: 100% !important;
        }

        .addtocart_cartbtn {
            background: #59331A;
            border: none !important;
            color: #fff !important;
            font-size: 16px !important;
            line-height: 18px !important;
            font-weight: 600 !important;
            cursor: pointer !important;
        }

        .nik_nik_dealbuilder_card_wrapp {
            display: flex !important;
            justify-content: space-evenly !important;
            flex-wrap: wrap !important;
            margin-top: 50px;
        }

        .nik_dealbuilder_wrapper img {
            max-width: 100% !important;
        }

        .rightSide_wrapper {
            width: 40% !important;
        }

        #nik_custom_accordion h3 {
            font-size: 24px !important;
            color: #59331A !important;
            line-height: 30px !important;
            background: transparent !important;
            cursor: pointer !important;
            margin-bottom: 0px !important;
        }

        .nik_dealbuilder_wrapper .ui-accordion .ui-accordion-content {
            background: transparent !important;
        }

        .nik_dealbuilder_card select:focus-visible {
            box-shadow: none !important;
        }

        @media only screen and (max-width: 767px) {
            .rightSide_wrapper {
                margin-top: 20px !important;
            }

            .nik_leftSide_content {
                width: 100% !important;
            }

            .nik_dealbuilder_accordion {
                padding-top: 0 !important;
                margin-top: 10px !important;
            }

            .nik_dessertBox_wrapper {
                padding-bottom: 0 !important;
            }

            .nik_dealbuilder_card {
                margin-top: 15px !important;
                width: 290px !important;
            }

            .nik_dealbuilder_wrapper .ui-accordion .ui-accordion-content {
                padding: 0 !important;
                padding-bottom: 20px !important;
            }

            .rightSide_wrapper {
                width: 100% !important;
            }

            .ui-icon,
            .ui-widget-content .ui-icon {
                margin-top: 8px !important;
            }

            #nik_custom_accordion h3 {
                font-size: 20px !important;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 995px) {
            .nik_dessertBox_wrapper {
                justify-content: center !important;
            }

            .nik_leftSide_content {
                width: 100% !important;
            }

            .rightSide_wrapper {
                margin-top: 25px !important;
            }

            .rightSide_wrapper {
                width: 100% !important;
            }
        }
    </style>
</head>

<body class="antialiased">
    @if (session('status'))
    <div class="alert alert-success" style="margin-top: 65px;" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="nik_nik_dealbuilder_card_wrapp">
            @if (count($products) > 0)
            @foreach ($products as $product)
            @if ($product->quantity > 0)
            <div class="nik_dealbuilder_card">
                <div class="nik_hover_text">
                    <p>{{ $product->name }}</p>
                </div><br>
                <div class="nik_card_image"><img src="{{ $product->image }}" alt="nik_card_image" width="150px" /></div>
                <div class="nik_card_image">
                    <b>RS: {{ $product->price }}</b>
                </div>
                <div class="nik_card_addtocart_btn">
                    <a href="{{ url('buy-product') . '/' . $product->id }}">
                        <button class="addtocart_cartbtn">Add</button>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
            @else
            <h1>No product available!</h1>
            @endif
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>

</html>