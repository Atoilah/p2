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
        @include('admin.fasilitas-kamar.tambah')
        <div class="nk-block-head">
            <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
                <thead>
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="puid" onchange="checkAll(this)" name="chk[]">
                                <label class="custom-control-label" for="puid"></label>
                            </div>
                        </th>
                        <th class="nk-tb-col tb-col-md"><span>Fasilitas</span></th>
                        <th class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1 my-n1">
                                <li class="me-n1">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="adminkamar/selectDel/9"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                <li>
                                                    <a data-bs-toggle="modal" data-bs-target="#modalForm">
                                                    <em class="icon ni ni-plus-circle"></em><span>Tambah Data</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </th>
                    </tr><!-- .nk-tb-item -->
                </thead>
                <tbody>
                    @foreach ($room as $f)
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="hps" name="hps[]" value="{{ $f->id }}">
                                <label class="custom-control-label" for="hps"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <span class="tb-lead">
                                <span class="tb-odr-id">
                                 {{ $f->namaFasilitas}}
                                </span>
                            </span>
                        </td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1 my-n1">
                                <li class="me-n1">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a data-bs-toggle="modal" data-bs-target="#modalEdit-{{ $f->id }}"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                <li><a data-bs-toggle="modal" data-bs-target="#Hapus-{{ $f->id }}"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                            </ul>
                                        </div>
                                        <x-fasilitas-kamar.edit :data=$f />
                                        <x-fasilitas-kamar.hapus :data=$f />
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item -->
                    @endforeach
                </tbody>
            </table><!-- .nk-tb-list -->
        </div>
    </div>
    <div class="nk-block">
        <div class="row g-gs">

        </div><!-- .row -->
    </div><!-- .nk-block -->
@endsection
