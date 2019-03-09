<div class="container-fluid">
  <button type="submit" method="submit" title="Klik simpan untuk menyimpan informasi karyawan" id="btnsecusrs" onclick="save_secusers()" class="btn btn-primary">Simpan</button>
  <br>
  <br>
  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#tab1">Step 1</a></li>
</ul>
<!--<BODY onLoad="document.frmLogin.txtUser.focus();">-->
<form action="#" id="fusrs" name="fusrs" class="form-horizontal" method="post">
  <div class="tab-content">
  <div id="tab1" class="tab-pane fade in active">
    <input type="hidden" value="" name="id"/>
    <div class="form-group">
    <br>   
    <br />   
        <label class="col-sm-2 control-label">
         ID
        </label>
        <input name="login" placeholder="Masukkan Username" class="form-control input-sm" type="text" style="width:550px" required>
        </div>        
        <div class="form-group pswd">   
        <label class="col-sm-2 control-label">
          Password
          </label>
          <input name="pswd" id="pswd" maxlength="20" placeholder="Masukkan Password" class="form-control input-sm pswd" type="text" style="width:550px" required>
         <span class="glyphicon glyphicon-eye-open"></span>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama
          </label>
          <input name="nama" id="nama" placeholder="Masukkan Nama" class="form-control input-sm" type="text" style="width:550px" required>
        </div>
          <div class="form-group">   
        <label class="col-sm-2 control-label">
          Email
          </label>
          <input name="emaild" id="emaild" placeholder="Masukkan Email" class="form-control input-sm input-sm" type="text" style="width:550px" required>
        </div>
          <div class="form-group">   
        <label class="col-sm-2 control-label">
          Active
          </label>
          <input readonly="active" name="active" value="Y" id="active" class="form-control input-sm" type="text" style="width:550px" required>
        </div>
          <div hidden="priv_admin" class="form-group">   
        <label class="col-sm-2 control-label">
          Privilages Admin
          </label>
          <select name="priv_admin" id="priv_admin" class="form-control input-sm" style="width:550px" style="width:550px" required>
            <option value="">User</option>
          </select>
        </div>
          <div class="form-group">
        <label class="col-sm-2 control-label">
          Id Cabang
          </label>
          <select name="idcabang" id="idcabang" class="form-control input-sm" style="width:550px" style="width:550px" required>
            <?php foreach($cbs as $z) {?>
            <option value="<?=$z->idcabang?>"><?=$z->idcabang?></option>
            <?php }?>
          </select>
        </div>
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Id Pusat
          </label>
         <input readonly="idpusat" name="idpusat" value="0" id="idpusat" class="form-control input-sm" type="text" style="width:550px" required>
        </div>
          <div class="form-group">   
        <label class="col-sm-2 control-label">
          Kode Jungut
          </label>
          <input readonly="kodej" name="kodej" id="kodej" value="<?=$kodj?>" placeholder="Masukkan Nama" class="form-control input-sm" type="text" style="width:550px" required>
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