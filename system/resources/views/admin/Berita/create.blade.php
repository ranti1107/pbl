                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambahkan File / Dokumen</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/berita/simpan')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="nama">Judul Berita</label>
                              <input type="text" class="form-control" id="nama" name="judul" placeholder="Masukkan Judul" required>
                            </div>

                            <div class="form-group">
                              <label for="foto">Masukan Foto</label>
                              <input type="file" id="foto" name="foto" required="required" accept="image/*" required>
                            </div>
                            <div class="form-group">
                              <label for="nama">Berita</label><br>
                              <textarea name="isi" style="width: 100%; height: 150px;" required></textarea>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>