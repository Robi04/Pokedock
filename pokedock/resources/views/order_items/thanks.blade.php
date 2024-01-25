<!DOCTYPE html>
<html>
<head>
    <title>Your Order</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
    @include('header')
    <div class="flex-grow">
        <h1 class="text-center font-bold text-4xl m-4">Thank you for your order !</h1>
        <form action="{{ route('generateInvoice') }}" method="GET">
            @csrf
            <button type="submit">Your Invoice</button>
        </form>
    </div>
    @include('footer')
</body>
</html>
