<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="css/styles.css">
</head>


<header class="flex items-center justify-between bg-pokeBlue p-4 shadow-md">
    <a class="font-pokeFont text-white text-4xl" href="{{ route('profil') }}">PokeDock</a>
    <div id="lil-flex">
        <div id="burger" class="flex space-x-4 text-white font-mono text-2xl">x</div>
        <div id="header-col" class="flex items-center space-x-4 text-white font-mono text-2xl">
            <form action="{{ route('catch') }}" method="get">
                <button type="submit" class="btn mr-4">Catch-Pokemons</button>
            </form>
            <form action="{{ route('pokemon') }}" method="get">
                <button type="submit" class="btn mr-4">Pokedex</button>
            </form>
            <form action="{{ route('profil') }}" method="get">
                <button type="submit" class="mr-4">Profil</button>
            </form>
            <form action="{{ route('shop') }}" method="get">
                <button type="submit" class="mr-4">Shop</button>
            </form>
            <form action="{{ route('order_items') }}" method="get">
                <button type="submit" class="mr-4">Cart</button>
            </form>
            <form action="{{ route('logout') }}" method="get">
                <button type="submit" class="btn mr-4">Log Out</button>
            </form>
        </div>
    </div>
</header>
<script src="/js/app.js"></script>