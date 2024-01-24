<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Shop</title>
</head>

<body>
    @include('header')
    <div class="flex flex-wrap -mx-4 mt-14" style="max-width:90vw; margin-left:auto; position:relative; margin-right:auto">
        @foreach ($pokemons as $pk) @csrf
        <div class="w-full sm:w-1/4 md:w-1/4 px-4 py-4">
            @if(in_array($pk->id_pokemon, $userCaughtPokemonIds))
            <img class="w-full" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{$pk->id_pokemon}}.png" alt="{{$pk->name_pokemon}}">
            @else
            <img style="filter:grayscale(100%)" class="w-full" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{$pk->id_pokemon}}.png" alt="{{$pk->name_pokemon}}">
            @endif
            <div class="font-bold text-xl mb-2">{{$pk -> name_pokemon}} </div>
        </div>
        @endforeach
    </div>
    {{ $pokemons->links() }}
    @include('footer')
</body>

</html>