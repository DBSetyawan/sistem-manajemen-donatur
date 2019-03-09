<div class="container-fluid">
  <button type="submit" method="submit" id="btnidkgt" onclick="save_kgts()" class="btn btn-primary">Simpan</button>
  <br>
  <br>
  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#tab1">Tab 1</a></li>
</ul>
<!--<BODY onLoad="document.frmLogin.txtUser.focus();">-->
<form action="#" id="pkgt" name="pkgt" class="form-horizontal" method="post">
  <div class="tab-content">
  <div id="tab1" class="tab-pane fade in active">
    <input type="hidden" value="" name="id"/>
    <div hidden="idkgt" class="form-group">
    <br>   
    <br />   
        <label class="col-sm-2 control-label">
          No Kegiatan
        </label>
        <input readonly name="idkgt" value="<?=$idkgt?>" class="form-control input-sm" type="text" style="width:550px">
        </div>
        <br />
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Kode Kegiatan
          </label>
          <select name="kkgt" id="kkgt" class="form-control input-sm" style="width:550px" style="width:550px" required>
            <?php foreach($qjenisacara as $z) {?>
            <option value="<?=$z->idacara?>"><?=$z->idacara?></option>
            <?php }?>
          </select>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama Acara
          </label>
          <input name="nama_acara" id="nama_acara" placeholder="Masukkan nama acara" class="form-control input-sm" type="text" style="width:550px" required>
        </div>
          <div class="form-group">   
        <label class="col-sm-2 control-label">
          Ketua Pelaksana
          </label>
          <input name="kplk" id="kplk" placeholder="Masukkan Nama Ketua Pelaksana" class="form-control input-sm input-sm autocompletecari name" type="search" style="width:550px" required>
        </div>
          <div class="form-group">   
        <label class="col-sm-2 control-label">
          Alamat Kegiatan
          </label>
          <input name="almtkgt" id="almkgt" placeholder="Masukkan Alamat Kegiatan" class="form-control input-sm input-sm" type="text" style="width:550px" required>
        </div>
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Jumlah Donasi
          </label>
          <input name="tot_don" id="tot_don" placeholder="Masukkan Jumlah Donasi" class="form-control input-sm" maxlength="15" type="text" onkeyup="document.getElementById('forma').innerHTML = formatCurrency(this.value);" style="width:550px" required>
          <br>
         <label class="col-sm-2 control-label"></label><b><span id="forma"></span></b>
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
