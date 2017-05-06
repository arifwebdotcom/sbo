<?php
echo"
<div class='content-wrapper'>
 <section class='content'>
           
           <div class='row'>
              <div class='col-xs-12'>
                 <div class='box'>
                    <div class='box-header'>
                       <h3 class='text-center'>
                           <b> RUANG KECOCOKAN SETIAP KRITERIA</b>
                       </h3>
                       <div class='box-tools col-xs-12 col-md-6'>
                          <div class='input-group col-xs-12 col-md-6 pull-right'>
                              <input type='text' id='search' name='table_search'  class='form-control  pull-right' placeholder='Search' onChange=javascript:searchdt('#search','siswa/search')>
                             <div class='input-group-btn'>
                                <button class='btn btn-default'><i class='fa fa-search' onclick='javascript:searchdt('#search','siswa/search')'></i></button>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!-- /.box-header -->
                    <div class='box-body table-responsive ' id='div-paging'>
                       <table class='table table-striped no-margin table-hover'>
                          <tr>                             
                             <th width='20'>No.</th>
                             <th>NIS</th>
                             <th>Nama Siswa</th>
                             <th>Kelas</th>
                             <th>Pendapatan Orang Tua</th>
                             <th>Rerata Nilai Semester</th>
                             <th>Tanggungan Orang Tua</th>
                             <th>Nilai Extra</th>
                             <th>Prestasi</th>
                          </tr>";
                          $no =0;
                          foreach($siswa->result() as $row_m){
                          	$no++;
                          	echo"
                          <tr>                           
                             <td>$no</td>
                             <td>".$row_m->nis."</td>
                             <td>".$row_m->nama."</td>
                             <td>".$row_m->kelas."</td>
                             <td>".$row_m->pot."</td>
                             <td>".$row_m->rns."</td>
                             <td>".$row_m->jto."</td>
                             <td>".$row_m->ne."</td>
                             <td>".$row_m->prestasi."</td>
                          </tr>
                          ";
                      }
                      echo"

                       </table>
                    
                    <!-- /.box-body -->
                    <div class='box-footer clearfix'>
                    $pagination
                    </div>
                    </div>
                 </div>
                 <!-- /.box -->
              </div>
           </div>

        </section>
        <!-- /.content -->
</div>
";
?>