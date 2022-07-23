<?php 

namespace App\Http\Controllers;
use App\Models\pembelajaran;
use App\Models\User;
use Auth;
class PembelajaranController extends Controller {

	function index(){
		$data['list_pembelajaran'] = pembelajaran::all();
	return view ('admin.pembelajaran.index', $data);
	}

	function create(){
		return view ('admin.pembelajaran.create');
	}

	function store(){
		$pembelajaran= new pembelajaran;
		$pembelejaran-> user_id = Auth::user()->id;
		$pembelajaran-> nama = request('nama');
		$pembelajaran-> tanggal_masuk = request('tanggal_masuk');
		$pembelajaran-> HandleUploadFile();
		$pembelajaran-> save();

		return redirect('admin/pembelajaran')->with('success', 'File Berhasil Ditambah');
	}

	function show(pembelajaran $pembelajaran){
		$data['pembelajaran'] = $pembelajaran;
		return view('admin.pembelajaran.show', $data);
	}

	function edit(pembelajaran $pembelajaran){
		$data['pembelajaran'] = $pembelajaran;
		return view ('admin.pembelajaran.edit', $data);
	}

	function update(pembelajaran $pembelajaran){
		$pembelajaran-> user_id = Auth::user()->id;
		$pembelajaran-> nama = request('nama');
		$pembelajaran-> tanggal_masuk = request('tanggal_masuk');
		$pembelajaran-> HandleUploadFile();
		$pembelajaran-> save();

		return redirect('admin/pembelajaran')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(pembelajaran $pembelajaran){
		$pembelajaran->delete();
		$pembelajaran->HandleDeleteFile();
		return redirect('admin/profil')->with('danger', 'Data Berhasil Dihapus');
	}
}