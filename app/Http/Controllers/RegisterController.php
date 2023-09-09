<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Account;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Show register form
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function create(RegisterRequest $request)
    {
        $dataRequest = $request->validated();
        unset($dataRequest['password_confirm']);
        $account = DB::table('account')->insert($dataRequest);

        if (!$account) {
            return back()->with('error', 'Đăng kí thất bại');
        }

        return back()->with('success', 'Đăng kí tài khoản thành công');
    }
}
