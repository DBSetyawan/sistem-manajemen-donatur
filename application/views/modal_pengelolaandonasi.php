<div class="container-fluid">
  <button type="submit" method="submit" id="btnidpdon" onclick="save_pdon()" class="btn btn-primary">Simpan</button>
  <br>
  <br>
  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#tab1">Tab 1</a></li>
</ul>
<!--<BODY onLoad="document.frmLogin.txtUser.focus();">-->
<form action="#" id="pdons" name="pdons" class="form-horizontal" method="post">
  <div class="tab-content">
  <div id="tab1" class="tab-pane fade in active">
    <input type="hidden" value="" name="id"/>
    <div hidden="idacara" class="form-group">
    <br>   
    <br />   
        <label hidden="idacara" class="col-sm-2 control-label">
          ID ACARA
        </label>
        <input hidden="idacara" readonly name="idacara" value="<?=$idpdon?>" class="form-control input-sm" type="text" style="width:550px">
        </div>
        <br>   
        <br />
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama Acara
          </label>
          <select name="acara" id="acara" class="form-control input-sm" style="width:550px" style="width:550px" required>
            <?php foreach($qjenis as $z) {?>
            <option value="<?=$z->PROG?>"><?=$z->NM_PROGRAM?></option>
            <?php }?>
          </select>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Tanggal Acara
          </label>
          <input name="tanggal_acara" id="tanggal_acara" placeholder="Masukkan tanggal acara (yyyy-mm-dd)" class="form-control input-sm datepicker" type="text" style="width:550px" required>
        </div>
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Dana Acara
          </label>
          <input name="dana_acara" id="dana_acara" placeholder="Masukkan Dana Acara" class="form-control input-sm" maxlength="15" type="text" onkeyup="document.getElementById('formats').innerHTML = formatCurrency(this.value);" style="width:550px" required>
          <br>
         <label class="col-sm-2 control-label"></label><b><span id="formats"></span></b>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Dana Disetujui
          </label>
          <input name="dana_persetujuan" id="dana_persetujuan" placeholder="Masukkan Dana approval" class="form-control input-sm" maxlength="15" type="text" onkeyup="document.getElementById('formatss').innerHTML = formatCurrency(this.value);" style="width:550px" required>
          <br>
         <label class="col-sm-2 control-label"></label><b><span id="formatss"></span></b>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Diajukan oleh
          </label>
          <input readonly="pihak_pengajuan" name="pihak_pengajuan" value="<?=$pengguna->login;?>" id="pihak_pengajuan" placeholder="Masukkan Nama Pengajuan Acara" class="form-control input-sm input-sm" type="text" style="width:550px" required>
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
  </div>
      </div>
      <!--TAB-->
      </form>
    </div>
  </div>
</div>
<br>
<div class="modal-footer">
</div>
<br/>
