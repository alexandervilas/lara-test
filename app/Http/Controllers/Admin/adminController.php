<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function log_admin(Request $request)
    {
        $messages = [
            'login.required' =>'Поле login обязательно для заполнения.',
            'login.max' =>'Поле login должно быть не более 30 символов.',
            'login.min' =>'Поле login должно быть не менее 3 символов.',
            'password.required' =>'Поле password обязательно для заполнения.',
            'password.max' =>'Поле password должно быть не более 20 символов.',
            'password.min' =>'Поле password должно быть не менее 8 символов.',
            ];


        $request->validate([
            'login' => 'required|max:30 | min:3',
            'password' => 'required|max:20 | min:8'
        ], $messages);

        return 'login = '. $request->login .' '. 'password = '. $request->password;
    }
}
