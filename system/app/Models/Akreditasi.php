<?php 

namespace App\Models;
use App\Models\User;
use Illuminate\Support\Str;

class Akreditasi extends Model{
	protected $table = 'akreditasi';
	protected $guarded = ['id'];

	function user(){
		return $this->belongsTo(User::class, 'user_id');
	}

	function handleUploadFile(){

		if(request()->hasFile('file')){
			$file = request()->file('file');
			$destination = "file";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$file->extension();
			$url = $file->storeAs($destination, $filename);
			$this->file = "app/".$url;
			$this->save;
		}
	}
	
	function handleDeleteFile(){
		$file = $this->file;
		return true;
	}
}
