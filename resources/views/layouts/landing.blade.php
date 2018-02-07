<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>


@include('includes.header')
<div class="container">
    <main role="main">

        @yield('content')

        @include('includes.footer')

    </main>
</div>
@include('includes.jsfooter')
</body>
</html>
