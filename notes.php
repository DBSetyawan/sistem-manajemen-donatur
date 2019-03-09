<table style="width: 67%; margin: 0 auto 2em auto;" border="0" cellpadding="3" cellspacing="0">
        <thead>
            <tr>
                <th>Target</th>
                <th>Search text</th>
                <th>Treat as regex</th>
                <th>Use smart search</th>
            </tr>
        </thead>
        <tbody>
            <tr id="filter_global">
                <td>Global search</td>
                <td align="center"><input class="global_filter" id="global_filter" type="text"></td>
                <td align="center"><input class="global_filter" id="global_regex" type="checkbox"></td>
                <td align="center"><input class="global_filter" id="global_smart" checked="checked" type="checkbox"></td>
            </tr>
            <tr id="filter_col1" data-column="0">
                <td>Column - Name</td>
                <td align="center"><input class="column_filter" id="col0_filter" type="text"></td>
                <td align="center"><input class="column_filter" id="col0_regex" type="checkbox"></td>
                <td align="center"><input class="column_filter" id="col0_smart" checked="checked" type="checkbox"></td>
            </tr>
            <tr id="filter_col2" data-column="1">
                <td>Column - Position</td>
                <td align="center"><input class="column_filter" id="col1_filter" type="text"></td>
                <td align="center"><input class="column_filter" id="col1_regex" type="checkbox"></td>
                <td align="center"><input class="column_filter" id="col1_smart" checked="checked" type="checkbox"></td>
            </tr>
            <tr id="filter_col3" data-column="2">
                <td>Column - Office</td>
                <td align="center"><input class="column_filter" id="col2_filter" type="text"></td>
                <td align="center"><input class="column_filter" id="col2_regex" type="checkbox"></td>
                <td align="center"><input class="column_filter" id="col2_smart" checked="checked" type="checkbox"></td>
            </tr>
            <tr id="filter_col4" data-column="3">
                <td>Column - Age</td>
                <td align="center"><input class="column_filter" id="col3_filter" type="text"></td>
                <td align="center"><input class="column_filter" id="col3_regex" type="checkbox"></td>
                <td align="center"><input class="column_filter" id="col3_smart" checked="checked" type="checkbox"></td>
            </tr>
            <tr id="filter_col5" data-column="4">
                <td>Column - Start date</td>
                <td align="center"><input class="column_filter" id="col4_filter" type="text"></td>
                <td align="center"><input class="column_filter" id="col4_regex" type="checkbox"></td>
                <td align="center"><input class="column_filter" id="col4_smart" checked="checked" type="checkbox"></td>
            </tr>
            <tr id="filter_col6" data-column="5">
                <td>Column - Salary</td>
                <td align="center"><input class="column_filter" id="col5_filter" type="text"></td>
                <td align="center"><input class="column_filter" id="col5_regex" type="checkbox"></td>
                <td align="center"><input class="column_filter" id="col5_smart" checked="checked" type="checkbox"></td>
            </tr>
        </tbody>
    </table>





















<div id="filterform" class="collapse">
    <form action="#" id="filters" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kawasan</label>
                            <div class="col-md-9">
                            <input name="kawasan" id="kawasan" class="form-control" type="text" style="width:300px">
                            <span class="help-block"></span>
                            </div>
                        </div> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Filter Status</label>
                            <div class="col-md-8">
                               <select name="status" id="status" class="form-control" style="width:90px">
                               <option value="">Semua</option>
                               <option value="A">Aktif</option>
                               <option value="P">Pasif</option>
                              </select>
                            </div>
                            </tr>
                        </div>
                        <div class="form-group">
                        <div class="modal-footer">
                         <label class="control-label col-md-3">No donatur</label>
                                <div class="col-md-8">
                                      <input name="noid" id="noid" class="form-control" style="width:300px">
                                </div>
                             </div>
                             </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Lengkap</label>
                            <div class="col-md-9">
                            <input name="nama" placeholder="Masukkan Nominal" class="form-control" type="text" style="width:300px">
                            <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-9">
                            <input name="alamat" placeholder="Masukkan Keterangan" class="form-control" type="text" style="width:300px">
                            <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Filter_program</label>
                            <div class="col-md-9">
                              <select name="prog" id="prog" class="form-control" style="width:300px">
                              <option value=""></option>
                                    <?php foreach($qjenis as $z) {?>
                                    <option value="<?=$z->PROG?>"><?=$z->NM_PROGRAM?></option>
                                    <?php }?>
                                  </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3">Filter_Petugas</label>
                            <div class="col-md-9">
                              <select name="kodejgt" id="kodejgt" class="form-control" style="width:300px">
                              <option value=""></option>
                                    <?php foreach($qjungut as $z) {?>
                                    <option value="<?=$z->kodej?>"><?=$z->kodej?></option>
                                    <?php }?>
                                  </select>
                            </div>
                        </div>
                    </div>
                </form>




Nama
Alamat ktr
Jupen
Kawasan