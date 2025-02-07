@extends('layouts.app')

@section('title', 'Gugatan - Data Pernikahan')

@section('content')
<div class="bg-gradient-to-b from-court-green-50 to-white">
    <!-- Hero Section -->
    <section class="py-8">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-court-green-800 mb-6">
                    Formulir Gugatan - Data Pernikahan
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Silahkan isi data pernikahan dibawah ini. Pastikan data yang anda masukkan benar.
                </p>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="py-0">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-green-500 via-teal-400 to-blue-500 px-6 py-4">
                    <h2 class="text-xl font-semibold text-white">Detail Pernikahan & Tempat Tinggal</h2>
                </div>

                <form method="POST" action="{{ route('gugatan.page3') }}" class="p-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Detail Pernikahan -->
                        <div class="bg-white rounded-lg shadow-md">
                            <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
                                <h3 class="text-lg font-medium text-white">Detail Pernikahan</h3>
                            </div>
                            <div class="p-4 space-y-4">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="relative w-full">
                                        <input type="text" id="hari_pernikahan" name="hari_pernikahan" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" readonly>
                                        <label class="input-floating-label">Hari Pernikahan</label>
                                        <span id="error_hari_pernikahan" class="text-red-500 text-sm"></span>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="date" id="tanggal_pernikahan" name="tanggal_pernikahan" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
                                        <label class="input-floating-label">Tanggal Pernikahan</label>
                                        <span id="error_tanggal_pernikahan" class="text-red-500 text-sm"></span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-4">
                                    <div class="relative w-full">
                                        <input type="text" id="kabupaten_pernikahan" name="kabupaten_pernikahan" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" placeholder="Cari Kabupaten">
                                        <label class="input-floating-label">Kabupaten</label>
                                        <div id="kabupaten_pernikahan_suggestions" class="list-group"></div>
                                        <span id="error_kabupaten_pernikahan" class="text-red-500 text-sm"></span>
                                    </div>
                                    <div class="relative w-full">
                                        <select id="kecamatan_pernikahan" name="kecamatan_pernikahan" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
                                            <option value="">Pilih Kecamatan</option>
                                        </select>
                                        <label class="input-floating-label">Kecamatan</label>
                                        <span id="error_kecamatan_pernikahan" class="text-red-500 text-sm"></span>
                                    </div>
                                    <div class="relative w-full">
                                        <select id="desa_pernikahan" name="desa_pernikahan" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
                                            <option value="">Pilih Desa</option>
                                        </select>
                                        <label class="input-floating-label">Desa</label>
                                        <span id="error_desa_pernikahan" class="text-red-500 text-sm"></span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div class="relative w-full">
                                        <input type="text" id="nomor_akta_nikah" name="nomor_akta_nikah" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
                                        <label class="input-floating-label">Nomor Akta Nikah</label>
                                        <span id="error_nomor_akta_nikah" class="text-red-500 text-sm"></span>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="date" id="tanggal_akta_nikah" name="tanggal_akta_nikah" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
                                        <label class="input-floating-label">Tanggal Akta Nikah</label>
                                        <span id="error_tanggal_akta_nikah" class="text-red-500 text-sm"></span>
                                    </div>
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div class="relative w-full">
                                        <input type="text" id="kecamatan_kua" name="kecamatan_kua" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
                                        <label class="input-floating-label">Kecamatan KUA</label>
                                        <span id="error_kecamatan_kua" class="text-red-500 text-sm"></span>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="text" id="kabupaten_kua" name="kabupaten_kua" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
                                        <label class="input-floating-label">Kabupaten KUA</label>
                                        <span id="error_kabupaten_kua" class="text-red-500 text-sm"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tempat Tinggal & Anak -->
                        <div class="bg-white rounded-lg shadow-md">
                            <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
                                <h3 class="text-lg font-medium text-white">Tempat Tinggal & Anak</h3>
                            </div>
                            <div class="p-4 space-y-4">
                                <div class="relative w-full">
                                    <select name="tempat_tinggal" id="tempat_tinggal" class="select is-valid select-floating mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" onchange="toggleTempatTinggal()">
                                        <option value="">Pilih tempat tinggal</option>
                                        <option value="rumah_sendiri">Di rumah sendiri</option>
                                        <option value="rumah_orangtua_penggugat">Di rumah orangtua Penggugat</option>
                                        <option value="rumah_orangtua_tergugat">Di rumah orangtua Tergugat</option>
                                        <option value="rumah_kontrakan">Di rumah kontrakan</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                    <label class="select-floating-label">Tempat Tinggal</label>
                                    <div id="desa_input" class="mt-2 hidden">
                                        <input type="text" name="desa" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" placeholder="Nama desa">
                                        <span id="error_desa" class="text-red-500 text-sm"></span>
                                    </div>
                                    <div id="lainnya_input" class="mt-2 hidden">
                                        <textarea name="detail_lainnya" class="textarea textarea-floating is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white" placeholder="Detail lainnya"></textarea>
                                        <span id="error_lainnya" class="text-red-500 text-sm"></span>
                                    </div>
                                    <span id="error_tempat_tinggal" class="text-red-500 text-sm"></span>
                                </div>

                                <div class="grid grid-cols-3 gap-4">
                                    <div class="relative w-full">
                                        <input type="number" id="kumpul_baik_selama_tahun" name="kumpul_baik_selama_tahun" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" placeholder="Tahun">
                                        <label class="input-floating-label">Kumpul Baik (Tahun)</label>
                                        <span id="error_kumpul_baik_selama_tahun" class="text-red-500 text-sm"></span>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="number" id="kumpul_baik_selama_bulan" name="kumpul_baik_selama_bulan" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" placeholder="Bulan">
                                        <label class="input-floating-label">Kumpul Baik (Bulan)</label>
                                        <span id="error_kumpul_baik_selama_bulan" class="text-red-500 text-sm"></span>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="number" id="jumlah_anak" name="jumlah_anak" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" placeholder="Jumlah Anak" oninput="toggleAnakFields()">
                                        <label class="input-floating-label">Jumlah Anak</label>
                                        <span id="error_jumlah_anak" class="text-red-500 text-sm"></span>
                                    </div>
                                </div>

                                @for ($i = 1; $i <= 10; $i++) <div id="anak_{{ $i }}_fields" class="grid grid-cols-2 gap-4 hidden">
                                    <div class="relative w-full">
                                        <input type="text" id="anak_{{ $i }}" name="anak_{{ $i }}" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" placeholder="Nama Anak">
                                        <label class="input-floating-label">Nama Anak {{ $i }}</label>
                                        <span id="error_anak_{{ $i }}" class="text-red-500 text-sm"></span>
                                    </div>
                                    <div class="relative w-full">
                                        <input type="date" id="tanggal_lahir_anak_{{ $i }}" name="tanggal_lahir_anak_{{ $i }}" class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
                                        <label class="input-floating-label">Tanggal Lahir</label>
                                        <span id="error_tanggal_lahir_anak_{{ $i }}" class="text-red-500 text-sm"></span>
                                    </div>
                            </div>
                            @endfor
                        </div>
                    </div>
            </div>

            <div class="mt-6 text-center">
                <button type="button" onclick="window.history.back()" class="mr-4 inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-full shadow-sm text-gray-700 bg-white hover:bg-gray-50">
                    Sebelumnya
                </button>
                <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-court-green-600 hover:bg-court-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-court-green-500">
                    Selanjutnya
                </button>
            </div>
            </form>
        </div>

    </section>
</div>



@endsection

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Toggle Tempat Tinggal Fields
    function toggleTempatTinggal() {
        const value = document.getElementById('tempat_tinggal').value;
        document.getElementById('desa_input').classList.toggle('hidden', value !== 'lainnya');
        document.getElementById('lainnya_input').classList.toggle('hidden', value !== 'lainnya');
    }

    // Toggle Anak Fields
    function toggleAnakFields() {
        const jumlah = parseInt(document.getElementById('jumlah_anak').value) || 0;
        for (let i = 1; i <= 10; i++) {
            document.getElementById(`anak_${i}_fields`).classList.toggle('hidden', i > jumlah);
        }
    }

    // Initialize
    document.addEventListener('DOMContentLoaded', () => {
        toggleTempatTinggal();
        toggleAnakFields();
    });

    $(document).ready(function() {
        fetchSuggestions('#kabupaten_pernikahan', '#kabupaten_pernikahan_suggestions', '/api/kabupaten/search');
        handleSuggestionClick('#kabupaten_pernikahan_suggestions', '#kabupaten_pernikahan', '#kecamatan_pernikahan', '/api/kecamatan/');
        handleDropdownChange('#kecamatan_pernikahan', '#desa_pernikahan', '/api/desa/');
    });

    function fetchSuggestions(inputSelector, suggestionsSelector, apiUrl) {
        $(inputSelector).on('input', function() {
            var query = $(this).val();
            if (query.length > 2) {
                $.get(apiUrl, {
                    query: query
                }, function(data) {
                    $(suggestionsSelector).empty();
                    data.forEach(function(item) {
                        $(suggestionsSelector).append(`<a href="#" class="list-group-item list-group-item-action suggestion-item" data-id="${item.id}" data-name="${item.name}">${item.name}</a>`);
                    });
                }).fail(function() {
                    console.error('Error fetching suggestions:', arguments);
                });
            } else {
                $(suggestionsSelector).empty();
            }
        });
    }

    function handleSuggestionClick(suggestionsSelector, inputSelector, nextSelector, nextApiUrl) {
        $(document).on('click', suggestionsSelector + ' .suggestion-item', function(e) {
            e.preventDefault();
            var name = $(this).data('name');
            var id = $(this).data('id');
            $(inputSelector).val(name);
            $(suggestionsSelector).empty();

            // Fetch and populate next dropdown based on selected item
            $(nextSelector).empty().append('<option value="">Pilih</option>');
            $.get(nextApiUrl + id, function(data) {
                $(nextSelector).append(data.map(function(item) {
                    return `<option value="${item.id}" data-id="${item.id}">${item.name}</option>`;
                }));
            }).fail(function() {
                console.error('Error fetching next dropdown data:', arguments);
            });
        });
    }

    function handleDropdownChange(dropdownSelector, nextSelector, nextApiUrl) {
        $(dropdownSelector).change(function() {
            var selectedId = $(dropdownSelector + ' option:selected').data('id');
            $(nextSelector).empty().append('<option value="">Pilih</option>');
            $.get(nextApiUrl + selectedId, function(data) {
                $(nextSelector).append(data.map(function(item) {
                    return `<option value="${item.id}">${item.name}</option>`;
                }));
            }).fail(function() {
                console.error('Error fetching next dropdown data:', arguments);
            });
        });
    }

</script>
