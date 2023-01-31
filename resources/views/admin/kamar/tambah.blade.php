<div class="modal fade" id="modalForm">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kamar</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('adminkamar.store') }}" class="form-validate is-alter" enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon fas fa-bed"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-xl form-control-outlined  @error('tipeKamar') is-invalid @enderror"
                                        id="tipeKamar" name="tipeKamar" value="{{old('tipeKamar')}}" required>
                                    <label class="form-label-outlined" for="tipeKamar">Tipe Kamar</label>
                                    @error('tipeKamar')
                                    <div class="alert alert-fill alert-danger alert-icon">
                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Default File Upload</label>
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

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon fas fa-money-bill"></em>
                                    </div>
                                    <input type="number" class="form-control form-control-xl form-control-outlined  @error('harga') is-invalid @enderror"
                                        id="harga" name="harga" value="{{old('harga')}}" required>
                                    <label class="form-label-outlined" for="harga">harga</label>
                                    @error('harga')
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
                                        <em class="icon fas fa-house-user"></em>
                                    </div>
                                    <input type="number" class="form-control form-control-xl form-control-outlined  @error('jumlah') is-invalid @enderror"
                                        id="jumlah" name="jumlah" value="{{old('jumlah')}}" required>
                                    <label class="form-label-outlined" for="jumlah">Jumlah</label>
                                    @error('jumlah')
                                    <div class="alert alert-fill alert-danger alert-icon">
                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
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