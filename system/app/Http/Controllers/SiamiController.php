<?php 

namespace App\Http\Controllers;
use App\Models\Siami;
use App\Models\User;
use Auth;
class SiamiController extends Controller {

	function index(){

		$data['list_siami'] = Siami::all();
		return view ('admin.Siami.index', $data);
	}

	function create(){
		return view ('admin.Siami.create');
	}

	function store(){
		$siami = new Siami;
		$siami-> user_id = Auth::user()->id;
		$siami-> nama = request('nama');
		$siami-> level = request('level');
		$siami-> HandleUploadFile();
		$siami-> save();

		return redirect('admin/siami')->with('success', 'File / Dokumen Berhasil Ditambah');
	}

	function show(Siami $siami){
		$data['siami'] = $siami;
		return view('admin.Siami.show', $data);
	}

	function edit(Siami $siami){
		$data['siami'] = $siami;
		return view ('admin.Siami.edit', $data);
	}

	function update(Siami $siami){
		$siami-> user_id = Auth::user()->id;
		$siami-> nama = request('nama');
		$siami-> level = request('level');
		$siami-> HandleUploadFile();
		$siami-> save();

		return redirect('admin/siami')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Siami $siami){
		$siami->delete();
		$siami->HandleDeleteFile();
		return redirect('admin/siami')->with('danger', 'Data Berhasil Dihapus');
	}
}