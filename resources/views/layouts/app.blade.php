<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Project</title>
    <style>
        html, body {
            background-color: #f9e6ff		;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>

                <ul class="flex">
                    <li class="mr-3">
                        <a class="inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white" href="/">Project</a>
                    </li>
                    @guest
                        <li class="mr-3">
                            <a class="inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="mr-3">
                                <a class="inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="mr-3">
                            <a class="inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white">
                                {{ Auth::user()->name }}
                            </a>


                                <a class="inline-block border border-blue-500 rounded py-1 px-3 bg-blue-500 text-white" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </li>
                    @endguest
                </ul>

<div id="app">
    <section class="px-10 py-4">
        <header class="container mx-auto">
            <h1><img
                    src="/images/logo.png"
                    alt="Project"
                >
            </h1>
        </header>
    </section>


    <section class="px-10 py-4">
        <main class="container mx-auto">
            @yield('content')
        </main>
    </section>
</div>

</body>
</html>
