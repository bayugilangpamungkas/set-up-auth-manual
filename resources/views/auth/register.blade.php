<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShopFlow | Register</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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

        .animate-float {
            animation: float 6s ease-in-out infinite;
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

        .bg-dots {
            background-image: radial-gradient(circle, rgba(99, 102, 241, 0.15) 1px, transparent 1px);
            background-size: 20px 20px;
        }

        .dark .bg-dots {
            background-image: radial-gradient(circle, rgba(139, 92, 246, 0.2) 1px, transparent 1px);
        }

        .password-strength {
            height: 4px;
            transition: all 0.3s;
        }
    </style>
</head>

<body
    class="bg-gradient-to-br from-slate-50 via-white to-blue-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen flex items-center justify-center p-4 transition-all duration-500">
    <!-- Background Pattern -->
    <div class="fixed inset-0 bg-dots opacity-30 pointer-events-none"></div>

    <!-- Floating Decorations -->
    <div class="fixed top-20 left-10 w-32 h-32 gradient-primary rounded-full opacity-10 animate-float"></div>
    <div class="fixed bottom-20 right-10 w-24 h-24 gradient-primary rounded-full opacity-10 animate-float"
        style="animation-delay: -2s;"></div>

    <!-- Register Container -->
    <div class="w-full max-w-md relative z-10">
        <div class="glass-effect rounded-3xl overflow-hidden shadow-xl">
            <!-- Header -->
            <div class="gradient-primary p-6 text-center">
                <div class="flex items-center justify-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>
                    </div>
                    <span class="text-2xl font-space font-bold text-white">ShopFlow</span>
                </div>
                <h1 class="text-xl font-medium text-white/90">Create your account</h1>
            </div>

            <!-- Form -->
            <div class="p-8 bg-white/50 dark:bg-gray-800/50">
                <form>
                    <!-- Full Name Input -->
                    <div class="mb-4">
                        <label for="fullname"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="fullname"
                                class="w-full pl-10 pr-4 py-3 bg-white/50 dark:bg-gray-700/50 border border-gray-200/50 dark:border-gray-600/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all"
                                placeholder="John Doe">
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email
                            Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email"
                                class="w-full pl-10 pr-4 py-3 bg-white/50 dark:bg-gray-700/50 border border-gray-200/50 dark:border-gray-600/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all"
                                placeholder="your@email.com">
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password"
                                class="w-full pl-10 pr-4 py-3 bg-white/50 dark:bg-gray-700/50 border border-gray-200/50 dark:border-gray-600/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all"
                                placeholder="••••••••" oninput="checkPasswordStrength()">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" class="text-gray-400 hover:text-gray-500"
                                    onclick="togglePasswordVisibility('password')">
                                    <i class="fas fa-eye" id="password-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-2 flex gap-1">
                            <div id="strength-1" class="password-strength w-full bg-gray-200 dark:bg-gray-700 rounded">
                            </div>
                            <div id="strength-2" class="password-strength w-full bg-gray-200 dark:bg-gray-700 rounded">
                            </div>
                            <div id="strength-3" class="password-strength w-full bg-gray-200 dark:bg-gray-700 rounded">
                            </div>
                            <div id="strength-4" class="password-strength w-full bg-gray-200 dark:bg-gray-700 rounded">
                            </div>
                        </div>
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="mb-6">
                        <label for="confirm-password"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Confirm
                            Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="confirm-password"
                                class="w-full pl-10 pr-4 py-3 bg-white/50 dark:bg-gray-700/50 border border-gray-200/50 dark:border-gray-600/50 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all"
                                placeholder="••••••••">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" class="text-gray-400 hover:text-gray-500"
                                    onclick="togglePasswordVisibility('confirm-password')">
                                    <i class="fas fa-eye" id="confirm-password-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Terms Checkbox -->
                    <div class="flex items-center mb-6">
                        <input id="terms" name="terms" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 dark:border-gray-600 rounded">
                        <label for="terms" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">
                            I agree to the <a href="#"
                                class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300 transition-colors">Terms
                                and Conditions</a>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full gradient-primary text-white py-3 px-4 rounded-xl font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-[1.02] mb-4">
                        Create Account
                    </button>

                    <!-- Divider -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white/50 dark:bg-gray-800/50 text-gray-500 dark:text-gray-400">Or sign
                                up with</span>
                        </div>
                    </div>

                    <!-- Social Register Buttons -->
                    <div class="grid grid-cols-2 gap-4">
                        <a href="#"
                            class="flex items-center justify-center py-2.5 px-4 bg-gray-100 dark:bg-gray-700 rounded-xl hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                            <i class="fab fa-google text-red-500 mr-2"></i>
                            <span class="text-sm font-medium">Google</span>
                        </a>
                        <a href="#"
                            class="flex items-center justify-center py-2.5 px-4 bg-gray-100 dark:bg-gray-700 rounded-xl hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                            <i class="fab fa-facebook-f text-blue-600 mr-2"></i>
                            <span class="text-sm font-medium">Facebook</span>
                        </a>
                    </div>
                </form>

                <!-- Login Link -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Already have an account?
                        <a href="#"
                            class="font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300 transition-colors">Sign
                            in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dark Mode Toggle -->
    <button onclick="toggleDark()"
        class="fixed top-4 right-4 p-2.5 rounded-xl hover:bg-white/20 dark:hover:bg-gray-700/30 transition-all z-50">
        <svg class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
        </svg>
        <svg class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                clip-rule="evenodd" />
        </svg>
    </button>

    <script>
        // Toggle dark mode
        function toggleDark() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            localStorage.setItem('darkMode', html.classList.contains('dark'));
        }

        // Check for saved dark mode preference
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark');
        }

        // Toggle password visibility
        function togglePasswordVisibility(fieldId) {
            const field = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(`${fieldId}-eye`);

            if (field.type === 'password') {
                field.type = 'text';
                eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                field.type = 'password';
                eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        // Password strength indicator
        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const strengthBars = [
                document.getElementById('strength-1'),
                document.getElementById('strength-2'),
                document.getElementById('strength-3'),
                document.getElementById('strength-4')
            ];

            // Reset all bars
            strengthBars.forEach(bar => {
                bar.classList.remove('bg-red-500', 'bg-yellow-500', 'bg-green-500');
                bar.classList.add('bg-gray-200', 'dark:bg-gray-700');
            });

            if (password.length === 0) return;

            // Very weak
            if (password.length < 4) {
                strengthBars[0].classList.add('bg-red-500');
                strengthBars[0].classList.remove('bg-gray-200', 'dark:bg-gray-700');
                return;
            }

            // Weak
            if (password.length < 8) {
                strengthBars[0].classList.add('bg-red-500');
                strengthBars[1].classList.add('bg-red-500');
                strengthBars.forEach((bar, i) => {
                    if (i < 2) {
                        bar.classList.remove('bg-gray-200', 'dark:bg-gray-700');
                    }
                });
                return;
            }

            // Medium
            if (password.length < 12 || !/\d/.test(password) || !/[A-Z]/.test(password) || !/[^A-Za-z0-9]/.test(password)) {
                strengthBars[0].classList.add('bg-yellow-500');
                strengthBars[1].classList.add('bg-yellow-500');
                strengthBars[2].classList.add('bg-yellow-500');
                strengthBars.forEach((bar, i) => {
                    if (i < 3) {
                        bar.classList.remove('bg-gray-200', 'dark:bg-gray-700');
                    }
                });
                return;
            }

            // Strong
            strengthBars.forEach(bar => {
                bar.classList.add('bg-green-500');
                bar.classList.remove('bg-gray-200', 'dark:bg-gray-700');
            });
        }
    </script>
</body>

</html>
