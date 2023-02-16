<div class="modal fade" id="FormFasilitasKamar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kamar</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{ route('fasilitaskamar.store') }}" method="POST" class="form-validate is-alter">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <select name="rooms_id" class="form-select js-select2" data-ui="xl" id="outlined-select">
                                        <option value="">pilih</option>
                                        @foreach ($fRooms as $k)
                                        <option value="{{ $k->id }}">{{ $k->tipeKamar }}</option>
                                        @endforeach
                                    </select>
                                    <label class="form-label-outlined" for="outlined-select">Outlined Select</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Fasilitas Kamar</label>
                                <div class="form-control-wrap">
                                    <select name="fasilitasKamar[]" value="{{ old('fasilitasKamar[]') }}" class="form-select js-select2" multiple="multiple" data-placeholder="Select Multiple options">
                                        @foreach ($room as $k)
                                        <option value="{{ $k->id }}">{{ $k->namaFasilitas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Tambah Kamar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">Selamat Meikmati</span>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="FormFasilitas">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Fasilitas Kamar</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{ route('fasilitas-kamar.store')}}" method="POST" class="form-validate is-alter">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon fas fa-bed"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-xl form-control-outlined"
                                        id="namaFasilitas" name="namaFasilitas">
                                    <label class="form-label-outlined" for="namaFasilitas">Nama Fasilitas</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Tambah Kamar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">Selamat Meikmati</span>
            </div>
        </div>
    </div>
</div>
