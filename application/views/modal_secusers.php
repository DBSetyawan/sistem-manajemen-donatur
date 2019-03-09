<div class="container-fluid">
  <button type="submit" title="Klik Simpan untuk menyimpan informasi program acara" method="submit" id="btnProg" onclick="save_progrm()" class="btn btn-primary">Simpan</button>
  <br>
  <br>
  <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#tab1">Tab 1</a></li>
</ul>
<!--<BODY onLoad="document.frmLogin.txtUser.focus();">-->
<form action="#" id="prgs" name="prgs" class="form-horizontal" method="post">
  <div class="tab-content">
  <div id="tab1" class="tab-pane fade in active">
    <input type="hidden" value="" name="id"/>
    <div hidden="progs1" class="form-group">
    <br>   
    <br />   
        <label hidden="progs1" class="col-sm-2 control-label">
          ID PROG
          </label>
          <input hidden="progs1" readonly name="progs1" value="<?=$progs?>" class="form-control input-sm" type="text" style="width:550px" required>
        </div>
         <br>   
    <br />   
        <div class="form-group">
        <label class="col-sm-2 control-label">
          Nama Program
          </label>
          <input name="programs1" id="programs1" placeholder="Masukkan Nama Program" class="form-control input-sm" type="text" style="width:550px" required="programs1">
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Harga
          </label>
          <input name="harga1" id="harga1" placeholder="Masukkan Harga" class="form-control input-sm" type="text" style="width:550px" required="harga1">
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Kelompok
          </label>
          <input name="kelompok1" id="kelompok1" placeholder="Masukkan Kode Kelompok" maxlength="1" class="form-control input-sm input-sm" type="text" style="width:550px" required="kelompok1">
        </div>
        <br/>
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
<div class="modal-footer">
</div>
</br>