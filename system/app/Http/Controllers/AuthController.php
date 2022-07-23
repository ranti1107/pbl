<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
	function Login(){
		return view('admin.login');
	}

	function ProsesLogin(Request $request){
		request()->validate(['username' => 'required','password' => 'required']);
		
		$kredensil = $request->only('username', 'password');
		if (Auth::attempt($kredensil)){
			$user = Auth::user();
			if($user->level == '0'){
				return redirect()->intended('admin/dashboard')->with('success', 'Selamat Datang Admin');
			}
				return redirect()->intended('beranda')->with('success', 'Selamat Datang Di Website P4MP POLITAP');
		}
		return redirect('P4MP/login')->with('danger', 'Login Gagal, Silahkan Cek Username dan Password Anda');
	}

	// $user = request('username');
	// $user = client::where('username',$username)->first();
	// if($user){
	// 	$guard = 'client';
	// }else {
	// $user = client::where('username',$username)->first();
	// if($user) {
	// 	$guard = 'admin';
	// }else{
	// 	$guard = false;
	// }

	
	// if(!$guard) {
	// 	return back()->with('danger','login gagal,email tidak ditemukan');
	// }else{
	// 	if(Auth::guard($guard)->attempt(['email' => request('email'),'password' => request('password')])){
	// 		return redirect("beranda/$guard")->with('succes','login berhasil');
	// 	}else{
	// 		return back()->with('danger','login gagal, silahkan cek email dan password');
	// 	}

	// }

	function Logout(Request $request){
		$request->session()->flush();
		Auth::logout();
		return redirect('P4MP/login')->with('warning', 'Terima Kasih Telah Berkunjung');
	}

	function Daftar(){
		return view('user.daftar');
	}

	function ProsesDaftar(){
		$user = new User;
		$user->nama = request('nama');
		$user->level = request('level');
		$user->username= request('username');
		$user->email= request('email');
		$user->password= bcrypt(request('password'));
		$user-> save();

		return redirect('P4MP/login')->with('success', 'Pendaftaran Berhasil');
	}
	

}