<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Profil</title>
      @vite('resources/css/app.css')
  </head>
  <body class="flex flex-col min-h-screen bg-slate-200 font-mono">
    @include('header')  
    <h1 class="text-center font-bold text-6xl m-4 font-pokeFont text-pokeBlue">Your profil</h1>
    <div class="m-10">
      <h1>Hello {{$user_info->name}} 👋</h1>
      <img src="{{$user_info->profile_photo_url}} "alt="">
      <p>email : {{$user_info->email}}</p>
      <p>Fidelity points : {{$user_info->fidelity_point}}</p>
    </div>
    <div class="flex-grow"></div> 
      @include('footer')
  </body>
</html> 