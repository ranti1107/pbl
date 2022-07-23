<?php 

namespace App\Http\Controllers;
use App\Models\Unduhan;
use App\Models\User;
use Auth;
class UnduhanController extends Controller {

	function index(){
		$data['list_Unduhan'] = Unduhan::all();
	return view ('admin.Unduhan.index', $data);
	}

	function create(){
		return view ('admin.Unduhan.create');
	}

	function store(){
		$unduhan = new Unduhan;
		$unduhan-> user_id = Auth::user()->id;
		$unduhan-> keterangan = request('keterangan');
		$unduhan-> level = request('level');
		$unduhan-> deskripsi = request('deskripsi');
		$unduhan-> tanggal_masuk = request('tanggal_masuk');
		$unduhan-> HandleUploadFile();
		$unduhan-> save();

		return redirect('admin/Unduhan')->with('success', 'Data Berhasil Ditambah');
	}

	function show(Unduhan $unduhan){
		$data['unduhan'] = $unduhan;
		return view('admin.Unduhan.show', $data);
	}

	function edit(Unduhan $unduhan){
		$data['unduhan'] = $unduhan;
		return view ('admin.Unduhan.edit', $data);
	}

	function update(Unduhan $unduhan){
		$unduhan-> user_id = Auth::user()->id;
		$unduhan-> keterangan = request('keterangan');
		$unduhan-> level = request('level');
		$unduhan-> deskripsi = request('deskripsi');
		$unduhan-> tanggal_masuk = request('tanggal_masuk');
		$unduhan-> HandleUploadFile();
		$unduhan-> save();

		return redirect('admin/Unduhan')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Unduhan $unduhan){
		$unduhan->delete();
		$unduhan->HandleDeleteFile();
		return redirect('admin/Unduhan')->with('danger', 'Data Berhasil Dihapus');
	}
}