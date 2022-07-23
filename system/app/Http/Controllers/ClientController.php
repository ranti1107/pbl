<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\KlinikSPMI;
use App\Models\Siami;
use App\Models\User;
use App\Models\Akreditasi;
use App\Models\Kegiatan;
use App\Models\Unduhan;
use App\Models\Tim;
use App\Models\Berita;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller{

	function Beranda(){
		$data['list_berita'] = Berita::latest()->paginate(3);
		return view ('user.beranda', $data);
	}

	function VisiMisi(){
		$data['visi'] = Profil::where('level', 'Visi')->get();
		$data['misi'] = Profil::where('level', 'Misi')->get();
		$data['tupoksi'] = Profil::where('level', 'Tupoksi')->get();
		$data['kegiatan'] = Kegiatan::all();
		return view('user.Profile.visi-misi', $data);
	}

	function TimP4MP(){
		$data['list_tim'] = Tim::all();
		return view('user.Profile.pegawai', $data);
	}

	function LatarBelakang(){
		$data['latar_belakang'] = Profil::where('level', 'LatarBelakang')->get();
		return view('user.Profile.latar-belakang', $data);
	}

	function StrukturOrganisasi(){
		$data['galeri'] = Profil::where('level', 'Galeri')->get();
		return view('user.Profile.struktur-organisasi', $data);
	}

	function Kebijakan(){
		$data['kebijakans'] = KlinikSPMI::where('level', 'Kebijakan')->get();
		return view('user.BukuSPMI.kebijakan', $data);
	}

	function CariKebijakan(){
		$nama = request('nama');
		$data['kebijakans'] = KlinikSPMI::where('nama', 'like', "%$nama%")->where('level', 'Kebijakan')->get();
		$data['nama'] = $nama;
		return view('user.BukuSPMI.kebijakan', $data);
	}

	function ManualStandar(){
		$data['manual_standars'] = KlinikSPMI::where('level', 'ManualPPEPP')->get();
		return view('user.BukuSPMI.manual-standar', $data);
	}

	function CariManualStandar(){
		$nama = request('nama');
		$data['manual_standars'] = KlinikSPMI::where('nama', 'like', "%$nama%")->where('level', 'ManualPPEPP')->get();
		$data['nama'] = $nama;
		return view('user.BukuSPMI.manual-standar', $data);
	}

	function StandarPendidikan(){
		$data['standar_pendidikans'] = KlinikSPMI::where('level', 'StandarPendidikan')->get();
		return view('user.BukuSPMI.standar-pendidikan', $data);
	}

	function CariPendidikan(){
		$nama = request('nama');
		$data['standar_pendidikans'] = KlinikSPMI::where('nama', 'like', "%$nama%")->where('level', 'StandarPendidikan')->get();
		$data['nama'] = $nama;
		return view('user.BukuSPMI.standar-pendidikan', $data);
	}

	function StandarPenelitian(){
		$data['standar_penelitians'] = KlinikSPMI::where('level', 'StandarPenelitian')->get();
		return view('user.BukuSPMI.standar-penelitian', $data);
	}

	function CariPenelitian(){
		$nama = request('nama');
		$data['standar_penelitians'] = KlinikSPMI::where('nama', 'like', "%$nama%")->where('level', 'StandarPenelitian')->get();
		$data['nama'] = $nama; 
		return view('user.BukuSPMI.standar-penelitian', $data);
	}

	function StandarPKM(){
		$data['standar_pkms'] = KlinikSPMI::where('level', 'StandarPKM')->get();
		return view('user.BukuSPMI.standar-pkm', $data);
	}

	function CariPKM(){
		$nama = request('nama');
		$data['standar_pkms'] = KlinikSPMI::where('nama', 'like', "%$nama%")->where('level', 'StandarPKM')->get();
		$data['nama'] = $nama;
		return view('user.BukuSPMI.standar-pkm', $data);
	}

	function SNDikti(){
		$data['sn_diktis'] = KlinikSPMI::where('level', 'StandarSN')->get();
		return view('user.BukuSPMI.standar-sn-dikti', $data);
	}

	function CariSN(){
		$nama = request('nama');
		$data['sn_diktis'] = KlinikSPMI::where('nama', 'like', "%$nama%")->where('level', 'StandarSN')->get();
		$data['nama'] = $nama;
		return view('user.BukuSPMI.standar-sn-dikti', $data);
	}

	function SOP(){
		$data['list_sops'] = KlinikSPMI::where('level', 'SOP')->paginate(5);
		return view('user.BukuSPMI.sop', $data);
	}

	function CariSOP(){
		$nama = request('nama');
		$data['list_sops'] = KlinikSPMI::where('nama', 'like', "%$nama%")->where('level', 'SOP')->paginate(5);
		$data['nama'] = $nama;
		return view('user.BukuSPMI.sop', $data);
	}

	function InformasiSIAMI(){
		$data['siami'] = SIAMI::where('level', 'Informasi')->get();
		return view('user.SIAMI.informasi', $data);
	}

	function CariInformasiSIAMI(){
		$nama = request('nama');
		$data['list_siami'] = SIAMI::where('nama', 'like', "%$nama%")->paginate(4);
		$data['nama'] = $nama;
		return view('user.SIAMI.informasi', $data);
	}

	function PedomanAMI(){
		$data['siamis'] = SIAMI::where('level', 'Pedoman')->get();
		return view('user.SIAMI.pedoman', $data);
	}

	function CariPedomanSIAMI(){
		$nama = request('nama');
		$data['list_siami'] = SIAMI::where('nama', 'like', "%$nama%")->paginate(4);
		$data['nama'] = $nama;
		return view('user.SIAMI.pedoman', $data);
	}

	function PelaksanaanSIAMI(){
		$data['siamis'] = SIAMI::where('level', 'Pelaksanaan')->get();
		return view('user.SIAMI.pelaksanaan', $data);
	}

	function CariPelaksanaanSIAMI(){
		$nama = request('nama');
		$data['list_siami'] = SIAMI::where('nama', 'like', "%$nama%")->paginate(4);
		$data['nama'] = $nama;
		return view('user.SIAMI.pelaksanaan', $data);
	}

	function LaporanSIAMI(){
		$data['list_siami'] = SIAMI::where('level', 'Laporan')->paginate(4);
		return view('user.SIAMI.laporan', $data);
	}

	function CariLaporanSIAMI(){
		$nama = request('nama');
		$data['list_siami'] = SIAMI::where('nama', 'like', "%$nama%")->paginate(4);
		$data['nama'] = $nama;
		return view('user.SIAMI.laporan', $data);
	}

	function AkreditasiKampus(){
		$data['akreditasi'] = Akreditasi::where('level', 'Kampus')->get();
		return view('client.Akreditasi.kampus', $data);
	}

	function AkreditasiJurusan(){
		$data['akreditasis'] = Akreditasi::where('level', 'Jurusan')->get();
		return view('user.Akreditasi.jurusan', $data);
	}

	function CariJurusan(){
		$keterangan = request('keterangan');
		$data['akreditasis'] = Akreditasi::where('keterangan', 'like', "%$keterangan%")->where('level', 'Jurusan')->get();
		$data['keterangan'] = $keterangan;
		return view('user.Akreditasi.jurusan', $data);
	}

	function Kegiatan(){
		$data['list_kegiatan'] = Kegiatan::all();
		return view('user.Kegiatan.kegiatan', $data);
	}

	function CariKegiatan(){
		$tahun = request('tahun');
		$data['list_kegiatan'] = Kegiatan::where('tahun', 'like', "%$tahun%")->paginate(5);
		$data['tahun'] = $tahun;
		return view('user.Kegiatan.kegiatan', $data)->with('success', "Kegiatan Tahun {{$tahun}}");
	}

	function Berita(){
		$data['list_berita'] = Berita::latest()->paginate(6);
		return view('user.Kegiatan.berita', $data);
	}

	function CariBerita(){
		$judul = request('judul');
		$data['list_berita'] = Berita::where('judul', 'like', "%$judul%")->paginate(6);
		$data['judul'] = $judul;
		return view('user.Kegiatan.berita', $data);
	}

	function DetailBerita(Berita $berita){
		$data['berita'] = $berita;
		return view('user.Kegiatan.detail-berita', $data);
	}

	function DokumenP4MP(){
		$data['kalenders'] = Unduhan::where('level', 'Kalender')->get();
		$data['monitorings'] = Unduhan::where('level', 'Monitoring')->get();
		$data['dosens'] = Unduhan::where('level', 'Dosen')->get();
		$data['tendiks'] = Unduhan::where('level', 'Tendik')->get();
		$data['statutas'] = Unduhan::where('level', 'Statuta')->get();
		$data['sotks'] = Unduhan::where('level', 'SOTK')->get();
		$data['renstras'] = Unduhan::where('level', 'Renstra')->get();
		$data['peraturans'] = Unduhan::where('level', 'Peraturan')->get();
		$data['pedomans'] = Unduhan::where('level', 'Pedoman')->get();
		return view('user.Dokumen.dokumen-p4mp', $data);
	}

	function Akun(){
		$data['user'] = User::where('id', Auth::user()->id)->first();

		return view('user.Akun.index', $data);
	}

	function Edit(Request $request){

		$user = User::where('id', Auth::user()->id)->first();
    	$user->nama = request('nama');
    	$user->username = request('username');
    	$user->email = request('email');
        $user->handleUploadFoto();

		$user-> update();
    	
        return back()->with('success', 'Edit Profil Berhasil');
	}

	function GantiPassword(Request $request){
		$request->validate([
            'baru' => 'required|min:5|max:255'
        ]);

        $data = request()->all();

        if(request('lama')){
            if(request('lama')){
                $user = Auth::user();
                $check = Hash::check(request('lama'), $user->password);
                if($check){
                    if(request('baru') == request('konfirmasi')){

                        $user->password = bcrypt(request('baru'));
                        $user->save();

                        Auth::logout();
                        return redirect('P4MP/login')->with('warning', 'Masukan Password Baru');

                    }else{
                        return back()->with('danger', 'Konfirmasi Password Tidak Sesuai');
                    }
            }else{
                return back()->with('danger', 'Password Lama Anda Salah');
            }
        }else{
            return back()->with('danger', 'Password Lama Kosong');
            }
        }
	}


}