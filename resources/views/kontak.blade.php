@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-16">
    <h1 class="text-4xl font-extrabold text-center text-court-green-800 mb-12">Hubungi Kami</h1>
    <div class="bg-gradient-to-r from-court-green-100 to-gray-50 p-8 rounded-lg shadow-xl">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Gambar -->
            <div class="md:w-1/2 flex justify-center relative">
                <div class="relative">
                    <!-- Verify the image path and ensure the file exists -->
                    <img src="/assets/images/gedungamuntai.jpg" alt="Kantor Pengadilan"
                         class="rounded-lg border-4 border-gray-300 shadow-lg hover:scale-105 transition-transform duration-300">
                    <div class="absolute top-0 left-0 w-full h-full rounded-lg bg-court-green-800 bg-opacity-10 hover:bg-opacity-30 transition-all duration-300"></div>
                </div>
            </div>

            <!-- Informasi -->
            <div class="md:w-1/2 md:pl-12 mt-8 md:mt-0">
                <div class="bg-white p-6 rounded-lg shadow-lg border">
                    <ul class="space-y-4">
                        <li class="text-lg text-gray-700">
                            <span class="font-semibold text-court-green-800">Alamat:</span>
                            Jl. Empu Mandastana No.10, Sungai Malang, Kec. Amuntai Tengah, Kab. Hulu Sungai Utara, Kalimantan Selatan, 71418
                        </li>
                        <li class="text-lg text-gray-700">
                            <span class="font-semibold text-court-green-800">Telepon:</span>
                            (0527) 61002
                        </li>
                        <li class="text-lg text-gray-700">
                            <span class="font-semibold text-court-green-800">Layanan Informasi:</span>
                            0821-4915-1132
                        </li>
                        <li class="text-lg text-gray-700">
                            <span class="font-semibold text-court-green-800">Layanan Pengaduan:</span>
                            0813-4585-3988
                        </li>
                        <li class="text-lg text-gray-700">
                            <span class="font-semibold text-court-green-800">Fax:</span>
                            (0527) 63037
                        </li>
                        <li class="text-lg text-gray-700">
                            <span class="font-semibold text-court-green-800">Email:</span>
                            <a href="mailto:pa.amuntai@gmail.com" class="underline hover:text-court-green-600">pa.amuntai@gmail.com</a>
                        </li>
                        <li class="text-lg text-gray-700">
                            <span class="font-semibold text-court-green-800">Website:</span>
                            <a href="https://pa-amuntai.go.id" class="underline hover:text-court-green-600">pa-amuntai.go.id</a>
                        </li>
                        <li class="text-lg text-gray-700">
                            <span class="font-semibold text-court-green-800">SIPP:</span>
                            <a href="https://www.sipp.pa-amuntai.go.id" class="underline hover:text-court-green-600">www.sipp.pa-amuntai.go.id</a>
                        </li>
                        <li class="text-lg text-gray-700">
                            <span class="font-semibold text-court-green-800">Jam Operasional:</span>
                            <br> Senin - Kamis: 08:00 - 16:30 WITA
                            <br> Jumat: 08:00 - 17:00 WITA
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
