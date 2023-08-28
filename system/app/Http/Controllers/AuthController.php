<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use App\Models\user;

class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function loginProcess(){
            if (Auth::attempt(['username' => request('username'), 'password' => request('password'),'level' => '1'])) {
                return redirect('admin/dashboard')->with('welcome', 'informasi login');
            }elseif(Auth::attempt(['username' => request('username'), 'password' => request('password'),'level' => '2'])){
                return redirect('layanan')->with('welcome', 'informasi login');
            }else{
                return back()->with('salah', 'Login gagal. Silahkan cek username dan password anda!');
            }

    }
    function User(){
        $data['list_user'] = user::all();
        return view('admin.user.index',$data);
    }

    function register(){
        return view('auth.register');
    }
    function create(){
     $user = new user;
     $user->nama_petugas = request('nama');
     $user->instansi = request('instansi');
     $user->level = request('level');
     $user->username = request('username');
     $user->password = bcrypt(request('password'));
     $user->save();
     return back()->with('create','User Berhasil Diatambah');
    }
    function userEdit($id){
     $user = user::find($id);
     if(!Hash::check(request('password_lama'), $user->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }else{
             $user->nama_petugas = request('nama');
             $user->instansi = request('instansi');
             $user->level = request('level');
             $user->username = request('username');
             $user->password = bcrypt(request('password'));
             $user->save();
             return back()->with('edit','User Berhasil Diubah');
        }

    }
    function hapusUser($id){
        user::destroy($id);
        return back()->with('hapus','data berhasil dihapus');
    }
    function logout(){
        Auth::logout();
        return redirect('/')->with('success', 'Anda berhasil logout');
    }
    //
}
