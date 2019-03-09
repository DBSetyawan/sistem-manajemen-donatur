<!--Bootstrap modal -->
<div id="modalkegiatan" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-titles">Form Transaksi Kegiatan Acara</h3>
            </div>
            <div class="modal-body kgre">
                <form action="#" id="kgre" class="form-horizontal" method="post">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                     </div>
                <button type="button" method="submit" id="updatekgt" onclick="save_kgtsssg()" class="btn btn-primary">Ubah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <br>
            </br>   
              <!-- Start Tab -->
              <ul class="nav nav-tabs">
              
            </ul>
            <div class="tab-content">
              <div id="tabss1" class="tab-pane fade in active">
            
            <input type="hidden" value="" name="id"/>
            <div hidden="idkgt1" class="form-group">
    <br>   
    <br />   
        <label hidden="idkgt1" class="col-sm-2 control-label">
          ID ACARA
          </label>
          <input hidden="idkgt1" readonly name="idkgt1" value="<?=$idpdon?>" class="form-control input-sm" type="text" style="width:550px">
        </div>
         <br>   
    <br />   
         <div hidden="kdacara" class="form-group">   
        <label class="col-sm-2 control-label">
          kode Acara
          </label>
          <input readonly="kdacara" name="kdacara" id="kdacara" placeholder="Masukkan Nama Acara" class="form-control input-sm " type="text" style="width:550px">
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Nama Acara
          </label>
          <input readonly="namcar" name="namcar" id="namcar" placeholder="Masukkan Nama Acara" class="form-control input-sm " type="text" style="width:550px">
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Ketua Pelaksana
          </label>
          <input name="kplk1" id="kplk1" placeholder="Masukkan Nama Ketua Pelaksana" class="form-control input-sm autocompletecr1" type="search" style="width:550px">
        </div> 
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Alamat Kegiatan
          </label>
          <input name="almktr2" id="almktr2" placeholder="Masukkan Alamat Kegiatan Acara" class="form-control input-sm" type="text" style="width:550px">
        </div>
         <div class="form-group">   
        <label class="col-sm-2 control-label">
          Jumlah Donasi
          </label>
          <input readonly="tonts" name="tonts" id="tonts" placeholder="Masukkan Jumlah Donasi" class="form-control input-sm" maxlength="15" type="text" onkeyup="document.getElementById('asdasd').innerHTML = formatCurrency(this.value);" style="width:550px" required>
          <br>
         <label class="col-sm-2 control-label"></label><b><span id="asdasd"></span></b>
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
