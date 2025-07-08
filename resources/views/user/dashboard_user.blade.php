<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShopFlow - User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&family=space-grotesk:400,500,600,700&family=poppins:300,400,500,600,700"
        rel="stylesheet" />

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
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.15);
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 20px, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        .sidebar-nav {
            transition: all 0.3s ease;
        }

        .sidebar-nav:hover {
            background: rgba(99, 102, 241, 0.1);
            border-radius: 8px;
        }

        .sidebar-nav.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 8px;
        }

        .notification-dot {
            animation: pulse 2s infinite;
        }

        .order-status {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .status-pending {
            background: #fef3c7;
            color: #d97706;
        }

        .status-processing {
            background: #dbeafe;
            color: #2563eb;
        }

        .status-shipped {
            background: #dcfce7;
            color: #16a34a;
        }

        .status-delivered {
            background: #f0fdf4;
            color: #15803d;
        }

        .status-cancelled {
            background: #fee2e2;
            color: #dc2626;
        }

        .dark .status-pending {
            background: rgba(217, 119, 6, 0.2);
            color: #fbbf24;
        }

        .dark .status-processing {
            background: rgba(37, 99, 235, 0.2);
            color: #60a5fa;
        }

        .dark .status-shipped {
            background: rgba(22, 163, 74, 0.2);
            color: #4ade80;
        }

        .dark .status-delivered {
            background: rgba(21, 128, 61, 0.2);
            color: #22c55e;
        }

        .dark .status-cancelled {
            background: rgba(220, 38, 38, 0.2);
            color: #f87171;
        }

        .metric-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark .metric-card {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1));
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
</head>

<body
    class="bg-gradient-to-br from-slate-50 via-white to-blue-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 text-gray-900 dark:text-white min-h-screen">

    <!-- Header -->
    <header
        class="sticky top-0 z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200/50 dark:border-gray-700/50">
        <div class="px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo & Mobile Menu -->
                <div class="flex items-center space-x-4">
                    <button onclick="toggleSidebar()"
                        class="lg:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 gradient-primary rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                        </div>
                        <div>
                            <span class="text-xl font-space font-bold gradient-text">ShopFlow</span>
                            <div class="text-xs text-gray-500 dark:text-gray-400">Dashboard</div>
                        </div>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="hidden md:flex flex-1 max-w-2xl mx-8">
                    <div class="relative w-full">
                        <input type="text" placeholder="Search products, orders, or anything..."
                            class="w-full px-4 py-2.5 pl-10 bg-white/50 dark:bg-gray-800/50 border border-gray-200/50 dark:border-gray-700/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                        <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>

                <!-- Header Actions -->
                <div class="flex items-center space-x-4">
                    <!-- Notifications -->
                    <div class="relative">
                        <button onclick="toggleNotifications()"
                            class="p-2 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span
                                class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full notification-dot"></span>
                        </button>
                    </div>

                    <!-- Cart -->
                    <div class="relative">
                        <button onclick="toggleCart()"
                            class="p-2 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4m-2.4 0L3 3H1m6 10v6a1 1 0 001 1h10a1 1 0 001-1v-6m-5 3v-3" />
                            </svg>
                            <span
                                class="absolute -top-1 -right-1 w-5 h-5 bg-indigo-500 text-white text-xs rounded-full flex items-center justify-center"
                                id="cart-count">3</span>
                        </button>
                    </div>

                    <!-- Dark Mode Toggle -->
                    <button onclick="toggleDark()"
                        class="p-2 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <svg class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                        </svg>
                        <svg class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- User Profile -->
                    <div class="relative" id="profileDropdown">
                        <button type="button" id="profileButton"
                            class="flex items-center space-x-3 p-2 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                            <div class="w-8 h-8 gradient-primary rounded-full flex items-center justify-center">
                                <img class="text-white font-semibold text-sm"></img>
                            </div>
                            <div class="hidden md:block text-left">
                                <div class="font-semibold">{{ auth()->user()->name }}</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Premium Member</div>
                            </div>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="profileMenu"
                            class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg z-50">
                            <div class="py-1">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Settings</a>
                                <div class="border-t border-gray-200 dark:border-gray-700"></div>
                                <a href="/logout"
                                    class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="fas fa-power-off mr-2"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-40 w-64 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-r border-gray-200/50 dark:border-gray-700/50 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
            <div class="h-full px-6 py-6 overflow-y-auto">
                <nav class="space-y-2">
                    <a href="#" onclick="showSection('dashboard')"
                        class="sidebar-nav active flex items-center space-x-3 px-4 py-3 text-gray-700 dark:text-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <a href="#" onclick="showSection('orders')"
                        class="sidebar-nav flex items-center space-x-3 px-4 py-3 text-gray-700 dark:text-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <span>My Orders</span>
                        <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">2</span>
                    </a>

                    <a href="/user/product" onclick="showSection('products')"
                        class="sidebar-nav flex items-center space-x-3 px-4 py-3 text-gray-700 dark:text-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        <span>Products</span>
                    </a>

                    <a href="#" onclick="showSection('wishlist')"
                        class="sidebar-nav flex items-center space-x-3 px-4 py-3 text-gray-700 dark:text-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <span>Wishlist</span>
                    </a>

                    <a href="#" onclick="showSection('addresses')"
                        class="sidebar-nav flex items-center space-x-3 px-4 py-3 text-gray-700 dark:text-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Addresses</span>
                    </a>

                    <a href="#" onclick="showSection('payment')"
                        class="sidebar-nav flex items-center space-x-3 px-4 py-3 text-gray-700 dark:text-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <span>Payment Methods</span>
                    </a>

                    <a href="#" onclick="showSection('rewards')"
                        class="sidebar-nav flex items-center space-x-3 px-4 py-3 text-gray-700 dark:text-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                        </svg>
                        <span>Rewards & Points</span>
                        <span class="ml-auto bg-green-500 text-white text-xs px-2 py-1 rounded-full">1,250</span>
                    </a>

                    <a href="#" onclick="showSection('reviews')"
                        class="sidebar-nav flex items-center space-x-3 px-4 py-3 text-gray-700 dark:text-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <span>Reviews</span>
                    </a>

                    <a href="#" onclick="showSection('support')"
                        class="sidebar-nav flex items-center space-x-3 px-4 py-3 text-gray-700 dark:text-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span>Support</span>
                    </a>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 lg:ml-64 p-6">
            <!-- Dashboard Section -->
            <div id="dashboard-section" class="section">
                <!-- Welcome Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-space font-bold mb-2">Welcome back, {{ auth()->user()->name }} 👋</h1>
                    <p class="text-gray-600 dark:text-gray-400">Here's what's happening with your account today.</p>
                </div>

                <!-- Recent Orders & Activity -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <!-- Recent Orders -->
                    <div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-2xl shadow-sm card-hover">
                        <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium">Recent Orders</h3>
                                <a href="#"
                                    class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">View all</a>
                            </div>
                        </div>
                        <div class="divide-y divide-gray-200 dark:divide-gray-700">
                            <!-- Order 1 -->
                            <div class="p-6">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-medium">Order #3245</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">3 items • $124.98</p>
                                    </div>
                                    <div class="order-status status-delivered">Delivered</div>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex -space-x-2">
                                        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
                                            src="https://images.unsplash.com/photo-1504274066651-8d31a536b11a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=200&q=80"
                                            alt="">
                                        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
                                            src="https://images.unsplash.com/photo-1519241047957-be2d03a2b2f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=200&q=80"
                                            alt="">
                                        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
                                            src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=200&q=80"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Delivered on May 12, 2023
                                        </p>
                                        <a href="#"
                                            class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Track
                                            package</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Order 2 -->
                            <div class="p-6">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-medium">Order #3244</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">1 item • $59.99</p>
                                    </div>
                                    <div class="order-status status-shipped">Shipped</div>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <img class="w-10 h-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=200&q=80"
                                        alt="">
                                    <div class="ml-4">
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Shipped on May 10, 2023</p>
                                        <a href="#"
                                            class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">Track
                                            package</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Order 3 -->
                            <div class="p-6">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-medium">Order #3243</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">2 items • $89.98</p>
                                    </div>
                                    <div class="order-status status-processing">Processing</div>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex -space-x-2">
                                        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
                                            src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=200&q=80"
                                            alt="">
                                        <img class="w-10 h-10 rounded-full border-2 border-white dark:border-gray-800"
                                            src="https://images.unsplash.com/photo-1504274066651-8d31a536b11a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=200&q=80"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Placed on May 8, 2023</p>
                                        <a href="#"
                                            class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:underline">View
                                            details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm card-hover">
                        <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium">Recent Activity</h3>
                                <a href="#"
                                    class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">View all</a>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- Activity 1 -->
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="w-10 h-10 rounded-full bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center">
                                            <svg class="w-5 h-5 text-indigo-500 dark:text-indigo-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium">Order #3245 delivered</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Your order has been
                                            successfully delivered</p>
                                        <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                                    </div>
                                </div>

                                <!-- Activity 2 -->
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center">
                                            <svg class="w-5 h-5 text-green-500 dark:text-green-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium">150 points earned</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">You earned points for your
                                            recent purchase</p>
                                        <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                                    </div>
                                </div>

                                <!-- Activity 3 -->
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center">
                                            <svg class="w-5 h-5 text-blue-500 dark:text-blue-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium">New login detected</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">Login from Chrome on
                                            Windows</p>
                                        <p class="text-xs text-gray-400 mt-1">2 days ago</p>
                                    </div>
                                </div>

                                <!-- Activity 4 -->
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900 flex items-center justify-center">
                                            <svg class="w-5 h-5 text-purple-500 dark:text-purple-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium">Item back in stock</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">"Wireless Headphones" is
                                            now available</p>
                                        <p class="text-xs text-gray-400 mt-1">3 days ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recommended Products -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm card-hover mb-8">
                    <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium">Recommended For You</h3>
                            <a href="#"
                                class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">View all</a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Product 1 -->
                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 dark:bg-gray-700">
                                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                                        alt="Product image"
                                        class="h-full w-full object-cover object-center group-hover:opacity-75 transition-opacity">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900 dark:text-white">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Wireless Headphones
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Electronics</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">$99.99</p>
                                </div>
                            </div>

                            <!-- Product 2 -->
                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 dark:bg-gray-700">
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                                        alt="Product image"
                                        class="h-full w-full object-cover object-center group-hover:opacity-75 transition-opacity">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900 dark:text-white">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Running Shoes
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Footwear</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">$79.99</p>
                                </div>
                            </div>

                            <!-- Product 3 -->
                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 dark:bg-gray-700">
                                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                                        alt="Product image"
                                        class="h-full w-full object-cover object-center group-hover:opacity-75 transition-opacity">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900 dark:text-white">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Smart Watch
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Electronics</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">$199.99</p>
                                </div>
                            </div>

                            <!-- Product 4 -->
                            <div class="group relative">
                                <div
                                    class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 dark:bg-gray-700">
                                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80"
                                        alt="Product image"
                                        class="h-full w-full object-cover object-center group-hover:opacity-75 transition-opacity">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm font-medium text-gray-900 dark:text-white">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Bluetooth Speaker
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Electronics</p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">$59.99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Sections (Hidden by default) -->
            <div id="orders-section" class="section hidden">
                <!-- Orders section content -->
                <div class="text-center py-12">
                    <h2 class="text-2xl font-bold">My Orders</h2>
                    <p class="text-gray-500 mt-2">Your order history will appear here</p>
                </div>
            </div>

            <div id="products-section" class="section hidden">
                <!-- Products section content -->
                <div class="text-center py-12">
                    <h2 class="text-2xl font-bold">Products</h2>
                    <p class="text-gray-500 mt-2">Browse our product catalog</p>
                </div>
            </div>

            <!-- Add other sections similarly -->
        </main>
    </div>

    <!-- JavaScript -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const profileButton = document.getElementById('profileButton');
            const profileMenu = document.getElementById('profileMenu');

            // Toggle menu when button is clicked
            profileButton.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent this click from triggering the document click listener
                profileMenu.classList.toggle('hidden');
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!profileButton.contains(e.target) && !profileMenu.contains(e.target)) {
                    profileMenu.classList.add('hidden');
                }
            });

            // Close menu when clicking on menu items (optional)
            profileMenu.querySelectorAll('a').forEach(item => {
                item.addEventListener('click', function() {
                    profileMenu.classList.add('hidden');
                });
            });
        });
    </script>


    <script>
        // Toggle sidebar on mobile
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        }

        // Toggle dark mode
        function toggleDark() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        }

        // Check for saved dark mode preference
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark');
        }

        // Show specific section
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.section').forEach(section => {
                section.classList.add('hidden');
            });

            // Show selected section
            document.getElementById(`${sectionId}-section`).classList.remove('hidden');

            // Update active nav item
            document.querySelectorAll('.sidebar-nav').forEach(nav => {
                nav.classList.remove('active');
            });
            event.currentTarget.classList.add('active');
        }

        // Initialize with dashboard section visible
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('dashboard-section').classList.remove('hidden');
        });
    </script>
</body>

</html>
