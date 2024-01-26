<!DOCTYPE html>
<html>
<head>
    <title>Your Order</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen bg-slate-200 font-mono">
    @include('header')
    <div class="flex-grow">
        <h1 class="text-center font-bold text-6xl m-10 font-pokeFont text-pokeBlue">Thank you for your order !</h1>
        <div class="m-10 text-center place-items-center text-2xl">
            <form action="{{ route('generateInvoice') }}" method="GET">
                @csrf
                <button type="submit" class="text-slate-50 bg-pokeBlue p-3 rounded-2xl">Your Invoice</button>
            </form>
        </div>
    </div>
    @include('footer')
</body>
</html>
 