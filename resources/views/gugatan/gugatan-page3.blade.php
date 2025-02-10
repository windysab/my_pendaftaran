@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-b from-court-green-50 to-white">
    <!-- Hero Section -->
    <section class="py-8">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-court-green-800 mb-6">
                    Formulir Gugatan - Data Perselisihan dan Pertengkaran
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Silahkan isi data anak dibawah ini. Pastikan data yang anda masukkan benar. Terima kasih.
                </p>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="py-0">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-green-500 via-teal-400 to-blue-500 px-6 py-4">
                    <h2 class="text-xl font-semibold text-white">Detail Perselisihan dan Pertengkaran</h2>
                </div>

                <form method="POST" action="{{ route('gugatan.store') }}" class="p-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Detail Perselisihan dan Pertengkaran -->
                        <div class="bg-white rounded-lg shadow-md">
                            <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
                                <h3 class="text-lg font-medium text-white">Detail Perselisihan dan Pertengkaran</h3>
                            </div>
                            <div class="p-4 space-y-4">
                                <div class="relative w-full">
                                    <input type="date" id="tanggal_perselisihan" name="tanggal_perselisihan"
                                        class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" required>
                                    <label class="input-floating-label">Tanggal Perselisihan</label>
                                </div>
                                <div class="relative w-full">
                                    <select class="select is-valid select-floating mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" name="alasan_perselisihan" id="alasan_perselisihan" onchange="showTextarea()">
                                        <option value="minum_keras">Mengkonsumsi minum-minuman keras</option>
                                        <option value="bermain_judi">Bermain judi</option>
                                        <option value="memukul_penggugat">Memukul Penggugat</option>
                                        <option value="hubungan_asmara">Telah menjalin hubungan asmara dengan perempuan lain</option>
                                        <option value="keluar_malam">Sering keluar pada malam hari / pulang pada waktu dini hari / tidak pulang berhari – hari</option>
                                        <option value="malas_bekerja">Malas berkerja</option>
                                        <option value="tidak_biaya">Tidak memberi biaya untuk keperluan rumah tangga sehingga tidak mencukupi</option>
                                        <option value="dijodohkan">Perkawinan Penggugat dan Tergugat dijodohkan oleh orang tua masing-masing</option>
                                        <option value="alasan_lainnya">Alasan lainnya</option>
                                    </select>
                                    <label class="select-floating-label">Alasan Perselisihan dan Pertengkaran</label>
                                </div>
                                <div class="relative w-full" id="textarea-container" style="display:none;">
                                    <textarea name="detail_alasan" class="textarea textarea-floating is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white" placeholder="Jelaskan kejadiannya"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Upaya Merukunkan -->
                        <div class="bg-white rounded-lg shadow-md">
                            <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
                                <h3 class="text-lg font-medium text-white">Upaya Merukunkan</h3>
                            </div>
                            <div class="p-4 space-y-4">
                                <div class="relative w-full">
                                    <label class="block text-gray-700">Upaya Merukunkan Penggugat dan Tergugat</label>
                                    <div class="flex items-center mt-2">
                                        <input class="form-check-input" type="radio" name="upaya_merukunkan" id="ada_upaya" value="ada" required>
                                        <label class="ml-2" for="ada_upaya">Ada</label>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <input class="form-check-input" type="radio" name="upaya_merukunkan" id="tidak_ada_upaya" value="tidak_ada" required>
                                        <label class="ml-2" for="tidak_ada_upaya">Sudah tidak ada</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Detail Perpisahan -->
                        <div class="bg-white rounded-lg shadow-md">
                            <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
                                <h3 class="text-lg font-medium text-white">Detail Perpisahan</h3>
                            </div>
                            <div class="p-4 space-y-4">
                                <div class="relative w-full">
                                    <input type="date" id="tanggal_perpisahan" name="tanggal_perpisahan"
                                        class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" required>
                                    <label class="input-floating-label">Tanggal Perpisahan</label>
                                </div>
                                <div class="relative w-full">
                                    <label class="block text-gray-700">Jenis Perpisahan</label>
                                    <div class="flex items-center mt-2">
                                        <input class="form-check-input" type="radio" name="jenis_perpisahan" id="berpisah_tempat_tinggal" value="berpisah_tempat_tinggal" required>
                                        <label class="ml-2" for="berpisah_tempat_tinggal">Berpisah tempat tinggal</label>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <input class="form-check-input" type="radio" name="jenis_perpisahan" id="berpisah_tempat_tidur" value="berpisah_tempat_tidur" required>
                                        <label class="ml-2" for="berpisah_tempat_tidur">Berpisah tempat tidur</label>
                                    </div>
                                </div>
                                <div class="relative w-full">
                                    <label class="block text-gray-700">Siapa yang meninggalkan rumah</label>
                                    <div class="flex items-center mt-2">
                                        <input class="form-check-input" type="radio" name="siapa_meninggalkan" id="tergugat" value="tergugat" required>
                                        <label class="ml-2" for="tergugat">Tergugat</label>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <input class="form-check-input" type="radio" name="siapa_meninggalkan" id="penggugat" value="penggugat" required>
                                        <label class="ml-2" for="penggugat">Penggugat</label>
                                    </div>
                                </div>
                                <div class="relative w-full">
                                    <input type="text" id="desa" name="desa"
                                        class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black" placeholder="Nama desa" required>
                                    <label class="input-floating-label">Desa</label>
                                </div>
                                <div class="relative w-full">
                                    <label class="block text-gray-700">Alasan meninggalkan rumah</label>
                                    <div class="flex items-center mt-2">
                                        <input class="form-check-input" type="radio" name="alasan_meninggalkan" id="diusir" value="diusir" required>
                                        <label class="ml-2" for="diusir">Karena diusir oleh</label>
                                    </div>
                                    <div class="flex items-center mt-2">
                                        <input class="form-check-input" type="radio" name="alasan_meninggalkan" id="keinginan_sendiri" value="keinginan_sendiri" required>
                                        <label class="ml-2" for="keinginan_sendiri">Keinginan sendiri</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <button type="button" onclick="window.history.back()"
                            class="mr-4 inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-full shadow-sm text-gray-700 bg-white hover:bg-gray-50">
                            Sebelumnya
                        </button>
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-court-green-600 hover:bg-court-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-court-green-500">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>



@endsection

<script>
    function showTextarea() {
        const alasan = document.getElementById('alasan_perselisihan').value;
        document.getElementById('textarea-container').style.display = alasan === 'alasan_lainnya' ? 'block' : 'none';
    }

    document.addEventListener('DOMContentLoaded', showTextarea);
</script>

