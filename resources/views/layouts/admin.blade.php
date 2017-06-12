<!doctype html>
<html>
<head>
    @include('includes.head')

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::to('css/admin-dashboard.css') }}" rel="stylesheet">

</head>
<body>

<div class="container">

    <header class="row">
        @include('includes.admin-header')
    </header>

    @include ('includes.admin-sidebar')

    <div class="row">

        @yield('content')

    </div>

</div>


</body>
</html>