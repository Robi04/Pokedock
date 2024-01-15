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
        <p>{{$id_user}}</p>
    </div>
    @include('footer')
</body>
</html>
