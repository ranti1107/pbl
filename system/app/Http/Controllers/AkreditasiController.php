<?php 

namespace App\Http\Controllers;
use App\Models\Akreditasi;
use App\Models\User;
use Auth;
class AkreditasiController extends Controller {

	function index(){

		$data['list_akreditasi'] = Akreditasi::all();
		return view ('admin.Akreditasi.index', $data);
	}

	function create(){
		return view ('admin.Akreditasi.create');
	}

	function store(){
		$akreditasi = new Akreditasi;
		$akreditasi-> user_id = Auth::user()->id;
		$akreditasi-> keterangan = request('keterangan');
		$akreditasi-> HandleUploadFile();
		$akreditasi-> save();

		return redirect('admin/Akreditasi')->with('success', 'File / Dokumen Berhasil Ditambah');
	}

	function show(Akreditasi $akreditasi){
		$data['akreditasi'] = $akreditasi;
		return view('admin.Akreditasi.show', $data);
	}

	function edit(Akreditasi $akreditasi){
		$data['akreditasi'] = $akreditasi;
		return view ('admin.Akreditasi.edit', $data);
	}

	function update(Akreditasi $akreditasi){
		$akreditasi-> user_id = Auth::user()->id;
		$akreditasi-> keterangan = request('keterangan');
		$akreditasi-> HandleUploadFile();
		$akreditasi-> save();

		return redirect('admin/akreditasi')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Akreditasi $akreditasi){
		$akreditasi->delete();
		$akreditasi->HandleDeleteFile();
		return redirect('admin/Akreditasi')->with('danger', 'Data Berhasil Dihapus');
	}
}