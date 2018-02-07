<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>


@include('includes.header')

<main role="main">
    <div class="container">
        @yield('content')

        @include('includes.footer')
    </div>
</main>

@include('includes.jsfooter')
</body>
</html>
