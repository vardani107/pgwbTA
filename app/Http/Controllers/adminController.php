<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kelas;
use App\Models\tabelmaster;
use App\Models\ekstrakulikuler;
use App\Models\update;
use Illuminate\Support\Facades\Session;
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
    //    return $pmr;
        $daftar_ekskul = ekstrakulikuler::all();
        $update = update::with('ekskul')->get(); 
        // return $daftar_ekskul;
        // $update = update::all();
        return view('admin', compact('daftar_siswa','daftar_kelas','daftar_ekskul','data','pmr','update'));
    }

    public function preview()
    {
        $update = update::all();
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
        $daftar_ekskul = ekstrakulikuler::all();
        $update = update::all();
        return view('tambahkonten', compact('update', 'daftar_ekskul'));
    }

    public function tambah_deskripsi()
    {
        $update = update::all();
        return view('tambahkonten', compact('update'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        
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
        $update = update::find($id);
        $daftar_ekskul = ekstrakulikuler::all();
        return view('/editview',compact('update', 'daftar_ekskul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // $message = [
        //     'required' => ':attribute harus diisi ',
        //     'min' => ':attribute minimal :min karakter ya ',
        //     'max' => 'attribute makasimal :max karakter ',
        //     'numeric' => ':attribute harus diisi angka ',
        //     'mimes' => 'file :attribute harus bertipe JPG, JPEG, PNG, BMP'
        // ];

        // $this->validate($request,[
        //     'judul'=> 'required|min:3|max:30',
        //     'deskripsi'=> 'required|numeric',
        //     'jam'=> 'required',
        //     'hari'=> 'required',
        //     'foto'=> 'required|mimes:jpg,bmp,png,jpeg',
            
        // ], $message );
        

        //ambil parameter
        $file = $request->file('foto');
        
        //rename
        $nama_file = $file->getClientOriginalName();
        
        //proses upload
        $tujuan_upload = './images';
        $file->move($tujuan_upload, $nama_file);

        update::create([
            'ekstrakulikuler_id'=> $request-> ekstrakulikuler_id,
            'deskripsi'=> $request-> deskripsi,
            'hari'=> $request-> hari,
            'jam'=> $request-> jam,
            'foto'=> $nama_file,
           
        ]); 

        // Session::flash('success', 'data berhasil diUpdate !!!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function update(Request $request, $id)
    {
        
        $message = [
            'required' => ':attribute harus diisi ',
            'min' => ':attribute minimal :min karakter',
            'max' => 'attribute makasimal :max karakter ',
            'numeric' => ':attribute harus diisi angka ',
            'mimes' => 'file :attribute harus bertipe JPG, JPEG, BMP, PNG'
        ];

        $this->validate($request, [
            'judul_up' => 'required|min:3|max:30',
            'deskripsi_up' => 'required|numeric',
            'hari_up' => 'required',
            'jam_up' => 'required',
            'foto_up'=> 'mimes:jpg,bmp,png,jpeg',
        ], $message);

        update::create([
            
        ]);

        // $foto_baru = $request->file('image')->getClientOriginalName();
        // $path = $request->file('image')->store('public/images');


        //     $request->judul = $request->judul_up;
        //     $request->deskripsi = $request->deskripsi_up;
        //     $request->hari = $request->hari_up;
        //     $request->jam = $request->jam_up;
        //     // $update->foto = $nama_file;
        //     $save->foto = $foto_baru;
        //     $save->path = $path;
        //     $update->foto = 
        //     $update->save();
        //     dd($update);
        //     return redirect('admin');
            

        
    }

    /**
     * Display the specified resource.
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

    public function hapus_pmr($id)
    {
        $daftar_siswa = update::find($id)->delete();
        // Session::flash('success', 'data berhasil dihapus !!!');
        return redirect('/admin');
    }
}
