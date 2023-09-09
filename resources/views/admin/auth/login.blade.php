<x-laravel-ui-adminlte::adminlte-layout>

    <body class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="login-logo">
                <a href="{{ url('/home') }}">
                    <img class="logo" alt="Logo" src="https://nsokun.me/images/logo.png?v1" style="max-width: 200px;">
                </a>
            </div>
            <!-- /.login-logo -->

            <!-- /.login-box-body -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Đăng nhập hệ thống</p>
                    @if (Session::has('error'))
                        <div style="margin-top: -3px;" class="text-start"><small class="text-danger">{{ session('error') }}</small></div>
                    @endif
                    <form method="post" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <input type="text" name="username" value="{{ old('username') }}" placeholder="Tài khoản"
                                class="form-control @error('username') is-invalid @enderror">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-user"></span></div>
                            </div>
                            @error('username')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password" placeholder="Mật khẩu"
                                class="form-control @error('password') is-invalid @enderror">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span class="error invalid-feedback">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>

        </div>
        <!-- /.login-box -->
    </body>
</x-laravel-ui-adminlte::adminlte-layout>
