<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Profil</title>
      @vite('resources/css/app.css')
  </head>
  <body class="flex flex-col min-h-screen bg-slate-200 font-mono">
    @include('header')  
    <h1 class="text-center font-bold text-6xl m-10 font-pokeFont text-pokeBlue">Your profil</h1>
    <div class="m-10 text-center place-items-center text-2xl">
      <h1 class="m-4">Hello {{$user_info->name}} 👋</h1>
      <img class="m-4 mx-auto" src="{{$user_info->profile_photo_url}}" alt="">
      <p class="m-4">email : {{$user_info->email}}</p>
      <p class="m-4">Fidelity points : {{$user_info->fidelity_point}}</p>
    </div>
    <div class="flex-grow"></div> 
      @include('footer')
  </body>
</html> 