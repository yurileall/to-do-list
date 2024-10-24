<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    <x-header />

    <x-sidebar />

    <main id="main" class="main">
        @yield('content')
    </main>

    <x-footer />

    @include('partials.scripts')
</body>

</html>