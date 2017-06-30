<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} Home</title>

    <!-- Icon -->
    {{--<link rel="shortcut icon" href="{{ config('blog.default_icon') }}">--}}

    <link rel="stylesheet" href="{{ mix('css/home.css') }}">

    <style>
        [v-cloak] { display: none; }
    </style>

    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        }

        window.User = {!! Auth::user() !!}
    </script>
</head>
<body>
<div id="app">
    @include('layouts.partials.admin_nav')


    <div class="columns">

        <div class="column is-2 slide-menu">
            @include('admin.partials.slide_menu')
        </div>

        <div class="column main-content">
            @yield('content')
        </div>

    </div>


</div>

<script src="{{ mix('js/home.js') }}"></script>

</body>
</html>