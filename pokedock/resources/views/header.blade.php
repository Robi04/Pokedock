<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
</head>

<header class="flex items-center justify-between bg-pokeBlue p-4">
    <div class="flex items-center">
        <a class="font-pokeFont text-white text-4xl" href="{{ route('dashboard') }}">PokeDock</a>
    </div>
    <div class="flex items-center space-x-4 font-mono text-2xl">
        <form action="{{ route('shop') }}" method="get">
            <button type="submit" class="text-white">Shop</button>
        </form>
        <form action="{{ route('order_items') }}" method="get">
            <button type="submit" class="text-white">Cart</button>
        </form>
        <form action="{{ route('logout') }}" method="get">
            <button type="submit" class="btn text-white">Log Out</button>
        </form>
    </div>
</header>

