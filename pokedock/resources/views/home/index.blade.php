<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col h-screen justify-between">
    @include('header') 
    <div class="flex-grow">
        <h1>Bonjour {{$name}}</h1>
    </div>
    @include('footer')
</body>
</html>
