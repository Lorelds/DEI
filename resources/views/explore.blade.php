@extends('layouts.app')

@section('content')
<div class="bg-white rounded-3xl shadow-sm p-8 h-full min-h-[80vh]">
    
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-6">
        <div class="flex items-center gap-4 flex-wrap">
            <h1 class="font-bold text-3xl text-crave-teal">Explore Categories</h1>

            <a href="{{ auth()->check() ? route('products.index') : route('login') }}" class="inline-flex items-center gap-2 rounded-full bg-crave-lime px-5 py-3 text-sm font-bold text-crave-teal shadow-sm transition-colors hover:bg-crave-green">
                <ion-icon name="pricetag-outline"></ion-icon>
                Products
            </a>
        </div>
        
        <div class="relative w-full md:w-96">
            <ion-icon name="search" class="absolute left-4 top-4 text-gray-400 text-xl"></ion-icon>
            <input type="text" placeholder="Search for surplus food, categories, or stores..." class="w-full bg-gray-50 border border-gray-200 rounded-2xl py-4 pl-12 pr-4 outline-none text-md focus:ring-2 focus:ring-crave-lime focus:border-transparent transition-all shadow-inner">
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6">
        
        <a href="#" class="bg-crave-lime rounded-3xl p-8 flex flex-col items-center justify-center aspect-square shadow-sm transform hover:-translate-y-2 hover:shadow-lg transition-all duration-300">
            <div class="h-24 w-24 mb-5 bg-white rounded-full bg-opacity-30 flex items-center justify-center text-5xl"><ion-icon name="nutrition-outline" class="text-crave-teal"></ion-icon></div>
            <span class="font-bold text-2xl text-crave-teal text-center leading-tight">Makanan</span>
            <p class="mt-3 text-sm text-crave-teal text-center opacity-80">Semua kategori makanan tersedia di sini</p>
        </a>

        <a href="#" class="bg-crave-lightpink rounded-3xl p-8 flex flex-col items-center justify-center aspect-square shadow-sm transform hover:-translate-y-2 hover:shadow-lg transition-all duration-300">
            <div class="h-24 w-24 mb-5 bg-white rounded-full bg-opacity-30 flex items-center justify-center text-5xl"><ion-icon name="cafe-outline" class="text-white"></ion-icon></div>
            <span class="font-bold text-2xl text-white text-center leading-tight">Minuman</span>
            <p class="mt-3 text-sm text-white text-center opacity-80">Semua kategori minuman tersedia di sini</p>
        </a>

    </div>
</div>
@endsection