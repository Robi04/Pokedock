<header class="flex items-center justify-between bg-gray-200 p-4">
    <div class="flex items-center">
        <h1 class="text-xl font-bold">PokeDock</h1>
    </div>
    <div class="flex items-center space-x-4 border-2 shadow-2xl">
        <form action="{{ route('order_items') }}" method="get">
            <button type="submit" class="">Panier</button>
        </form>
    </div>
</header>

