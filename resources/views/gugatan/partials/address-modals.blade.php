<!-- Modal for Tergugat -->
<div id="tergugatModal" class="modal fade show" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Alamat Lengkap Tergugat</h5>
                <button type="button" class="close text-white" onclick="closeAddressModal()">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="tergugatForm" onsubmit="saveAddress(event)">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jalan"><b>Jalan</b></label>
                                <input type="text" id="jalan" class="form-control"
                                    placeholder="Masukkan nama jalan">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="no"><b>No</b></label>
                                <input type="number" id="no" class="form-control"
                                    placeholder="No Rumah">
                            </div>
                        </div>
                        <div class="col-md2">
                            <div class="form-group">
                                <label for="rt"><b>RT</b></label>
                                <input type="number" id="rt" class="form-control" placeholder="RT">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="rw"><b>RW</b></label>
                                <input type="number" id="rw" class="form-control" placeholder="RW">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kabupaten"><b>Kabupaten</b></label>
                                <input type="text" id="kabupaten" name="kabupaten" class="form-control"
                                    placeholder="Cari Kabupaten">
                                <div id="kabupaten_suggestions" class="list-group"></div>
                                <span id="error_kabupaten" class="text-danger"></span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kecamatan"><b>Kecamatan</b></label>
                                <select id="kecamatan" name="kecamatan" class="form-control">
                                    <option value="">Pilih Kecamatan</option>
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                                <span id="error_kecamatan" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="desa"><b>Desa</b></label>
                                <select id="desa" name="desa" class="form-control">
                                    <option value="">Pilih Desa</option>
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                                <span id="error_desa" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-secondary"
                            onclick="closeAddressModal()">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Penggugat -->
<div id="penggugatModal" class="modal fade show" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title">Alamat Lengkap Penggugat</h5>
                <button type="button" class="close text-white" onclick="closePenggugatAddressModal()">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="penggugatForm" onsubmit="savePenggugatAddress(event)">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jalan_penggugat"><b>Jalan</b></label>
                                <input type="text" id="jalan_penggugat" class="form-control"
                                    placeholder="Masukkan nama jalan">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="no_penggugat"><b>No</b></label>
                                <input type="number" id="no_penggugat" class="form-control"
                                    placeholder="No Rumah">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="rt_penggugat"><b>RT</b></label>
                                <input type="number" id="rt_penggugat" class="form-control" placeholder="RT">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="rw_penggugat"><b>RW</b></label>
                                <input type="number" id="rw_penggugat" class="form-control" placeholder="RW">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kabupaten_penggugat"><b>Kabupaten</b></label>
                                <input type="text" id="kabupaten_penggugat" name="kabupaten_penggugat"
                                    class="form-control" placeholder="Cari Kabupaten">
                                <div id="kabupaten_penggugat_suggestions" class="list-group"></div>
                                <span id="error_kabupaten_penggugat" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kecamatan_penggugat"><b>Kecamatan</b></label>
                                <select id="kecamatan_penggugat" name="kecamatan_penggugat" class="form-control">
                                    <option value="">Pilih Kecamatan</option>
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                                <span id="error_kecamatan_penggugat" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="desa_penggugat"><b>Desa</b></label>
                                <select id="desa_penggugat" name="desa_penggugat" class="form-control">
                                    <option value="">Pilih Desa</option>
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                                <span id="error_desa_penggugat" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-secondary"
                            onclick="closePenggugatAddressModal()">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
