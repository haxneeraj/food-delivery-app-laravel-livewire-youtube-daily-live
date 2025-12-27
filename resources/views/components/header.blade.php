<!-- Header -->
<header class="bg-white shadow-md sticky top-0 z-50" x-data="{ mobileMenuOpen: false, cartOpen: false }">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2">
                <div class="bg-gradient-to-br from-orange-500 to-red-500 p-2 rounded-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>
                <span class="text-2xl font-bold text-gray-800">FoodExpress</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-8">
                <a href="/" class="text-gray-700 hover:text-orange-500 font-medium transition-colors">Home</a>
                <a href="#" class="text-gray-700 hover:text-orange-500 font-medium transition-colors">Menu</a>
                <a href="#"
                    class="text-gray-700 hover:text-orange-500 font-medium transition-colors">Restaurants</a>
                <a href="#" class="text-gray-700 hover:text-orange-500 font-medium transition-colors">About</a>
                <a href="#" class="text-gray-700 hover:text-orange-500 font-medium transition-colors">Contact</a>
            </nav>

            <!-- Right Section -->
            <div class="flex items-center gap-4">
                <!-- Search Icon -->
                <button class="hidden md:block p-2 hover:bg-gray-100 rounded-full transition-colors">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>

                <!-- Cart -->
                <button @click="cartOpen = !cartOpen"
                    class="relative p-2 hover:bg-gray-100 rounded-full transition-colors">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    <span
                        class="absolute -top-1 -right-1 bg-orange-500 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </button>

                <!-- User Menu -->
                <div class="hidden md:flex items-center gap-3">
                    <a href="/login"
                        class="text-gray-700 hover:text-orange-500 font-medium transition-colors">Login</a>
                    <a href="/register"
                        class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full font-medium transition-colors">Sign
                        Up</a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="lg:hidden p-2 hover:bg-gray-100 rounded-lg transition-colors">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2" class="lg:hidden border-t border-gray-200 py-4"
            style="display: none;">
            <nav class="flex flex-col gap-4">
                <a href="/"
                    class="text-gray-700 hover:text-orange-500 font-medium transition-colors px-2 py-1">Home</a>
                <a href="#"
                    class="text-gray-700 hover:text-orange-500 font-medium transition-colors px-2 py-1">Menu</a>
                <a href="#"
                    class="text-gray-700 hover:text-orange-500 font-medium transition-colors px-2 py-1">Restaurants</a>
                <a href="#"
                    class="text-gray-700 hover:text-orange-500 font-medium transition-colors px-2 py-1">About</a>
                <a href="#"
                    class="text-gray-700 hover:text-orange-500 font-medium transition-colors px-2 py-1">Contact</a>
                <div class="flex flex-col gap-3 pt-4 border-t border-gray-200">
                    <a href="/login"
                        class="text-center text-gray-700 hover:text-orange-500 font-medium transition-colors px-4 py-2 border border-gray-300 rounded-full">Login</a>
                    <a href="/register"
                        class="text-center bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-full font-medium transition-colors">Sign
                        Up</a>
                </div>
            </nav>
        </div>
    </div>

    <!-- Cart Dropdown -->
    <div x-show="cartOpen" @click.outside="cartOpen = false" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-2"
        class="absolute right-4 top-full mt-2 w-96 bg-white rounded-2xl shadow-2xl border border-gray-200 overflow-hidden"
        style="display: none;">
        <div class="p-4 border-b border-gray-200">
            <h3 class="text-lg font-bold text-gray-800">Your Cart</h3>
        </div>
        <div class="max-h-96 overflow-y-auto">
            <!-- Cart Item -->
            <div class="p-4 border-b border-gray-100 hover:bg-gray-50">
                <div class="flex items-center gap-4">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=100&h=100&fit=crop"
                        alt="Burger" class="w-16 h-16 object-cover rounded-lg">
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-800">Classic Burger</h4>
                        <p class="text-sm text-gray-600">$12.99</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center">-</button>
                        <span class="font-semibold">1</span>
                        <button
                            class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 flex items-center justify-center">+</button>
                    </div>
                </div>
            </div>
            <!-- More items... -->
        </div>
        <div class="p-4 bg-gray-50">
            <div class="flex justify-between items-center mb-4">
                <span class="font-semibold text-gray-800">Total:</span>
                <span class="text-2xl font-bold text-orange-500">$38.97</span>
            </div>
            <button
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 rounded-full transition-colors">
                Checkout
            </button>
        </div>
    </div>
</header>
