<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    @include('header')
    <div class="flex-grow">
        <h1 class="text-center font-bold text-4xl m-4">Cart</h1>
        <h2 class="mr-8 font-bold text-xl m-4">You have {{count($donnees)}} items in your cart</h2>
        <div class="m-12">
            @foreach ($donnees as $elem)
            <p class="m-10"><span> - Shop pack number : {{$elem->id_shoppack}}</span><span class="pl-22">  -  Quantity : {{$elem->quantity}}</span></p>
            @foreach ($donneesShopPack as $shopPack)
                @if ($shopPack->id_shoppack == $elem->id_shoppack)
                    @php
                        $price = $shopPack->price_shoppack * $elem->quantity;
                    @endphp
                    <p>Price : {{ $price }}</p>
                @endif
            @endforeach
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
        <div>
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
            <p>Total price before discount : {{$prixTot}} €</p>
            <p>Your fidelity point : {{$user_fidelity_point}}</p>
            <p>Price after discount : {{$prixTot - $user_fidelity_point}} €</p>
    <form action="{{ route('placeOrder') }}" method="POST">
        @csrf
        <input type="hidden" name="prixTot" value="{{ $prixTot }}">
        <button type="submit">Order</button>
    </form>
        </div>
    </div>
    <div class="flex-grow"></div>
    @include('footer')
</body>
</html>
