<div class="modal fade" id="modal_donasi" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-titlee">Form Donasi</h3>
            </div>
            <div class="modal-body kjhfnn">
                <form action="#" id="kjhfnn" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <input type="hidden" value="" name="datalama" id="datalama"/>
                      <div hidden="iddonaturitem" class="form-group">
                            <label class="control-label col-md-3">ID Donatur</label>
                            <div class="col-md-9">
                            <input readonly name="iddonaturitem" id="iddonaturitem" class="form-control input-sm" type="text" style="width:300px" hidden>
                            <span class="help-block"></span>
                            </div>
                        </div> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="col-md-8">
                               <select name="statuss" id="statuss" class="form-control input-sm" style="width:80px">
                               <option value="A">Aktif</option>
                               <option value="P">Pasif</option>
                              </select>
                            </div>
                            </tr>
                        </div>
                        <div class="form-group">
                         <label class="control-label col-md-3">Program</label>
                            <div class="col-md-8">
                                      <select name="progs" id="progs" class="form-control input-sm" style="width:300px">
                                    <?php foreach($qjenis as $z) {?>
                                    <option value="<?=$z->PROG?>"><?=$z->NM_PROGRAM?></option>
                                    <?php }?>
                                  </select>
                                  </div>
                             </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nominal</label>
                            <div class="col-md-9">
                            <input name="besar" id="besar" placeholder="Masukkan Nominal" class="form-control input-sm" maxlength="15" type="text" onkeyup="document.getElementById('formatsfz').innerHTML = formatCurrency(this.value);" style="width:300px">
                            <br><b><span id="formatsfz"></span></b>
                            <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Keterangan</label>
                            <div class="col-md-9">
                            <input name="keterangans" id="keterangans" placeholder="Masukkan Keterangan" class="form-control input-sm" type="text" style="width:300px">
                            <span class="help-block"></span>
                            </div>
                        </div>
                          <div class="form-group">
                         <label class="control-label col-md-3">Periode</label>
                            <div class="col-md-8">
                                <select name="pde" id="pde" class="form-control input-sm" style="width:300px">
                                  <option value="">-</option>
                                    <?php foreach($qpr as $z) {?>
                                    <option value="<?=$z->PERIODE?>"><?=$z->NM_PERIODE?></option>
                                    <?php }?>
                                  </select>
                                  </div>
                             </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Bayar Lagi</label>
                            <div class="col-md-9">
                            <input name="bl" id="bl" placeholder="Masukkan Bayar Lagi (yyyy-mm-dd)" class="form-control datepicker input-sm" type="text" style="width:300px">
                            <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>  
            <div class="modal-footer">
                <button type="button" id="btnSavee" onclick="save_donasi()" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->