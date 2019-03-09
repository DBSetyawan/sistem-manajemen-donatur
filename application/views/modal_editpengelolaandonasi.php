<!--Bootstrap modal -->
<div id="modalpengelolaandonasi" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-titles">Form Transaksi Donasi</h3>
            </div>
            <div class="modal-body pgls">
                <form action="#" id="pgls" class="form-horizontal" method="post">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                     </div>
                <button type="button" method="submit" id="updatepdon" onclick="save_pdonss()" class="btn btn-primary">Ubah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <br>
            </br>   
              <!-- Start Tab -->
              <ul class="nav nav-tabs">
              
            </ul>
            <div class="tab-content">
              <div id="tabss1" class="tab-pane fade in active">
            
            <input type="hidden" value="" name="id"/>
            <div hidden="idacara1" class="form-group">
    <br>   
    <br />   
        <label hidden="idacara1" class="col-sm-2 control-label">
          ID ACARA
          </label>
          <input hidden="idacara1" readonly name="idacara1" value="<?=$idpdon?>" class="form-control input-sm" type="text" style="width:550px">
        </div>
         <br>   
    <br />   
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama Acara
          </label>
          <select name="acara1" id="acara1" class="form-control input-sm" style="width:550px" style="width:550px">
            <?php foreach($qjenis as $z) {?>
            <option value="<?=$z->PROG?>"><?=$z->NM_PROGRAM?></option>
            <?php }?>
          </select>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Tanggal Acara
          </label>
          <input name="tanggal_acara1" id="tanggal_acara1" placeholder="Masukkan tanggal acara (yyyy-mm-dd)" class="form-control input-sm datepicker" type="text" style="width:550px">
        </div>
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Dana Acara
          </label>
          <input name="dana_acara1" id="dana_acara1" placeholder="Masukkan Dana Acara" class="form-control input-sm" maxlength="15" type="text" onkeyup="document.getElementById('formatsz').innerHTML = formatCurrency(this.value);" style="width:550px" required>
          <br>
         <label class="col-sm-2 control-label"></label><b><span id="formatsz"></span></b>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Dana Disetujui
          </label>
          <input name="dana_persetujuan1" id="dana_persetujuan1" placeholder="Masukkan Dana approval" class="form-control input-sm" maxlength="15" type="text" onkeyup="document.getElementById('formatss1').innerHTML = formatCurrency(this.value);" style="width:550px" required>
          <br>
         <label class="col-sm-2 control-label"></label><b><span id="formatss1"></span></b>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Pihak Pengajuan
          </label>
          <input readonly="true" name="pihak_pengajuan1" id="pihak_pengajuan1" placeholder="Masukkan Kode Kelompok" class="form-control input-sm input-sm" type="text" style="width:550px">
        </div>
        <br>
        <br />
             </div>
            </div>
            <!-- End Tab -->   
          </form>     
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- End Bootstrap modal-->
