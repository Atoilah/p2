<div class="modal fade" id="modalForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah User</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('user.store') }}" class="form-validate is-alter">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-user-alt-fill"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-xl form-control-outlined @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                        id="name">
                                    <label class="form-label-outlined" for="name">Nama User</label>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon fas fa-envelope-open"></em>
                                    </div>
                                    <input type="text" class="form-control form-control-xl form-control-outlined  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                        id="email">
                                    <label class="form-label-outlined" for="email">Email</label>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-users-fill"></em>
                                    </div>
                                    <select name="role" class="form-select js-select2  @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role"  data-ui="xl"  id="role">
                                        <option value="2">Resepsionis</option>
                                        <option value="1">Admin</option>
                                    </select>
                                    <label class="form-label-outlined" for="role">role</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-eye-off-fill"></em>
                                    </div>
                                    <input type="password" class="form-control form-control-xl form-control-outlined @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                        id="password">
                                    <label class="form-label-outlined" for="password">password</label>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-eye-off-fill"></em>
                                    </div>
                                    <input type="password" class="form-control form-control-xl form-control-outlined" name="password_confirmation" required autocomplete="new-password"
                                        id="password-confirm">
                                    <label class="form-label-outlined" for="password-confirm" >konfirmasi Password</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Tambah User</button>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">Selamat Meikmati</span>
            </div>
        </div>
    </div>
</div>
