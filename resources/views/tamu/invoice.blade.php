@extends('layouts.app')
@section('content')
<div class="nk-block-head">
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
</div>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Invoices</h3>
                            <div class="nk-block-des text-soft">
                                <p>Selamat Datang {{ $user->name }} total Pesanan Anda {{ $total }}.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><span>Add New</span></a></li>
                                                <li><a href="#"><span>Import</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h5 class="title">All Invoice</h5>
                                    </div>
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar">
                                            <li>
                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li><!-- li -->
                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                        <em class="icon ni ni-setting"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-check">
                                                            <li><span>Show</span></li>
                                                            <li class="active"><a href="#">10</a></li>
                                                            <li><a href="#">20</a></li>
                                                            <li><a href="#">50</a></li>
                                                        </ul>
                                                        <ul class="link-check">
                                                            <li><span>Order</span></li>
                                                            <li class="active"><a href="#">DESC</a></li>
                                                            <li><a href="#">ASC</a></li>
                                                        </ul>
                                                        <ul class="link-check">
                                                            <li><span>Density</span></li>
                                                            <li class="active"><a href="#">Regular</a></li>
                                                            <li><a href="#">Compact</a></li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .dropdown -->
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- card-tools -->
                                    <div class="card-search search-wrap" data-search="search">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control form-control-sm border-transparent form-focus-none" placeholder="Quick search by order id">
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
                                                <span class="tb-odr-id">Payment ID</span>
                                                <span class="tb-odr-date d-none d-md-inline-block">Pemesan</span>
                                            </th>
                                            <th class="tb-odr-amount">
                                                <span class="tb-odr-total">Amount</span>
                                                <span class="tb-odr-status d-none d-md-inline-block">Status</span>
                                            </th>
                                            <th class="tb-odr-action">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-odr-body">
                                        @foreach ($data as $a)
                                        <tr class="tb-odr-item">
                                            <td class="tb-odr-info">
                                                <span class="tb-odr-id"><a href="html/hotel/invoice-details.html">{{ $a->kode }}</a></span>
                                                <span class="tb-odr-date">{{ $a->namaPemesan }}</span>
                                            </td>
                                            <td class="tb-odr-amount">

                                                <span class="tb-odr-total">
                                                    <span class="amount">{{ rupiah(total($a->cekIn, $a->cekOut , $a->harga, $a->jumlah)) }}</span>
                                                </span>
                                                <span class="tb-odr-status">
                                                    @if ($a->status == 0 )
                                                        <span class="badge badge-dot bg-warning">pending</span>
                                                    @endif
                                                    @if ($a->status == 1 )
                                                        <span class="badge badge-dot bg-success">cekIn</span>
                                                    @endif
                                                    @if ($a->status == 2 )
                                                        <span class="badge badge-dot bg-success">cekOut</span>
                                                    @endif
                                                    @if ($a->status == 3 )
                                                    <span class="badge badge-dot bg-danger">batal</span>
                                                    @endif
                                                    @if ($a->status == 4 )
                                                    <span class="badge badge-dot bg-success">Selesai bayar</span>
                                                    @endif
                                                </span>
                                            </td>
                                            <td class="tb-odr-action">
                                                <div class="tb-odr-btns d-none d-sm-inline">
                                                    @if ($a->status == 0 )
                                                        <a href="{{ route('detail', $a->kode) }}" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    @endif
                                                    @if ($a->status == 1 )
                                                    <a href="{{ route('detail', $a->kode) }}" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    @endif
                                                    @if ($a->status == 2 )
                                                    <a href="{{ route('detail', $a->kode) }}" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    @endif
                                                    @if ($a->status == 4 )
                                                    <a href="{{ route('detail', $a->kode) }}" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                                                    @endif
                                                    <a data-bs-toggle="modal" data-bs-target="#Edit{{ $a->id }}" class="btn btn-dim btn-sm btn-primary">View</a>
                                                </div>
                                                <a href="html/hotel/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                                            </td>
                                            <x-tamu.invoice.edit :data=$a :rooms=$fRooms />
                                        </tr><!-- .tb-odr-item -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                {{-- <ul class="pagination justify-content-center justify-content-md-start">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul><!-- .pagination --> --}}
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection
