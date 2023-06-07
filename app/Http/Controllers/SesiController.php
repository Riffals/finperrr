<?php

namespace App\Http\Controllers;

use App\Models\ListAkun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;


class SesiController extends Controller
{
    public function index()
    {
        return view('laman_masuk');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email WAJIB diisi', 
            'password.required' => 'Password WAJIB diisi', 
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin))  {
            if (Auth::user()->akunID == '1') {
                return redirect('admin/admin');
            } elseif (Auth::user()->akunID == '2') {
                return redirect('admin/pelanggan');
            } elseif (Auth::user()->akunID == '3') {
                return redirect('admin/mitra');
            }
        } 
        else    {
            return redirect('')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('');
    }

    // asli
    public function register()
    {

        // Mengambil data dari tabel 'mitra'
        $tipeAkun = DB::table('akuns')
                ->get();

        // Mengirim data pelanggan ke view dashboard_pelanggan
        return view('laman_daftar', [
            'tipeAkun' => $tipeAkun
        ]);
    }

    public function create(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|min:5|unique:listakuns|max:255',
            'password' => 'required|min:3|max:255',
            'akunID' => 'required',
        ]);

        $user['password'] = bcrypt($user['password']);
        
        ListAkun::create($user);

        return redirect('/')->with('Success', 'Selamat Register Berhasil!!!');
    }

    public function reset()
    {
        return view('reset-password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3|max:255|confirmed',
        ]);
    
        $user = ListAkun::where('email', $request->email)->first();
    
        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Email tidak ditemukan']);
        }
    
        $user->password = Hash::make($request->password);
        $user->save();
    
        return redirect('/')->with('Success', 'Password berhasil diganti');
        // // return 123;
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:8|confirmed',
        // ]);

        // $user = ListAkun::where('email', $request->email)->first();

        // if (!$user) {
        //     return redirect()->back()->withErrors(['email' => 'Email tidak ditemukan']);
        // }

        // $user->password = Hash::make($request->password);
        // $user->save();

        // return redirect('laman_masuk')->with('success', 'Password berhasil direset');
    }

        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:3|confirmed',
        // ]);

        // $response = Password::broker()->sendResetLink(
        //     $request->only('email')
        // );

        // if ($response !== Password::RESET_LINK_SENT) {
        //     return redirect()->back()->withErrors(['email' => trans($response)]);
        // }

        // return redirect('laman_masuk')->route('login')->with('success', 'Reset password link has been sent to your email.');
    
}


