<div id="modalprogram" class="modal fade" data-backdrop="false" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" onclick="closer()" aria-label="Close"><span aria-hidden="true">&times;</span>
        <h4 class="modal-title">Tambah Program</h4>
        </button>
      </div>
        <div class="modal-footer">
    <form action="#" id="fo" class="form-horizontal" method="post">
         <div class="form-group">
            <div class="col-md-3">
            <input type="hidden" readonly name="autoid1" value="<?=$autoid?>" class="form-control" type="text" hidden>
            <span class="help-block"></span>
            </div>
            </div>
        <div class="form-group">
        <label class="control-label col-md-3">Program</label>
        <div class="col-md-8">
                <select name="prog1" id="prog1" class="form-control input-sm" style="width:400px">
                    <?php foreach($qjenis as $z) {?>
                    <option value="<?=$z->PROG?>"><?=$z->NM_PROGRAM?></option>
                    <?php }?>
                  </select>
                </div>
                </div>
             <div class="form-group">
            <label class="control-label col-md-3">Nominal</label>
            <div class="col-md-3">
                <input name="nominal1" id="nominal1" autocomplete="off" placeholder="Masukkan Nominal" maxlength="15" onkeyup="document.getElementById('format1').innerHTML = formatCurrency(this.value);" class="form-control input-sm" class="required" type="text" style="width:400px">
                <br>
                <b><span action="#" id="format1"></span></b><label class="control-label"></label>
                <span class="help-block"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Keterangan</label>
            <div class="col-md-8">
                <input name="keterangan1" autocomplete="off" id="keterangan1" placeholder="Masukkan Keterangan" class="form-control input-sm" type="text" style="width:400px">
                <span class="help-block"></span>
            </div>
        </div>
    <div class="col-md-9">
    <button type="button" id="btn btn-primary" onclick="tambah_()" class="btn btn-primary">Tambah</button>
    <button type="reset" class="btn btn-warning" onclick="">Batal</button>
    </div>
    </div>
    <div class="modal-footer">
     <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" onclick="closer()" aria-label="Close"><span aria-hidden="true">&times;</span>
        <h4 class="modal-title">List Program</h4>
      </button>
      </div>
    </div>
      <table id="tabelprogram" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                <th style="width:205px;">Action</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Program</th>
                <th>Nominal</th>
                <th>Keterangan</th>
                </tr>
            </thead >
            <tbody>
            </tbody>
            <tfoot>
            <tr>
             <th style="width:205px;">Action</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Program</th>
                <th>Nominal</th>
                <th>Keterangan</th>
            </tr>
            </tfoot>
        </table>
        <br>
        <div class="modal-footer">
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</form>