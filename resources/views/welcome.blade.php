<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

        <style>
            * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            }

            body {
            background: #272727;
            font-family: "Montserrat", sans-serif;
            }

            .navMenu {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            }

            .navMenu a {
            color: #f6f4e6;
            text-decoration: none;
            font-size: 1.2em;
            text-transform: uppercase;
            font-weight: 500;
            display: inline-block;
            width: 80px;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            }

            .navMenu a:hover {
            color: #fddb3a;
            }

            .navMenu .dot {
            width: 6px;
            height: 6px;
            background: #fddb3a;
            border-radius: 50%;
            opacity: 0;
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            }

            .navMenu a:nth-child(1):hover ~ .dot {
            -webkit-transform: translateX(30px);
            transform: translateX(30px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
            }

            .navMenu a:nth-child(2):hover ~ .dot {
            -webkit-transform: translateX(110px);
            transform: translateX(110px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
            }

            .navMenu a:nth-child(3):hover ~ .dot {
            -webkit-transform: translateX(200px);
            transform: translateX(200px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
            }

            .navMenu a:nth-child(4):hover ~ .dot {
            -webkit-transform: translateX(285px);
            transform: translateX(285px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            opacity: 1;
            }

        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            
            <nav class="navMenu">
                <a href="{{ url('/') }}">home</a>
                <a href="{{ url('/blogs') }}">blog</a>
                <a href="{{ url('/login') }}">login</a>
                <a href="{{ url('/register') }}">register</a>
                {{-- @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/mypage') }}">mypage</a>
                    @else
                        <a href="{{ url('/login') }}">login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">register</a>
                        @endif
                    @endauth
                @endif --}}
                <div class="dot"></div>
            </nav>
        </div>
    </body>
</html>
<script type="text/javascript">
    console.log("welcome");
</script>
