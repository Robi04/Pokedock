<h1>Shop</h1>

@foreach ($shoppacks as $sp)
  <div style="display: inline-block; margin-right: 10px;">
    <img src="/images/zizi.png" alt="img du shop pack" style="height:100px; width:100px">
    <p>Nom du pack : {{$sp -> name_shoppack}}</p>
    <button type="button">{{$sp -> price_shoppack}} €</button>
  </div>
@endforeach