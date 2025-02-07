<div class="bg-white rounded-lg shadow-md">
    <div class="bg-court-green-600 px-4 py-3 rounded-t-lg">
        <h3 class="text-lg font-medium text-white">Data Tergugat/ Suami</h3>
    </div>
    <div class="p-4 space-y-4">
        <div class="relative w-full">
            <input type="text" name="nama_tergugat" id="nama_tergugat"
                value="{{ old('nama_tergugat', $gugatan->nama_tergugat ?? '') }}"
                class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
            <label class="input-floating-label" for="nama_tergugat">Nama Tergugat</label>
        </div>
        <div class="relative w-full">
            <input type="text" name="bin_tergugat" id="bin_tergugat"
                value="{{ old('bin_tergugat', $gugatan->bin_tergugat ?? '') }}"
                class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
            <label class="input-floating-label" for="bin_tergugat">Bin Tergugat</label>
        </div>
        <div class="relative w-full">
            <input type="number" name="umur_tergugat" id="umur_tergugat"
                value="{{ old('umur_tergugat', $gugatan->umur_tergugat ?? '') }}"
                class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
            <label class="input-floating-label" for="umur_tergugat">Umur Tergugat</label>
        </div>
        <div class="relative w-full">
            <div class="relative">
                <select name="agama_tergugat" id="agama_tergugat"
                    class="select is-valid select-floating mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
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
                <label class="select-floating-label" for="agama_tergugat">Agama
                    Tergugat</label>
            </div>
        </div>
        <div class="relative w-full">
            <input type="text" name="pekerjaan_tergugat" id="pekerjaan_tergugat"
                value="{{ old('pekerjaan_tergugat', $gugatan->pekerjaan_tergugat ?? '') }}"
                class="input is-valid mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
            <label class="input-floating-label" for="pekerjaan_tergugat">Pekerjaan
                Tergugat</label>
        </div>
        <div class="relative w-full">
            <div class="relative">
                <select name="pendidikan_tergugat" id="pendidikan_tergugat"
                    class="select is-valid select-floating mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white text-black">
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
                <label class="select-floating-label" for="pendidikan_tergugat">Pendidikan
                    Tergugat</label>
            </div>
        </div>
        <div class="relative w-full">
            <textarea name="alamat_tergugat" id="alamat_tergugat" readonly onclick="openAddressModal()"
                class="textarea textarea-floating is-valid peer mt-1 block w-full border border-gray-300 focus:border-blue-500 bg-white">{{ old('alamat_tergugat', $gugatan->alamat_tergugat ?? '') }}</textarea>
            <label class="textarea-floating-label" for="alamat_tergugat">Alamat
                Lengkap</label>
        </div>
    </div>
</div>
