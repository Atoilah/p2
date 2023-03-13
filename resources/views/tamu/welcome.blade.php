@extends('layouts.app')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        @if (session('success')=='store')
<div class="alert alert-pro alert-success">
    <div class="alert-text">
        <h6>Berhasil Melakukan Pemesanan</h6>
        <p>Segera lakukan pembayaran ke Resepsionis</p>
    </div>
</div>
@endif
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Selamat Datang Dihotel Kita</h3>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block-head-lg nk-block-head-sm">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div id="carouselExCap" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExCap" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExCap" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExCap" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner text-light">
                      <div class="carousel-item active">
                          <img src="images/slides/slide-a.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                      <div class="carousel-item">
                          <img src="images/slides/slide-b.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </div>
                      <div class="carousel-item">
                          <img src="images/slides/slide-c.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                          </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExCap" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExCap" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>

            </div>
        </div>
        <div class="row g-gs">

        </div><!-- .row -->
    </div><!-- .nk-block -->
    <div class="nk-block-content">

        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="row gy-4">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-label">Cek in</label>
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-calendar-alt"></em>
                                </div>
                                <input required type="text"  value="{{old('cekIn')}}" class="form-control date-picker" data-date-format="yyyy-mm-dd" name="cek-in1" id="cek-in1">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="form-label">Cek Out</label>
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon ni ni-calendar-alt"></em>
                                </div>
                                <input required type="text" value="{{old('cekOut')}}" class="form-control date-picker" data-date-format="yyyy-mm-dd" name="cek-out1" id="cek-out1">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="form-label">Jumlah</label>
                            <div class="form-control-wrap">
                                <div class="form-icon form-icon-right">
                                    <em class="icon fas fa-bed"></em>
                                </div>
                                <input required type="number" value="{{old('jumlah')}}" class="form-control" min="0" max="20" name="jumlah1" id="jumlah1">
                            </div>
                        </div>
                    </div>

                    @guest

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="form-label">pesan</label>
                            <div class="form-control-wrap">
                                <a data-bs-toggle="modal" data-bs-target="#modalDefault"
                                    class="btn btn-dim btn-secondary align-center">Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" tabindex="-1" id="modalDefault">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <em class="icon ni ni-cross"></em>
                                </a>
                                <div class="modal-header">
                                    <h5 class="modal-title">Perlu Login</h5>
                                </div>
                                <div class="modal-body">
                                    <p>Sudah Punya Akun? <a href="{{ route('login') }}">Login</a>
                                    <br>Belum Punya Akun? <a href="{{ route('register') }}">Buat Akun</a>
                                    </p>
                                </div>
                                <div class="modal-footer bg-light">
                                    <span class="sub-text">Modal Footer Text</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="form-label">pesan</label>
                            <div class="form-control-wrap">
                                <a data-bs-toggle="modal" onclick="openModal()" data-bs-target="#modalForm"
                                    class="btn btn-dim btn-secondary align-center">Pesan</a>
                            </div>
                        </div>
                    </div>
                        @endguest
                </div>

                <div class="modal fade" id="modalForm">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Pesan Kamar</h5>
                                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <em class="icon ni ni-cross"></em>
                                </a>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('pesan') }}" method="POST" class="form-validate is-alter">
                                    @csrf
                                    @guest
                                        @else
                                        <input type="text" value="{{ Auth::user()->id }}" hidden name="user_id">
                                    @endguest
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-calendar-alt"></em>
                                                    </div>
                                                    <input type="text"
                                                        class="form-control form-control-xl form-control-outlined date-picker @error('cekIn') is-invalid @enderror"
                                                        value="{{old('cekIn')}}" data-date-format="yyyy-mm-dd" id="cek-in" name="cekIn">
                                                        @error('cekIn')
                                                        <div class="alert alert-fill alert-danger alert-icon">
                                                            <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                        </div>
                                                        @enderror
                                                    <label class="form-label-outlined" for="cek-in">Cekin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-calendar-alt"></em>
                                                    </div>
                                                    <input type="text" class="form-control form-control-xl form-control-outlined date-picker  @error('cekOut') is-invalid @enderror"
                                                    value="{{old('cekOut')}}" id="cek-out" data-date-format="yyyy-mm-dd" name="cekOut">
                                                    @error('cekOut')
                                                        <div class="alert alert-fill alert-danger alert-icon">
                                                            <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                    <label class="form-label-outlined" for="cek-out">Cek out</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon fas fa-bed"></em>
                                                    </div>
                                                    <input type="text" min="0" max="20" class="form-control form-control-xl form-control-outlined @error('jumlah') is-invalid @enderror"
                                                    value="{{old('jumlah')}}" id="jumlah" name="jumlah">
                                                    @error('jumlah')
                                                        <div class="alert alert-fill alert-danger alert-icon">
                                                            <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                    <label class="form-label-outlined" for="jumlah">Jumlah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon fas fa-users"></em>
                                                    </div>
                                                    <input type="text" class="form-control form-control-xl form-control-outlined @error('namaPemesan') is-invalid @enderror"
                                                    value="{{old('namaPemesan')}}" id="nama-pemesan" name="namaPemesan">
                                                    @error('namaPemesan')
                                                        <div class="alert alert-fill alert-danger alert-icon">
                                                            <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                    <label class="form-label-outlined" for="nama-pemesan">Nama pemesan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon fas fa-phone"></em>
                                                    </div>
                                                    <input type="text" class="form-control form-control-xl form-control-outlined @error('telp') is-invalid @enderror"
                                                    value="{{old('telp')}}" id="telp" name="telp">
                                                    @error('telp')
                                                        <div class="alert alert-fill alert-danger alert-icon">
                                                            <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                    <label class="form-label-outlined" for="telp">Telepon</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon fas fa-users"></em>
                                                    </div>
                                                    <input type="text" class="form-control form-control-xl form-control-outlined @error('namaTamu') is-invalid @enderror"
                                                    value="{{old('namaTamu')}}" id="nama-tamu" name="namaTamu">
                                                    @error('namaTamu')
                                                        <div class="alert alert-fill alert-danger alert-icon">
                                                            <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                    <label class="form-label-outlined" for="nama-tamu">Nama Tamu</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2 @error('room_id') is-invalid @enderror"
                                                    value="{{old('room_id')}}" data-ui="xl" id="rooms_id" name="room_id">
                                                        @foreach ($rooms as $r)
                                                        <option value="{{ $r->id }}">
                                                            {{ $r->tipeKamar }} | ready {{ $r->jumlah }} | Rp. {{ number_format($r->harga,2,',','.') }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('room_id')
                                                        <span class="invalid-feedback" role="alert">

                                                        </span>
                                                        <div class="alert alert-fill alert-danger alert-icon">
                                                            <em class="icon ni ni-cross-circle"></em><strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                    <label class="form-label-outlined" for="rooms_id">Tipe Kamar</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Pesan
                                                    Sekarang</button>
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
            </div>
        </div>
        <h1 class="title nk-block-title text-center">Hotel Kita</h1>
        <div class="nk-block-des">
            <p>hotel kami berada ditempat yang strategis dengan harga murah dekat dengan <code> booking online </code>.</p>
        </div>
    </div>



    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <h3>List Data Kamar</h3>
        </div>

        <div class="card card-bordered card-preview">

            <div class="card-inner">
                <div class="row gy-4">
                    @foreach ($fRooms as $i)
                        <div class="col-sm-6 col-lg-4">
                            <div class="gallery card">
                                <a class="gallery-image popup-image" href="{{ $i->foto }}">
                                    <img class="w-100 rounded-top" src="{{ $i->foto }}" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-info">
                                            <span class="lead-text">{{ $i->tipeKamar }}
                                                <span class="badge badge-dim rounded-pill bg-warning">
                                                    Rp. {{ number_format($i->harga,2,',','.') }}
                                                </span>
                                                @if ($i->jumlah == 0)
                                                <span
                                                    class="badge rounded-pill badge-dim bg-outline-danger">Kosong</span>
                                                @else
                                                    <span class="badge rounded-pill badge-dim bg-outline-success">
                                                        ready {{ $i->jumlah }}
                                                    </span>
                                                @endif
                                            </span>
                                            <span class="sub-text">Fasilitas:</span>
                                            @foreach ($i->facility_rooms as $item)
                                                +<span class="sub-text-sm badge badge-dim bg-outline-info"> {{ $item->namaFasilitas }}</span> <br>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div><!-- .card-preview -->
    </div>


    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <h3>Fasilitas Hotel</h3>
        </div>

        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="row gy-4">
                    @foreach ($fHotel as $i)
                        <div class="col-sm-6 col-lg-4">
                            <div class="gallery card">
                                <a class="gallery-image popup-image" href="{{ $i->foto }}">
                                    <img class="w-100 rounded-top" src="{{ $i->foto }}" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-info">
                                            <span class="lead-text">{{ $i->namaFasilitas }}</span>
                                            <span class="sub-text">{{ $i->keterangan }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div><!-- .card-preview -->
    </div>
    <div class="nk-block-content">

    </div>


    <script>

        function openModal() {
            var cekIn1 = document.querySelector('#cek-in1')
            var cekOut1 = document.querySelector('#cek-out1')
            var jumlah1 = document.querySelector('#jumlah1')
            var cekIn = document.querySelector('#cek-in')
            var cekOut = document.querySelector('#cek-out')
            var jumlah = document.querySelector('#jumlah')

            cekIn.value = cekIn1.value
            cekOut.value = cekOut1.value
            jumlah.value = jumlah1.value

            cekIn.parentElement.classList.add('focused')
            cekOut.parentElement.classList.add('focused')
            jumlah.parentElement.classList.add('focused')
        }
    </script>
    <script>
        $(document).ready(function(){
        var d = new Date().toISOString();
        d = d.replace(/\.\d+/, "");
        var minDate = d.substring(0, d.length-1);

        $(".datepicker").attr({
            "value" : minDate,
            "min" : minDate,
        });
        });
    </script>
@endsection
