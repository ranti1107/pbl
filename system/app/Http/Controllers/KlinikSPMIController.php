<?php 

namespace App\Http\Controllers;
use App\Models\KlinikSPMI;
use App\Models\User;
use Auth;
class KlinikSPMIController extends Controller {

	function index(){

		$data['list_klinik_spmi'] = KlinikSPMI::all();
		return view ('admin.KlinikSPMI.index', $data);
	}

	function create(){
		return view ('admin.KlinikSPMI.create');
	}

	function store(){
		$klinik_spmi = new KlinikSPMI;
		$klinik_spmi-> user_id = Auth::user()->id;
		$klinik_spmi-> nama = request('nama');
		$klinik_spmi-> HandleUploadFile();
		$klinik_spmi-> save();

		return redirect('admin/klinik-spmi')->with('success', 'File / Dokumen Berhasil Ditambah');
	}

	function show(KlinikSPMI $klinik_spmi){
		$data['klinik_spmi'] = $klinik_spmi;
		return view('admin.KlinikSPMI.show', $data);
	}

	function edit(KlinikSPMI $klinik_spmi){
		$data['klinik_spmi'] = $klinik_spmi;
		return view ('admin.KlinikSPMI.edit', $data);
	}

	function update(KlinikSPMI $klinik_spmi){
		$klinik_spmi-> user_id = Auth::user()->id;
		$klinik_spmi-> nama = request('nama');
		$klinik_spmi-> HandleUploadFile();
		$klinik_spmi-> save();

		return redirect('admin/klinik-spmi')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(KlinikSPMI $klinik_spmi){
		$klinik_spmi->delete();
		$klinik_spmi->HandleDeleteFile();
		return redirect('admin/klinik-spmi')->with('danger', 'Data Berhasil Dihapus');
	}
}