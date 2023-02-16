@extends('layouts.app')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Admin Fasilitas-Kamar</h3>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                            class="icon ni ni-more-v"></em></a>
                </div>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
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
                @if (session()->has('Delete'))
                        <div class="alert alert-pro alert-danger">
                            <div class="alert-text">
                                <h6>{{ session('Delete') }}</h6>
                                <p>berhasil melakukan aktivitas</p>
                            </div>
                        </div>
                @endif
            </div>
        </div>
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
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
                                                <a data-bs-toggle="modal" data-bs-target="#FormFasilitas"
                                                    class="btn btn-icon btn-trigger align-center"><i
                                                        class="icon ni ni-plus-circle"></i></a>
                                            </div>

                                            @include('admin.fasilitas-kamar.tambah')
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
                                        <button class="search-submit btn btn-icon"><em
                                                class="icon ni ni-search"></em></button>
                                    </div>
                                </div><!-- card-search -->
                            </div><!-- .card-title-group -->
                        </div><!-- .card-inner -->
                        <div class="card-inner p-0">
                            <table class="table table-orders">
                                <thead class="tb-odr-head">
                                    <tr class="tb-odr-item">
                                        <th class="tb-odr-info">
                                            <span class="tb-odr-date d-none d-md-inline-block">Fasilitas</span>
                                        </th>
                                        <th class="tb-odr-action">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody class="tb-odr-body">
                                    @foreach ($room as $f)
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id">{{ $f->namaFasilitas }}</span>
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
                                                            <li><a data-bs-toggle="modal" data-bs-target="#modalEdit-{{$f->id}}"
                                                                    class="text-primary">Edit</a></li>
                                                            <li><a data-bs-toggle="modal" data-bs-target="#modalView-{{$f->id}}"
                                                                    class="text-primary">View</a></li>
                                                            <li><a data-bs-toggle="modal" data-bs-target="#Hapus-{{ $f->id }}"
                                                                    class="text-danger">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <x-fasilitas-kamar.edit :data=$f />
                                                <x-fasilitas-kamar.hapus :data=$f />

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- .card -->
                    </div>
                </div>
            </div>
        </div><!-- nk-block -->
    </div>
    <div class="nk-block">
        <div class="row g-gs">

        </div><!-- .row -->
    </div><!-- .nk-block -->
@endsection
