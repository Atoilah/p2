@foreach ($room as $r)
    <div class="modal fade" id="View{{ $r->id }}">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Kamar</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate is-alter">
                        <input type="text" hidden value="{{ $r->id }}">
                        <div class="row gy-4">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon fas fa-bed"></em>
                                        </div>
                                        <input type="text" value="{{ $r->tipeKamar, old('tipeKamar') }}"
                                            class="form-control form-control-xl form-control-outlined" id="tipeKamar" name="tipeKamar" readonly>
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
                                        <input type="text" value="{{ $r->harga, old('harga') }}"
                                            class="form-control form-control-xl form-control-outlined" id="harga" name="harga" readonly>
                                        <label class="form-label-outlined" for="harga">Jumlah</label>
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
                                            class="form-control form-control-xl form-control-outlined" id="jumlah" name="jumlah" readonly>
                                        <label class="form-label-outlined" for="jumlah">Jumlah</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="justify-center">
                                    <img class="h-50 w-50 rounded-top" src="{{ $r->foto }}" alt="">
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
