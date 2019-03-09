<!--Bootstrap modal -->
<div id="modal_form" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-titles">Form Donatur</h3>
            </div>
            <div class="modal-body forms">
                <form action="#" id="forms" class="form-horizontal" method="post">
                    <input type="hidden" value="" name="id"/>
                    <input type="hidden" value="" name="dataold" id="dataold"/>
                    <div class="form-body">
                     </div>
                <button type="button" method="submit" id="update" onclick="save_donatur()" class="btn btn-primary">Ubah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <br>
            </br>   
              <!-- Start Tab -->
              <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tabss1">Tab 1</a></li>
              <li><a data-toggle="tab" href="#tabss2">Tab 2</a></li>
              <li><a data-toggle="tab" href="#tabss3">Tab 3</a></li>
            </ul>
            <div class="tab-content">
              <div id="tabss1" class="tab-pane fade in active">
                <div hidden="autoid1" class="form-group">
                        <br>
                            <label class="control-label col-md-3">Nomor ID</label>
                            <div class="col-md-8">
                            <input readonly name="autoid1" value="<?=$autoid?>" class="form-control" type="text" hidden>
                            <span class="help-block"></span>
                            </div>
                            </div>
                          <br>
                          </br>
                          <div class="form-group">
                            <label class="control-label col-md-3">Status</label>
                            <div class="col-md-8">
                               <select name="sts1" id="sts1" class="form-control input-sm" style="width:100px">
                               <option value="A">Aktif</option>
                               <option value="P">Pasif</option>
                              </select>
                            </div>
                            </tr>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Ket Pasif</label>
                            <div id="ketpas">
                            <div class="col-md-8">
                               <select name="ketpas1" id="ketpas1" class="form-control input-sm" style="width:400px">
                               <option value="">-</option>
                               <?php foreach($qpas as $as) {?>
                               <option value="<?=$as->KETPASIF?>"><?=$as->NM_KETAP?></option>
                               <?php }?>
                              </select>
                            </div>
                            </div>
                            </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Kawasan</label>
                            <div class="col-md-8">
                          <input name="kawasann1" id="autocomplete1" class="form-control input-sm autocomplete1 kwsn" type="search" style="width:400px">
                              </div>
                          </div>
                         <div class="form-group">
                          <label class="control-label col-md-3">Nama Kawasan</label>
                            <div class="col-md-8">
                      <input readonly name="nm_kawasann1" id="nm_kawasann1" placeholder="Input Kode Kawasan Untuk Melihat Nama Kawasan" class="form-control input-sm input-sm" style="width:400px">
                              </div>
                          </div>
                           <div class="form-group">
                          <label class="control-label col-md-3">Petugas</label>
                            <div class="col-md-8">
                          <input readonly name="kodejgts" id="kodejgts" placeholder="Input Kode Kawasan Untuk Melihat Kode Petugas" class="form-control input-sm input-sm" style="width:400px">
                              </div>
                          </div>
                          <div class="form-group">
                         <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-8">
                                <input name="nama1" id="nama1" class="form-control input-sm" type="text" style="width:400px">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Jenis Kelamin</label>
                            <div class="col-md-8">
                               <select name="jk1" id="jk1" class="form-control input-sm" style="width:110px">
                               <option value="L">Laki-laki</option>
                               <option value="P">Perempuan</option>
                              </select>
                            </div>
                            </tr>
                        </div>
                          <!-- <div class="form-group">
                         <label class="control-label col-md-3">Tempat Lahir</label>
                            <div class="col-md-8">
                                <input name="tempatlahir1" placeholder="Masukkan Kota/Kab." class="form-control input-sm" type="text" style="width:400px">
                                <span class="help-block"></span>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Lahir</label>
                            <div class="col-md-8">
                                <input name="tgllahir1" placeholder="Masukkan Tanggal Lahir (yyyy-mm-dd)" class="form-control datepicker input-sm" type="text" style="width:400px">
                                <span class="help-block"></span>
                            </div>
                        </div>
                       <!--   <div class="form-group">
                            <label class="control-label col-md-3">Alamat Tagih</label>
                            <div class="col-md-8">
                              <input readonly type="text" name="almktr1" id="almktr1" class="form-control input-sm" style="width:400px">
                             </select>
                    </div>
                    </div>  -->
                   <div class="form-group">
                            <label class="control-label col-md-3">Alamat Rumah</label>
                            <div class="col-md-8">
                          <input readonly type="text" name="alamat1" id="alamat1" class="form-control input-sm" style="width:400px">
                    </div>
                    </div>
                        <!-- <div class="form-group">
                         <label class="control-label col-md-3">Kode Pengguna</label>
                            <div class="col-md-2">
                                <input readonly name="kodej" value="<?=$pengguna->kodej?>" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>-->
                       <!--  <div class="form-group">
                            <label class="control-label col-md-3">Telepon Rumah</label>
                            <div class="col-md-8">
                                <input name="telprmh1" id="telprmh1" placeholder="Masukkan Telepon Rumah" class="form-control input-sm" type="text" style="width:400px">
                                <span class="help-block"></span>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3">Telepon Kantor</label>
                            <div class="col-md-8">
                                <input name="teleponktr1" placeholder="Masukkan Telepon Kantor" class="form-control input-sm" type="text" style="width:400px">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fax Kantor</label>
                            <div class="col-md-8">
                                <input name="faxkantor1" placeholder="Masukkan Fax Kantor" class="form-control input-sm" type="text" style="width:400px">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">No Handphone</label>
                            <div class="col-md-8">
                                <input name="telepon1" placeholder="Masukkan Telepon" class="form-control input-sm" type="text" style="width:400px">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">No Handphone2</label>
                            <div class="col-md-8">
                                <input name="nohp1" placeholder="Masukkan Nomor HP" class="form-control input-sm" type="text" style="width:400px">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">No Handphone3</label>
                            <div class="col-md-8">
                                <input name="nohp31" placeholder="Masukkan Nomor HP" class="form-control input-sm" type="text" style="width:400px">
                                <span class="help-block"></span>
                            </div>
                        </div> -->
                         <div class="form-group">
                            <label class="control-label col-md-3">Jupen</label>
                            <div id="jupen">
                            <div class="col-md-8">
                               <select name="jupen1" id="jupen1" class="form-control input-sm" style="width:400px">
                               <?php foreach($qjup as $sd) {?>
                               <option value="<?=$sd->kodej?>"><?=$sd->kodej . '-' . $sd->name?></option>
                               <?php }?>
                              </select>
                            </div>
                            </div>
                            </div>
                         <!-- <div class="form-group"> 
                            <label class="control-label col-md-3">Program</label>
                            <div class="col-md-8">
                               <select name="program" id="program" class="form-control" style="width:400px">
                               <option>[Pilih Program]</option>
                               <?php foreach($qjenis as $rowsz) {?>
                               <option value="<?=$rowsz->PROG?>"><?=$rowsz->NM_PROGRAM?></option>
                               <?php }?>
                              </select>
                            </div>
                            </tr>
                        </div>
                         <div class="form-group">
                         <label class="control-label col-md-3">Nominal</label>
                            <div class="col-md-8">
                                <input name="besar" id="besar" placeholder="Masukkan Nama" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                         <div class="form-group">
                         <label class="control-label col-md-3">Keterangan</label>
                            <div class="col-md-8">
                                <input name="keterangan" id="keterangan" placeholder="Masukkan Nama" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-8">
                        <label class="control-label col-md-5"></label>
                        <button type="button" id="btnTambah" name="tambah" onclick="window.location.href=' <?php echo base_url(); ?>index.php/person/get_post'" class="btn btn-primary">Tambah</button>
                        <span class="help-block"></span>
                        </div>
                        </div>-->
                 </div>
              <div id="tabss2" class="tab-pane fade">
                <br>
                    <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                          <div class="col-md-8">
                          <input id="email1" name="email1" placeholder="Masukkan Email" class="form-control input-sm" type="text" style="width:400px" required="email">
                        <span class="help-block"></span>
                    </div>
                    </div>
                       <div class="form-group">
                     <label class="control-label col-md-3">Cara Bayar</label>
                            <div id="crbyr">
                            <div class="col-md-8">
                               <select name="carabayar1" id="carabayar1" class="form-control input-sm" style="width:400px">
                               <option value="">-</option>
                               <?php foreach($qcar as $by) {?>
                               <option value="<?=$by->CARABYR?>"><?=$by->NM_BAYAR?></option>
                               <?php }?>
                              </select>
                            </div>
                            </div>
                            </div>
                             <!-- <div class="form-group">
                            <label class="control-label col-md-3">Rek Donatur</label>
                            <div class="col-md-8">
                                <input name="rekeningdonatur1" placeholder="Masukkan Rekening Dondatur" class="form-control input-sm"  type="text" style="width:400px">
                            <span class="help-block"></span>
                          </div>
                          </div> -->
                           <div class="form-group">
                            <label class="control-label col-md-3">Bank</label>
                            <div id="bank">
                            <div class="col-md-8">
                               <select name="bank1" id="bank1" class="form-control input-sm" style="width:400px">
                               <option value="">-</option>
                               <?php foreach($qbank as $rowbank) {?>
                               <option value="<?=$rowbank->BANK?>"><?=$rowbank->NM_BANK?></option>
                               <?php }?>
                              </select>
                            </div>
                            </div>
                            </div>
                              <!-- <div class="form-group">
                            <label class="control-label col-md-3">Kolektif</label>
                            <div class="col-md-8">
                                <input name="kolektif1" placeholder="Masukkan Rekening Dondatur" class="form-control input-sm" type="text" style="width:400px">
                            <span class="help-block"></span>
                          </div>  
                    </div> -->
                     <div class="form-group">
                            <label class="control-label col-md-3">Waktu Tagih</label>
                            <div id="bank">
                            <div class="col-md-8">
                               <select name="waktutgh1" id="waktutgh1" class="form-control input-sm" style="width:400px">
                               <option value="">-</option>
                               <?php foreach($qwk as $ssd) {?>
                               <option value="<?=$ssd->waktu_tagih?>"><?=$ssd->NM_tagih?></option>
                               <?php }?>
                              </select>
                            </div>
                            </div>
                            </div>
                        <!--  <div class="form-group">
                            <label class="control-label col-md-3">NPWP</label>
                            <div class="col-md-8">
                                <input name="npwp1" placeholder="Masukkan Npwp" class="form-control input-sm" type="text" style="width:400px">
                            <span class="help-block"></span>
                    </div>
                    </div> -->
                </div>
            <div id="tabss3" class="tab-pane fade">
                    <br>
                        <div class="form-group">
                                <label class="control-label col-md-3">Info</label>
                                <div class="col-md-8">
                                      <select name="info1" id="info1" class="form-control input-sm" style="width:400px">
                                      <option value="00">-</option>
                                       <?php foreach($qin as $mils) {?>
                                        <option value="<?=$mils->info?>"><?=$mils->NM_INFO?></option>
                                        <?php }?>
                                      </select>
                              </div>
                        </div>
                  <div class="form-group">
                            <label class="control-label col-md-3">Pekerjaan</label>
                            <div id="work">
                            <div class="col-md-8">
                               <select name="worker1" id="worker1" class="form-control input-sm" style="width:400px">
                               <?php foreach($qwork as $as) {?>
                               <option value="<?=$as->PEKERJAAN?>"><?=$as->NM_PEKERJAAN?></option>
                               <?php }?>
                              </select>
                            </div>
                            </div>
                            </div>
                   <div class="form-group">
                            <label class="control-label col-md-3">Jabatan</label>
                            <div id="jabatan1">
                            <div class="col-md-8">
                               <select name="jabatan1" id="jabatan1" class="form-control input-sm" style="width:400px">
                               <?php foreach($qjab as $as) {?>
                               <option value="<?=$as->jabatan?>"><?=$as->nm_jabatan?></option>
                               <?php }?>
                              </select>
                            </div>
                            </div>
                            </div>
                      <div class="form-group">
                            <label class="control-label col-md-3">Hobby</label>
                            <div id="hobby">
                            <div class="col-md-8">
                               <select name="hobi1" id="hobi1" class="form-control input-sm" style="width:400px">
                               <?php foreach($qhob as $as) {?>
                               <option value="<?=$as->hobby?>"><?=$as->nm_hobby?></option>
                               <?php }?>
                              </select>
                            </div>
                            </div>
                            </div>
                      <div class="form-group">
                            <label class="control-label col-md-3">Pendidikan</label>
                            <div id="pendidikan">
                            <div class="col-md-8">
                               <select name="pendidikan1" id="pendidikan1" class="form-control input-sm" style="width:400px">
                               <?php foreach($qpend as $aszz) {?>
                               <option value="<?=$aszz->PENDIDIKAN?>"><?=$aszz->NM_pendidikan?></option>
                               <?php }?>
                              </select>
                            </div>
                            </div>
                            </div>
                      <div class="form-group">
                            <label class="control-label col-md-3">Gaji</label>
                            <div id="salary">
                            <div class="col-md-8">
                               <select name="salary1" id="salary1" class="form-control input-sm" style="width:400px">
                               <?php foreach($qgaji as $as) {?>
                               <option value="<?=$as->GAJI?>"><?=$as->GOL_GAJI?></option>
                               <?php }?>
                              </select>
                            </div>
                        </div>
                   </div>
                </div>
              </div>
            </div>
            <!-- End Tab -->   
          </form>     
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- End Bootstrap modal-->
