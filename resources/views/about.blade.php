@extends('layouts.app')

@section('title')
@section('content')

    <div class="container mx-auto px-4 py-16 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Men haqimda</h1>
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-lg p-8">
            <img src="https://ui-avatars.com/api/?name=User&size=128&background=6366f1&color=fff" alt="Avatar"
                class="w-32 h-32 rounded-full mx-auto mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Admin</h2>
            <p class="text-gray-500 mt-2">Blogger & Developer</p>
            <p class="text-gray-600 mt-4 leading-relaxed">
                Salom! Men bu blog orqali o'z bilim va tajribamni sizlar bilan baham ko'raman.
                Texnologiya, dasturlash va hayotiy maslahatlar haqida maqolalar yozaman.
            </p>
            <a href="{{ route('home') }}" class="inline-block mt-6 text-indigo-600 hover:text-indigo-800 transition">
                <i class="fas fa-arrow-left mr-2"></i>Bosh sahifaga qaytish
            </a>
        </div>
    </div>

@endsection