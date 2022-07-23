                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambahkan Dokumen Pendukung</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/profil/simpan')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                              <label for="status">Status</label>
                              <select name="level" class="form-control">
                              <option>--- Level ---</option>
                                  <option value="Visi">Visi</option>
                                  <option value="Misi">Misi</option>
                                  <option value="Tupoksi">Tupoksi</option>
                                  <option value="LatarBelakang">Latar Belakang</option>
                                  <option value="Galeri">Struktur Organisasi</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="deskripsi">Isi</label>
                              <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Isi"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="foto">Masukan File / Dokumen *untuk struktur organisasi</label>
                              <input type="file" id="foto" name="foto">
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>