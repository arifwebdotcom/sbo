<?php
echo"
<div class='content-wrapper'>
 <section class='content'>
           <div class='box'>
             <div class='box-header text-center'>
                <h3><b>HASIL PERANGKINGAN</b></h3>
             </div>
             <div class='box-body table-responsive ' id='div-paging'>
               <table class='table table-striped no-margin table-hover'>
                          <tr>                                                          
                             <th>NIS</th>
                             <th>Nama Siswa</th> 
                             <th>Rangking</th>                            
                             <th>Nilai</th>                             
                          </tr>";                         
                          
                          foreach($siswa->result() as $row_m){
                            $nilai = (round($row_m->kelas/$row_m->max_kelas,2)*$bobot->b_kelas)+(round($row_m->max_pot/$row_m->pot,2)*$bobot->b_pot)+(round($row_m->rns/$row_m->max_rns,2)*$bobot->b_rns)+(round($row_m->jto/$row_m->max_jto,2)*$bobot->b_jto)+(round($row_m->ne/$row_m->max_ne,2)*$bobot->b_ne)+(round($row_m->prestasi/$row_m->max_prestasi,2)*$bobot->b_prestasi);                            
                            //echo $nilai;
                            $data[] = array("nis"=>$row_m->nis, "nama" =>$row_m->nama, "nilaii"=> $nilai,"kelas"=>$row_m->kelas,"max_kelas"=>$row_m->max_kelas,"pot"=>$row_m->pot,"max_pot"=>$row_m->max_pot,"rns"=>$row_m->rns,"max_rns"=>$row_m->max_rns,"jto"=>$row_m->jto,"max_jto"=>$row_m->max_jto,"ne"=>$row_m->ne,"max_ne"=>$row_m->max_ne,"prestasi"=>$row_m->prestasi,"max_prestasi"=>$row_m->max_prestasi);                           
                          }

                          foreach ($data as $param => $row) {
                              $nis[$param]  = $row["nis"];
                              $nama[$param] = $row["nama"];
                              $nilaii[$param] = $row["nilaii"];
                             // echo $row["nilaii"];
                          }
                          array_multisort($nilaii, SORT_DESC, $data);
                          $noo = 0;
                          foreach($data as $row_m){
                            //$nilai = (round($row_m['kelas']/$row_m['max_kelas'],2)*$bobot->b_kelas)+(round($row_m['max_pot']/$row_m['pot'],2)*$bobot->b_pot)+(round($row_m['rns']/$row_m['max_rns'],2)*$bobot->b_rns)+(round($row_m['jto']/$row_m['max_jto'],2)*$bobot->b_jto)+(round($row_m['ne']/$row_m['max_ne'],2)*$bobot->b_ne)+(round($row_m['prestasi']/$row_m['max_prestasi'],2)*$bobot->b_prestasi);
                            // /$ar[$noo] == $nilai;
                            $noo++;

                            echo"
                          <tr>                                                        
                             <td>".$row_m['nis']."</td>
                             <td>".$row_m['nama']."</td>  
                             <td>$noo</td>                           
                             <td>".$row_m['nilaii']."</td>
                             
                          </tr>
                          ";
                      }
                      echo"

                       </table>
             </div>
           </div>

        </section>
        <!-- /.content -->
</div>
";
?>