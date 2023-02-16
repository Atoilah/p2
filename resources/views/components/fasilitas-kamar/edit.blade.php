<div class="modal fade" id="modalEdit-{{$data->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Fasilitas Hotel</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{route('fasilitas-kamar.update',$data->id)}}" class="form-validate is-alter" method="post">
                    @method('PUT')
                    @csrf    
                    <div class="row gy-4">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon fas fa-bed"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-xl form-control-outlined"
                                    id="nama-fasilitas" value="{{$data->namaFasilitas}}" name="namaFasilitas">
                                    <label class="form-label-outlined" for="nama-fasilitas">Nama Fasilitas</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
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
