@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-green-500 via-teal-400 to-blue-500 px-6 py-4">
                <h2 class="text-xl font-semibold text-white">Buat Gugatan Baru</h2>
            </div>

            <form method="POST" action="{{ isset($gugatan) ? route('gugatan.update.form', $gugatan->id) : route('gugatan.page2.store') }}" onsubmit="validateForm(event)" id="gugatanForm" class="p-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Data Penggugat -->
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
                            <h3 class="text-lg font-medium text-white">Data Penggugat/ Istri</h3>
                        </div>
                        <div class="p-4 space-y-4">
                            <x-bladewind::input name="nama_penggugat" label="Nama Penggugat" value="{{ old('nama_penggugat', $gugatan->nama_penggugat ?? '') }}" class="w-full" />
                            <x-bladewind::input name="binti_penggugat" label="Binti Penggugat" value="{{ old('binti_penggugat', $gugatan->binti_penggugat ?? '') }}" class="w-full" />
                            <x-bladewind::input name="umur_penggugat" label="Umur Penggugat" type="number" value="{{ old('umur_penggugat', $gugatan->umur_penggugat ?? '') }}" class="w-full" />
                            <x-bladewind::select name="agama_penggugat" label="Agama Penggugat" class="w-full">
                                <option value="islam" {{ old('agama_penggugat', $gugatan->agama_penggugat ?? '') == 'islam' ? 'selected' : '' }}>Islam</option>
                                <option value="kristen" {{ old('agama_penggugat', $gugatan->agama_penggugat ?? '') == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="katolik" {{ old('agama_penggugat', $gugatan->agama_penggugat ?? '') == 'katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="hindu" {{ old('agama_penggugat', $gugatan->agama_penggugat ?? '') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="budha" {{ old('agama_penggugat', $gugatan->agama_penggugat ?? '') == 'budha' ? 'selected' : '' }}>Budha</option>
                            </x-bladewind::select>
                            <x-bladewind::input name="pekerjaan_penggugat" label="Pekerjaan Penggugat" value="{{ old('pekerjaan_penggugat', $gugatan->pekerjaan_penggugat ?? '') }}" class="w-full" />
                            <x-bladewind::select name="pendidikan_penggugat" label="Pendidikan Penggugat" class="w-full">
                                <option value="Tidak Tamat SD" {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'Tidak Tamat SD' ? 'selected' : '' }}>Tidak Tamat SD</option>
                                <option value="SD" {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'SD' ? 'selected' : '' }}>SD</option>
                                <option value="SLTP" {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'SLTP' ? 'selected' : '' }}>SLTP</option>
                                <option value="SLTA" {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'SLTA' ? 'selected' : '' }}>SLTA</option>
                                <option value="DI" {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'DI' ? 'selected' : '' }}>DI</option>
                                <option value="DII" {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'DII' ? 'selected' : '' }}>DII</option>
                                <option value="DIII" {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'DIII' ? 'selected' : '' }}>DIII</option>
                                <option value="S1" {{ old('pendidikan_penggugat', $gugatan->pendidikan_penggugat ?? '') == 'S1' ? 'selected' : '' }}>S1</option>
                            </x-bladewind::select>
                            <x-bladewind::textarea name="alamat_penggugat" label="Alamat Lengkap" readonly onclick="openPenggugatAddressModal()" class="w-full">{{ old('alamat_penggugat', $gugatan->alamat_penggugat ?? '') }}</x-bladewind::textarea>
                        </div>
                    </div>

                    <!-- Data Tergugat -->
                    <div class="bg-white rounded-lg shadow-md">
                        <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
                            <h3 class="text-lg font-medium text-white">Data Tergugat/ Suami</h3>
                        </div>
                        <div class="p-4 space-y-4">
                            <x-bladewind::input name="nama_tergugat" label="Nama Tergugat" value="{{ old('nama_tergugat', $gugatan->nama_tergugat ?? '') }}" class="w-full" />
                            <x-bladewind::input name="bin_tergugat" label="Bin Tergugat" value="{{ old('bin_tergugat', $gugatan->bin_tergugat ?? '') }}" class="w-full" />
                            <x-bladewind::input name="umur_tergugat" label="Umur Tergugat" type="number" value="{{ old('umur_tergugat', $gugatan->umur_tergugat ?? '') }}" class="w-full" />
                            <x-bladewind::select name="agama_tergugat" label="Agama Tergugat" class="w-full">
                                <option value="islam" {{ old('agama_tergugat', $gugatan->agama_tergugat ?? '') == 'islam' ? 'selected' : '' }}>Islam</option>
                                <option value="kristen" {{ old('agama_tergugat', $gugatan->agama_tergugat ?? '') == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="katolik" {{ old('agama_tergugat', $gugatan->agama_tergugat ?? '') == 'katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="hindu" {{ old('agama_tergugat', $gugatan->agama_tergugat ?? '') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="budha" {{ old('agama_tergugat', $gugatan->agama_tergugat ?? '') == 'budha' ? 'selected' : '' }}>Budha</option>
                            </x-bladewind::select>
                            <x-bladewind::input name="pekerjaan_tergugat" label="Pekerjaan Tergugat" value="{{ old('pekerjaan_tergugat', $gugatan->pekerjaan_tergugat ?? '') }}" class="w-full" />
                            <x-bladewind::select name="pendidikan_tergugat" label="Pendidikan Tergugat" class="w-full">
                                <option value="Tidak Tamat SD" {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'Tidak Tamat SD' ? 'selected' : '' }}>Tidak Tamat SD</option>
                                <option value="SD" {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'SD' ? 'selected' : '' }}>SD</option>
                                <option value="SLTP" {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'SLTP' ? 'selected' : '' }}>SLTP</option>
                                <option value="SLTA" {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'SLTA' ? 'selected' : '' }}>SLTA</option>
                                <option value="DI" {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'DI' ? 'selected' : '' }}>DI</option>
                                <option value="DII" {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'DII' ? 'selected' : '' }}>DII</option>
                                <option value="DIII" {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'DIII' ? 'selected' : '' }}>DIII</option>
                                <option value="S1" {{ old('pendidikan_tergugat', $gugatan->pendidikan_tergugat ?? '') == 'S1' ? 'selected' : '' }}>S1</option>
                            </x-bladewind::select>
                            <x-bladewind::textarea name="alamat_tergugat" label="Alamat Lengkap" readonly onclick="openAddressModal()" class="w-full">{{ old('alamat_tergugat', $gugatan->alamat_tergugat ?? '') }}</x-bladewind::textarea>
                        </div>
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-court-green-600 hover:bg-court-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-court-green-500 transition-colors duration-200">
                        {{ isset($gugatan) ? 'Update' : 'Selanjutnya' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
