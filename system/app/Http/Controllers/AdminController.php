<?php 

namespace App\Http\Controllers;
use App\Models\KlinikSPMI;
use App\Models\Akreditasi;
use App\Models\Kegiatan;
use App\Models\Unduhan;
use App\Models\User;
use App\Models\Siami;
use App\Models\Berita;
use Auth;

class AdminController extends Controller {

	function dashboard(){

		$data['klinik_spmi'] = KlinikSPMI::all();
		$data['akreditasi'] = Akreditasi::all();
		$data['kegiatan'] = Kegiatan::all();
		$data['unduhan'] = Unduhan::all();
		$data['siami'] = Siami::all();
		$data['berita'] = Berita::all();
		$data['user'] = User::where('id', Auth::user()->id)->first();
		
		return view ('admin.dashboard', $data);
	}

}