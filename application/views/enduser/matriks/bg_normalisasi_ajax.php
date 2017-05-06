<?php
echo"<table class='table table-striped no-margin table-hover'>
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
                             <td>".round($row_m->kelas/$row_m->max_kelas,2)."</td>
                             <td>".round($row_m->max_pot/$row_m->pot,2)."</td>
                             <td>".round($row_m->rns/$row_m->max_rns,2)."</td>
                             <td>".round($row_m->jto/$row_m->max_jto,2)."</td>
                             <td>".round($row_m->ne/$row_m->max_ne,2)."</td>
                             <td>".round($row_m->prestasi/$row_m->max_prestasi,2)."</td>
                          </tr>
                          ";
                      }
                      echo"

                       </table>
                    
                    <!-- /.box-body -->
                    <div class='box-footer clearfix'>
                    $pagination
                    </div>


";
?>