                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambahkan File/Dokumen SIAMI</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/siami/simpan')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                              <label for="status">Status</label>
                              <select name="level" class="form-control">
                              <option>--- Level ---</option>
                                  <option value="Informasi">Informasi SIAMI</option>
                                  <option value="Pedoman">Pedoman SIAMI</option>
                                  <option value="Pelaksanaan">Pelaksanaan SIAMI</option>
                                  <option value="Laporan">Laporan SIAMI</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="file">Masukan File / Dokumen <span style="color: red">*Format PDF</span></label>
                              <input type="file" id="file" name="file" required="required">
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>