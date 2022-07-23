<?php 

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\User;
use Auth;
class BeritaController extends Controller {

	function index(){
		$data['list_berita'] = Berita::latest()->paginate(6);
	return view ('admin.Berita.index', $data);
	}

	function CariBerita(){
		$judul = request('judul');
		$data['list_berita'] = Berita::where('judul', 'like', "%$judul%")->paginate(6);
		$data['judul'] = $judul;
		return view('admin.Berita.index', $data);
	}

	function create(){
		return view ('admin.Berita.create');
	}

	function store(){
		$berita = new Berita;
		$berita-> user_id = Auth::user()->id;
		$berita-> judul = request('judul');
		$berita-> isi = request('isi');
		$berita-> HandleUploadFoto();
		$berita-> save();

		return redirect('admin/berita')->with('success', 'Berita P4MP Berhasil Ditambah');
	}

	function show(Berita $berita){
		$data['berita'] = $berita;
		return view('admin.Berita.show', $data);
	}

	function edit(Berita $berita){
		$data['berita'] = $berita;
		return view ('admin.Berita.edit', $data);
	}

	function update(Berita $berita){
		$berita-> judul = request('judul');
		$berita-> isi = request('isi');
		$berita-> HandleUploadFoto();
		$berita-> update();

		return redirect('admin/berita')->with('success', 'Berita P4MP Berhasil Diedit');
	}
	function destroy(Berita $berita){
		$berita->delete();
		$berita->HandleDeleteFoto();
		return redirect('admin/berita')->with('danger', 'Berita P4MP Berhasil Dihapus');
	}
}