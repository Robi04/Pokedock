<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/welcome_style.css') }}">
</head>
<body>
    <div class="content">
        <h1>Hello {{ $name }} !</h1>
        <div class="btn-container">
            <form action="{{ route('logout') }}" method="get">
                <button type="submit" class="btn">Log Out</button>
            </form>
        </div>
    </div>
</body>
</html>
