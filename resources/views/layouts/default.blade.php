<html>
<head>
    <title>@yield('title','Sample App') - Laravel test 001</title>
    {{--
    @yield 传了两个参数，第一个参数是该区块的变量名称，第二个参数是默认值，表示当指定变量的值为空值时，使用 Sample 来作为默认值。
    --}}
</head>
<body>
@yield('content')
</body>
</html>