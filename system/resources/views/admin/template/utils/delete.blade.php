<form action="{{$url}}" method="post" class="form-inline" onsubmit="return confirm('Yakin Akan Menghapus Data Ini?')">
											@csrf
											@method("delete")
										<button class="btn btn-danger" style="border-radius: 5px"><i class="typcn typcn-trash"></i></button>
										</form>