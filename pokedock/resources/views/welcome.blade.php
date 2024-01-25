<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/styles.css">
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-slate-200 font-mono">
    <div class="flex items-center justify-between bg-pokeBlue p-4 shadow-md  text-pokeBlueB">
        <a class="font-pokeFont text-white text-4xl" href="{{ route('welcome') }}">PokeDock</a>
        <div class="flex justify-between font-mono text-2xl">
            <form action="{{ route('login') }}" method="get" class="m-4">
                <button type="submit" class="btn">Log In</button>
            </form>
            <form action="{{ route('register') }}" method="get" class="m-4">
                <button type="submit" class="btn">Sign Up</button>
            </form>
        </div>
    </div>
    <h1 class="font-pokeFont text-7xl m-8 text-center text-pokeBlue">Welcome to PokeDock</h1>
    <img class="h-full" src="/images/home.png">
    <div class="flex-grow"></div> 
      @include('footer')
</body>
</html>