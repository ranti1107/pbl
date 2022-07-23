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
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/tim/simpan')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                              <div class="col-md-6">
                                <label for="nama">Jabatan</label>
                                <input type="text" class="form-control" id="nama" name="jabatan" placeholder="Jabatan">
                              </div>
                              <div class="col-md-6">
                                <label for="nama">NIP</label>
                                <input type="text" class="form-control" id="nama" name="nip" placeholder="NIP">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-6">
                                <label for="status">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                <option hidden>--- Pilih Jenis Kelamin ---</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label for="nama">Link Instagram</label>
                                <input type="text" class="form-control" id="nama" name="instagram" placeholder="Link Instagram">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="deskripsi">Alamat</label>
                              <textarea class="form-control" id="deskripsi" name="alamat"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="foto">Masukan Foto</label>
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