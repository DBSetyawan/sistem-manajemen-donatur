<div class="modal fade" id="gpns" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-titlee" style="font-family:Bradley Hand ITC;font-size:28pt;text-align:center;">Prosentase Perolehan Dana Pendonatur</h3>
            </div>
            <div class="modal-body gpn">
                <form action="#" id="gpn" class="form-horizontal">
                   <script type="text/javascript">
                      $(function () {
                        $('#gpn').highcharts({
                          chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false
                          },
                            yAxis: {
                            title: {
                                text: 'Perolehan Dana Pendonatur'
                            },
                            labels: {
                                formatter: function () {
                                    return this.value / 10;
                                }
                            }
                        },
                          title: {
                            text: '<div style="font-family:Bradley Hand ITC;font-size:28pt"></div>'
                          },
                          tooltip: {
                            pointFormat: '{series.name} Saldo akhir: Rp <b>{point.y:,.0f},-'
                          },
                          plotOptions: {
                            pie: {
                              allowPointSelect: true,
                              cursor: 'pointer',
                              dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {  
                                  color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                              }
                            }
                          },
         
                            
                          series: [{
                            type: 'pie',
                            name: 'Total Dana Pendonatur,',
                            data: [
                                <?php 
                                // data yang diambil dari database
                                if(count($pendonasian)>0)
                                {
                                   foreach ($pendonasian as $data) {
                                   echo "['" .$data->nama. "',".$data->besar."],\n";

                                   }

                                }

                                ?>
                            ]
                          }]
                        });
                      });
                          </script>
                </form>
            </div>  
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->