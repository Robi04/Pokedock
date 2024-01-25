<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-slate-200 font-mono">
    <div class="flex-grow">
    <h1 class="text-center font-bold text-6xl m-10">Your Invoice</h1>
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
            <h2 class="mr-8 font-bold text-xl m-4">{{count($donnees)}} items ordered</h2>
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
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <div class="flex-grow"></div>
</body>
</html>
