<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Http\Requests\Authenticate\LoginRequest;

class AuthenticateController extends Controller
{

    public function login()
    {
        return view('admin::authenticate.login');
    }


    public function handleLogin(LoginRequest $request)
    {
        $credentials = $request->only(['mail_adr', 'password']);
        $credentials['role_id'] = array_values(Account::ROLE);
        // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $auth = Auth::user();
            if ($auth->role_id == User::ROLE['admin']) {
                //gửi maill
                return redirect()->route('admin.home');
            }
            return back()->withErrors([
                'auth_failed' => __('authenticate.auth_failed'),
            ])->onlyInput('mail_adr');
        }
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('admin::show');
    }


    public function edit($id)
    {
        return view('admin::edit');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
