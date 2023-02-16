<div class="modal fade" id="modalView-{{$data->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Fasilitas Hotel</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate is-alter">
                    <div class="row gy-4">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon fas fa-bed"></em>
                                    </div>
                                    <input type="text" readonly
                                        class="form-control form-control-xl form-control-outlined" id="nama-fasilitas" value="{{$data->namaFasilitas}}" name="namaFasilitas">
                                    <label class="form-label-outlined" for="nama-fasilitas">Nama Fasilitas</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon fas fa-sticky-note"></em>
                                    </div>
                                    <input type="text" readonly
                                        class="form-control form-control-xl form-control-outlined" id="keterangan" value="{{$data->keterangan}}" name="keterangan">
                                    <label class="form-label-outlined" for="keterangan">Keterangan</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon fas fa-file-image"></em>
                                    </div>
                                    <img src="{{$data->foto}}" alt="">
                                    <input type="text" readonly
                                        class="form-control form-control-xl form-control-outlined" id="image" name="foto">
                                    <label class="form-label-outlined" for="image">Image</label>
                                </div>
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
