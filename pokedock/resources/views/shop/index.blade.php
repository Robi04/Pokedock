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
    <div class="flex flex-row mt-14 items-center">
      @foreach ($shoppacks as $sp)
        <form class="max-w-sm rounded-lg overflow-hidden shadow-lg w-1/3" action="{{ route('addItem')}}" method="POST">
          @csrf
          <input type="hidden" name="shoppack_id" value="{{ $sp->id_shoppack}}">
          <img class="w-full" src="/images/zizi.png" alt="/images/zizi.png">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{$sp -> name_shoppack}} pack</div>
            <p class="text-gray-700 text-base">Nombre de bonbons : {{$sp -> nb_credit_shoppack}}
            <p class="text-gray-700 text-base">{{$sp -> price_shoppack}} €</p>
          </div>
            <select id="number" name="number" class="mr-4 ml-4">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow items-center">Add to cart</button>
          </form>
      @endforeach
    </div>
    @include('footer')
  </body>
</html>