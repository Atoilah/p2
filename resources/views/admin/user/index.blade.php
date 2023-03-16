@extends('layouts.app')
@section('content')
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">Users
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

    </div>
    @include('admin.user.tambah')

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
                <h4 class="nk-block-title">Data Users</h4>
                <div class="nk-block-des">
                    <p>Data User(Admin , Resepsionis Dan Customer)</p>
                </div>
            </div>
        </div>
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                    <thead>
                        <tr class="nk-tb-item nk-tb-head">
                            <th class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid">
                                    <label class="custom-control-label" for="uid"></label>
                                </div>
                            </th>
                            <th class="nk-tb-col"><span class="sub-text">User</span></th>
                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Create Account</span></th>
                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Role</span></th>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $r)
                        <tr class="nk-tb-item">
                            <td class="nk-tb-col nk-tb-col-check">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                    <label class="custom-control-label" for="uid1"></label>
                                </div>
                            </td>
                            <td class="nk-tb-col">
                                <div class="user-card">
                                    <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                        <span>ID</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="tb-lead">{{ $r->name }}<span class="dot dot-success d-md-none ms-1"></span></span>
                                        <span>{{ $r->email }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                 @if ($r->email_verified_at == null)
                                 <li><em class="icon ni text-danger ni-alert-circle"></em> <span>Email</span></li>
                                 @else
                                 <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>

                                 @endif
                            </td>
                            <td class="nk-tb-col tb-col-lg">
                                <span>05 Oct 2019</span>
                            </td>
                            <td class="nk-tb-col tb-col-md">
                                @if ($r->role == 'user')
                                <span class="tb-status text-danger">User</span>
                                @elseif($r->role == 'admin')
                                <span class="tb-status text-success">Admin</span>
                                @elseif($r->role == 'resepsionis')
                                <span class="tb-status text-warning">Resepsionis</span>
                                @endif
                            </td>
                            <td class="nk-tb-col nk-tb-col-tools">
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
                                                    <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                </ul>
                                            </div>
                                            @include('admin.user.hapus')
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr><!-- .nk-tb-item  -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
    </div><!-- nk-block -->
</div>
@endsection
