<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function handleLogin(LoginRequest $request)
    {
        $dataRequest = $request->validated();
        $dataRequest['is_admin'] = 1;
        $account = DB::table('account')->where($dataRequest)->first();

        if (is_null($account)) {
            return back()->with('error', 'Thông tin đăng nhập không chính xác!');
        }

        if ($account->ban == 1) {
            return back()->with('error', 'Tài khoản của bạn đã bị khóa!');
        }

        if ($account->active == 0) {
            return back()->with('error', 'Tài khoản của bạn chưa kích hoạt!');
        }

        if (!Auth::loginUsingId($account->id)) {
            return back()->with('error', 'Đăng nhập thất bại!');
        }

        return redirect(route('admin.home'));
    }
}
