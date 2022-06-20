<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(10);
        return view('user', ['user' => $user]);
    }

    public function formuliruser()
    {
        return view('formuliruser');
    }

    public function simpanuser(Request $request)
    {
        $user = User::create([
            'nik' => $request->nik,
            'namauser' => $request->namauser,
            'nomor' => $request->nomor,
            'email' =>$request->email,
            'password' => md5($request->password)
        ]);
        return redirect('/user')->with('alertsimpan', 'Berhasil Disimpan');
    }


    public function edituser($id)
    {
        $user = User::find($id);
        return view('edituser', ['user' => $user]);
    }

    public function updateuser($id, Request $request)
    {
        $user = User::find($id);
        $user->nik = $request->nik;
        $user->namauser = $request->namauser;
        $user->nomor = $request->nomor;
        $user->email = $request->email;
        $user->save();
        return redirect('/user')->with('alertupdate', 'Berhasil Diubah');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        $user = User::where('email', $request->email)
                  ->where('password',md5($request->password))
                  ->first();
        if ($user){
            Auth::login($user);
            return redirect('/mahasiswa');
        }
        else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('alertlogout', 'Berhasil Logout');
    }

    public function hapususer($id)
    {
        $user =User::where('id',$id)->first();
    
        if ($id != null) {
            $user->delete();
            return redirect('/user')->with('alerthapus', 'Berhasil Dihapus');
        }
        return redirect('/user')->with(['alerthapus'=> 'Tidak dapat dihapus!!']);
    } 

    public function pencarianuser(Request $request)
    {
        $cari = $request->cari;
        $user = User::where('namauser', 'like', '%'.$cari.'%')->orWhere('nik','like', '%'.$cari.'%')->paginate();
        return view('user', ['user' => $user]);
    }

}
