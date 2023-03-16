<div class="modal fade" tabindex="-1" role="dialog" id="Edit{{ $data->id }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                @if ($data->status == '0')
                <h4 class="title">Update Invoice</h4>
                @elseif($data->status == '1')
                <h4 class="title">Lihat Invoice</h4>
                @elseif($data->status == '2')
                <h4 class="title">Lihat Invoice</h4>
                @elseif($data->status == '3')
                <h4 class="title">Lihat Invoice</h4>
                @elseif($data->status == '4')
                <h4 class="title">Lihat Invoice</h4>
                @endif
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1{{ $data->id }}">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tabItem2{{ $data->id }}">Transaksi</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabItem1{{ $data->id }}">
                        <h6 class="title">Data Kamar</h6>
                        <form class="form-validate is-alter">
                            <div class="form-group">
                                <label class="form-label" for="full-name">Tipe Kamar</label>
                                <div class="form-control-wrap">
                                    <input type="text" value="{{ $data->tipeKamar }}" class="form-control" id="full-name" readonly required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email-address">Harga</label>
                                <div class="form-control-wrap">
                                    <input type="text" value="{{ rupiah($data->harga) }}" readonly class="form-control" id="email-address" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email-address">Jumlah Tersedia</label>
                                <div class="form-control-wrap">
                                    <input type="text" value="{{ $data->tKamar }} unit" readonly class="form-control" id="email-address" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email-address">Untuk Jumlah Yang tersedia sewaktu-waktu bisa berkurang segera selesaikan transaksi</label>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="tabItem2{{ $data->id }}">
                        <h6 class="title">Data Transaksi</h6>
                        <form action="{{ route('pesan') }}" method="POST" class="form-validate is-alter">
                            @csrf
                            @method('PUT')
                            <input type="text" value="{{ $data->user_id }}" hidden name="user_id">
                            <div class="row gy-4">
                                @if ($data->status == 0)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="cek-in">Cekin</label>
                                                <input type="text"
                                                    class="form-control form-control-xl date-picker @error('cekIn') is-invalid @enderror"
                                                    value="{{ $data->cekIn, old('cekIn')}}" data-date-format="yyyy-mm-dd" id="cek-in" name="cekIn">
                                                    @error('cekIn')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="cek-out">Cek out</label>
                                                <input type="text" class="form-control form-control-xl  date-picker  @error('cekOut') is-invalid @enderror"
                                                value="{{$data->cekOut, old('cekOut')}}" id="cek-out" data-date-format="yyyy-mm-dd" name="cekOut">
                                                @error('cekOut')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="jumlah">Jumlah</label>
                                                <input type="text" min="0" max="20" class="form-control form-control-xl  @error('jumlah') is-invalid @enderror"
                                                value="{{$data->jumlah, old('jumlah')}}" id="jumlah" name="jumlah">
                                                @error('jumlah')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-pemesan">Nama pemesan</label>
                                                <input type="text" class="form-control form-control-xl  @error('namaPemesan') is-invalid @enderror"
                                                value="{{$data->namaPemesan, old('namaPemesan')}}" id="nama-pemesan" name="namaPemesan">
                                                @error('namaPemesan')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="telp">Telepon</label>
                                                <input type="text" class="form-control form-control-xl  @error('telp') is-invalid @enderror"
                                                value="{{$data->telp, old('telp')}}" id="telp" name="telp">
                                                @error('telp')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-tamu">Nama Tamu</label>
                                                <input type="text" class="form-control form-control-xl  @error('namaTamu') is-invalid @enderror"
                                                value="{{$data->namaTamu, old('namaTamu')}}" id="nama-tamu" name="namaTamu">
                                                @error('namaTamu')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="rooms_id">Tipe Kamar</label>
                                                <select class="form-select js-select2 @error('room_id') is-invalid @enderror"
                                                value="{{old('room_id')}}" data-ui="xl" id="rooms_id" name="room_id">
                                                    @foreach ($rooms as $r)
                                                    @if ($data->room_id == $r->id)
                                                    <option value="{{ $r->id }}">
                                                        {{ $r->tipeKamar }} | ready {{ $r->jumlah }} | Rp. {{ number_format($r->harga,2,',','.') }}
                                                    </option>
                                                    @else
                                                    <option value="{{ $r->id }}">
                                                        {{ $r->tipeKamar }} | ready {{ $r->jumlah }} | Rp. {{ number_format($r->harga,2,',','.') }}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                                @error('room_id')
                                                    <span class="invalid-feedback" role="alert">

                                                    </span>
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <form action="{{ route('batal', $data->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <a href="{{ route('batal', $data->id) }}" class="btn btn-lg btn-primary">Batal Pesan</a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Update Data</button>
                                        </div>
                                    </div>
                                @elseif ($data->status == 1)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="cek-in">Cekin</label>
                                                <input type="text" readonly
                                                    class="form-control form-control-xl  @error('cekIn') is-invalid @enderror"
                                                    value="{{ $data->cekIn, old('cekIn')}}" data-date-format="yyyy-mm-dd" id="cek-in" name="cekIn">
                                                    @error('cekIn')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="cek-out">Cek out</label>
                                                <input type="text" readonly class="form-control form-control-xl    @error('cekOut') is-invalid @enderror"
                                                value="{{$data->cekOut, old('cekOut')}}" id="cek-out" data-date-format="yyyy-mm-dd" name="cekOut">
                                                @error('cekOut')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="jumlah">Jumlah</label>
                                                <input type="text" readonly min="0" max="20" class="form-control form-control-xl  @error('jumlah') is-invalid @enderror"
                                                value="{{$data->jumlah, old('jumlah')}}" id="jumlah" name="jumlah">
                                                @error('jumlah')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-pemesan">Nama pemesan</label>
                                                <input type="text" readonly class="form-control form-control-xl  @error('namaPemesan') is-invalid @enderror"
                                                value="{{$data->namaPemesan, old('namaPemesan')}}" id="nama-pemesan" name="namaPemesan">
                                                @error('namaPemesan')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="telp">Telepon</label>
                                                <input type="text" readonly class="form-control form-control-xl  @error('telp') is-invalid @enderror"
                                                value="{{$data->telp, old('telp')}}" id="telp" name="telp">
                                                @error('telp')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-tamu">Nama Tamu</label>
                                                <input type="text" readonly class="form-control form-control-xl  @error('namaTamu') is-invalid @enderror"
                                                value="{{$data->namaTamu, old('namaTamu')}}" id="nama-tamu" name="namaTamu">
                                                @error('namaTamu')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-tamu">Tipe Kamar</label>
                                                <input type="text" readonly class="form-control form-control-xl  @error('namaTamu') is-invalid @enderror"
                                                value="{{ $data->tipeKamar }} | ready {{ $data->jumlah }} | Rp. {{ number_format($data->harga,2,',','.') }}" id="nama-tamu" name="namaTamu">
                                                @error('namaTamu')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                @elseif ($data->status == 2)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="cek-in">Cekin</label>
                                                <input type="text" readonly
                                                    class="form-control form-control-xl  @error('cekIn') is-invalid @enderror"
                                                    value="{{ $data->cekIn, old('cekIn')}}" data-date-format="yyyy-mm-dd" id="cek-in" name="cekIn">
                                                    @error('cekIn')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="cek-out">Cek out</label>
                                                <input type="text" readonly class="form-control form-control-xl    @error('cekOut') is-invalid @enderror"
                                                value="{{$data->cekOut, old('cekOut')}}" id="cek-out" data-date-format="yyyy-mm-dd" name="cekOut">
                                                @error('cekOut')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="jumlah">Jumlah</label>
                                                <input type="text" readonly min="0" max="20" class="form-control form-control-xl  @error('jumlah') is-invalid @enderror"
                                                value="{{$data->jumlah, old('jumlah')}}" id="jumlah" name="jumlah">
                                                @error('jumlah')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-pemesan">Nama pemesan</label>
                                                <input type="text" readonly class="form-control form-control-xl  @error('namaPemesan') is-invalid @enderror"
                                                value="{{$data->namaPemesan, old('namaPemesan')}}" id="nama-pemesan" name="namaPemesan">
                                                @error('namaPemesan')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="telp">Telepon</label>
                                                <input type="text" readonly class="form-control form-control-xl  @error('telp') is-invalid @enderror"
                                                value="{{$data->telp, old('telp')}}" id="telp" name="telp">
                                                @error('telp')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-tamu">Nama Tamu</label>
                                                <input type="text" readonly class="form-control form-control-xl  @error('namaTamu') is-invalid @enderror"
                                                value="{{$data->namaTamu, old('namaTamu')}}" id="nama-tamu" name="namaTamu">
                                                @error('namaTamu')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-tamu">Tipe Kamar</label>
                                                <input type="text" readonly class="form-control form-control-xl  @error('namaTamu') is-invalid @enderror"
                                                value="{{ $data->tipeKamar }} | ready {{ $data->jumlah }} | Rp. {{ number_format($data->harga,2,',','.') }}" id="nama-tamu" name="namaTamu">
                                                @error('namaTamu')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                @elseif ($data->status == 3)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="cek-in">Cekin</label>
                                                <input type="text"
                                                    class="form-control form-control-xl  @error('cekIn') is-invalid @enderror"
                                                    value="{{ $data->cekIn, old('cekIn')}}" data-date-format="yyyy-mm-dd" id="cek-in" name="cekIn">
                                                    @error('cekIn')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="cek-out">Cek out</label>
                                                <input type="text" class="form-control form-control-xl    @error('cekOut') is-invalid @enderror"
                                                value="{{$data->cekOut, old('cekOut')}}" id="cek-out" data-date-format="yyyy-mm-dd" name="cekOut">
                                                @error('cekOut')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="jumlah">Jumlah</label>
                                                <input type="text" min="0" max="20" class="form-control form-control-xl  @error('jumlah') is-invalid @enderror"
                                                value="{{$data->jumlah, old('jumlah')}}" id="jumlah" name="jumlah">
                                                @error('jumlah')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-pemesan">Nama pemesan</label>
                                                <input type="text" class="form-control form-control-xl  @error('namaPemesan') is-invalid @enderror"
                                                value="{{$data->namaPemesan, old('namaPemesan')}}" id="nama-pemesan" name="namaPemesan">
                                                @error('namaPemesan')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="telp">Telepon</label>
                                                <input type="text" class="form-control form-control-xl  @error('telp') is-invalid @enderror"
                                                value="{{$data->telp, old('telp')}}" id="telp" name="telp">
                                                @error('telp')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-tamu">Nama Tamu</label>
                                                <input type="text" class="form-control form-control-xl  @error('namaTamu') is-invalid @enderror"
                                                value="{{$data->namaTamu, old('namaTamu')}}" id="nama-tamu" name="namaTamu">
                                                @error('namaTamu')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-tamu">Tipe Kamar</label>
                                                <input type="text" readonly class="form-control form-control-xl  @error('namaTamu') is-invalid @enderror"
                                                value="{{ $data->tipeKamar }} | ready {{ $data->jumlah }} | Rp. {{ number_format($data->harga,2,',','.') }}" id="nama-tamu" name="namaTamu">
                                                @error('namaTamu')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                @elseif ($data->status == 4)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="cek-in">Cekin</label>
                                                <input type="text"
                                                    class="form-control form-control-xl  @error('cekIn') is-invalid @enderror"
                                                    value="{{ $data->cekIn, old('cekIn')}}" data-date-format="yyyy-mm-dd" id="cek-in" name="cekIn">
                                                    @error('cekIn')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="cek-out">Cek out</label>
                                                <input type="text" class="form-control form-control-xl    @error('cekOut') is-invalid @enderror"
                                                value="{{$data->cekOut, old('cekOut')}}" id="cek-out" data-date-format="yyyy-mm-dd" name="cekOut">
                                                @error('cekOut')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="jumlah">Jumlah</label>
                                                <input type="text" min="0" max="20" class="form-control form-control-xl  @error('jumlah') is-invalid @enderror"
                                                value="{{$data->jumlah, old('jumlah')}}" id="jumlah" name="jumlah">
                                                @error('jumlah')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-pemesan">Nama pemesan</label>
                                                <input type="text" class="form-control form-control-xl  @error('namaPemesan') is-invalid @enderror"
                                                value="{{$data->namaPemesan, old('namaPemesan')}}" id="nama-pemesan" name="namaPemesan">
                                                @error('namaPemesan')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="telp">Telepon</label>
                                                <input type="text" class="form-control form-control-xl  @error('telp') is-invalid @enderror"
                                                value="{{$data->telp, old('telp')}}" id="telp" name="telp">
                                                @error('telp')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-tamu">Nama Tamu</label>
                                                <input type="text" class="form-control form-control-xl  @error('namaTamu') is-invalid @enderror"
                                                value="{{$data->namaTamu, old('namaTamu')}}" id="nama-tamu" name="namaTamu">
                                                @error('namaTamu')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label class="form-label" for="nama-tamu">Tipe Kamar</label>
                                                <input type="text" readonly class="form-control form-control-xl  @error('namaTamu') is-invalid @enderror"
                                                value="{{ $data->tipeKamar }} | ready {{ $data->jumlah }} | Rp. {{ number_format($data->harga,2,',','.') }}" id="nama-tamu" name="namaTamu">
                                                @error('namaTamu')
                                                    <div class="alert alert-fill alert-danger alert-icon">
                                                        <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">Tambah data kamar</span>
            </div>
        </div>
    </div>
</div>
