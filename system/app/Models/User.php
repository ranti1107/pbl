<?php 

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\User;
use Illuminate\Support\Str;

class User extends Authenticatable{
	protected $table = 'user';
	protected $guarded = ['id'];
	use HasFactory, Notifiable;
	
	

	function handleUploadFoto(){

		if(request()->hasFile('foto')){
			$foto = request()->file('foto');
			$destination = "foto";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/".$url;
			$this->save;
		}
	}
	
	function handleDeleteFoto(){
		$foto = $this->foto;
		return true;
	}

}