<div class="modal fade" id="modal_filter" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Filter Donatur</h3>
            </div>
            <div class="modal-body filters">
                <form action="#" id="filters" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kawasan</label>
                            <div class="col-md-9">
                            <input name="kawasan" id="kawasan" class="form-control" type="text" style="width:300px">
                            <span class="help-block"></span>
                            </div>
                        </div> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Filter Status</label>
                            <div class="col-md-8">
                               <select name="status" id="status" class="form-control" style="width:90px">
                               <option value="">Semua</option>
                               <option value="A">Aktif</option>
                               <option value="P">Pasif</option>
                              </select>
                            </div>
                            </tr>
                        </div>
                        <div class="form-group">
                        <div class="modal-footer">
                         <label class="control-label col-md-3">No donatur</label>
                                <div class="col-md-8">
                                      <input name="noid" id="noid" class="form-control" style="width:300px">
                                </div>
                             </div>
                             </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Lengkap</label>
                            <div class="col-md-9">
                            <input name="nama" placeholder="Masukkan Nominal" class="form-control" type="text" style="width:300px">
                            <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-9">
                            <input name="alamat" placeholder="Masukkan Keterangan" class="form-control" type="text" style="width:300px">
                            <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Filter_program</label>
                            <div class="col-md-9">
                              <select name="prog" id="prog" class="form-control" style="width:300px">
                              <option value=""></option>
                                    <?php foreach($qjenis as $z) {?>
                                    <option value="<?=$z->PROG?>"><?=$z->NM_PROGRAM?></option>
                                    <?php }?>
                                  </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Filter_Petugas</label>
                            <div class="col-md-9">
                              <select name="kodejgt" id="kodejgt" class="form-control" style="width:300px">
                              <option value=""></option>
                                    <?php foreach($qjungut as $z) {?>
                                    <option value="<?=$z->kodej?>"><?=$z->kodej?></option>
                                    <?php }?>
                                  </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>  
            <div class="modal-footer">
                <button type="button" method="submit" name="click" value="filter" id="filter" onclick="kirim_form()" class="btn btn-primary">Abort</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->