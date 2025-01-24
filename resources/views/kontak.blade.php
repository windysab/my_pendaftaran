@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-16">
    <h1 class="text-4xl font-bold text-center text-court-green-800 mb-8">Kontak Kami</h1>
    <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2">
            <img src="/assets/images/kantor_pengadilan.jpg" alt="Kantor Pengadilan" class="rounded-lg shadow-lg mb-8 md:mb-0">
        </div>
        <div class="md:w-1/2 md:pl-12">
            <p class="text-lg text-gray-700 mb-4">Jl. Empu Mandastana No.10, Sungai Malang, Kec. Amuntai Tengah, Kabupaten Hulu Sungai Utara, Provinsi Kalimantan Selatan Kode Post 71418 </p>
            <p class="text-lg text-gray-700 mb-4">Telepon: (0527) 61002</p>
            <p class="text-lg text-gray-700 mb-4">Layanan Informasi: 082149151132</p>
            <p class="text-lg text-gray-700 mb-4">Layanan Pengaduan: 081345853988</p>
            <p class="text-lg text-gray-700 mb-4">Fax: (0527)  63037</p>
            <p class="text-lg text-gray-700 mb-4">Email: pa.amuntai@gmail.com</p>
            <p class="text-lg text-gray-700 mb-4">Website: <a href="https://pa-amuntai.go.id" class="text-court-green-800">pa-amuntai.go.id</a></p>
            <p class="text-lg text-gray-700 mb-4">Sistem Informasi Penelusuran Perkara: <a href="https://www.sipp.pa-amuntai.go.id" class="text-court-green-800">www.sipp.pa-amuntai.go.id</a></p>
            <p class="text-lg text-gray-700">Jam Operasional: Senin - Jumat, 08:00 - 16:00 WITA</p>
        </div>
    </div>
</div>
@endsection
