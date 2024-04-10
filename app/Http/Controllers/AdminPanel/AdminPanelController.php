<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use \App\Http\Requests\Admin\AdminLoginRequest;

class AdminPanelController extends Controller
{
    public function redirect()
    {
        return redirect()->route('admin.index');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logout()
    {
        auth()->logout();
        session()->flash('message', 'Вы вышли из аккаунта');
        return redirect()->route('admin.index');
    }


    public function loginProcess(AdminLoginRequest $request)
    {

        if (!auth()->attempt($request->validated())) {
            session()->flash('message', 'Данные неверны');
            return redirect()->route('admin.index');
        };
        session()->flash('message', 'Вы успешно вошли');
        return redirect()->route('admin.index');
    }
}

