<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <div class="m-12">
        @foreach ($donnees as $elem)
        <p class="m-10"><span> - Shop pack numéro {{$elem->id_shoppack}}</span><span class="pl-22"> - Quantité {{$elem->quantity}}</span></p>
        @foreach ($donneesShopPack as $shopPack)
        @if ($shopPack->id_shoppack == $elem->id_shoppack)
        @php
        $price = $shopPack->price_shoppack * $elem->quantity;
        @endphp
        <p>Prix : {{ $price }} €</p>
        @endif
        @endforeach
        @endforeach
        @php
        $prixTot = 0;
        @endphp
        @foreach ($donnees as $e)
        @foreach ($donneesShopPack as $sp)
        @if ($sp->id_shoppack == $e->id_shoppack)
        @php
        $prixTot += $e->quantity * $sp->price_shoppack;
        @endphp
        @endif
        @endforeach
        @endforeach
        <p>Prix total : {{$prixTot}} €</p>
    </div>
</body>

</html>