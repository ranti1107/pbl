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
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/Unduhan/simpan')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="keterangan">Keterangan</label>
                              <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="keterangan">
                            </div>

                            <div class="form-group">
                              <label for="keterangan">Kategori</label>
                              <select name="level" class="form-control">
                                  <option value="" hidden>-- Pilih Kategori --</option>
                                  <option value="Kalender">Kalender Akademik</option>
                                  <option value="Monitoring">Monitoring dan Evaluasi</option>
                                  <option value="Dosen">Pengembangan Dosen</option>
                                  <option value="Tendik">Pengembangan Tendik</option>
                                  <option value="Statuta">Statuta POLITAP</option>
                                  <option value="SOTK">SOTK POLITAP</option>
                                  <option value="Renstra">Renstra POLITAP</option>
                                  <option value="Peraturan">Peraturan-peraturan</option>
                                  <option value="Pedoman">Pedoman</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="keterangan">Tanggal Masuk</label>
                              <input type="date" class="form-control" id="keterangan" name="tanggal_masuk">
                            </div>
                            
                            <div class="form-group">
                              <label for="foto">Masukan File Pendukung <span style="color: red">*Format PDF</span></label>
                              <input type="file" id="foto" name="file" required="required">
                            </div>

                            <div class="form-group">
                              <label for="nama">Deskripsi</label><br>
                              <textarea name="deskripsi" style="width: 100%; height: 150px;"></textarea>
                            </div>

                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>