<div class="modal fade" id="Hapus-{{ $data->id }}">
    <div class="modal-dialog modal-sm modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Kamar  {{ $data->tipeKamar }}</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('adminkamar.destroy',$data->id) }}" class="form-validate is-alter" enctype="multipart/form-data">
                    @method('DELETE')
                    @csrf
                    <div class="row gy-4 justify-center align-center">
                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <a  class=" btn btn-lg btn-primary" data-bs-dismiss="modal" aria-label="Close" class="btn btn-lg btn-primary">Batal</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-danger">Hapus</button>
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
