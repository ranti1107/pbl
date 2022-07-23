<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\KlinikSPMIController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\UnduhanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiamiController;
use App\Http\Controllers\UserClientController;
use App\Http\Controllers\TimController;	
use App\Http\Controllers\SettingController;	
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\BeritaController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('kalender', [CalenderController::class, 'index']);
Route::get('kalender-user', [CalenderController::class, 'indexUser']);
Route::post('kalender/action', [CalenderController::class, 'action']);

Route::get('P4MP/login', [AuthController::class, 'Login'])->middleware('guest');
Route::post('P4MP/login', [AuthController::class, 'ProsesLogin']);
Route::get('P4MP/logout', [AuthController::class, 'Logout']);
Route::get('P4MP/daftar', [AuthController::class, 'Daftar']);
Route::post('P4MP/daftar', [AuthController::class, 'ProsesDaftar']);

//Admin
Route::group(['middleware'=>['CheckLogin:0']], function(){
	Route::prefix('admin')->group(function(){
		Route::get('dashboard', [AdminController::class, 'dashboard']);

		Route::get('klinik-spmi', [KlinikSPMIController::class, 'index']);
		Route::post('klinik-spmi/simpan', [KlinikSPMIController::class, 'store']);
		Route::get('klinik-spmi/{klinik_spmi}/edit', [KlinikSPMIController::class, 'edit']);
		Route::put('klinik-spmi/simpan/{klinik_spmi}', [KlinikSPMIController::class, 'update']);
		Route::get('klinik-spmi/{klinik_spmi}', [KlinikSPMIController::class, 'show']);
		Route::delete('klinik-spmi/{klinik_spmi}', [KlinikSPMIController::class, 'destroy']);

		Route::get('tim', [TimController::class, 'index']);
		Route::post('tim/simpan', [TimController::class, 'store']);
		Route::get('tim/{tim}/edit', [TimController::class, 'edit']);
		Route::put('tim/simpan/{tim}', [TimController::class, 'update']);
		Route::get('tim/{tim}', [TimController::class, 'show']);
		Route::delete('tim/{tim}', [TimController::class, 'destroy']);

		Route::get('kegiatan', [kegiatanController::class, 'index']);
		Route::post('kegiatan/simpan', [kegiatanController::class, 'store']);
		Route::get('kegiatan/{kegiatan}/edit', [kegiatanController::class, 'edit']);
		Route::put('kegiatan/simpan/{kegiatan}', [kegiatanController::class, 'update']);
		Route::get('kegiatan/{kegiatan}', [kegiatanController::class, 'show']);
		Route::delete('kegiatan/{kegiatan}', [kegiatanController::class, 'destroy']);

		Route::get('berita', [BeritaController::class, 'index']);
		Route::post('berita', [BeritaController::class, 'CariBerita']);
		Route::post('berita/simpan', [BeritaController::class, 'store']);
		Route::get('berita/{berita}/edit', [kegiatanController::class, 'edit']);
		Route::put('berita/simpan/{berita}', [BeritaController::class, 'update']);
		Route::get('berita/{berita}', [BeritaController::class, 'show']);
		Route::delete('berita/{berita}', [BeritaController::class, 'destroy']);

		Route::get('siami', [SiamiController::class, 'index']);
		Route::post('siami/simpan', [SiamiController::class, 'store']);
		Route::get('siami/{siami}/edit', [SiamiController::class, 'edit']);
		Route::put('siami/simpan/{siami}', [SiamiController::class, 'update']);
		Route::get('siami/{siami}', [SiamiController::class, 'show']);
		Route::delete('siami/{siami}', [SiamiController::class, 'destroy']);

		Route::get('Akreditasi', [AkreditasiController::class, 'index']);
		Route::post('Akreditasi/simpan', [AkreditasiController::class, 'store']);
		Route::get('Akreditasi/{akreditasi}/edit', [AkreditasiController::class, 'edit']);
		Route::put('Akreditasi/simpan/{akreditasi}', [AkreditasiController::class, 'update']);
		Route::get('Akreditasi/{akreditasi}', [AkreditasiController::class, 'show']);
		Route::delete('Akreditasi/{akreditasi}', [AkreditasiController::class, 'destroy']);

		Route::get('Unduhan', [UnduhanController::class, 'index']);
		Route::post('Unduhan/simpan', [UnduhanController::class, 'store']);
		Route::get('Unduhan/{unduhan}/edit', [UnduhanController::class, 'edit']);
		Route::put('Unduhan/simpan/{unduhan}', [UnduhanController::class, 'update']);
		Route::get('Unduhan/{unduhan}', [UnduhanController::class, 'show']);
		Route::delete('Unduhan/{unduhan}', [UnduhanController::class, 'destroy']);

		Route::get('profil', [ProfilController::class, 'index']);
		Route::post('profil/simpan', [ProfilController::class, 'store']);
		Route::get('profil/{profil}/edit', [ProfilController::class, 'edit']);
		Route::put('profil/simpan/{profil}', [ProfilController::class, 'update']);
		Route::get('profil/{profil}', [ProfilController::class, 'show']);
		Route::delete('profil/{profil}', [ProfilController::class, 'destroy']);

		Route::get('pembelajaran', [PembelajaranController::class, 'index']);
		Route::post('pembelajaran/simpan', [PembelajaranController::class, 'store']);
		Route::get('pembelajaran/{pembelajaran}/edit', [PembelajaranController::class, 'edit']);
		Route::put('pembelajaran/simpan/{pembelajaran}', [PembelajaranController::class, 'update']);
		Route::get('pembelajaran/{pembelajaran}', [PembelajaranController::class, 'show']);
		Route::delete('pembelajaran/{pembelajaran}', [PembelajaranController::class, 'destroy']);

		Route::get('User', [UserController::class, 'index']);
		Route::post('User/simpan', [UserController::class, 'store']);
		Route::put('User/simpan/{user}', [UserController::class, 'update']);
		Route::get('User/{user}', [UserController::class, 'show']);
		Route::delete('User/{user}', [UserController::class, 'destroy']);


		Route::get('setting', [SettingController::class, 'index']);
		Route::put('setting', [SettingController::class, 'store']);
	});
});

//Client
	Route::get('beranda', [ClientController::class, 'Beranda']);

	Route::get('profil/visi-misi', [ClientController::class, 'VisiMisi']);
	Route::get('profil/tim-p4mp', [ClientController::class, 'TimP4MP']);
	Route::get('profil/latar-belakang', [ClientController::class, 'LatarBelakang']);
	Route::get('profil/struktur-organisasi', [ClientController::class, 'StrukturOrganisasi']);

	Route::get('buku-SPMI/kebijakan-SPMI', [ClientController::class, 'Kebijakan']);
	Route::post('buku-SPMI/kebijakan-SPMI', [ClientController::class, 'CariKebijakan']);
	Route::get('buku-SPMI/manual-PPEPP', [ClientController::class, 'ManualStandar']);
	Route::post('buku-SPMI/manual-PPEPP', [ClientController::class, 'CariManualStandar']);
	Route::get('buku-SPMI/standar-pendidikan', [ClientController::class, 'StandarPendidikan']);
	Route::post('buku-SPMI/standar-pendidikan', [ClientController::class, 'CariPendidikan']);
	Route::get('buku-SPMI/standar-penelitian', [ClientController::class, 'StandarPenelitian']);
	Route::post('buku-SPMI/standar-penelitian', [ClientController::class, 'CariPenelitian']);
	Route::get('buku-SPMI/standar-PKM', [ClientController::class, 'StandarPKM']);
	Route::post('buku-SPMI/standar-PKM', [ClientController::class, 'CariPKM']);
	Route::get('buku-SPMI/SN-Dikti', [ClientController::class, 'SNDikti']);
	Route::post('buku-SPMI/SN-Dikti', [ClientController::class, 'CariSN']);
	Route::get('buku-SPMI/SOP', [ClientController::class, 'SOP']);
	Route::post('buku-SPMI/SOP', [ClientController::class, 'CariSOP']);

	Route::get('SIAMI/Informasi-SIAMI', [ClientController::class, 'InformasiSIAMI']);
	Route::post('SIAMI/Informasi-SIAMI', [ClientController::class, 'CariInformasiSIAMI']);
	Route::get('SIAMI/Pedoman-AMI', [ClientController::class, 'PedomanAMI']);
	Route::post('SIAMI/Pedoman-SIAMI', [ClientController::class, 'CariPedomanSIAMI']);
	Route::get('SIAMI/Pelaksanaan-SIAMI', [ClientController::class, 'PelaksanaanSIAMI']);
	Route::post('SIAMI/Pelaksanaan-SIAMI', [ClientController::class, 'CariPelaksanaanSIAMI']);
	Route::get('SIAMI/Laporan-SIAMI', [ClientController::class, 'LaporanSIAMI']);
	Route::post('SIAMI/Laporan-SIAMI', [ClientController::class, 'CariLaporanSIAMI']);

	Route::get('Akreditasi/Akreditasi-Perguruan-Tinggi', [ClientController::class, 'AkreditasiKampus']);
	Route::get('Akreditasi/Akreditasi-Jurusan', [ClientController::class, 'AkreditasiJurusan']);
	Route::post('Akreditasi/Akreditasi-Jurusan', [ClientController::class, 'CariJurusan']);

	Route::get('Kegiatan', [ClientController::class, 'Kegiatan']);
	Route::post('Kegiatan', [ClientController::class, 'CariKegiatan']);

	Route::get('Berita', [ClientController::class, 'Berita']);
	Route::post('Berita', [ClientController::class, 'CariBerita']);
	Route::get('Berita/{berita}', [ClientController::class, 'DetailBerita']);

	Route::get('dokumen-p4mp', [ClientController::class, 'DokumenP4MP']);

	Route::get('profil/{user}', [ClientController::class, 'Akun']);
	Route::put('profil/{user}', [ClientController::class, 'Edit']);
	Route::post('profil/{user}/ganti-password', [ClientController::class, 'GantiPassword']);





