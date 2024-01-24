<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
    <title>Profil</title>
  </head>
  <body>
    @include('header')
    <h1>Profil de {{$user_info->name}}</h1>
    <img src="{{$user_info->profile_photo_url}} "alt="">
    <p>email : {{$user_info->email}}</p>
    <p>nombre de point de fidélité : {{$user_info->fidelity_point}}</p>
    @include('footer')
  </body>