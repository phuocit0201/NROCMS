<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{


    public function handleLogout()
    {
        Auth::logout();
        return redirect(route('admin.login'));
    }
}
