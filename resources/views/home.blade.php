<!DOCTYPE html>
<html lang="en w-fulll">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShopFlow - Modern E-commerce</title>
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&family=space-grotesk:400,500,600,700&family=poppins:300,400,500,600,700"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&family=space-grotesk:400,500,600,700&family=poppins:300,400,500,600,700');

        body {
            font-family: 'Inter', sans-serif;
        }

        .font-space {
            font-family: 'Space Grotesk', sans-serif;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .gradient-secondary {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .gradient-accent {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dark .glass-effect {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-bounce-slow {
            animation: bounce 3s infinite;
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 40px, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        .bg-dots {
            background-image: radial-gradient(circle, rgba(99, 102, 241, 0.15) 1px, transparent 1px);
            background-size: 20px 20px;
        }

        .dark .bg-dots {
            background-image: radial-gradient(circle, rgba(139, 92, 246, 0.2) 1px, transparent 1px);
        }

        .product-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark .product-card {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .cart-badge {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .price-tag {
            background: linear-gradient(45deg, #10b981, #059669);
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }
    </style>
</head>

<body
    class="bg-gradient-to-br from-slate-50 via-white to-blue-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 text-gray-900 dark:text-white min-h-screen transition-all duration-500">
    <!-- Background Pattern -->
    <div class="fixed inset-0 bg-dots opacity-30 pointer-events-none"></div>

    <!-- Floating Decorations -->
    <div class="fixed top-20 left-10 w-32 h-32 gradient-primary rounded-full opacity-10 animate-float"></div>
    <div class="fixed bottom-20 right-10 w-24 h-24 gradient-secondary rounded-full opacity-10 animate-float"
        style="animation-delay: -2s;"></div>
    <div class="fixed top-1/2 left-1/4 w-16 h-16 gradient-accent rounded-full opacity-10 animate-float"
        style="animation-delay: -4s;"></div>

    <!-- Header Navigation -->
    <header class="fixed z-50 top-0 w-full py-4 px-6 lg:px-8 transition-all duration-300 bg-white shadow-lg"
        id="header">
        <nav class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 gradient-primary rounded-xl flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                </div>
                <div>
                    <span class="text-2xl font-space font-bold gradient-text">ShopFlow</span>
                    <div class="text-xs text-gray-500 dark:text-gray-400">Premium Store</div>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden focus:outline-none"
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home"
                    class="nav-link text-gray-700 hover:text-indigo-600 font-medium transition-all">Home</a>
                <a href="#products"
                    class="nav-link text-gray-700 hover:text-indigo-600 font-medium transition-all">Products</a>
                <a href="#categories"
                    class="nav-link text-gray-700 hover:text-indigo-600 font-medium transition-all">Categories</a>
                <a href="#about"
                    class="nav-link text-gray-700 hover:text-indigo-600 font-medium transition-all">About</a>
                <a href="#contact"
                    class="nav-link text-gray-700 hover:text-indigo-600 font-medium transition-all">Contact</a>
            </div>

            <!-- Right Section -->
            <div class="hidden md:flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search products..."
                        class="w-64 px-4 py-2 bg-white/20 dark:bg-gray-800/30 backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
                    <svg class="absolute right-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <button onclick="toggleDark()"
                    class="p-2.5 rounded-xl hover:bg-white/20 dark:hover:bg-gray-700/30 transition-all">
                    <svg class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                    </svg>
                    <svg class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <a href="/login"
                    class="px-6 py-2.5 gradient-primary text-white rounded-xl font-semibold transition-all duration-300 hover:shadow-lg hover:scale-105">
                    Sign in
                </a>
                <a href="/register"
                    class="px-6 py-2.5 gradient-primary text-white rounded-xl font-semibold transition-all duration-300 hover:shadow-lg hover:scale-105">
                    Sign up
                </a>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden px-6 pt-4 pb-6 hidden space-y-4 bg-white shadow-inner">
            <a href="#home" class="block text-gray-700 hover:text-indigo-600 font-medium">Home</a>
            <a href="#products" class="block text-gray-700 hover:text-indigo-600 font-medium">Products</a>
            <a href="#categories" class="block text-gray-700 hover:text-indigo-600 font-medium">Categories</a>
            <a href="#about" class="block text-gray-700 hover:text-indigo-600 font-medium">About</a>
            <a href="#contact" class="block text-gray-700 hover:text-indigo-600 font-medium">Contact</a>
            <div class="flex flex-col gap-3">
                <a href="/login"
                    class="w-full text-center px-4 py-2 gradient-primary text-white rounded-xl font-semibold">Sign
                    in</a>
                <a href="/register"
                    class="w-full text-center px-4 py-2 gradient-primary text-white rounded-xl font-semibold">Sign
                    up</a>
            </div>
        </div>
    </header>


    <!-- Hero Section -->
    <section id="home" class="relative z-10 pt-20 pb-32 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <!-- Left Content -->
                <div class="animate-fade-in-up my-12">
                    <div class="inline-flex items-center px-4 py-2 mb-8 glass-effect rounded-full">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse "></span>
                        <span class="text-sm font-medium">🎉 New Collection Available</span>
                    </div>

                    <h1 class="text-5xl md:text-7xl font-space font-bold mb-1 leading-tight">
                        Shop the
                        <span class="gradient-text">Future</span>
                        <br>
                        Today
                    </h1>

                    <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                        Discover premium products with unmatched quality. From fashion to tech,
                        we've curated the perfect collection for modern lifestyle.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-12">
                        <button onclick="scrollToProducts()"
                            class="px-8 py-4 gradient-primary text-white rounded-xl font-semibold transition-all duration-300 hover:shadow-xl hover:scale-105">
                            Shop Now
                        </button>
                        <button
                            class="px-8 py-4 border-2 border-gray-300 dark:border-gray-600 hover:border-indigo-600 dark:hover:border-indigo-400 rounded-xl font-semibold transition-all duration-300 hover:scale-105">
                            View Collections
                        </button>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold gradient-text">50k+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Happy Customers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold gradient-text">1000+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Products</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold gradient-text">4.9★</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Rating</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Hero Image -->
                <div class="relative animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="relative w-full h-96 lg:h-[500px] rounded-3xl overflow-hidden glass-effect">
                        <!-- Background Image -->
                        <img src="https://plus.unsplash.com/premium_photo-1700824490100-f82146b2441f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTA4fHxzaG9wcGluZ3xlbnwwfHwwfHx8MA%3D%3D"
                            alt="Premium Products" class="w-full h-full object-cover object-center">
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 gradient-primary opacity-20"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="relative z-10 py-20 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-space font-bold mb-4">
                    Shop by <span class="gradient-text">Category</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300">
                    Find exactly what you're looking for
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Category Cards -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-2xl glass-effect p-8 card-hover h-48">
                        <div
                            class="absolute inset-0 gradient-primary opacity-10 group-hover:opacity-20 transition-opacity">
                        </div>
                        <div class="relative z-10 text-center">
                            <div
                                class="w-16 h-16 mx-auto mb-4 gradient-primary rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Electronics</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Latest gadgets & tech</p>
                        </div>
                    </div>
                </div>

                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-2xl glass-effect p-8 card-hover h-48">
                        <div
                            class="absolute inset-0 gradient-secondary opacity-10 group-hover:opacity-20 transition-opacity">
                        </div>
                        <div class="relative z-10 text-center">
                            <div
                                class="w-16 h-16 mx-auto mb-4 gradient-secondary rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Fashion</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Trendy clothing & style</p>
                        </div>
                    </div>
                </div>

                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-2xl glass-effect p-8 card-hover h-48">
                        <div
                            class="absolute inset-0 gradient-accent opacity-10 group-hover:opacity-20 transition-opacity">
                        </div>
                        <div class="relative z-10 text-center">
                            <div
                                class="w-16 h-16 mx-auto mb-4 gradient-accent rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Home & Living</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Decor & furniture</p>
                        </div>
                    </div>
                </div>

                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-2xl glass-effect p-8 card-hover h-48">
                        <div
                            class="absolute inset-0 gradient-primary opacity-10 group-hover:opacity-20 transition-opacity">
                        </div>
                        <div class="relative z-10 text-center">
                            <div
                                class="w-16 h-16 mx-auto mb-4 gradient-primary rounded-xl flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Sports</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm">Fitness & outdoor gear</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="products" class="relative z-10 py-20 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-space font-bold mb-4">
                    Featured <span class="gradient-text">Products</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300">
                    Hand-picked items just for you
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="products-grid">
                <!-- Products will be populated by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="relative z-10 py-20 px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <div class="glass-effect rounded-3xl p-12">
                <h2 class="text-3xl font-space font-bold mb-4">
                    Stay Updated with <span class="gradient-text">Latest Offers</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
                    Subscribe to our newsletter and never miss a deal
                </p>
                <div class="flex flex-col sm:flex-row max-w-lg mx-auto gap-4">
                    <input type="email" placeholder="Enter your email"
                        class="flex-1 px-6 py-4 bg-white/20 dark:bg-gray-800/30 backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
                    <button
                        class="px-8 py-4 gradient-primary text-white rounded-xl font-semibold transition-all duration-300 hover:shadow-xl hover:scale-105">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative z-10 py-16 px-6 lg:px-8 border-t border-gray-200/50 dark:border-gray-700/50">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- Brand -->
                <div>
                    <div class="flex items-center space-x-3 mb-4 ">
                        <div class="w-8 h-8 gradient-primary rounded-lg justify-center items-center flex">
                            <svg class="w-6 h-6 text-white " fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                        </div>
                        <span class="text-xl font-space font-bold gradient-text">ShopFlow</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Your premium destination for quality products and exceptional shopping experience.
                    </p>
                    <div class="flex space-x-3">
                        <div
                            class="w-10 h-10 bg-gray-200 dark:bg-gray-700 rounded-lg flex items-center justify-center hover:bg-indigo-600 hover:text-white transition-all cursor-pointer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div
                            class="w-10 h-10 bg-gray-200 dark:bg-gray-700 rounded-lg flex items-center justify-center hover:bg-indigo-600 hover:text-white transition-all cursor-pointer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </div>
                        <div
                            class="w-10 h-10 bg-gray-200 dark:bg-gray-700 rounded-lg flex items-center justify-center hover:bg-indigo-600 hover:text-white transition-all cursor-pointer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 110-16 8 8 0 010 16zm-3.5-6.5a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm7 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Home</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Products</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Categories</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">About
                                Us</a></li>
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Customer Service -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Customer Service</h3>
                    <ul class="space-y-2">
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">FAQs</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Shipping
                                Policy</a></li>
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Returns
                                & Refunds</a></li>
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Track
                                Order</a></li>
                        <li><a href="#"
                                class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Privacy
                                Policy</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 mr-3 mt-0.5" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600 dark:text-gray-400">123 Main Street, City, Country</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 mr-3" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span class="text-gray-600 dark:text-gray-400">+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 mr-3" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span class="text-gray-600 dark:text-gray-400">info@shopflow.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 border-t border-gray-200/50 dark:border-gray-700/50 text-center">
                <p class="text-gray-600 dark:text-gray-400">
                    &copy; 2023 ShopFlow. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Shopping Cart Sidebar -->
    <div id="cart-sidebar"
        class="fixed top-0 right-0 w-full md:w-96 h-full bg-white dark:bg-gray-800 shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-50 overflow-y-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-bold">Your Cart</h3>
                <button onclick="toggleCart()" class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div id="cart-items" class="space-y-4 mb-6">
                <!-- Cart items will be populated by JavaScript -->
                <div class="text-center py-8 text-gray-500 dark:text-gray-400">
                    <svg class="w-12 h-12 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4m-2.4 0L3 3H1m6 10v6a1 1 0 001 1h10a1 1 0 001-1v-6m-5 3v-3" />
                    </svg>
                    <p>Your cart is empty</p>
                </div>
            </div>

            <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600 dark:text-gray-400">Subtotal</span>
                    <span class="font-medium" id="cart-subtotal">$0.00</span>
                </div>
                <div class="flex justify-between mb-4">
                    <span class="text-gray-600 dark:text-gray-400">Shipping</span>
                    <span class="font-medium">Calculated at checkout</span>
                </div>
                <button
                    class="w-full py-3 gradient-primary text-white rounded-lg font-semibold transition-all duration-300 hover:shadow-lg">
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </div>

    <!-- Overlay for cart/mobile menu -->
    <div id="overlay"
        class="fixed inset-0 bg-black/50 z-40 opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-8 right-8 w-12 h-12 gradient-primary rounded-full flex items-center justify-center text-white shadow-lg opacity-0 invisible transition-all duration-300 z-40">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <script>
        // Sample product data
        const products = [{
                id: 1,
                name: "Wireless Headphones Pro",
                description: "Premium noise-cancelling wireless headphones with 30hr battery life",
                price: 199.99,
                category: "Electronics",
                image: "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
                rating: 4.8,
                featured: true
            },
            {
                id: 2,
                name: "Smart Watch Series 5",
                description: "Advanced health monitoring and fitness tracking smartwatch",
                price: 249.99,
                category: "Electronics",
                image: "https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
                rating: 4.6,
                featured: true
            },
            {
                id: 3,
                name: "Premium Leather Wallet",
                description: "Handcrafted genuine leather wallet with RFID protection",
                price: 59.99,
                category: "Fashion",
                image: "https://images.unsplash.com/photo-1591561954555-607968c989ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
                rating: 4.9,
                featured: true
            },
            {
                id: 4,
                name: "Organic Cotton T-Shirt",
                description: "Soft and breathable 100% organic cotton t-shirt",
                price: 29.99,
                category: "Fashion",
                image: "https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
                rating: 4.5,
                featured: true
            },
            {
                id: 5,
                name: "Ceramic Coffee Mug",
                description: "Handmade ceramic mug with ergonomic design",
                price: 24.99,
                category: "Home",
                image: "https://images.unsplash.com/photo-1517256064527-09c73fc73e38?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
                rating: 4.7,
                featured: true
            },
            {
                id: 6,
                name: "Yoga Mat Pro",
                description: "Eco-friendly non-slip yoga mat with carrying strap",
                price: 39.99,
                category: "Sports",
                image: "https://images.unsplash.com/photo-1571902943202-507ec2618e8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
                rating: 4.8,
                featured: true
            },
            {
                id: 7,
                name: "Bluetooth Speaker",
                description: "Portable waterproof speaker with 20hr playtime",
                price: 89.99,
                category: "Electronics",
                image: "https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
                rating: 4.4,
                featured: true
            },
            {
                id: 8,
                name: "Wireless Charging Pad",
                description: "Fast charging pad compatible with all Qi-enabled devices",
                price: 34.99,
                category: "Electronics",
                image: "https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
                rating: 4.3,
                featured: true
            }
        ];

        // Cart functionality
        let cart = [];

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            renderProducts();
            updateCartCount();

            // Dark mode toggle
            if (localStorage.getItem('darkMode') === 'true') {
                document.documentElement.classList.add('dark');
            }

            // Scroll event for back to top button
            window.addEventListener('scroll', function() {
                const backToTop = document.getElementById('back-to-top');
                if (window.pageYOffset > 300) {
                    backToTop.classList.remove('opacity-0', 'invisible');
                    backToTop.classList.add('opacity-100', 'visible');
                } else {
                    backToTop.classList.remove('opacity-100', 'visible');
                    backToTop.classList.add('opacity-0', 'invisible');
                }
            });

            // Back to top button click
            document.getElementById('back-to-top').addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });

        // Render products to the page
        function renderProducts() {
            const productsGrid = document.getElementById('products-grid');
            productsGrid.innerHTML = '';

            products.filter(product => product.featured).forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card rounded-2xl overflow-hidden card-hover';
                productCard.innerHTML = `
                    <div class="relative h-64 bg-gray-100 dark:bg-gray-700">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4 price-tag px-3 py-1 text-white text-sm font-semibold rounded-full">
                            $${product.price.toFixed(2)}
                        </div>
                    </div>0
                    <div class="p-6 h-64>
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-semibold text-lg">${product.name}</h3>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-sm ml-1">${product.rating}</span>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">${product.description}</p>
                        <button href='' onclick="addToCart(${product.id})" class="w-full py-2.5 gradient-primary text-white rounded-lg font-medium transition-all duration-300 hover:shadow-lg">
                            Add to Cart
                        </button>
                    </div>
                `;
                productsGrid.appendChild(productCard);
            });
        }

        // Add item to cart
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);

            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    ...product,
                    quantity: 1
                });
            }

            updateCartCount();
            showAddedToCart(product.name);
        }

        // Update cart count in header
        function updateCartCount() {
            const count = cart.reduce((total, item) => total + item.quantity, 0);
            document.getElementById('cart-count').textContent = count;

            // Update cart sidebar if open
            if (document.getElementById('cart-sidebar').classList.contains('translate-x-0')) {
                renderCartItems();
            }
        }

        // Render cart items in sidebar
        function renderCartItems() {
            const cartItems = document.getElementById('cart-items');

            if (cart.length === 0) {
                cartItems.innerHTML = `
                    <div class="text-center py-8 text-gray-500 dark:text-gray-400">
                        <svg class="w-12 h-12 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4m-2.4 0L3 3H1m6 10v6a1 1 0 001 1h10a1 1 0 001-1v-6m-5 3v-3"/>
                        </svg>
                        <p>Your cart is empty</p>
                    </div>
                `;
                document.getElementById('cart-subtotal').textContent = '$0.00';
                return;
            }

            cartItems.innerHTML = '';
            let subtotal = 0;

            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;

                const cartItem = document.createElement('div');
                cartItem.className = 'flex items-center border-b border-gray-200 dark:border-gray-700 pb-4';
                cartItem.innerHTML = `
                    <div class="w-20 h-20 bg-gray-100 dark:bg-gray-700 rounded-lg overflow-hidden mr-4">
                        <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <h4 class="font-medium">${item.name}</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">$${item.price.toFixed(2)} x ${item.quantity}</p>
                        <p class="font-semibold">$${itemTotal.toFixed(2)}</p>
                    </div>
                    <button onclick="removeFromCart(${item.id})" class="p-2 text-gray-500 hover:text-red-500 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                    </button>
                `;
                cartItems.appendChild(cartItem);
            });

            document.getElementById('cart-subtotal').textContent = `$${subtotal.toFixed(2)}`;
        }

        // Remove item from cart
        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCartCount();
            renderCartItems();
        }

        // Toggle cart sidebar
        function toggleCart() {
            const cartSidebar = document.getElementById('cart-sidebar');
            const overlay = document.getElementById('overlay');

            if (cartSidebar.classList.contains('translate-x-full')) {
                cartSidebar.classList.remove('translate-x-full');
                cartSidebar.classList.add('translate-x-0');
                overlay.classList.remove('opacity-0', 'pointer-events-none');
                overlay.classList.add('opacity-100', 'pointer-events-auto');
                renderCartItems();
            } else {
                cartSidebar.classList.remove('translate-x-0');
                cartSidebar.classList.add('translate-x-full');
                overlay.classList.remove('opacity-100', 'pointer-events-auto');
                overlay.classList.add('opacity-0', 'pointer-events-none');
            }
        }

        // Show "added to cart" notification
        function showAddedToCart(productName) {
            const notification = document.createElement('div');
            notification.className =
                'fixed bottom-8 left-1/2 transform -translate-x-1/2 px-6 py-3 bg-green-500 text-white rounded-lg shadow-lg flex items-center z-50 animate-fade-in-up';
            notification.innerHTML = `
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
                <span>${productName} added to cart</span>
            `;
            document.body.appendChild(notification);

            setTimeout(() => {
                notification.classList.remove('animate-fade-in-up');
                notification.classList.add('opacity-0', 'transition-opacity', 'duration-300');
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }

        // Toggle dark mode
        function toggleDark() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            localStorage.setItem('darkMode', html.classList.contains('dark'));
        }

        // Scroll to products section
        function scrollToProducts() {
            document.getElementById('products').scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
