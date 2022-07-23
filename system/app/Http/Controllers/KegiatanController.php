<?php 

namespace App\Http\Controllers;
use App\Models\kegiatan;
use App\Models\User;
use Auth;
class kegiatanController extends Controller {

	function index(){
		$data['list_kegiatan'] = kegiatan::all();
	return view ('admin.kegiatan.index', $data);
	}

	function create(){
		return view ('admin.kegiatan.create');
	}

	function store(){
		$kegiatan = new kegiatan;
		$kegiatan-> user_id = Auth::user()->id;
		$kegiatan-> nama = request('nama');
		$kegiatan-> nama = request('tahun');
		$kegiatan-> deskripsi = request('deskripsi');
		$kegiatan-> HandleUploadFoto();
		$kegiatan-> save();

		return redirect('admin/kegiatan')->with('success', 'Kegiatan Berhasil Ditambah');
	}

	function show(kegiatan $kegiatan){
		$data['kegiatan'] = $kegiatan;
		return view('admin.kegiatan.show', $data);
	}

	function edit(kegiatan $kegiatan){
		$data['kegiatan'] = $kegiatan;
		return view ('admin.kegiatan.edit', $data);
	}

	function update(kegiatan $kegiatan){
		$kegiatan-> nama = request('nama');
		$kegiatan-> user_id = Auth::user()->id;
		$kegiatan-> tahun = request('tahun');
		$kegiatan-> deskripsi = request('deskripsi');
		$kegiatan-> HandleUploadFoto();
		$kegiatan-> save();

		return redirect('admin/kegiatan')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(kegiatan $kegiatan){
		$kegiatan->delete();
		$kegiatan->HandleDeleteFoto();
		return redirect('admin/kegiatan')->with('danger', 'Data Berhasil Dihapus');
	}
}