<!--Bootstrap modal -->
<div id="modalprograms" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-titles">Form Program</h3>
            </div>
            <div class="modal-body prg">
                <form action="#" id="prg" class="form-horizontal" method="post">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                     </div>
                <button type="button" method="submit" id="updatep" onclick="save_programs()" class="btn btn-primary">Ubah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <br>
            </br>   
              <!-- Start Tab -->
              <ul class="nav nav-tabs">
              
            </ul>
            <div class="tab-content">
              <div id="tabss1" class="tab-pane fade in active">
            
            <input type="hidden" value="" name="id"/>
            <br>
            <br />
      <div hidden="progs" class="form-group">   
        <label hidden="progs" class="col-sm-2 control-label">
          PROG
          </label>
          <input hidden="progs" readonly name="progs" value="<?=$progs?>" class="form-control input-sm" type="text" style="width:550px">
        </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">
          Status
          </label>
          <select name="statuss" id="statuss" class="form-control input-sm" style="width:80px">
          <option value="A">Aktif</option>
          <option value="P">Pasif</option>
          </select>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">
          Nama Program
          </label>
          <input name="programs" id="programs" class="form-control input-sm" type="text" style="width:550px">
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Harga
          </label>
          <input name="harga" id="harga" placeholder="Masukkan Nama Instansi" class="form-control input-sm" type="text" style="width:550px" required>
        </div>
        <div class="form-group">   
        <label class="col-sm-2 control-label">
          Kelompok
          </label>
          <input name="kelompok" id="kelompok" placeholder="Masukkan Alamat Kawasan" class="form-control input-sm input-sm" type="text" style="width:550px">
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
