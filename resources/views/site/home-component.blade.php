<div>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-orange-500 via-red-500 to-pink-500 text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="container mx-auto px-4 py-16 md:py-24 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <!-- Left Content -->
                <div class="flex-1 text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                        Delicious Food <br class="hidden md:block">
                        <span class="text-yellow-300">Delivered Fast</span>
                    </h1>
                    <p class="text-lg md:text-xl mb-8 text-white/90">
                        Order from your favorite restaurants and get food delivered to your doorstep in minutes
                    </p>
                    
                    <!-- Search Box -->
                    <div class="bg-white rounded-full shadow-2xl p-2 flex flex-col sm:flex-row gap-2 max-w-2xl mx-auto md:mx-0">
                        <div class="flex-1 flex items-center px-4 gap-2" x-data="{ location: '' }">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <input 
                                type="text" 
                                x-model="location"
                                placeholder="Enter your delivery address" 
                                class="flex-1 py-3 outline-none text-gray-800 placeholder-gray-400"
                            >
                        </div>
                        <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-8 py-3 rounded-full transition duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                            Find Food
                        </button>
                    </div>
                </div>
                
                <!-- Right Image -->
                <div class="flex-1 relative hidden md:block">
                    <div class="relative w-full h-96">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=600&h=600&fit=crop" 
                             alt="Delicious Food" 
                             class="absolute inset-0 w-full h-full object-cover rounded-3xl shadow-2xl transform hover:scale-105 transition duration-500">
                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 bg-white text-orange-500 rounded-2xl p-4 shadow-xl animate-bounce" style="animation-duration: 3s;">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Wave Shape -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
            </svg>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Browse by Category</h2>
                <p class="text-gray-600">What are you craving today?</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6">
                <!-- Category Cards -->
                <div class="group cursor-pointer" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                    <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-2xl p-6 text-center transition-all duration-300 transform hover:scale-110 hover:shadow-xl">
                        <div class="text-5xl mb-3">🍔</div>
                        <h3 class="font-semibold text-gray-800">Burgers</h3>
                    </div>
                </div>
                
                <div class="group cursor-pointer" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                    <div class="bg-gradient-to-br from-red-100 to-red-200 rounded-2xl p-6 text-center transition-all duration-300 transform hover:scale-110 hover:shadow-xl">
                        <div class="text-5xl mb-3">🍕</div>
                        <h3 class="font-semibold text-gray-800">Pizza</h3>
                    </div>
                </div>
                
                <div class="group cursor-pointer" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                    <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-2xl p-6 text-center transition-all duration-300 transform hover:scale-110 hover:shadow-xl">
                        <div class="text-5xl mb-3">🥗</div>
                        <h3 class="font-semibold text-gray-800">Salads</h3>
                    </div>
                </div>
                
                <div class="group cursor-pointer" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                    <div class="bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl p-6 text-center transition-all duration-300 transform hover:scale-110 hover:shadow-xl">
                        <div class="text-5xl mb-3">🍜</div>
                        <h3 class="font-semibold text-gray-800">Asian</h3>
                    </div>
                </div>
                
                <div class="group cursor-pointer" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                    <div class="bg-gradient-to-br from-pink-100 to-pink-200 rounded-2xl p-6 text-center transition-all duration-300 transform hover:scale-110 hover:shadow-xl">
                        <div class="text-5xl mb-3">🍰</div>
                        <h3 class="font-semibold text-gray-800">Desserts</h3>
                    </div>
                </div>
                
                <div class="group cursor-pointer" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                    <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl p-6 text-center transition-all duration-300 transform hover:scale-110 hover:shadow-xl">
                        <div class="text-5xl mb-3">🥤</div>
                        <h3 class="font-semibold text-gray-800">Drinks</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Dishes Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Popular Dishes</h2>
                    <p class="text-gray-600">Most ordered right now</p>
                </div>
                <a href="#" class="text-orange-500 hover:text-orange-600 font-semibold flex items-center gap-2">
                    View All
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Dish Card 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" x-data="{ liked: false }">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=400&h=300&fit=crop" 
                             alt="Burger" 
                             class="w-full h-48 object-cover">
                        <button @click="liked = !liked" class="absolute top-3 right-3 bg-white rounded-full p-2 shadow-lg hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" :class="liked ? 'text-red-500 fill-current' : 'text-gray-400'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                        <span class="absolute top-3 left-3 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            20% OFF
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-yellow-400 flex">
                                ★★★★★
                            </span>
                            <span class="text-gray-600 text-sm">(4.8)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Classic Burger</h3>
                        <p class="text-gray-600 text-sm mb-4">Juicy beef patty with fresh vegetables</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-orange-500">$12.99</span>
                                <span class="text-gray-400 line-through ml-2">$15.99</span>
                            </div>
                            <button class="bg-orange-500 hover:bg-orange-600 text-white p-2 rounded-full transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Dish Card 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" x-data="{ liked: false }">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=400&h=300&fit=crop" 
                             alt="Pizza" 
                             class="w-full h-48 object-cover">
                        <button @click="liked = !liked" class="absolute top-3 right-3 bg-white rounded-full p-2 shadow-lg hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" :class="liked ? 'text-red-500 fill-current' : 'text-gray-400'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-yellow-400 flex">
                                ★★★★★
                            </span>
                            <span class="text-gray-600 text-sm">(4.9)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Margherita Pizza</h3>
                        <p class="text-gray-600 text-sm mb-4">Fresh mozzarella and basil</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-orange-500">$15.99</span>
                            </div>
                            <button class="bg-orange-500 hover:bg-orange-600 text-white p-2 rounded-full transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Dish Card 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" x-data="{ liked: false }">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=400&h=300&fit=crop" 
                             alt="Salad" 
                             class="w-full h-48 object-cover">
                        <button @click="liked = !liked" class="absolute top-3 right-3 bg-white rounded-full p-2 shadow-lg hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" :class="liked ? 'text-red-500 fill-current' : 'text-gray-400'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                        <span class="absolute top-3 left-3 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Healthy
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-yellow-400 flex">
                                ★★★★★
                            </span>
                            <span class="text-gray-600 text-sm">(4.7)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Caesar Salad</h3>
                        <p class="text-gray-600 text-sm mb-4">Fresh greens with caesar dressing</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-orange-500">$9.99</span>
                            </div>
                            <button class="bg-orange-500 hover:bg-orange-600 text-white p-2 rounded-full transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Dish Card 4 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2" x-data="{ liked: false }">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=400&h=300&fit=crop" 
                             alt="Pasta" 
                             class="w-full h-48 object-cover">
                        <button @click="liked = !liked" class="absolute top-3 right-3 bg-white rounded-full p-2 shadow-lg hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" :class="liked ? 'text-red-500 fill-current' : 'text-gray-400'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-yellow-400 flex">
                                ★★★★★
                            </span>
                            <span class="text-gray-600 text-sm">(5.0)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Pasta Carbonara</h3>
                        <p class="text-gray-600 text-sm mb-4">Creamy Italian pasta perfection</p>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-2xl font-bold text-orange-500">$13.99</span>
                            </div>
                            <button class="bg-orange-500 hover:bg-orange-600 text-white p-2 rounded-full transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Why Choose Us</h2>
                <p class="text-gray-600">We make food delivery simple and delightful</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center group">
                    <div class="bg-orange-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Fast Delivery</h3>
                    <p class="text-gray-600">Get your food delivered in 30 minutes or less</p>
                </div>
                
                <div class="text-center group">
                    <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Fresh & Quality</h3>
                    <p class="text-gray-600">Only the freshest ingredients in every meal</p>
                </div>
                
                <div class="text-center group">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Best Prices</h3>
                    <p class="text-gray-600">Affordable prices with great deals every day</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-orange-500 to-red-500 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Get the App</h2>
                    <p class="text-lg mb-6 text-white/90">Download our app and enjoy exclusive deals and faster ordering</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="#" class="bg-black hover:bg-gray-900 text-white px-6 py-3 rounded-xl flex items-center gap-3 transition-colors">
                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09l.01-.01zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z"/>
                            </svg>
                            <div class="text-left">
                                <div class="text-xs">Download on the</div>
                                <div class="text-lg font-semibold">App Store</div>
                            </div>
                        </a>
                        <a href="#" class="bg-black hover:bg-gray-900 text-white px-6 py-3 rounded-xl flex items-center gap-3 transition-colors">
                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.53,12.9 20.18,13.18L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z"/>
                            </svg>
                            <div class="text-left">
                                <div class="text-xs">GET IT ON</div>
                                <div class="text-lg font-semibold">Google Play</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex-1 hidden md:block">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=500&h=500&fit=crop" 
                         alt="Mobile App" 
                         class="rounded-3xl shadow-2xl transform hover:scale-105 transition duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Stay Updated</h2>
                <p class="text-gray-600 mb-8">Subscribe to our newsletter and get exclusive deals delivered to your inbox</p>
                <div class="flex flex-col sm:flex-row gap-3" x-data="{ email: '' }">
                    <input 
                        type="email" 
                        x-model="email"
                        placeholder="Enter your email address" 
                        class="flex-1 px-6 py-4 rounded-full border-2 border-gray-200 focus:border-orange-500 focus:outline-none text-gray-800"
                    >
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-8 py-4 rounded-full transition duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>
