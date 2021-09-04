<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequests;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    public function create(RegisterRequests $request) {
        $data = [
        'name' => $request['name'],
        'email' => $request['email'],
        'type' => 2,
        'password' => bcrypt($request['password']),
        ];
        $create = app(UserService::class)->create($data);
        // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
        if( $create) {
            // Insert thành công sẽ hiển thị thông báo
            Session::flash('success', 'Đăng ký thành viên thành công!');
            return redirect('login');
        } else {
            // Insert thất bại sẽ hiển thị thông báo lỗi
            Session::flash('error', 'Đăng ký thành viên thất bại!');
            return redirect('login');
        }
    }
    public function index() {
        return view('auth/register');
    }  
}