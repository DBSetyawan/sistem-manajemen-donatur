<div class="container-fluid">
  <button type="submit" method="submit" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
  <br>
  <br>
  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#tab1">Tab 1</a></li>
  <li><a data-toggle="tab" href="#tab2">Tab 2</a></li>
  <li><a data-toggle="tab" href="#tab3">Tab 3</a></li>
</ul>
<!--<BODY onLoad="document.frmLogin.txtUser.focus();">-->
<form action="#" id="form" name="donatur" class="form-horizontal" method="post">
  <div class="tab-content">
  <div id="tab1" class="tab-pane fade in active">
    <input type="hidden" value="" name="id"/>
    <div hidden="autoid" class="form-group">   
        <label hidden>
          ID Donatur
          </label>
          <input readonly name="autoid" value="<?=$autoid?>" class="form-control input-sm" type="text" style="width:550px">
        </div>
        <div hidden="status" class="form-group">
        <label>
          Status
          </label>
          <select name="sts" id="sts" class="form-control input-sm" style="width:80px">
          <option value="A">Aktif</option>
          <option value="P">Pasif</option>
          </select>
        </div>
        <div class="form-group">   
        <label>
          Kawasan
          </label>
          <div id="combo">
          <select name="kawasann" id="kawasann" class="form-control js-example-basic-multiple" multiple="multiple" style="width:550px" autofocus/>
            <?php foreach($qkwsn as $z) {?>
            <option value="<?=$z->kwsn?>"><?=$z->kwsn?></option>
            <?php }?>
          </select>
          </div>
        </div>
          <div class="form-group">   
        <label>
          Nama Kawasan
          </label>
          <select readonly name="nm_kawasann" id="nm_kawasann" class="form-control input-sm" style="width:550px">
          </select>
        </div>
          <div class="form-group">   
        <label>
          Nama Petugas
          </label>
          <select readonly name="nm_kwsn" id="nm_kwsn" class="form-control input-sm" style="width:550px">
          </select>
        </div>
        <div class="form-group">   
        <label>
          Nama
          </label>
          <input name="nama" id="nama" class="form-control input-sm input-sm" type="text" style="width:550px">
        </div>
        <div class="form-group">   
        <label>
          Jenis Kelamin
          </label>
          <select name="jk" id="jk" class="form-control input-sm" style="width:110px">
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
          </select>
        </div>

        <div class="form-group">   
        <label>
          Tempat Lahir
          </label>
          <input name="tempatlahir" id="tempatlahir" class="form-control input-sm" type="text" style="width:550px">
        </div>
        <div class="form-group">   
        <label>
          Tanggal Lahir
          </label>
          <input name="tgllahir" id="tgllahir" placeholder="yyyy-mm-dd" class="form-control input-sm datepicker" type="text" style="width:550px">
        </div>

        <!--
        <div class="form-group">   
        <label>
          alamat
          </label>
          <select name="alamat" id="alamat" class="form-control input-sm">
          </select>
        </div> -->

        <div class="form-group">   
        <label>
          alamat
          </label>
          <select name="alamat" id="alamat" class="form-control input-sm" style="width:550px">
          </select>
        </div>

          <div class="form-group">   
        <label>
          Alamat Kantor
          </label>
          <select name="almktr" id="almktr" class="form-control input-sm" style="width:550px">
          </select>
        </div>

          <div class="form-group">   
        <label>
          Telepon
          </label>
          <input name="telepon" id="telepon" class="form-control input-sm" type="text" style="width:550px">
        </div>

        <div class="form-group">   
        <label>
          Telepon Kantor
          </label>
          <input name="teleponktr" id="teleponktr" class="form-control input-sm" type="text" style="width:550px">
        </div>

        <div class="form-group">   
        <label>
          Fax Kantor
          </label>
          <input name="faxkantor" id="faxkantor" class="form-control input-sm" type="text" style="width:550px">
        </div>

        <div class="form-group">   
        <label>
          No Handphone 2
          </label>
          <input name="nohp" id="nohp" class="form-control input-sm" type="text" style="width:550px">
        </div>
          <div class="form-group">   
        <label>
          No Handphone 3
          </label>
          <input name="nohp3" id="nohp3" class="form-control input-sm" type="text" style="width:550px">
        </div>
        <div class="form-group">   
        <label>
          Telepon Rumah
          </label>
          <input name="telprmh" id="telprmh" class="form-control input-sm" type="text" style="width:550px">
        </div>
         <div class="form-group">   
        <label>
          Jupen
          </label>
          <select name="jupen" id="jupen" class="form-control input-sm" style="width:550px" required>
           <?php foreach($qjup as $mils) {?>
            <option value="<?=$mils->kodej?>"><?=$mils->kodej . '-' . $mils->name?></option>
            <?php }?>
          </select>
        </div>
  </div>
  <div id="tab2" class="tab-pane fade">
    
    <div class="col-md-4">
       <div class="form-group">   
        <label>
          Email
          </label>
          <input name="email" id="email" class="form-control input-sm" type="text" style="width:550px">
        </div>

       <div class="form-group">   
        <label>
          Cara Bayar
          </label>
          <select name="carabayar" id="carabayar" class="form-control input-sm" style="width:550px">
            <?php foreach($qcar as $rowbank) {?>
            <option value="<?=$rowbank->CARABYR?>"><?=$rowbank->NM_BAYAR?></option>
            <?php }?>
          </select>
          </div>      
        <div class="form-group">   
        <label>
          Rekening Donatur
          </label>
          <input name="rekeningdonatur" class="form-control input-sm" type="text" style="width:550px">
        </div>

        <div class="form-group">   
        <label>
          Bank
          </label>
          <select name="bank" id="bank" class="form-control input-sm" style="width:550px">
            <?php foreach($qbank as $rowbank) {?>
            <option value="<?=$rowbank->BANK?>"><?=$rowbank->NM_BANK?></option>
            <?php }?>
          </select>
        </div>

        <div class="form-group">   
        <label>
          Kolektif
          </label>
          <input name="kolektif" id="kolektif" class="form-control input-sm" style="width:550px" type="text">
        </div>


        <div class="form-group">   
        <label>
          Waktu Tagih
          </label>
          <input name="waktutgh" class="form-control input-sm" type="text" style="width:550px">
        </div>

        <div class="form-group">   
        <label>
          NPWP
          </label>
          <input name="npwp" class="form-control input-sm" type="text" style="width:550px">
        </div>

        <div class="form-group">   
        <label>
          Info
          </label>
          <input name="info" class="form-control input-sm" type="text" style="width:550px">
        </div>

        <div class="form-group">   
        <label>
          Pekerjaan
          </label>
          <select name="worker" id="worker" class="form-control input-sm" style="width:550px">
            <?php foreach($qwork as $z) {?>
            <option value="<?=$z->PEKERJAAN?>"><?=$z->NM_PEKERJAAN?></option>
                                    <?php }?>
          </select>
        </div>

         <div class="form-group">   
        <label>
          Jabatan
          </label>
          <select name="jabatan" id="jabatan" class="form-control input-sm" style="width:550px">
            <?php foreach($qjab as $z) {?>
            <option value="<?=$z->jabatan?>"><?=$z->nm_jabatan?></option>
                                    <?php }?>
          </select>
        </div>

        <div class="form-group">   
        <label>
          Hobby
          </label>
          <select name="hobi" id=" hobi" class="form-control input-sm" style="width:550px ">
            <?php foreach($qhob as $z) {?>
            <option value="<?=$z->hobby?>"><?=$z->nm_hobby?></option>
                                    <?php }?>
          </select>
        </div>

       <div class="form-group">   
        <label>
          Pendidikan
          </label>
          <select name="pendidikan" id="pendidikan" class="form-control input-sm" style="width:550px">
            <?php foreach($qpend as $z) {?>
            <option value="<?=$z->PENDIDIKAN?>"><?=$z->NM_pendidikan?></option>
                                    <?php }?>
          </select>
        </div>

        <div class="form-group">   
        <label>
          Gaji
          </label>
          <select name="salary" id="salary" class="form-control input-sm" style="width:550px">
            <?php foreach($qgaji as $z) {?>
            <option value="<?=$z->GAJI?>"><?=$z->GOL_GAJI?></option>
                                    <?php }?>
          </select>
        </div>
    </div>

  </div>
  <div id="tab3" class="tab-pane fade">
        <div class="form-group">   
        <label>
          Program
          </label>
          <select name="prog" id="prog" class="form-control input-sm" style="width:550px" style="width:550px">
            <?php foreach($qjenis as $z) {?>
            <option value="<?=$z->PROG?>"><?=$z->NM_PROGRAM?></option>
                                    <?php }?>
          </select>
        </div>

        <div class="form-group">   
        <label>
          Nominal
          </label>
          <input name="nominal" id="nominal" class="form-control input-sm" type="text" style="width:550px">
        </div>

        <div class="form-group">   
        <label>
          Keterangan
          </label>
          <input name="keterangan" id="keterangan" class="form-control input-sm" type="text" style="width:550px">
        </div>
        </div>
      </div>
      <!--TAB-->
      </form>
    </div>
  </div>
</div>
<br>
<div class="toplink" align="right"><a href="#">Kembali ke atas<img alt="" width="13" height="12" border="0"></a></div> 
</br>





========================

<div class="container-fluid">
  <button type="submit" method="submit" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
  <br>
  <br>
  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#tab1">Tab 1</a></li>
  <li><a data-toggle="tab" href="#tab2">Tab 2</a></li>
  <li><a data-toggle="tab" href="#tab3">Tab 3</a></li>
</ul>
<!--<BODY onLoad="document.frmLogin.txtUser.focus();">-->
<form action="#" id="form" name="donatur" class="form-horizontal" method="post">
  <table>
  <div class="tab-content">
  <div id="tab1" class="tab-pane fade in active">
    <input type="hidden" value="" name="id"/>
    <div hidden="autoid" class="form-group">   
        <label hidden>
          ID Donatur
          </label>
          <input readonly name="autoid" value="<?=$autoid?>" class="form-control input-sm" type="text" style="width:550px">
        </div>
        <div hidden="status" class="form-group">
        <label>
          Status
          </label>
          <select name="sts" id="sts" class="form-control input-sm" style="width:80px">
          <option value="A">Aktif</option>
          <option value="P">Pasif</option>
          </select>
        </div>
        
        <tr>   
        <td><label>
          Kawasan
          </label></td>
          <td><div id="combo">
          <select name="kawasann" id="kawasann" class="form-control js-example-basic-multiple" multiple="multiple" style="width:550px" autofocus="autofocuss">
            <?php foreach($qkwsn as $z) {?>
            <option value="<?=$z->kwsn?>"><?=$z->kwsn?></option>
            <?php }?>
          </select>
          </div></td>
        </tr>

        <tr>   
        <td><label>
          Nama Kawasan
          </label></td>
          <td><select readonly name="nm_kawasann" id="nm_kawasann" class="form-control input-sm" style="width:550px">
          </select></td>
        </tr>
        
        <tr>   
        <td><label>
          Nama Petugas
          </label></td>
          <td><select readonly name="nm_kwsn" id="nm_kwsn" class="form-control input-sm" style="width:550px">
          </select></td>
        </tr>

        <tr>   
        <td><label>
          Nama
          </label></td>
          <td><input name="nama" id="nama" class="form-control input-sm input-sm" style="width:550px" onkeypress="capLock(event)" style="text-transform:uppercase" type="text">
          <SPAN><div id="divMayus" style="visibility:hidden">Capslock aktif.</div></td> 
        </tr>
           
        <tr><td><label>
          Jenis Kelamin
          </label></td>
          <td><select name="jk" id="jk" class="form-control input-sm" style="width:110px">
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
          </select></td></tr>
        

           
        <tr><td><label>
          Tempat Lahir
          </label></td>
          td<input name="tempatlahir" id="tempatlahir" class="form-control input-sm" type="text" style="width:550px">
        </div></tr>
           
        <label>
          Tanggal Lahir
          </label>
          <input name="tgllahir" id="tgllahir" placeholder="yyyy-mm-dd" class="form-control input-sm datepicker" type="text" style="width:550px">
        

        <!--
           
        <label>
          alamat
          </label>
          <select name="alamat" id="alamat" class="form-control input-sm">
          </select>
        </div> -->

           
        <label>
          alamat
          </label>
          <select name="alamat" id="alamat" class="form-control input-sm" style="width:550px">
          </select>
        </div>

             
        <label>
          Alamat Kantor
          </label>
          <select name="almktr" id="almktr" class="form-control input-sm" style="width:550px">
          </select>
        </div>

             
        <label>
          Telepon
          </label>
          <input name="telepon" id="telepon" class="form-control input-sm" type="text" style="width:550px">
        </div>

           
        <label>
          Telepon Kantor
          </label>
          <input name="teleponktr" id="teleponktr" class="form-control input-sm" type="text" style="width:550px">
        </div>

           
        <label>
          Fax Kantor
          </label>
          <input name="faxkantor" id="faxkantor" class="form-control input-sm" type="text" style="width:550px">
        </div>

           
        <label>
          No Handphone 2
          </label>
          <input name="nohp" id="nohp" class="form-control input-sm" type="text" style="width:550px">
        </div>
             
        <label>
          No Handphone 3
          </label>
          <input name="nohp3" id="nohp3" class="form-control input-sm" type="text" style="width:550px">
        </div>
           
        <label>
          Telepon Rumah
          </label>
          <input name="telprmh" id="telprmh" class="form-control input-sm" type="text" style="width:550px">
        </div>
            
        <label>
          Jupen
          </label>
          <select name="jupen" id="jupen" class="form-control input-sm" style="width:550px" required>
           <?php foreach($qjup as $mils) {?>
            <option value="<?=$mils->kodej?>"><?=$mils->kodej . '-' . $mils->name?></option>
            <?php }?>
          </select>
        </div>
  </div>

  <div id="tab2" class="tab-pane fade">
    
    <div class="col-md-4">
          
        <label>
          Email
          </label>
          <input name="email" id="email" class="form-control input-sm" type="text" style="width:550px">
        </div>

          
        <label>
          Cara Bayar
          </label>
          <select name="carabayar" id="carabayar" class="form-control input-sm" style="width:550px">
            <?php foreach($qcar as $rowbank) {?>
            <option value="<?=$rowbank->CARABYR?>"><?=$rowbank->NM_BAYAR?></option>
            <?php }?>
          </select>
          </div>      
           
        <label>
          Rekening Donatur
          </label>
          <input name="rekeningdonatur" class="form-control input-sm" type="text" style="width:550px">
        </div>

           
        <label>
          Bank
          </label>
          <select name="bank" id="bank" class="form-control input-sm" style="width:550px">
            <?php foreach($qbank as $rowbank) {?>
            <option value="<?=$rowbank->BANK?>"><?=$rowbank->NM_BANK?></option>
            <?php }?>
          </select>
        </div>

           
        <label>
          Kolektif
          </label>
          <input name="kolektif" id="kolektif" class="form-control input-sm" style="width:550px" type="text">
        </div>


           
        <label>
          Waktu Tagih
          </label>
          <input name="waktutgh" class="form-control input-sm" type="text" style="width:550px">
        </div>

           
        <label>
          NPWP
          </label>
          <input name="npwp" class="form-control input-sm" type="text" style="width:550px">
        </div>

           
        <label>
          Info
          </label>
          <input name="info" class="form-control input-sm" type="text" style="width:550px">
        </div>

           
        <label>
          Pekerjaan
          </label>
          <select name="worker" id="worker" class="form-control input-sm" style="width:550px">
            <?php foreach($qwork as $z) {?>
            <option value="<?=$z->PEKERJAAN?>"><?=$z->NM_PEKERJAAN?></option>
                                    <?php }?>
          </select>
        </div>

            
        <label>
          Jabatan
          </label>
          <select name="jabatan" id="jabatan" class="form-control input-sm" style="width:550px">
            <?php foreach($qjab as $z) {?>
            <option value="<?=$z->jabatan?>"><?=$z->nm_jabatan?></option>
                                    <?php }?>
          </select>
        </div>

           
        <label>
          Hobby
          </label>
          <select name="hobi" id=" hobi" class="form-control input-sm" style="width:550px ">
            <?php foreach($qhob as $z) {?>
            <option value="<?=$z->hobby?>"><?=$z->nm_hobby?></option>
                                    <?php }?>
          </select>
        </div>

          
        <label>
          Pendidikan
          </label>
          <select name="pendidikan" id="pendidikan" class="form-control input-sm" style="width:550px">
            <?php foreach($qpend as $z) {?>
            <option value="<?=$z->PENDIDIKAN?>"><?=$z->NM_pendidikan?></option>
                                    <?php }?>
          </select>
        </div>

           
        <label>
          Gaji
          </label>
          <select name="salary" id="salary" class="form-control input-sm" style="width:550px">
            <?php foreach($qgaji as $z) {?>
            <option value="<?=$z->GAJI?>"><?=$z->GOL_GAJI?></option>
                                    <?php }?>
          </select>
        </div>
    </div>

  </div>
  <div id="tab3" class="tab-pane fade">
           
        <label>
          Program
          </label>
          <select name="prog" id="prog" class="form-control input-sm" style="width:550px" style="width:550px">
            <?php foreach($qjenis as $z) {?>
            <option value="<?=$z->PROG?>"><?=$z->NM_PROGRAM?></option>
                                    <?php }?>
          </select>
        </div>

           
        <label>
          Nominal
          </label>
          <input name="nominal" id="nominal" class="form-control input-sm" type="text" style="width:550px">
        </div>

           
        <label>
          Keterangan
          </label>
          <input name="keterangan" id="keterangan" class="form-control input-sm" type="text" style="width:550px">
        </div>
        </div>
      </div>
      </table>
      <!--TAB-->
      </form>
    </div>
  </div>
</div>
<br>
<div class="toplink" align="right"><a href="#">Kembali ke atas<img alt="" width="13" height="12" border="0"></a></div> 
</br>