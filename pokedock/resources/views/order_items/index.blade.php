<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col h-screen justify-between">
    @include('header')
    <div class="flex-grow">
    <h1 class="text-center font-bold text-4xl m-4">Panier</h1>
    <h2 class="mr-8 font-bold text-xl m-4">Vous avez {{count($donnees)}} articles dans le panier</h2>
    <div class="m-12">
        @foreach ($donnees as $elem)
        <p class="m-10"><span> - Shop pack numéro {{$elem->id_shoppack}}</span><span class="pl-22">  -  Quantité {{$elem->quantity}}</span></p>
        <form action="{{ route('delItem')}}" method="POST">
            @csrf
            <input type="hidden" name="id_order_item" value="{{ $elem->id_order_item}}">
            <button type="submit">Delete</button>
        </form>
        @endforeach
    </div>
    <form action="{{ route('delAllItem')}}" method="POST">
        @csrf
        <button type="submit">Delete all</button>
    </form>
    @include('footer')
</body>
</html>
