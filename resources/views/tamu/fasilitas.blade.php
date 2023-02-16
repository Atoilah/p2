@extends('layouts.app')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Fasilitas Hotel</h3>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                            class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            {{-- <li>
                            <div class="drodown">
                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block-head-lg nk-block-head-sm">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="slider-init"
                    data-slick='{"arrows": true, "dots": true, "slidesToShow": 1, "slidesToScroll": 1, "infinite":true, "responsive":[ {"breakpoint": 992,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}} ]}'>
                    @foreach ($fHotel as $i)
                    <div class="col">
                        <div class="card card-bordered">
                            <img src="{{ $i->foto }}" class="card-img-top img-fluid" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row g-gs">

        </div><!-- .row -->
    </div>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">

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
    <div class="nk-block">
        <div class="row g-gs">

        </div><!-- .row -->
    </div><!-- .nk-block -->
@endsection
