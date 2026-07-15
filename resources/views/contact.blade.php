<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold text-gray-800 text-center mb-6">Biz bilan bog'lang</h1>
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg p-8">
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Ismingiz</label>
                    <input type="text" 
                           class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-indigo-500" 
                           placeholder="Ismingizni kiriting">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" 
                           class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-indigo-500" 
                           placeholder="Email manzilingiz">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Xabar</label>
                    <textarea rows="5" 
                              class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:border-indigo-500" 
                              placeholder="Xabaringizni yozing..."></textarea>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-xl hover:bg-indigo-700 transition font-semibold">
                    <i class="fas fa-paper-plane mr-2"></i>Yuborish
                </button>
            </form>
            <a href="{{ route('home') }}" class="inline-block mt-6 text-indigo-600 hover:text-indigo-800 transition">
                <i class="fas fa-arrow-left mr-2"></i>Bosh sahifaga qaytish
            </a>
        </div>
    </div>
</body>
</html>