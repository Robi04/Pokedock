<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/welcome_style.css') }}">
</head>
<body>
    <div class="content">
        <h1>Welcome to PokeDock</h1>
        <div class="btn-container">
            <form action="{{ route('login') }}" method="get">
                <button type="submit" class="btn">Log In</button>
            </form>
            <form action="{{ route('register') }}" method="get">
                <button type="submit" class="btn">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>