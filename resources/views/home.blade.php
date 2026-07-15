<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mening Blogim - Bosh sahifa</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Qo'shimcha custom style -->
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #a855f7 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.15);
        }
        .post-image {
            height: 240px;
            object-fit: cover;
        }
        .category-badge {
            transition: all 0.2s ease;
        }
        .category-badge:hover {
            background: #6366f1;
            color: white !important;
        }
        .sidebar-card {
            transition: all 0.3s ease;
        }
        .sidebar-card:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body>

    <!-- NAVIGATSIYA -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-2 text-2xl font-bold text-indigo-600">
                    <i class="fas fa-blog"></i>
                    <span>Mening Blog</span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-indigo-600 font-medium hover:text-indigo-800 transition">
                        <i class="fas fa-home mr-1"></i>Bosh sahifa
                    </a>
                    <a href="{{ route('blog') }}" class="text-gray-600 hover:text-indigo-600 transition">
                        <i class="fas fa-newspaper mr-1"></i>Blog
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-indigo-600 transition">
                        <i class="fas fa-user mr-1"></i>Men haqimda
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-600 hover:text-indigo-600 transition">
                        <i class="fas fa-envelope mr-1"></i>Kontakt
                    </a>
                    
                    <!-- Kategoriyalar dropdown -->
                    <div class="relative group">
                        <button class="text-gray-600 hover:text-indigo-600 transition flex items-center">
                            <i class="fas fa-folder mr-1"></i>Kategoriyalar
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="absolute hidden group-hover:block bg-white shadow-xl rounded-lg mt-2 w-48 py-2 z-50">
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">
                                Texnologiya
                            </a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">
                                Dasturlash
                            </a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">
                                Sayohat
                            </a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">
                                Oshxona
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden text-2xl text-gray-600 hover:text-indigo-600 transition">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4 space-y-3">
                <a href="{{ route('home') }}" class="block text-indigo-600 font-medium hover:bg-indigo-50 px-3 py-2 rounded transition">
                    <i class="fas fa-home mr-2"></i>Bosh sahifa
                </a>
                <a href="{{ route('blog') }}" class="block text-gray-600 hover:bg-indigo-50 hover:text-indigo-600 px-3 py-2 rounded transition">
                    <i class="fas fa-newspaper mr-2"></i>Blog
                </a>
                <a href="{{ route('about') }}" class="block text-gray-600 hover:bg-indigo-50 hover:text-indigo-600 px-3 py-2 rounded transition">
                    <i class="fas fa-user mr-2"></i>Men haqimda
                </a>
                <a href="{{ route('contact') }}" class="block text-gray-600 hover:bg-indigo-50 hover:text-indigo-600 px-3 py-2 rounded transition">
                    <i class="fas fa-envelope mr-2"></i>Kontakt
                </a>
                <div class="border-t pt-3">
                    <p class="text-gray-500 text-sm px-3 mb-2">Kategoriyalar</p>
                    <a href="#" class="block text-gray-600 hover:bg-indigo-50 hover:text-indigo-600 px-3 py-2 rounded transition">
                        Texnologiya
                    </a>
                    <a href="#" class="block text-gray-600 hover:bg-indigo-50 hover:text-indigo-600 px-3 py-2 rounded transition">
                        Dasturlash
                    </a>
                    <a href="#" class="block text-gray-600 hover:bg-indigo-50 hover:text-indigo-600 px-3 py-2 rounded transition">
                        Sayohat
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero-gradient text-white py-20 md:py-28">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto">
                <i class="fas fa-feather-alt text-6xl mb-6 opacity-90"></i>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Blogimga Xush Kelibsiz
                </h1>
                <p class="text-xl md:text-2xl text-indigo-100 mb-8 leading-relaxed">
                    Eng so'nggi yangiliklar, texnologiyalar va qiziqarli maqolalar
                </p>
                <a href="#posts" class="inline-block bg-white text-indigo-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-indigo-50 transition shadow-lg hover:shadow-xl">
                    <i class="fas fa-arrow-down mr-2"></i>Maqolalarni ko'rish
                </a>
            </div>
        </div>
    </section>

    <!-- ASOSIY KONTENT -->
    <div class="container mx-auto px-4 py-12 md:py-16" id="posts">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- MAQOLALAR RO'YXATI -->
            <div class="lg:w-2/3">
                <div class="flex items-center justify-between mb-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                        <i class="fas fa-newspaper text-indigo-600 mr-3"></i>So'nggi maqolalar
                    </h2>
                    <a href="{{ route('blog') }}" class="text-indigo-600 hover:text-indigo-800 font-medium transition">
                        Hammasini ko'rish <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Maqola 1 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md card-hover">
                        <img src="https://picsum.photos/seed/1/600/400" alt="Post image" class="w-full post-image">
                        <div class="p-5">
                            <a href="#" class="inline-block bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-semibold category-badge">
                                Texnologiya
                            </a>
                            <h3 class="text-xl font-bold mt-3 mb-2">
                                <a href="{{ route('posts.show', 'post-1') }}" class="text-gray-800 hover:text-indigo-600 transition">
                                    Laravel 11 da blog yaratish
                                </a>
                            </h3>
                            <p class="text-gray-500 text-sm mb-3 leading-relaxed">
                                Laravel 11 ning yangi xususiyatlari va blog yaratish bo'yicha qo'llanma...
                            </p>
                            <div class="flex items-center text-xs text-gray-400 space-x-4">
                                <span>
                                    <i class="fas fa-user mr-1"></i>Admin
                                </span>
                                <span>
                                    <i class="fas fa-calendar-alt mr-1"></i>15.07.2026
                                </span>
                                <span>
                                    <i class="fas fa-comment mr-1"></i>12
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Maqola 2 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md card-hover">
                        <img src="https://picsum.photos/seed/2/600/400" alt="Post image" class="w-full post-image">
                        <div class="p-5">
                            <a href="#" class="inline-block bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-semibold category-badge">
                                Dasturlash
                            </a>
                            <h3 class="text-xl font-bold mt-3 mb-2">
                                <a href="{{ route('posts.show', 'post-2') }}" class="text-gray-800 hover:text-indigo-600 transition">
                                    Tailwind CSS bo'yicha to'liq qo'llanma
                                </a>
                            </h3>
                            <p class="text-gray-500 text-sm mb-3 leading-relaxed">
                                Tailwind CSS ni o'rganish va chiroyli dizaynlar yaratish...
                            </p>
                            <div class="flex items-center text-xs text-gray-400 space-x-4">
                                <span>
                                    <i class="fas fa-user mr-1"></i>Admin
                                </span>
                                <span>
                                    <i class="fas fa-calendar-alt mr-1"></i>14.07.2026
                                </span>
                                <span>
                                    <i class="fas fa-comment mr-1"></i>8
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Maqola 3 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md card-hover">
                        <img src="https://picsum.photos/seed/3/600/400" alt="Post image" class="w-full post-image">
                        <div class="p-5">
                            <a href="#" class="inline-block bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-semibold category-badge">
                                Sayohat
                            </a>
                            <h3 class="text-xl font-bold mt-3 mb-2">
                                <a href="{{ route('posts.show', 'post-3') }}" class="text-gray-800 hover:text-indigo-600 transition">
                                    Samarqand bo'ylab sayohat
                                </a>
                            </h3>
                            <p class="text-gray-500 text-sm mb-3 leading-relaxed">
                                Samarqandning go'zal joylari va tarixiy obidalari haqida...
                            </p>
                            <div class="flex items-center text-xs text-gray-400 space-x-4">
                                <span>
                                    <i class="fas fa-user mr-1"></i>Admin
                                </span>
                                <span>
                                    <i class="fas fa-calendar-alt mr-1"></i>13.07.2026
                                </span>
                                <span>
                                    <i class="fas fa-comment mr-1"></i>5
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Maqola 4 -->
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md card-hover">
                        <img src="https://picsum.photos/seed/4/600/400" alt="Post image" class="w-full post-image">
                        <div class="p-5">
                            <a href="#" class="inline-block bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-semibold category-badge">
                                Oshxona
                            </a>
                            <h3 class="text-xl font-bold mt-3 mb-2">
                                <a href="{{ route('posts.show', 'post-4') }}" class="text-gray-800 hover:text-indigo-600 transition">
                                    O'zbek palovi sirlari
                                </a>
                            </h3>
                            <p class="text-gray-500 text-sm mb-3 leading-relaxed">
                                Haqiqiy o'zbek palovini tayyorlashning sirli retseptlari...
                            </p>
                            <div class="flex items-center text-xs text-gray-400 space-x-4">
                                <span>
                                    <i class="fas fa-user mr-1"></i>Admin
                                </span>
                                <span>
                                    <i class="fas fa-calendar-alt mr-1"></i>12.07.2026
                                </span>
                                <span>
                                    <i class="fas fa-comment mr-1"></i>7
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center items-center space-x-2 mt-10">
                    <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300 transition">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">1</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300 transition">2</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300 transition">3</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300 transition">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- SIDEBAR (Yon panel) -->
            <div class="lg:w-1/3 space-y-6">
                
                <!-- Qidiruv -->
                <div class="bg-white rounded-2xl p-6 shadow-md sidebar-card">
                    <h4 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-search text-indigo-600 mr-2"></i>Qidiruv
                    </h4>
                    <form action="#" method="GET">
                        <div class="flex">
                            <input type="text" 
                                   placeholder="Maqola qidirish..." 
                                   class="flex-1 px-4 py-3 border border-gray-200 rounded-l-xl focus:outline-none focus:border-indigo-500">
                            <button type="submit" class="bg-indigo-600 text-white px-6 rounded-r-xl hover:bg-indigo-700 transition">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Kategoriyalar -->
                <div class="bg-white rounded-2xl p-6 shadow-md sidebar-card">
                    <h4 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-folder text-indigo-600 mr-2"></i>Kategoriyalar
                    </h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex justify-between items-center text-gray-600 hover:text-indigo-600 transition py-1 border-b border-gray-50">
                                <span><i class="fas fa-angle-right mr-2 text-indigo-400"></i>Texnologiya</span>
                                <span class="bg-gray-100 px-2 py-0.5 rounded-full text-xs">12</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center text-gray-600 hover:text-indigo-600 transition py-1 border-b border-gray-50">
                                <span><i class="fas fa-angle-right mr-2 text-indigo-400"></i>Dasturlash</span>
                                <span class="bg-gray-100 px-2 py-0.5 rounded-full text-xs">8</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center text-gray-600 hover:text-indigo-600 transition py-1 border-b border-gray-50">
                                <span><i class="fas fa-angle-right mr-2 text-indigo-400"></i>Sayohat</span>
                                <span class="bg-gray-100 px-2 py-0.5 rounded-full text-xs">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex justify-between items-center text-gray-600 hover:text-indigo-600 transition py-1">
                                <span><i class="fas fa-angle-right mr-2 text-indigo-400"></i>Oshxona</span>
                                <span class="bg-gray-100 px-2 py-0.5 rounded-full text-xs">4</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Ommabop maqolalar -->
                <div class="bg-white rounded-2xl p-6 shadow-md sidebar-card">
                    <h4 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-fire text-red-500 mr-2"></i>Ommabop maqolalar
                    </h4>
                    <div class="space-y-4">
                        <div class="border-b border-gray-50 pb-3">
                            <a href="#" class="text-gray-800 hover:text-indigo-600 transition font-medium">
                                Laravel 11 da blog yaratish
                            </a>
                            <div class="text-xs text-gray-400 mt-1">
                                <i class="fas fa-comment mr-1"></i>12 izoh
                            </div>
                        </div>
                        <div class="border-b border-gray-50 pb-3">
                            <a href="#" class="text-gray-800 hover:text-indigo-600 transition font-medium">
                                Tailwind CSS bo'yicha to'liq qo'llanma
                            </a>
                            <div class="text-xs text-gray-400 mt-1">
                                <i class="fas fa-comment mr-1"></i>8 izoh
                            </div>
                        </div>
                        <div>
                            <a href="#" class="text-gray-800 hover:text-indigo-600 transition font-medium">
                                O'zbek palovi sirlari
                            </a>
                            <div class="text-xs text-gray-400 mt-1">
                                <i class="fas fa-comment mr-1"></i>7 izoh
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ijtimoiy tarmoqlar -->
                <div class="bg-white rounded-2xl p-6 shadow-md sidebar-card">
                    <h4 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-share-alt text-indigo-600 mr-2"></i>Biz bilan bog'lang
                    </h4>
                    <div class="flex gap-3">
                        <a href="#" class="bg-indigo-100 text-indigo-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-indigo-600 hover:text-white transition text-xl">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="#" class="bg-pink-100 text-pink-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-pink-600 hover:text-white transition text-xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-blue-100 text-blue-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition text-xl">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="bg-red-100 text-red-600 w-12 h-12 rounded-full flex items-center justify-center hover:bg-red-600 hover:text-white transition text-xl">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h5 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-blog mr-2 text-indigo-400"></i>Mening Blog
                    </h5>
                    <p class="text-gray-400 leading-relaxed">
                        Eng so'nggi yangiliklar, texnologiyalar va hayotiy maslahatlar.
                    </p>
                </div>
                <div>
                    <h5 class="text-xl font-bold mb-4">Tez havolalar</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Bosh sahifa</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">Men haqimda</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Kontakt</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-white transition">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-xl font-bold mb-4">Bog'lanish</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-envelope mr-2 text-indigo-400"></i>email@example.com</li>
                        <li><i class="fas fa-phone mr-2 text-indigo-400"></i>+998 90 123 45 67</li>
                        <li><i class="fas fa-map-marker-alt mr-2 text-indigo-400"></i>Toshkent, O'zbekiston</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2026 Barcha huquqlar himoyalangan.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>