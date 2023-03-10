@extends('layouts.app')
@section('content')
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
                @include('admin.fasilitas-hotel.tambah')
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h4 class="nk-block-title">Data Kamar</h4>
                        <div class="nk-block-des">
                            <p>Data Tentang Kamar dan Jumlah Kamar Yang tersedia </p>
                        </div>
                    </div>
                </div>
                <div class="card card-bordered card-preview">
                    <div class="card-inner bg-gray-100">
                        <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
                            <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid" onchange="checkAll(this)" name="chk[]">
                                            <label class="custom-control-label" for="puid"></label>
                                        </div>
                                    </th>
                                    <th class="nk-tb-col tb-col-sm"><span>Nama Fasilitas</span></th>
                                    <th class="nk-tb-col tb-col-md"><span>Keterangan</span></th>
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
                                @foreach ($htl as $h)
                                <td class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="hps" name="hps[]" value="{{ $h->id }}">
                                        <label class="custom-control-label" for="hps"></label>
                                    </div>
                                </td>
                                <td class="nk-tb-col tb-col-sm">
                                    <span class="tb-product">
                                        <img src="{{ $h->foto }}" alt="" class="thumb">
                                        <span class="title">{{ $h->namaFasilitas }}</span>
                                    </span>
                                </td>
                                <td class="nk-tb-col">
                                    <span class="title">{{ $h->keterangan }}</span>
                                </td>
                                <td class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1 my-n1">
                                        <li class="me-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a data-bs-toggle="modal" data-bs-target="#modalView-{{ $h->id }}"><em class="icon ni ni-edit"></em><span>View Product</span></a></li>
                                                        <li><a data-bs-toggle="modal" data-bs-target="#modalEdit-{{ $h->id }}"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                        <li><a data-bs-toggle="modal" data-bs-target="#Hapus-{{ $h->id }}"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                    </ul>
                                                </div>
                                                <x-fasilitas-hotel.edit :data=$h />
                                                <x-fasilitas-hotel.hapus :data=$h />
                                                <x-fasilitas-hotel.view :data=$h />
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
        </div>

@endsection
