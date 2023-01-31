@extends('layouts.app')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Admin Fasilitas-Hotel</h3>
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
                </div>
            </div>
            <div class="card card-stretch">
                <div class="card-inner-group">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h5 class="title">Fasilitas Kamar</h5>
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
                                            <a data-bs-toggle="modal" data-bs-target="#modalForm"
                                                class="btn btn-icon btn-trigger align-center"><i
                                                    class="icon ni ni-plus-circle"></i></a>
                                        </div>
                                        @include('admin.fasilitas-hotel.tambah')
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
                                        <span class="tb-odr-id">Nama Fasilitas Hotel</span>
                                        <span class="tb-odr-date d-none d-md-inline-block">Keterangan</span>
                                    </th>
                                    <th class="tb-odr-info">
                                        <span class="tb-odr-id">Image</span>
                                    </th>
                                    <th class="tb-odr-action">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody class="tb-odr-body">
                                @foreach ($htl as $h)
                                    <tr class="tb-odr-item">
                                        <td class="tb-odr-info">
                                            <span class="tb-odr-id">{{ $h->namaFasilitas }}</span>
                                            <span class="tb-odr-date">{{ $h->keterangan }}</span>
                                        </td>
                                        <td class="tb-odr-info">
                                            <span class="tb-odr-date">{{ $h->foto }}</span>
                                        </td>
                                        <td class="tb-odr-action">
                                            <div class="tb-odr-btns d-none d-md-inline">
                                                <a data-bs-toggle="modal" data-bs-target="#modalView"
                                                    class="btn btn-sm btn-primary">View</a>
                                            </div>
                                            <div class="dropdown">
                                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown" data-offset="-8,0"><em
                                                        class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                    <ul class="link-list-plain">
                                                        <li><a data-bs-toggle="modal" data-bs-target="#modalEdit"
                                                                class="text-primary">Edit</a></li>
                                                        <li><a data-bs-toggle="modal" data-bs-target="#modalView"
                                                                class="text-primary">View</a></li>
                                                        <li><a href="#" class="text-danger">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @include('admin.fasilitas-hotel.edit')
                                            @include('admin.fasilitas-hotel.view')

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- .card -->
                </div>
            </div>
        </div><!-- nk-block -->
    </div>
    <div class="nk-block">
        <div class="row g-gs">

        </div><!-- .row -->
    </div><!-- .nk-block -->
@endsection
