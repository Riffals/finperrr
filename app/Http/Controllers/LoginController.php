<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListAkun;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Retrieve the user from the "list_akun" table using the email field
        $user = ListAkun::where('email', $credentials['email'])->first();

        if ($user && password_verify($credentials['password'], $user->katasandi)) {
            // Authenticate the user
            Auth::login($user);

            $data = ListAkun::join('akun','akun.akunID','list akun.akunID')
            ->where('email',$credentials['email'])->first();
            if($data->tipeAkun == 'USER'){
                return redirect()->route('index');
            }else{
                return redirect()->route('admin.index');
            }
            // Redirect to the desired location
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }
}
