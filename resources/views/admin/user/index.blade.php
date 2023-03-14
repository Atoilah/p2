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
        <div class="card card-stretch">
            <div class="card-inner-group">
                <div class="card-inner">
                    <div class="card-title-group">
                        <div class="card-title">
                            <h5 class="title">Users</h5>
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
                                    <span class="tb-odr-id">Nama</span>
                                    <span class="tb-odr-date d-none d-md-inline-block">email</span>
                                </th>
                                <th class="tb-odr-amount">
                                    <span class="tb-odr-status d-none d-md-inline-block">role</span>
                                </th>
                                <th class="tb-odr-action">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody class="tb-odr-body">
                            @foreach ($user as $r)
                                <tr class="tb-odr-item">
                                    <td class="tb-odr-info">
                                        <span class="tb-odr-id">{{ $r->name }}</span>
                                        <span class="tb-odr-date">{{ $r->email }}</span>
                                    </td>
                                    <td class="tb-odr-amount">
                                        <span class="tb-odr-status">
                                            @if ($r->role == 'admin')
                                                <span
                                                    class="badge rounded-pill badge-dim bg-outline-danger">Admin</span>
                                            @elseif($r->role == 'resepsionis')
                                                <span
                                                    class="badge rounded-pill badge-dim bg-outline-success">resepsionis</span>
                                            @elseif($r->role == 'user')
                                                <span
                                                class="badge rounded-pill badge-dim bg-outline-success">user</span>
                                            @endif
                                        </span>
                                    </td>
                                    <td class="tb-odr-action">
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
                                    </td>
                                </tr>
                                @include('admin.user.hapus')
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- .card -->
            </div>
        </div>

        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Data Table</h4>
                <div class="nk-block-des">
                    <p>Using the most basic table markup, here’s how <code class="code-class">.table</code> based tables look by default.</p>
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
                            <th class="nk-tb-col nk-tb-col-tools text-end">
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
                                        <span>AB</span>
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
