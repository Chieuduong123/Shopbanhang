<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function getLogin() {      
         
        return view('auth/login');
    }
    public function postLogin(LoginRequests $request) {
        
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $name = $request['name'];
            $password = $request['password'];
            if (Auth::attempt(['name' => $name, 'password' =>$password])) {
                 return (Auth::user()->type == 1) ? redirect('admin') : redirect('shop');
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                // return redirect('admin');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email or password error!');
                return redirect('login');
            }
        }
    }