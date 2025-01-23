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
                <a href="{{ route('layanan') }}" class="bg-court-green-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-court-green-700 transition duration-300">
                    Lihat Layanan Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan" class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-court-green-800 mb-12">Layanan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-court-green-700 mb-4">E-Court</h3>
                    <p class="text-gray-600">Layanan pengadilan berbasis elektronik untuk kemudahan akses masyarakat.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-court-green-700 mb-4">Pendaftaran Perkara</h3>
                    <p class="text-gray-600">Proses pendaftaran perkara yang cepat dan transparan.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-court-green-700 mb-4">Konsultasi Hukum</h3>
                    <p class="text-gray-600">Layanan konsultasi hukum gratis untuk masyarakat.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
