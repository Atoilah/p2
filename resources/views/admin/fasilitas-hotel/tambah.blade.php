<div class="modal fade" id="modalForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Fasilitas Hotel</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('fasilitas-hotel.store') }}"  class="form-validate is-alter">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon fas fa-bed"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-xl form-control-outlined @error('namaFasilitas') is-invalid @enderror"
                                        id="namaFasilitas" name="namaFasilitas" value="{{ old('namaFasilitas') }}">
                                    <label class="form-label-outlined" for="namaFasilitas">Nama Fasilitas</label>
                                    @error('namaFasilitas')
                                    <div class="alert alert-fill alert-danger alert-icon">
                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon fas fa-sticky-note"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-xl form-control-outlined"
                                        id="keterangan" name="keterangan">
                                    <label class="form-label-outlined" for="keterangan">Keterangan</label>
                                    @error('keterangan')
                                    <div class="alert alert-fill alert-danger alert-icon">
                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Upload Foto</label>
                                <div class="form-control-wrap">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input  @error('foto') is-invalid @enderror" id="foto" name="foto" value="{{old('foto')}}" required>
                                        <label class="form-file-label" for="foto">Choose file</label>
                                    </div>
                                    @error('foto')
                                    <div class="alert alert-fill alert-danger alert-icon">
                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Tambah Fasilitas</button>
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
