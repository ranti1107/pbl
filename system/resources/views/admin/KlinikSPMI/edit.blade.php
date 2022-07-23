@foreach($list_klinik_spmi as $klinik_spmi)
                  <div class="modal fade" id="exampleModal{{$klinik_spmi->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit SPMI</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/klinik-spmi/simpan', $klinik_spmi->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama" value="{{$klinik_spmi->nama}}">
                            </div>
                            <div class="form-group">
                              <label for="status">Status</label>
                              <select name="level" class="form-control">
                              <option hidden value="{{$klinik_spmi->level}}">--- Level ---</option>
                                  <option value="Kebijakan">Kebijakan Mutu</option>
                                  <option value="ManualPPEPP">Manual Standar PPEPP</option>
                                  <option value="SOP">Standar Operasional Prosedur</option>
                                  <option value="StandarPendidikan">Standar Pendidikan</option>
                                  <option value="StandarPenelitian">Standar Penelitian</option>
                                  <option value="StandarPKM">Standar PKM</option>
                                  <option value="StandarSN">Standar SN-Dikti</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="file">Masukan File / Dokumen <span style="color: red">*Format PDF</span></label> <br>
                              <input type="file" id="file" name="file">
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
@endforeach