<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::query()
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function pencarian(Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orWhere('nim','like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function formulirmahasiswa()
    {
        return view('formulirmahasiswa');
    }

    public function simpanmahasiswa(Request $request)
    {
        $bimin = implode(",", $request -> bimin);
        Mahasiswa::create([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'jurusan' => $request -> jurusan,
            'bimin' => $bimin
        ]);
        return redirect('/mahasiswa')->with('alertsimpan', 'Berhasil Disimpan');
    }

    public function editmahasiswa($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function updatemahasiswa($id, Request $request)
    {
        $bimin = implode(',',$request->bimin);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bimin = $bimin;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('alertupdate', 'Berhasil Diubah');
    }

    public function hapusmahasiswa($nim)
    {
        $mahasiswa =Mahasiswa::where('nim',$nim)->first();
    
        if ($nim != null) {
            $mahasiswa->delete();
            return redirect('/mahasiswa')->with('alerthapus', 'Berhasil Dihapus');
        }
        return redirect('/mahasiswa')->with(['alerthapus'=> 'Tidak dapat dihapus!!']);
    } 



}
