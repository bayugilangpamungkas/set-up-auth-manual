<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ShopFlow account verification page">
    <title>ShopFlow | Account Verification</title>

    <!-- Preload resources -->
    <link rel="preload" href="https://cdn.tailwindcss.com" as="script">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        as="style">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&family=space-grotesk:400,500,600,700&family=poppins:300,400,500,600,700');

        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --success-gradient: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }

        body {
            font-family: 'Inter', sans-serif;
            @apply antialiased;
        }

        .font-space {
            font-family: 'Space Grotesk', sans-serif;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-primary {
            background: var(--primary-gradient);
        }

        .gradient-secondary {
            background: var(--secondary-gradient);
        }

        .gradient-accent {
            background: var(--accent-gradient);
        }

        .gradient-text {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
        }

        .dark .glass-effect {
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.4);
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float 6s ease-in-out infinite;
            animation-delay: -2s;
        }

        .animate-float-slow {
            animation: float 8s ease-in-out infinite;
            animation-delay: -4s;
        }

        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
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

        @keyframes pulse-glow {

            0%,
            100% {
                opacity: 0.5;
                transform: scale(1);
            }

            50% {
                opacity: 0.8;
                transform: scale(1.05);
            }
        }

        .bg-mesh {
            background-image:
                radial-gradient(circle at 25% 25%, rgba(99, 102, 241, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 25%, rgba(139, 92, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 25% 75%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(168, 85, 247, 0.1) 0%, transparent 50%);
        }

        .dark .bg-mesh {
            background-image:
                radial-gradient(circle at 25% 25%, rgba(99, 102, 241, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 75% 25%, rgba(139, 92, 246, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 25% 75%, rgba(59, 130, 246, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(168, 85, 247, 0.2) 0%, transparent 50%);
        }

        .btn-primary {
            background: var(--primary-gradient);
            @apply text-white font-semibold py-4 px-8 rounded-2xl hover:shadow-2xl hover:shadow-purple-500/25 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-purple-500/50;
        }

        .btn-secondary {
            background: var(--accent-gradient);
            @apply text-white font-medium py-3 px-6 rounded-xl hover:shadow-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-400/50;
        }

        .icon-container {
            background: var(--accent-gradient);
            @apply p-4 rounded-2xl shadow-lg animate-pulse-glow;
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 35px 60px rgba(0, 0, 0, 0.15);
        }

        .dark .card-hover:hover {
            box-shadow: 0 35px 60px rgba(0, 0, 0, 0.5);
        }

        .shimmer {
            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, 0.4),
                    transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        .notification-enter {
            animation: slideInFromTop 0.5s ease-out;
        }

        @keyframes slideInFromTop {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-gradient);
        }
    </style>
</head>

<body
    class="bg-gradient-to-br from-slate-50 via-white to-blue-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen flex items-center justify-center p-4 transition-colors duration-500 bg-mesh">

    <!-- Animated Background Elements -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div
            class="absolute top-1/4 left-1/4 w-64 h-64 gradient-primary rounded-full opacity-20 animate-float blur-3xl">
        </div>
        <div
            class="absolute bottom-1/3 right-1/4 w-48 h-48 gradient-secondary rounded-full opacity-20 animate-float-delayed blur-3xl">
        </div>
        <div
            class="absolute top-2/3 left-1/3 w-32 h-32 gradient-accent rounded-full opacity-20 animate-float-slow blur-2xl">
        </div>
        <div
            class="absolute top-1/2 right-1/2 w-24 h-24 gradient-primary rounded-full opacity-15 animate-float blur-xl">
        </div>
    </div>

    <!-- Main Container -->
    <div class="w-full max-w-lg relative z-10">
        <div class="glass-effect rounded-3xl overflow-hidden shadow-2xl card-hover">

            <!-- Header Section -->
            <div class="gradient-primary p-8 text-center relative overflow-hidden">
                <div class="shimmer absolute inset-0 opacity-30"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-center space-x-3 mb-6">
                        <div class="icon-container">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                        </div>
                        <h1 class="text-3xl font-space font-bold text-white">ShopFlow</h1>
                    </div>
                    <h2 class="text-xl font-semibold text-white/95 mb-2">Account Verification</h2>
                    <p class="text-white/80 text-sm">Secure your shopping experience</p>
                </div>
            </div>

            <!-- Content Section -->
            <div class="p-8 pt-6">
                <!-- Error Alert -->
                <div id="errorAlert"
                    class="hidden bg-gradient-to-r from-red-500 to-pink-500 text-white p-4 mb-6 rounded-xl shadow-lg notification-enter"
                    role="alert">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-triangle mr-3 text-lg"></i>
                        <div>
                            <strong class="font-semibold">Verification Failed</strong>
                            <p class="text-sm mt-1 opacity-90">Please try again or contact support</p>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="text-center">
                    <!-- Email Icon -->
                    <div class="mb-8">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full shadow-lg mb-4 animate-pulse-glow">
                            <i class="fas fa-envelope-open-text text-3xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-space font-bold gradient-text mb-2">Verify Your Account</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            We'll send a verification code to your email address to ensure your account security
                        </p>
                    </div>

                    <!-- Action Button -->
                    <div class="space-y-4">
                        <form action="/verify" method="POST">
                            @csrf
                            <input type="hidden" value="register" name="type">
                            <button type="submit"
                                class="w-full inline-flex items-center justify-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold font-space rounded-xl shadow-lg transition-all duration-300 group focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2">
                                <i
                                    class="fas fa-paper-plane mr-3 text-white transition-transform duration-300 group-hover:translate-x-1"></i>
                                <span class="font-space">Send Verification Code to email</span>
                            </button>
                        </form>


                        <!-- Additional Options -->
                        <div class="flex items-center justify-center flex-wrap gap-4 text-sm mt-6">
                            <a href="/resend-otp"
                                class="inline-flex items-center px-5 py-2.5 border border-indigo-500 text-indigo-600 hover:bg-indigo-50 dark:hover:bg-gray-800 hover:text-indigo-700 dark:text-indigo-300 dark:border-indigo-400 font-medium rounded-xl transition-all duration-300 group">
                                <i class="fas fa-redo mr-2 transition-transform group-hover:rotate-90"></i>
                                Resend Code
                            </a>
                            <a href="/help"
                                class="inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-300 font-medium">
                                <i class="fas fa-question-circle mr-2"></i>
                                Need Help?
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Security Features -->
                <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div class="flex flex-col items-center space-y-2">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center shadow-md">
                                <i class="fas fa-shield-alt text-white text-lg"></i>
                            </div>
                            <span class="text-xs text-gray-600 dark:text-gray-400">Secure</span>
                        </div>
                        <div class="flex flex-col items-center space-y-2">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full flex items-center justify-center shadow-md">
                                <i class="fas fa-clock text-white text-lg"></i>
                            </div>
                            <span class="text-xs text-gray-600 dark:text-gray-400">Fast</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-6 text-sm text-gray-500 dark:text-gray-400">
            <p>© 2024 ShopFlow. All rights reserved.</p>
        </div>
    </div>

    <!-- Dark Mode Toggle -->
    <button onclick="toggleDark()" aria-label="Toggle dark mode"
        class="fixed top-6 right-6 p-3 rounded-full bg-white/20 dark:bg-gray-800/30 hover:bg-white/30 dark:hover:bg-gray-700/40 backdrop-blur-lg transition-all duration-300 z-50 focus:outline-none focus:ring-4 focus:ring-purple-500/50 shadow-lg">
        <svg class="w-6 h-6 dark:hidden text-gray-700" fill="currentColor" viewBox="0 0 20 20">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
        </svg>
        <svg class="w-6 h-6 hidden dark:block text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <script>
        // Toggle dark mode with smooth animation
        function toggleDark() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            localStorage.setItem('darkMode', html.classList.contains('dark'));

            // Add ripple effect
            const button = event.currentTarget;
            const ripple = document.createElement('span');
            ripple.className = 'absolute inset-0 rounded-full bg-white/30 scale-0 animate-ping';
            button.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);

            // Dispatch event
            document.dispatchEvent(new CustomEvent('colorSchemeChanged', {
                detail: {
                    isDark: html.classList.contains('dark')
                }
            }));
        }

        // Initialize dark mode
        function initializeDarkMode() {
            const savedDarkMode = localStorage.getItem('darkMode');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (savedDarkMode === 'true' || (!savedDarkMode && prefersDark)) {
                document.documentElement.classList.add('dark');
            }
        }

        // Listen for system color scheme changes
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!localStorage.getItem('darkMode')) {
                document.documentElement.classList.toggle('dark', e.matches);
            }
        });

        // Button hover effects
        function addButtonEffects() {
            const buttons = document.querySelectorAll('.btn-primary, .btn-secondary');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px) scale(1.02)';
                });

                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        }

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            initializeDarkMode();
            addButtonEffects();

            // Add loading state to buttons
            const sendButton = document.querySelector('a[href="/send-otp"]');
            if (sendButton) {
                sendButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i><span>Sending...</span>';
                    this.classList.add('opacity-75', 'cursor-not-allowed');

                    // Simulate sending (remove in production)
                    setTimeout(() => {
                        window.location.href = '/send-otp';
                    }, 2000);
                });
            }
        });

        // Add smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>
