<div class="container-fluid">
<!--<BODY onLoad="document.frmLogin.txtUser.focus();">-->
<form action="<?php echo base_url(); ?>index.php/laporan_pengajuanacara" name="asd" class="form-horizontal" method="post">
 <input type="submit" value="Cari" id="btnSave" name="asd" target="_blank" href="<?php echo base_url(); ?>/laporan_pengajuanacara" class="btn btn-primary">   
 </input>
 <button type="reset" class="btn btn-primary" onclick="">Batal</button>
  <div class="tab-content">
  <div id="tab1" class="tab-pane fade in active">
    <input type="hidden" value="" name="id"/>
        <div hidden="status" class="form-group">
        <label class="col-sm-2 control-label">
          Status
          </label>
          <select name="sts" id="sts" class="form-control input-sm" style="width:80px">
          <option value="A">Aktif</option>
          <option value="P">Pasif</option>
          </select>
        </div>
        <!-- <div class="form-group">   
        <label class="col-sm-2 control-label">
          Kawasan
          </label>
          <div id="combo">
          <select name="kawasann" id="kawasann" class="form-control js-example-basic-multiple" multiple="multiple" style="width:550px" autofocus/>
            <?php foreach($qkwsn as $z) {?>
            <option value="<?=$z->kwsn?>"><?=$z->kwsn?></option>
            <?php }?>
          </select>
          </div>
        </div> -->
        <br>  
        </br>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Tanggal Awal
          </label>
          <input name="tanggala" placeholder="Masukkan Tanggal Awal" class="form-control input-sm datepicker" style="width:550px" type="date" required>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Tanggal Akhir
          </label>
          <input name="tanggalak" placeholder="Masukkan Tanggal Akhir" class="form-control datepicker input-sm" type="date" style="width:550px" required>
        </div>
       <!--  <div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama Program
          </label>
          <select name="namaprog" id="namaprog" class="form-control input-sm" style="width:550px">
          <OPTION value="">-</OPTION>
            <?php foreach($qprogac as $program) {?>
            <option value="<?=$program->PROG?>"><?=$program->NM_PROGRAM?></option>
            <?php }?>
          </select>
        </div> -->
          <!--<div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama Kawasan
          </label>
          <select readonly name="nm_kawasann" id="nm_kawasann" class="form-control input-sm" style="width:550px">
          </select>
        </div>-->
  </div>

      <!--TAB-->
      </form>
    </div>
  </div>
</div>
<br>
<br/>
<div class="modal-footer">
</div>
</br>