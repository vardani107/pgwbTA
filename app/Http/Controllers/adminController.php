<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kelas;
use App\Models\tabelmaster;
use App\Models\ekstrakulikuler;
use App\Models\update;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $daftar_siswa = tabelmaster::with('kelas')->get();  
        $pmr = tabelmaster::where('ekstrakulikuler_id',1)->get();
        $daftar_kelas = kelas::all();
        $data = tabelmaster::all();
    //     $daftar_kelas = kelas::with('daftar')->get();
    //    return $daftar_siswa;
        $daftar_ekskul = ekstrakulikuler::all();
        return view('admin', compact('daftar_siswa','daftar_kelas','daftar_ekskul','data','pmr'));
    }

    public function preview()
    {
        $data_update = update::all();
        return view('welcomeadmin', compact('data_update'));
    }

    // public function futsal()
    // {
    //     $daftar_siswa = tabelmaster::select()->where('ekstrakulikuler_id', '2')->get();
    //     $daftar_ekskul = ekstrakulikuler::all();
    //     $daftar_kelas = kelas::all();
    //     // $dance = tabelmaster::where('ekstrakulikuler_id','1');
    //     return view('adminfutsal', compact('daftar_ekskul', 'daftar_kelas', 'daftar_siswa'));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alip.editdrumband');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // $daftar_siswa = tabelmaster::find($id);

        return view('/editview');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function hapus($id)
    {
        $daftar_siswa = tabelmaster::find($id)->delete();
        // Session::flash('success', 'data berhasil dihapus !!!');
        return redirect('/adminalip');
    }
}
