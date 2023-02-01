@extends('layouts.app')
@section('content')

<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Admin Kamar</h3>
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
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">

    </div>

    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                @if (session()->has('Berhasil'))
                        <div class="alert alert-pro alert-success">
                            <div class="alert-text">
                                <h6>{{ session('Berhasil') }}</h6>
                                <p>berhasil melakukan aktivitas</p>
                            </div>
                        </div>
                    @endif
            </div>
        </div>
        <div class="card card-stretch">
            <div class="card-inner-group">
                <div class="card-inner">
                    <div class="card-title-group">
                        <div class="card-title">
                            <h5 class="title">Kamar</h5>
                        </div>
                        <div class="card-tools me-n1">
                            <ul class="btn-toolbar">
                                <li>
                                    <a href="#" class="btn btn-icon search-toggle toggle-search"
                                        data-target="search"><em class="icon ni ni-search"></em></a>
                                </li><!-- li -->
                                <li class="btn-toolbar-sep"></li><!-- li -->
                                <li>
                                    <div class="form-control-wrap">
                                        {{-- <a href="{{ route('adminkamar.create') }}"
                                            class="btn btn-icon btn-trigger align-center"><i
                                                class="icon ni ni-plus-circle"></i></a> --}}
                                        <a data-bs-toggle="modal" data-bs-target="#modalForm"
                                            class="btn btn-icon btn-trigger align-center"><i
                                                class="icon ni ni-plus-circle"></i></a>
                                    </div>


                                </li><!-- li -->
                            </ul><!-- .btn-toolbar -->
                        </div><!-- card-tools -->
                        <div class="card-search search-wrap" data-search="search">
                            <div class="search-content">
                                <a href="#" class="search-back btn btn-icon toggle-search"
                                    data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                <input type="text"
                                    class="form-control form-control-sm border-transparent form-focus-none"
                                    placeholder="Quick search by order id">
                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                            </div>
                        </div><!-- card-search -->
                    </div><!-- .card-title-group -->
                </div><!-- .card-inner -->
                <div class="card-inner p-0">

                    <table class="table table-orders">
                        <thead class="tb-odr-head">
                            <tr class="tb-odr-item">
                                <th class="tb-odr-info">
                                    <span class="tb-odr-id">Tipe Kamar</span>
                                    <span class="tb-odr-date d-none d-md-inline-block">Jumlah</span>
                                </th>
                                <th class="tb-odr-amount">
                                    <span class="tb-odr-date d-none d-md-inline-block">Harga</span>
                                    <span class="tb-odr-status d-none d-md-inline-block">Status</span>
                                </th>
                                <th class="tb-odr-action">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody class="tb-odr-body">
                            @foreach ($room as $r)
                                <tr class="tb-odr-item">
                                    <td class="tb-odr-info">
                                        <span class="tb-odr-id">{{ $r->tipeKamar }}</span>
                                        <span class="tb-odr-date">{{ $r->jumlah }}</span>
                                    </td>
                                    <td class="tb-odr-amount">
                                        <span class="tb-odr-id">
                                                <span class="badge rounded-pill badge-dim bg-outline-success">
                                                    Rp. {{ number_format($r->harga,2,',','.') }}
                                                </span>
                                        </span>
                                    </td>
                                    <td class="tb-odr-amount">
                                        <span class="tb-odr-status">
                                            @if ($r->jumlah == 0)
                                                <span
                                                    class="badge rounded-pill badge-dim bg-outline-danger">Penuh</span>
                                            @elseif ($r->jumlah < 10)
                                                <span class="badge rounded-pill badge-dim bg-outline-warning">hampir
                                                    penuh</span>
                                            @else
                                                <span
                                                    class="badge rounded-pill badge-dim bg-outline-success">kosong</span>
                                            @endif
                                        </span>
                                    </td>
                                    <td class="tb-odr-action">
                                        <div class="tb-odr-btns d-none d-md-inline">
                                            <a data-bs-toggle="modal" data-bs-target="#View{{ $r->id }}"
                                                class="btn btn-sm btn-primary">View</a>
                                        </div>
                                        <div class="dropdown">
                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                data-bs-toggle="dropdown" data-offset="-8,0"><em
                                                    class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                <ul class="link-list-plain">
                                                    <li><a data-bs-toggle="modal"
                                                            data-bs-target="#Edit{{ $r->id }}"
                                                            class="text-primary">Edit</a></li>
                                                    <li><a data-bs-toggle="modal"
                                                            data-bs-target="#View{{ $r->id }}"
                                                            class="text-primary">View</a></li>
                                                    <li><a data-bs-toggle="modal"
                                                            data-bs-target="#Hapus{{ $r->id }}"
                                                            class="text-danger">Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @include('admin.kamar.view')
                                        @include('admin.kamar.hapus')
                                        @include('admin.kamar.edit')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        @include('admin.kamar.tambah')

                    </table>
                </div><!-- .card -->
            </div>
        </div>
    </div><!-- nk-block -->
</div>
@endsection
