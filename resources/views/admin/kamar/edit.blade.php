@foreach ($room as $r)
    <div class="modal fade" id="Edit{{ $r->id }}">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Kamar</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('adminkamar.update', $r->id) }}" class="form-validate is-alter" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="text" id="id" name="id"  value="{{ $r->id }}">
                        <div class="row gy-4">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon fas fa-bed"></em>
                                        </div>
                                        <input type="text" value="{{ $r->tipeKamar, old('tipeKamar') }}"
                                            class="form-control form-control-xl form-control-outlined" id="tipeKamar">
                                        <label class="form-label-outlined" for="tipeKamar">Tipe Kamar</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon fas fa-bed"></em>
                                        </div>
                                        <input type="text" value="{{ $r->foto, old('foto') }}"
                                            class="form-control form-control-xl form-control-outlined" id="foto">
                                        <label class="form-label-outlined" for="foto">foto Kamar</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon fas fa-bed"></em>
                                        </div>
                                        <input type="text" value="{{ $r->harga, old('harga') }}"
                                            class="form-control form-control-xl form-control-outlined" id="harga">
                                        <label class="form-label-outlined" for="harga">harga</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon fas fa-bed"></em>
                                        </div>
                                        <input type="text" value="{{ $r->jumlah, old('jumlah') }}"
                                            class="form-control form-control-xl form-control-outlined" id="jumlah">
                                        <label class="form-label-outlined" for="jumlah">Jumlah</label>
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
@endforeach
