<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Support\Str;

class Berita extends Model{
	protected $table = 'berita';

	function user(){
		return $this->belongsTo(User::class, 'user_id');
	}

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