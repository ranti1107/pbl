<?php 

namespace App\Http\Controllers;
use App\Models\Tim;
use App\Models\User;
use Auth;
class TimController extends Controller {

	function index(){

		$data['list_tim'] = Tim::all();
		return view ('admin.Tim.index', $data);
	}

	function create(){
		return view ('admin.Tim.create');
	}

	function store(){
		$tim = new Tim;
		$tim-> user_id = Auth::user()->id;
		$tim-> nama = request('nama');
		$tim-> nip = request('nip');
		$tim-> jabatan = request('jabatan');
		$tim-> jenis_kelamin = request('jenis_kelamin');
		$tim-> alamat = request('alamat');
		$tim-> instagram = request('instagram');
		$tim-> HandleUploadFoto();
		$tim-> save();

		return redirect('admin/tim')->with('success', 'Data Tim P4MP POLITAP Berhasil Ditambahkan');
	}

	function show(Tim $tim){
		$data['tim'] = $tim;
		return view('admin.Tim.show', $data);
	}

	function edit(Tim $tim){
		$data['tim'] = $tim;
		return view ('admin.Tim.edit', $data);
	}

	function update(Tim $tim){
		$tim-> user_id = Auth::user()->id;
		$tim-> nama = request('nama');
		$tim-> nip = request('nip');
		$tim-> jabatan = request('jabatan');
		$tim-> jenis_kelamin = request('jenis_kelamin');
		$tim-> alamat = request('alamat');
		$tim-> instagram = request('instagram');
		$tim-> HandleUploadFoto();
		$tim-> save();

		return redirect('admin/tim')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Tim $tim){
		$tim->delete();
		$tim->HandleDeleteFile();
		return redirect('admin/tim')->with('danger', 'Data Berhasil Dihapus');
	}
}