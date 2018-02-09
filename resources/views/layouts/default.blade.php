<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel Test 001</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')

<div class="container">
    <div class="col-md-offset-2 col-md-10"></div>
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
</div>

</body>
</html>