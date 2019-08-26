<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user = User::All();

        return view('data_akun', compact('user'));
    }

    public function create(Request $request)
    {
        $data = User::insert([
            "name" => $request->name, 
            "email" => $request->email, 
            "password" => bcrypt($request->password), 
            "jabatan" => $request->jabatan, 
        ]);
        if ($data) {
            return back()->with('success','Data Berhasil Ditambahkan !!!');
        } else {
            return back()->with('error','Data Gagal Ditambahkan !!!');
        }
    }

    public function edit(Request $request)
    {
        if ($request->password == "") {
            $data = User::where('id', '=', $request->id)->update([
                "name" => $request->name, 
                "email" => $request->email, 
                "jabatan" => $request->jabatan, 
            ]);
        } else {
            $data = User::where('id', '=', $request->id)->update([
                "name" => $request->name, 
                "email" => $request->email, 
                "password" => bcrypt($request->password), 
                "jabatan" => $request->jabatan, 
            ]);
        }
        if ($data) {
            return back()->with('success','Data Berhasil Diubah !!!');
        } else {
            return back()->with('error','Data Gagal Diubah !!!');
        }
    }

    public function destroy($id)
    {
        $data = User::where('id', '=', $id)->delete();
        if ($data) {
            return back()->with('success','Data Berhasil Dihapus !!!');
        } else {
            return back()->with('error','Data Gagal Dihapus !!!');
        }
    }
}
