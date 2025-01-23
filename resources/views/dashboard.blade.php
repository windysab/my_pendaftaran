@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-b from-court-green-50 to-white">
    <!-- Hero Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-court-green-800 mb-6">
                    Selamat Datang di<br>Pengadilan Agama Amuntai
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Melayani dengan Integritas, Profesional, dan Berkeadilan
                </p>
                <a href="#layanan" class="bg-court-green-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-court-green-700 transition duration-300">
                    Lihat Layanan Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Jenis Perkara Section -->
    <section id="layanan" class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-court-green-800 mb-12">Jenis Perkara</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Perkara Gugatan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Perkara Gugatan</h3>
                        <p class="text-white opacity-90">Penyelesaian sengketa antara dua pihak atau lebih</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Cerai Gugat
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Harta Bersama
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Waris
                            </li>
                        </ul>
                        <div class="mt-6">
                            <a href="{{ route('gugatan.create') }}" class="block text-center bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 transition duration-300">
                                Ajukan Gugatan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Perkara Permohonan -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div class="bg-gradient-to-r from-green-500 to-green-600 p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Perkara Permohonan</h3>
                        <p class="text-white opacity-90">Penetapan status hukum atas suatu permohonan</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Itsbat Nikah
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Dispensasi Kawin
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                Wali Adhal
                            </li>
                        </ul>
                        <div class="mt-6">
                            <a href="{{ route('permohonan.create') }}" class="block text-center bg-green-500 text-white py-3 px-6 rounded-lg hover:bg-green-600 transition duration-300">
                                Ajukan Permohonan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-court-green-800 mb-12">Statistik Perkara</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">2,345</div>
                    <div class="text-gray-600">Total Perkara</div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">1,234</div>
                    <div class="text-gray-600">Perkara Selesai</div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="text-4xl font-bold text-yellow-600 mb-2">890</div>
                    <div class="text-gray-600">Dalam Proses</div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="text-4xl font-bold text-purple-600 mb-2">221</div>
                    <div class="text-gray-600">Perkara Baru</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Section -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-court-green-800 mb-12">Informasi Penting</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-court-green-700 mb-4">Jam Layanan</h3>
                    <p class="text-gray-600">Senin - Kamis: 08:00 - 16:00<br>Jumat: 08:00 - 16:30</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-court-green-700 mb-4">Biaya Perkara</h3>
                    <p class="text-gray-600">Informasi lengkap tentang panjar biaya perkara dapat dilihat di PTSP</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-court-green-700 mb-4">Layanan Online</h3>
                    <p class="text-gray-600">E-Court tersedia 24 jam untuk pendaftaran perkara online</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
