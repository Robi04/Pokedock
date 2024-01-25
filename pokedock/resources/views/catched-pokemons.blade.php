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

     <div class="flex flex-wrap -mx-4 mt-14" style="max-width:80vw; margin-left:auto; position:relative; margin-right:auto">
        @foreach ($caughtPokemons as $pk)
            <div class="w-full sm:w-1/4 md:w-1/4 px-4 py-4">
                <img class="w-full" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{$pk->id_pokemon}}.png" alt="{{$pk->name_pokemon}}">
                <div class="font-bold text-xl mb-2">{{$pk -> name_pokemon}} </div>
            </div>
        @endforeach
    </div>
</body>

</html>
