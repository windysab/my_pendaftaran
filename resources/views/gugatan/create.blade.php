@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-b from-court-green-50 to-white">
        <!-- Hero Section -->
        <section class="py-8"> <!-- Reduced padding from py-20 to py-16 -->
            <div class="container mx-auto px-6">
                <div class="text-center">
                    <h1 class="text-4xl md:text-6xl font-bold text-court-green-800 mb-6">
                        Buat Gugatan Baru
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Isi form berikut untuk membuat gugatan baru.
                    </p>
                </div>
            </div>
        </section>

        <!-- Form Section -->
        <section class="py-0"> <!-- Reduced padding from py-4 to py-2 -->
            <div class="container mx-auto px-6">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-green-500 via-teal-400 to-blue-500 px-6 py-4">
                        <h2 class="text-xl font-semibold text-white">Formulir Gugatan</h2>
                    </div>

                    <form method="POST" action="" onsubmit="validateForm(event)" id="gugatanForm" class="p-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Data Penggugat -->
                            <div class="bg-white rounded-lg shadow-md">
                                <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
                                    <h3 class="text-lg font-medium text-white">Data Penggugat/ Istri</h3>
                                </div>

                                <div class="p-4 space-y-4">
                                    <div class="relative w-full">
                                        <input type="text" name="nama_penggugat" id="nama_penggugat"
                                            value="{{ old('nama_penggugat', $gugatan->nama_penggugat ?? '') }}"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                        <label class="input-floating-label" for="nama_penggugat">Nama Penggugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="text" name="binti_penggugat" id="binti_penggugat"
                                            value="{{ old('binti_penggugat', $gugatan->binti_penggugat ?? '') }}"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                        <label class="input-floating-label" for="binti_penggugat">Binti Penggugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="number" name="umur_penggugat" id="umur_penggugat"
                                            value="{{ old('umur_penggugat', $gugatan->umur_penggugat ?? '') }}"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                        <label class="input-floating-label" for="umur_penggugat">Umur Penggugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <select name="agama_penggugat" id="agama_penggugat"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                            <option value="islam"
                                                {{ old('agama_penggugat', $gugatan->agama_penggugat ?? '') == 'islam' ? 'selected' : '' }}>
                                                Islam</option>
                                            <option value="kristen"
                                                {{ old('agama_penggugat', $gugatan->agama_penggugat ?? '') == 'kristen' ? 'selected' : '' }}>
                                                Kristen</option>
                                            <option value="katolik"
                                                {{ old('agama_penggugat', $gugatan->agama_penggugat ?? '') == 'katolik' ? 'selected' : '' }}>
                                                Katolik</option>
                                            <option value="hindu"
                                                {{ old('agama_penggugat', $gugatan->agama_penggugat ?? '') == 'hindu' ? 'selected' : '' }}>
                                                Hindu</option>
                                            <option value="budha"
                                                {{ old('agama_penggugat', $gugatan->agama_penggugat ?? '') == 'budha' ? 'selected' : '' }}>
                                                Budha</option>
                                        </select>
                                        <label class="input-floating-label" for="agama_penggugat">Agama Penggugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="text" name="pekerjaan_penggugat" id="pekerjaan_penggugat"
                                            value="{{ old('pekerjaan_penggugat', $gugatan->pekerjaan_penggugat ?? '') }}"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                        <label class="input-floating-label" for="pekerjaan_penggugat">Pekerjaan Penggugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <select name="pendidikan_penggugat" id="pendidikan_penggugat"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                            <option value="Tidak Tamat SD"
                                                {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'Tidak Tamat SD' ? 'selected' : '' }}>
                                                Tidak Tamat SD</option>
                                            <option value="SD"
                                                {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'SD' ? 'selected' : '' }}>
                                                SD</option>
                                            <option value="SLTP"
                                                {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'SLTP' ? 'selected' : '' }}>
                                                SLTP</option>
                                            <option value="SLTA"
                                                {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'SLTA' ? 'selected' : '' }}>
                                                SLTA</option>
                                            <option value="DI"
                                                {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'DI' ? 'selected' : '' }}>
                                                DI</option>
                                            <option value="DII"
                                                {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'DII' ? 'selected' : '' }}>
                                                DII</option>
                                            <option value="DIII"
                                                {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'DIII' ? 'selected' : '' }}>
                                                DIII</option>
                                            <option value="S1"
                                                {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'S1' ? 'selected' : '' }}>
                                                S1</option>
                                        </select>
                                        <label class="input-floating-label" for="pendidikan_penggugat">Pendidikan Penggugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <textarea name="alamat_penggugat" id="alamat_penggugat" readonly onclick="openPenggugatAddressModal()"
                                            class="textarea textarea-floating is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">{{ old('alamat_penggugat', $gugatan->alamat_penggugat ?? '') }}</textarea>
                                        <label class="textarea-floating-label" for="alamat_penggugat">Alamat Lengkap</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Tergugat -->
                            <div class="bg-white rounded-lg shadow-md">
                                <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
                                    <h3 class="text-lg font-medium text-white">Data Tergugat/ Suami</h3>
                                </div>
                                <div class="p-4 space-y-4">
                                    <div class="relative w-full">
                                        <input type="text" name="nama_tergugat" id="nama_tergugat"
                                            value="{{ old('nama_tergugat', $gugatan->nama_tergugat ?? '') }}"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                        <label class="input-floating-label" for="nama_tergugat">Nama Tergugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="text" name="bin_tergugat" id="bin_tergugat"
                                            value="{{ old('bin_tergugat', $gugatan->bin_tergugat ?? '') }}"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                        <label class="input-floating-label" for="bin_tergugat">Bin Tergugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="number" name="umur_tergugat" id="umur_tergugat"
                                            value="{{ old('umur_tergugat', $gugatan->umur_tergugat ?? '') }}"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                        <label class="input-floating-label" for="umur_tergugat">Umur Tergugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <select name="agama_tergugat" id="agama_tergugat"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                            <option value="islam"
                                                {{ old('agama_tergugat', $gugatan->agama_tergugat ?? '') == 'islam' ? 'selected' : '' }}>
                                                Islam</option>
                                            <option value="kristen"
                                                {{ old('agama_tergugat', $gugatan->agama_tergugat ?? '') == 'kristen' ? 'selected' : '' }}>
                                                Kristen</option>
                                            <option value="katolik"
                                                {{ old('agama_tergugat', $gugatan->agama_tergugat ?? '') == 'katolik' ? 'selected' : '' }}>
                                                Katolik</option>
                                            <option value="hindu"
                                                {{ old('agama_tergugat', $gugatan->agama_tergugat ?? '') == 'hindu' ? 'selected' : '' }}>
                                                Hindu</option>
                                            <option value="budha"
                                                {{ old('agama_tergugat', $gugatan->agama_tergugat ?? '') == 'budha' ? 'selected' : '' }}>
                                                Budha</option>
                                        </select>
                                        <label class="input-floating-label" for="agama_tergugat">Agama Tergugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="text" name="pekerjaan_tergugat" id="pekerjaan_tergugat"
                                            value="{{ old('pekerjaan_tergugat', $gugatan->pekerjaan_tergugat ?? '') }}"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                        <label class="input-floating-label" for="pekerjaan_tergugat">Pekerjaan Tergugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <select name="pendidikan_tergugat" id="pendidikan_tergugat"
                                            class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">
                                            <option value="Tidak Tamat SD"
                                                {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'Tidak Tamat SD' ? 'selected' : '' }}>
                                                Tidak Tamat SD</option>
                                            <option value="SD"
                                                {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'SD' ? 'selected' : '' }}>
                                                SD</option>
                                            <option value="SLTP"
                                                {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'SLTP' ? 'selected' : '' }}>
                                                SLTP</option>
                                            <option value="SLTA"
                                                {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'SLTA' ? 'selected' : '' }}>
                                                SLTA</option>
                                            <option value="DI"
                                                {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'DI' ? 'selected' : '' }}>
                                                DI</option>
                                            <option value="DII"
                                                {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'DII' ? 'selected' : '' }}>
                                                DII</option>
                                            <option value="DIII"
                                                {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'DIII' ? 'selected' : '' }}>
                                                DIII</option>
                                            <option value="S1"
                                                {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'S1' ? 'selected' : '' }}>
                                                S1</option>
                                        </select>
                                        <label class="input-floating-label" for="pendidikan_tergugat">Pendidikan Tergugat</label>
                                    </div>
                                    <div class="relative w-full">
                                        <textarea name="alamat_tergugat" id="alamat_tergugat" readonly onclick="openAddressModal()"
                                            class="textarea textarea-floating is-valid peer mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">{{ old('alamat_tergugat', $gugatan->alamat_tergugat ?? '') }}</textarea>
                                        <label class="textarea-floating-label" for="alamat_tergugat">Alamat Lengkap</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <button type="submit"
                                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-court-green-600 hover:bg-court-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-court-green-500 transition-colors duration-200">
                                {{ isset($gugatan) ? 'Update' : 'Selanjutnya' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

<!-- Include FlyonUI JavaScript -->
<script src="../node_modules/flyonui/dist/js/accordion.js"></script>
