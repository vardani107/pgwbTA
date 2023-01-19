<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ekstrakulikuler;

class loginController extends Controller
{
    public function index(){
        $daftar_ekskul = ekstrakulikuler::all();
        return view ('login', compact('daftar_ekskul'));
    }

    public function authenticate(Request $request){
        $data=$request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
 
            if(Auth::User()->role == 'admin'){
                return redirect()->intended('admin');
            }else{
                return redirect()->intended('siswa');
            }
            return redirect()->intended('login');
        }
        
 
        return back()->with('loginError','Login Anda Gagal');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
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
