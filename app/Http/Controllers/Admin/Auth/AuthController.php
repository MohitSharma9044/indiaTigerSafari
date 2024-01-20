<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function adminLogin()
    {
        return view('auth.login');
    }
    public function adminAuthenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/admin')->with('message', $validator->errors()->toArray());
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect('/admin/dashboard');
            } else {
                Auth::logout();
                return redirect('/admin')->with('message', 'You do not have admin privileges.');
            }
        } else {
            return redirect('/admin')->with('message', 'Invalid credentials');
        }
    }

}
