@extends('layouts.client')
@section('client-content')
    <div class="text-center card">
        <div class="card-body">
            <div class="my-3 fw-semibold text-center h5">Đăng ký</div>
            <div class="w-150 d-flex justify-content-center">
                <form action="{{ route('register') }}" class="pb-3" style="width: 26rem;" method="POST">
                    @if (Session::has('success'))
                        <div style="margin-top: -3px;" class="text-start"><small class="text-success">{{ session('success') }}</small></div>
                    @elseif (Session::has('error'))
                        <div style="margin-top: -3px;" class="text-start"><small class="text-danger">{{ session('error') }}</small></div>
                    @endif

                    @csrf
                    <div class="mb-2 text-start">
                        <label class="fw-semibold">Tài khoản</label>
                        <div class="input-group">
                            <input name="username" type="text" autocomplete="off"
                                   placeholder="Nhập tên đăng nhập"
                                   class="form-control form-control-solid" value="{{ old('username') }}">
                        </div>
                        @if ($errors->get('username'))
                            <div style="margin-top: -3px;"><small class="text-danger">{{ implode(", ",$errors->get('username')) }}</small></div>
                        @endif
                    </div>
                    <div class="mb-2 text-start">
                        <label class="fw-semibold">Mật Khẩu</label>
                        <div class="input-group">
                            <input name="password" type="password" autocomplete="off"
                                   placeholder="Nhập mật khẩu"
                                   class="form-control form-control-solid">
                        </div>
                    </div>
                    <div class="mb-2 text-start">
                        <label class="fw-semibold">Nhập lại mật khẩu</label>
                        <div class="input-group">
                            <input name="password_confirm" type="password" autocomplete="off"
                                   placeholder="Nhập lại mật khẩu"
                                   class="form-control form-control-solid">
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <div class="d-grid">
                            <button type="submit" class="me-3 btn btn-primary">Đăng ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
