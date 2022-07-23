<?php 

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {

	function index(){
		$data['list_user'] = User::where('level', 0)->get();
	return view ('admin.User.index', $data);
	}


	function store(Request $request){
		$request->validate([
			'username' => 'unique:user',
		]);

		$user = new User;
		$user->nama = request('nama');
		$user->level = 0;
		$user->username= request('username');
		$user->email= request('email');
		$user->password= bcrypt(request('password'));
		$user-> save();

		return redirect('admin/User')->with('success', 'Data Berhasil Ditambah');
	}

	function show(User $user){
		$data['user'] = $user;
		return view('admin.User.show', $data);
	}

	function edit(User $user){
		$data['user'] = $user;
		return view ('admin.User.edit', $data);
	}

	function update(User $user){
		$user->nama = request('nama');
		$user->level = 0;
		$user->username= request('username');
		$user->email= request('email');
		$user->update();

		return redirect('admin/User')->with('success', 'Data Berhasil Diedit');
	}

	function destroy(User $user){
		$user->delete();
		$user->HandleDeleteFoto();
		return redirect('admin/User')->with('danger', 'Data Berhasil Dihapus');
	}
}