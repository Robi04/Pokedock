<header class="flex items-center justify-between bg-gray-200 p-4">
    <div class="flex items-center">
        <h1 class="text-xl font-bold" href=".">PokeDock</h1>
        <a href="{{ route('dashboard') }}">PokeDock</a>
    </div>
    <div class="flex items-center space-x-4 border-2 shadow-2xl">
        <form action="{{ route('profil') }}" method="get">
            <button type="submit" class="">Profil</button>
        </form>
        <form action="{{ route('shop') }}" method="get">
            <button type="submit" class="">Shop</button>
        </form>
        <form action="{{ route('order_items') }}" method="get">
            <button type="submit" class="">Cart</button>
        </form>
        <form action="{{ route('logout') }}" method="get">
            <button type="submit" class="btn">Log Out</button>
        </form>
    </div>
</header>