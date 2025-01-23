@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-court-green-800 mb-4">Layanan Kami</h1>
            <p class="text-xl text-gray-600">Pilih jenis perkara yang ingin Anda ajukan</p>
        </div>

        <!-- Layanan Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Perkara Gugatan Card -->
            <a href="{{ route('gugatan.create') }}" class="group">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             alt="Perkara Gugatan"
                             class="w-full h-48 object-cover"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-court-green-800 mb-2">Perkara Gugatan</h3>
                        <p class="text-gray-600 mb-4">
                            Pengajuan perkara gugatan untuk penyelesaian sengketa perdata, seperti perceraian, waris, dan ekonomi syariah.
                        </p>
                        <div class="flex items-center text-court-green-600 group-hover:text-court-green-700">
                            <span class="font-semibold">Ajukan Sekarang</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Perkara Permohonan Card -->
            <a href="{{ route('permohonan.create') }}" class="group">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             alt="Perkara Permohonan"
                             class="w-full h-48 object-cover"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-court-green-800 mb-2">Perkara Permohonan</h3>
                        <p class="text-gray-600 mb-4">
                            Pengajuan perkara permohonan seperti itsbat nikah, dispensasi kawin, dan penetapan ahli waris.
                        </p>
                        <div class="flex items-center text-court-green-600 group-hover:text-court-green-700">
                            <span class="font-semibold">Ajukan Sekarang</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Informasi Tambahan -->
        <div class="mt-16 text-center">
            <h2 class="text-2xl font-bold text-court-green-800 mb-4">Butuh Bantuan?</h2>
            <p class="text-gray-600 mb-6">Tim kami siap membantu Anda dalam proses pengajuan perkara</p>
            <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full text-white bg-court-green-600 hover:bg-court-green-700 transition duration-200">
                Hubungi Kami
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection
