<div class="bg-white rounded-lg shadow-md">
    <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
        <h3 class="text-lg font-medium text-white">Data Penggugat/ Istri</h3>
    </div>

    <div class="p-4 space-y-4">
        <div class="relative w-full">
            <input type="text" name="nama_penggugat" id="nama_penggugat"
                value="{{ old('nama_penggugat', $gugatan->nama_penggugat ?? '') }}"
                class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
            <label class="input-floating-label" for="nama_penggugat">Nama Penggugat</label>
        </div>
        <div class="relative w-full">
            <input type="text" name="binti_penggugat" id="binti_penggugat"
                value="{{ old('binti_penggugat', $gugatan->binti_penggugat ?? '') }}"
                class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
            <label class="input-floating-label" for="binti_penggugat">Binti Penggugat</label>
        </div>
        <div class="relative w-full">
            <input type="number" name="umur_penggugat" id="umur_penggugat"
                value="{{ old('umur_penggugat', $gugatan->umur_penggugat ?? '') }}"
                class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
            <label class="input-floating-label" for="umur_penggugat">Umur Penggugat</label>
        </div>
        <div class="relative w-full">
            <div class="relative">
                <select name="agama_penggugat" id="agama_penggugat"
                    class="select is-valid select-floating mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
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
                <label class="select-floating-label" for="agama_penggugat">Agama
                    Penggugat</label>
            </div>
        </div>
        <div class="relative w-full">
            <input type="text" name="pekerjaan_penggugat" id="pekerjaan_penggugat"
                value="{{ old('pekerjaan_penggugat', $gugatan->pekerjaan_penggugat ?? '') }}"
                class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
            <label class="input-floating-label" for="pekerjaan_penggugat">Pekerjaan
                Penggugat</label>
        </div>
        <div class="relative w-full">
            <div class="relative">
                <select name="pendidikan_penggugat" id="pendidikan_penggugat"
                    class="select is-valid select-floating mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
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
                <label class="select-floating-label" for="pendidikan_penggugat">Pendidikan
                    Penggugat</label>
            </div>
        </div>
        <div class="relative w-full">
            <textarea name="alamat_penggugat" id="alamat_penggugat" readonly onclick="openPenggugatAddressModal()"
                class="textarea textarea-floating is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">{{ old('alamat_penggugat', $gugatan->alamat_penggugat ?? '') }}</textarea>
            <label class="textarea-floating-label" for="alamat_penggugat">Alamat Lengkap</label>
        </div>
    </div>
</div>
