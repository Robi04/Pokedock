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
        <form action="./catch-pokemons" method="POST" style="display:flex;">
            @csrf
            <label for="NbrPoke">Number of Pokémon you want to catch:</label>
            <input type="number" id="nbrPokemons" name="nbrPokemons" min="1" max="{{$credit}}" style="border:1px solid black; width:20%; margin:10px" />
            <input type="submit" value="Catch" style="border:1px solid black; width:20%" >
        </form>
</div>
  <div class ="-mx-4 mt-14" style="margin-left:20px">

                You have {{$credit}} pokeballs
            </div>


</body>

</html>
