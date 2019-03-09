<div class="container-fluid">
  <button type="submit" method="submit" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
  <br>
  <br>
  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#tab1">Step 1</a></li>
  <li><a data-toggle="tab" href="#tab2">Step 2</a></li>
  <li><a data-toggle="tab" href="#tab3">Step 3</a></li>
</ul>
<!--<BODY onLoad="document.frmLogin.txtUser.focus();">-->
<form action="#" id="form" name="donatur" class="form-horizontal" method="post">
<br>
<br />
  <button type="reset" style="margin-left:85%" class="btn btn-danger" onclick="">Batalkan Transaksi</button>
  <div class="tab-content">
  <div id="tab1" class="tab-pane fade in active">
    <input type="hidden" value="" name="id"/>
    <div hidden="autoid" class="form-group">   
        <label hidden>
          ID Donatur
          </label>
          <input readonly name="autoid" value="<?=$autoid?>" class="form-control input-sm" type="text" style="width:550px">
        </div>
         <div hidden="idlap" class="form-group">
        <label hidden>
          ID Donatur Report
          </label>
          <input readonly name="idlap" value="<?=$idlap?>" class="form-control input-sm" type="text" style="width:550px">
        </div>

        <div  type="hidden" class="form-group">   
        <label hidden>
          ID
          </label>
          <input type="hidden" readonly name="autoid2" value="<?=$aut?>" class="form-control input-sm" type="text" style="width:550px">
        </div>
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
          Kode Kawasan
          </label>
          <input name="kawasann" id="kawasann" placeholder="Masukkan kode kawasan" id="autocomplete1" class="form-control input-sm autocomplete kwsn" type="search" style="width:550px" required>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama Kawasan
          </label>
          <input readonly name="nm_kawasann" id="nm_kawasann" placeholder="Input Kode Kawasan Untuk Melihat Nama Kawasan" class="form-control input-sm input-sm" type="text" style="width:550px">
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Petugas
          </label>
          <input readonly name="kodejgt" id="kodejgt" placeholder="Input Kode Kawasan Untuk Melihat Kode Petugas" class="form-control input-sm input-sm" type="text" style="width:550px">
        </div>
          <!--<div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama Kawasan
          </label>
          <select readonly name="nm_kawasann" id="nm_kawasann" class="form-control input-sm" style="width:550px">
          </select>
        </div>-->
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama
          </label>
          <input name="nama" id="nama" placeholder="Masukkan Nama" class="form-control input-sm input-sm" type="text" style="width:550px" required onkeydown="upperCaseF(this)">
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Jenis Kelamin
          </label>
          <select name="jk" placeholder="Pilih" id="jk" class="form-control input-sm" required="jk" style="width:110px">
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
          </select>
        </div>
       <!--  <div class="form-group">   
        <label class="col-sm-2 control-label">
          Tempat Lahir
          </label>
          <input name="tempatlahir" id="tempatlahir" placeholder="Masukkan Tempat Lahir" class="form-control input-sm" type="text" style="width:550px" onkeydown="upperCaseF(this)" required>
        </div> -->
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Tanggal Lahir
          </label>
          <input name="tgllahir" id="tgllahir" placeholder="Masukkan tanggal Lahir (yyyy-mm-dd)" class="form-control input-sm datepicker" type="text" required="tgllahir" style="width:550px">
        </div>
        
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Alamat Rumah
          </label>
          <input readonly name="alamat" id="alamat" placeholder="Masukkan Alamat Rumah" class="form-control input-sm input-sm" type="text" style="width:550px" onkeydown="upperCaseF(this)">
        </div>
<!-- 
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Alamat Tagih
          </label>
          <input readonly name="almktr" id="almktr" placeholder="Masukkan Alamat Tagih" class="form-control input-sm input-sm" type="text" style="width:550px" required onkeydown="upperCaseF(this)">
        </div> -->

         <!--  <div class="form-group">   
        <label class="col-sm-2 control-label">
          No Handphone
          </label>
          <input name="telepon" id="telepon" placeholder="Masukkan No Handphone 1" class="form-control input-sm" type="text" style="width:550px" required="telepon">
        </div> -->
         <!-- <div class="form-group">   
        <label class="col-sm-2 control-label">
          No Handphone 2
          </label>
          <input name="nohp" id="nohp" placeholder="Masukkan No Handphone 2" class="form-control input-sm" type="text" style="width:550px" required="nohp">
        </div>
          <div class="form-group">   
        <label class="col-sm-2 control-label">
          No Handphone 3
          </label>
          <input name="nohp3" id="nohp3" required="nohp3" placeholder="Masukkan No Handphone 3" class="form-control input-sm" type="text" style="width:550px">
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Telepon Kantor
          </label>
          <input name="teleponktr" id="teleponktr" required="teleponktr" placeholder="Masukkan Telepon Kantor" class="form-control input-sm" type="text" style="width:550px">
        </div>

        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Fax Kantor
          </label>
          <input name="faxkantor" id="faxkantor" required="faxkantor" placeholder="Masukkan Fax Kantor" class="form-control input-sm" type="text" style="width:550px">
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Telepon Rumah
          </label>
          <input name="telprmh" id="telprmh" required="telprmh" placeholder="Masukkan Telepon Rumah" class="form-control input-sm" type="text" style="width:550px">
        </div> -->
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Jupen
          </label>
          <select name="jupen" id="jupen" class="form-control input-sm" style="width:550px" required>
           <?php foreach($qjup as $mils) {?>
            <option value="<?=$mils->kodej?>"><?=$mils->kodej . '-' . $mils->name?></option>
            <?php }?>
          </select>
        </div>
  </div>
  <br>
  </br>
  <div id="tab2" class="tab-pane fade">
       <div class="form-group">   
        <label class="col-sm-2 control-label">
          Email
          </label>
          <input name="email" id="email" placeholder="Masukkan Email" class="form-control input-sm" type="text" style="width:550px" required="email">
        </div>

       <div class="form-group">   
        <label class="col-sm-2 control-label">
          Cara Bayar
          </label>
          <select name="carabayar" required="carabayar" id="carabayar" class="form-control input-sm" style="width:550px">
          <OPTION value="">-</OPTION>
            <?php foreach($qcar as $rowbank) {?>
            <option value="<?=$rowbank->CARABYR?>"><?=$rowbank->NM_BAYAR?></option>
            <?php }?>
          </select>
          </div>      
        <!-- <div class="form-group">   
        <label class="col-sm-2 control-label">
          Rekening Donatur
          </label>
          <input name="rekeningdonatur" required="rekeningdonatur" placeholder="Masukkan Rekening Donatur" class="form-control input-sm" type="text" style="width:550px">
        </div> -->

        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Bank
          </label>
          <select name="bank" id="bank" required="bank" class="form-control input-sm" style="width:550px">
          <OPTION value="">-</OPTION>
            <?php foreach($qbank as $rowbank) {?>
            <option value="<?=$rowbank->BANK?>"><?=$rowbank->NM_BANK?></option>
            <?php }?>
          </select>
        </div>

        <!-- <div class="form-group">   
        <label class="col-sm-2 control-label">
          Kolektif
          </label>
          <input name="kolektif" required="kolektif" id="kolektif" placeholder="Masukkan Kolektif" class="form-control input-sm" style="width:550px" type="text">
        </div> -->
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Waktu Tagih
          </label>
          <select name="waktutgh" id="waktutgh" required="waktutgh" class="form-control input-sm" style="width:550px">
          <OPTION value="">-</OPTION>
            <?php foreach($qwk as $s) {?>
            <option value="<?=$s->waktu_tagih?>"><?=$s->NM_tagih?></option>
            <?php }?>
          </select>
        </div>

        <!-- <div class="form-group">   
        <label class="col-sm-2 control-label">
          NPWP
          </label>
          <input name="npwp" required="npwp" class="form-control input-sm" placeholder="Masukkan NPWP" type="text" style="width:550px">
        </div> -->

        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Info
          </label>
          <select name="info" id="info" required="info" class="form-control input-sm" style="width:550px">
          <option value="00">-</option>
           <?php foreach($qin as $mils) {?>
            <option value="<?=$mils->info?>"><?=$mils->NM_INFO?></option>
            <?php }?>
          </select>
        </div>

        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Pekerjaan
          </label>
          <select name="worker" id="worker" required="worker" class="form-control input-sm" style="width:550px">
            <?php foreach($qwork as $z) {?>
            <option value="<?=$z->PEKERJAAN?>"><?=$z->NM_PEKERJAAN?></option>
                                    <?php }?>
          </select>
        </div>

         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Jabatan
          </label>
          <select name="jabatan" id="jabatan" required="jabatan" class="form-control input-sm" style="width:550px">
            <?php foreach($qjab as $z) {?>
            <option value="<?=$z->jabatan?>"><?=$z->nm_jabatan?></option>
                                    <?php }?>
          </select>
        </div>

        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Hobby
          </label>
          <select name="hobi" id=" hobi" required="hobi" class="form-control input-sm" style="width:550px ">
            <?php foreach($qhob as $z) {?>
            <option value="<?=$z->hobby?>"><?=$z->nm_hobby?></option>
                                    <?php }?>
          </select>
        </div>

       <div class="form-group">   
        <label class="col-sm-2 control-label">
          Pendidikan
          </label>
          <select name="pendidikan" id="pendidikan" required="pendidikan" class="form-control input-sm" style="width:550px">
            <?php foreach($qpend as $z) {?>
            <option value="<?=$z->PENDIDIKAN?>"><?=$z->NM_pendidikan?></option>
                                    <?php }?>
          </select>
        </div>

        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Gaji
          </label>
          <select name="salary" id="salary" required="salary" class="form-control input-sm" style="width:550px">
            <?php foreach($qgaji as $z) {?>
            <option value="<?=$z->GAJI?>"><?=$z->GOL_GAJI?></option>
                                    <?php }?>
          </select>
        </div>
    </div>

 
  <div id="tab3" class="tab-pane fade">
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Program
          </label>
          <select name="prog" id="prog" class="form-control input-sm" style="width:550px" style="width:550px" required>
            <?php foreach($qjenis as $z) {?>
            <option value="<?=$z->PROG?>"><?=$z->NM_PROGRAM?></option>
                                    <?php }?>
          </select>
        </div>

        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Nominal
          </label>
          <input name="nominal" id="nominal" placeholder="Masukkan Nominal" class="form-control input-sm" maxlength="15" type="text" onkeyup="document.getElementById('format').innerHTML = formatCurrency(this.value);" style="width:550px" required>
          <br>
         <label class="col-sm-2 control-label"></label><b><span id="format"></span></b>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Keterangan
          </label>
          <input name="keterangan" id="keterangan" required="keterangan" placeholder="Masukkan Keterangan" class="form-control input-sm" type="text" style="width:550px">
        </div>
        </div>
      </div>
      <!--TAB-->
      </form>
    </div>
  </div>
</div>
<div class="modal-footer">
</div>
</br>