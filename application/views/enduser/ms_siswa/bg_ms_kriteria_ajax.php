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


";
?>