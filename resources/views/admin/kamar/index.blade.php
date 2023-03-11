@extends('layouts.app')
@section('content')
<script>
    function checkAll(ele) {
       var checkboxes = document.getElementsByTagName('input');
       if (ele.checked) {
           for (var i = 0; i < checkboxes.length; i++) {
               if (checkboxes[i].type == 'checkbox' ) {
                   checkboxes[i].checked = true;
               }
           }
       } else {
           for (var i = 0; i < checkboxes.length; i++) {
               if (checkboxes[i].type == 'checkbox') {
                   checkboxes[i].checked = false;
               }
           }
       }
   }
</script>
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Admin Kamar</h3>
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
    @include('admin.kamar.tambah')
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
                    <th class="nk-tb-col tb-col-sm"><span>Tipe Kamar</span></th>
                    <th class="nk-tb-col"><span>Status</span></th>
                    <th class="nk-tb-col"><span>Harga</span></th>
                    <th class="nk-tb-col"><span>Jumlah Kamar</span></th>
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
                @foreach ($room as $r)
                <tr class="nk-tb-item">
                    <td class="nk-tb-col nk-tb-col-check">
                        <div class="custom-control custom-control-sm custom-checkbox notext">
                            <input type="checkbox" class="custom-control-input" id="hps" name="hps[]" value="{{ $r->id }}">
                            <label class="custom-control-label" for="hps"></label>
                        </div>
                    </td>
                    <td class="nk-tb-col tb-col-sm">
                        <span class="tb-product">
                            <img src="{{ $r->foto }}" alt="" class="thumb">
                            <span class="title">{{ $r->tipeKamar }}</span>
                        </span>
                    </td>
                    <td class="nk-tb-col">
                        <span class="tb-sub">
                        @if ($r->jumlah == 0)
                            <span
                                class="badge rounded-pill badge-dim bg-outline-danger">Penuh</span>
                        @elseif ($r->jumlah < 10)
                            <span class="badge rounded-pill badge-dim bg-outline-warning">hampir
                                penuh</span>
                        @else
                            <span
                                class="badge rounded-pill badge-dim bg-outline-success">kosong</span>
                        @endif</span>
                    </td>
                    <td class="nk-tb-col">
                        <span class="tb-lead">
                            <span class="badge rounded-pill badge-dim bg-outline-success">
                            Rp. {{ number_format($r->harga,2,',','.') }}
                            </span>
                        </span>
                    </td>
                    <td class="nk-tb-col">
                        <span class="tb-sub">{{ $r->jumlah }}</span>
                    </td>
                    <td class="nk-tb-col tb-col-md">
                        <span class="tb-sub">
                            @foreach ($r->facility_rooms as $item)
                                <span class="tb-odr-date">{{ $item->namaFasilitas }}</span>,
                            @endforeach
                        </span>
                    </td>
                    <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1 my-n1">
                            <li class="me-n1">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a data-bs-toggle="modal" data-bs-target="#Edit{{ $r->id }}"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#Hapus-{{ $r->id }}"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                        </ul>
                                    </div>
                                    <x-kamar.edit :data=$r />
                                    <x-kamar.hapus :data=$r />
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


@endsection
