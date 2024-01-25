<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-slate-200 font-mono">
    @include('header')
    <div class="flex-grow">
    <h1 class="text-center font-bold text-6xl m-4 font-pokeFont text-pokeBlue">Cart</h1>
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
        <div class="flex text-pokeBlue">
            <h2 class="mr-8 font-bold text-xl m-4">{{count($donnees)}} items in your cart</h2>
            <p class="mr-8 font-bold text-xl m-4">Fidelity points : {{$user_fidelity_point}}</p>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-4">
            <table class="w-full text-sm text-left rtl:text-right text-pokeBlueB dark:text-pokeBlueB">
                <thead class="text-xl text-pokeBlueB uppercase bg-pokeBlueB dark:bg-pokeBlue dark:text-pokeBlueB">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ShopPack
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($donnees as $elem)
                        @foreach ($donneesShopPack as $shopPack)
                            @if ($shopPack->id_shoppack == $elem->id_shoppack)
                                @php
                                    $price = $shopPack->price_shoppack * $elem->quantity;
                                @endphp
                                <tr class="odd:bg-pokeBlueB odd:dark:bg-pokeBlueC even:bg-pokeBlueB even:dark:bg-pokeBlueB text-pokeBlue ">
                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                        <img class="h-20" src={{$shopPack->path_img_shoppack}} alt="/images/zizi.png">
                                    </th>
                                    <td class="px-6 py-4">
                                        <p class="pl-22">{{$shopPack->name_shoppack}}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="pl-22">{{$elem->quantity}}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="pl-22">{{ $price }}€</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('delItem')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_order_item" value="{{ $elem->id_order_item}}">
                                            <button type="submit" class="text-blue-600">delete</button>
                                        </form>
                                    </td>
                                </tr>                          
                            @endif
                        @endforeach
                    @endforeach
                    <tr class="bg-pokeBlue">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>
                            <p>Total Price : {{$prixTot}}€</p>
                        </th>
                        <th>
                            <p>Discount Price : {{$prixTot - $user_fidelity_point}} €</p>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex justify-between m-5 text-2xl text-pokeBlueB">
            <form action="{{ route('delAllItem')}}" method="POST" class="bg-pokeBlue p-3 rounded-2xl">
                @csrf
                <button type="submit">Delete all</button>
            </form>
        
            <form action="{{ route('placeOrder') }}" method="POST" class="bg-pokeBlue p-3 rounded-2xl">
                @csrf
                <input type="hidden" name="prixTot" value="{{ $prixTot }}">
                <button type="submit">Order</button>
            </form>
        </div>

        </div>
    </div>
    <div class="flex-grow"></div>
    @include('footer')
</body>
</html>
