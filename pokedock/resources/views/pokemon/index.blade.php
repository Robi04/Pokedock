<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Shop</title>
    </head>

    <body class="flex flex-col min-h-screen bg-slate-200 font-mono ">
        @include('header')
        <h1 class="text-center font-bold text-6xl m-10 font-pokeFont text-pokeBlue">Catch Pokemon</h1>
        <div class ="text-center text-2xl" style="margin-left:20px">
            Pokeballs : {{$credit}}
        </div>
        <div class="flex flex-wrap text-center mx-auto m-4 text-2xl whitespace-nowrap">
            <form action="./catch-pokemons" method="POST" style="display:flex;">
                @csrf
                <label class="m-4" for="NbrPoke">Number of Pokémon you want to catch : </label>
                <input type="number" style="width:100px" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl mr-4" name="nbrPokemons" min="1" max="{{$credit}}" required>
                <input type="submit" class="bg-pokeBlue text-pokeBlueB p-2 rounded-2xl" value="Catch">
            </form>
        </div>
        <div class="flex-grow"></div>
        @include('footer')
    </body>

</html>
