<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view ('login');
    }

    public function authenticate(Request $request){
        $data=$request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->with('loginError','Login Anda Gagal');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('REGISTER');
    }

    // public function signup()
    // {
    //     $role = role::all();
    //     return view('register', compact('role'));
    // }

    // public function tambah(Request $request)
    // {
    //     $message = [
    //         'required' => ':attribute harus diisi gaess',
    //         'min' => ':password minimal :min karakter', 
    //     ];

    //     //validasi data
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required|email|unique:user',
    //         'password' => 'required|min:6',
    //         'id_role' => 'required',
    //     ], $message);

    //     //insert data
    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'id_role' => $request->id_role,
    //     ]);
        
       
    //     Session::flash('registerSuccess', 'User Berhasil Ditambahkan, Silahkan Login');
    //     return redirect('login');
    // }
}
