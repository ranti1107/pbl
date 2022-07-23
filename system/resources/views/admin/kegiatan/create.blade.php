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
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/kegiatan/simpan')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="nama">Tahun</label>
                                  <select class="form-control" name="tahun">
                                    <option>-- Pilih Tahun --</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="foto">Masukan Foto Kegiatan</label>
                              <input type="file" id="foto" name="foto" required="required" accept="image/*">
                            </div>
                            <div class="form-group">
                              <label for="nama">Deskripsi Kegiatan</label><br>
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