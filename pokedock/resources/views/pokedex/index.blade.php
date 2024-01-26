<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Shop</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="flex flex-col min-h-screen bg-slate-200 font-mono">
    @include('header')
    <h1 class="text-center font-bold text-6xl m-10 font-pokeFont text-pokeBlue">Pokedex</h1>
    <div class="flex text-2xl justify-between w-4/5 mx-auto">
        <form action="{{ route('pokemon') }}" method="get">
            <select name="region" class="bg-slate-200">
                <option value="">Select Region</option>
                @foreach ($regions as $region)
                <option value="{{ $region->id_region}}">{{ $region->label_region }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-pokeBlue text-pokeBlueB p-2 rounded-2xl">Filter</button>
        </form>
        <div>Total Caught: {{ count($userCaughtPokemonIds) }} / 493 </div>
    </div>
    <div class="flex flex-wrap -mx-4 mt-14" style="max-width:80vw; margin-left:auto; position:relative; margin-right:auto">
        @foreach ($pokemons as $pk) @csrf
        <div class="w-full sm:w-1/4 md:w-1/4 px-4 py-4">
            @if(in_array($pk->id_pokemon, $userCaughtPokemonIds))
            <img class="w-full" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{$pk->id_pokemon}}.png" alt="{{$pk->name_pokemon}}">
            @else
            <img style="filter: blur(4.8px);" class="w-full" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{$pk->id_pokemon}}.png" alt="{{$pk->name_pokemon}}">
            @endif
            <div class="font-bold text-xl mb-2">#{{$pk->id_pokemon}} - {{ucfirst($pk -> name_pokemon)}} </div>
        </div>
        @endforeach
    </div>

    {{ $pokemons->links() }}
    @include('footer')
</body>

</html>