<!--Bootstrap modal -->
<div id="modalfusrs" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-titles">Form Master Karyawan</h3>
            </div>
            <div class="modal-body gfusrs">
                <form action="#" id="gfusrs" class="form-horizontal" method="post">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                     </div>
                <button type="button" title="Klik Update untuk menyimpan perubahan informasi karyawan" method="submit" id="ubahfusrs" onclick="save_secusers_updates()" class="btn btn-primary">Ubah</button>
                <button type="button" title="Klik Batal untuk menutup perubahan informasi karyawan" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <br>
            </br>   
              <!-- Start Tab -->
              <ul class="nav nav-tabs">
              
            </ul>
            <div class="tab-content">
              <div id="tabss1" class="tab-pane fade in active">
            
            <input type="hidden" value="" name="id"/>
            <div class="form-group">
    <br>   
    <br />   
        <label class="col-sm-2 control-label">
          Username
          </label>
          <input name="login1" id="login1" class="form-control input-sm" type="text" style="width:550px">
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Password
          </label>
          <input name="pswd1" id="pswd1" maxlength="20" placeholder="Masukkan Nama Acara" class="form-control input-sm " type="text" style="width:550px">
        </div>   
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama
          </label>
          <input name="nama1" id="nama1" placeholder="Masukkan Nama" class="form-control input-sm " type="text" style="width:550px">
        </div>   
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Email
          </label>
          <input name="email1" id="email1" placeholder="Masukkan Email" class="form-control input-sm " type="text" style="width:550px">
        </div>   
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Active
          </label>
          <select name="active1" placeholder="Pilih" id="active1" class="form-control input-sm" style="width:110px">
          <option value="Y">Y</option>
          <option value="N">N</option>
          </select>
        </div>
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Privilages Admin
          </label>
          <select name="priv_admin1" id="priv_admin1" class="form-control input-sm" style="width:550px" style="width:550px" required>
            <option value="Y">Admin</option>
            <option value="">User</option>
          </select>
        </div>
         <div class="form-group">
        <label class="col-sm-2 control-label">
          Id Cabang
          </label>
          <select name="idcabang1" id="idcabang1" class="form-control input-sm" style="width:550px" style="width:550px" required>
            <?php foreach($cbs as $z) {?>
            <option value="<?=$z->idcabang?>"><?=$z->idcabang?></option>
            <?php }?>
          </select>
        </div>
           <div class="form-group">   
        <label class="col-sm-2 control-label">
          Id Pusat
          </label>
         <input readonly="idpusat1" name="idpusat1" value="0" id="idpusat" class="form-control input-sm" type="text" style="width:550px" required>
        </div>
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Kode Jungut
          </label>
          <input readonly="kodej1" name="kodej1" id="kodej1" class="form-control input-sm" type="text" style="width:550px" required>
        </div>  
             </div>
            </div>
            <!-- End Tab -->   
          </form>     
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- End Bootstrap modal-->
