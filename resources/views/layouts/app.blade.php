<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>
<script src="{{ asset('js/app.js') }}"></script>
<body>
    <x-header />

    <x-sidebar />

    <main id="main" class="main">
        @yield('content')
    </main>

    <x-footer />

    @include('partials.scripts')
</body>

<footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/logout.js') }}"></script>
</footer>

</html>