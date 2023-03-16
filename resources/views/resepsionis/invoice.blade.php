@extends('layouts.app')

@section('content')

<div class="nk-block nk-block-lg">
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
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Data Table with Export</h4>
        </div>
    </div>
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <table class="datatable-init-export nowrap table" data-export-title="Export">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Pemesan</th>
                        <th>Tipe Kamar</th>
                        <th>Status</th>
                        <th>Cek in</th>
                        <th>Total</th>
                        <th class="nk-tb-col nk-tb-col-tools">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $a)
                    <tr class="nk-tb-item">
                        <td>{{ $a->kode }}</td>
                        <td>{{ $a->namaPemesan }}</td>
                        <td>{{ $a->tipeKamar }}</td>
                        <td>
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
                        </td>
                        <td>{{ $a->cekIn }}</td>
                        <td>{{ rupiah(total($a->cekIn, $a->cekOut , $a->harga, $a->jumlah)) }}</td>
                        <td class="nk-tb-col nk-tb-col-tools">
                            @if ($a->status == 0 )
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <form action="{{ route('terima', $a->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Terima">
                                            <em class="icon fas fa-check-circle"></em>
                                        </a>
                                    </form>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <form action="{{ route('tolak', $a->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Tolak">
                                            <em class="icon fas fa-times-circle"></em>
                                        </a>
                                    </form>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Kirim Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @endif
                            @if ($a->status == 1 )
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @endif
                            @if ($a->status == 2 )
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @endif
                            @if ($a->status == 3 )
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @endif
                            @if ($a->status == 4 )
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Wallet">
                                        <em class="icon ni ni-wallet-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div> <!-- nk-block -->
@endsection
