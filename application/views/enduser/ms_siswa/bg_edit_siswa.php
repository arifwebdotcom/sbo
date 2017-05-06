<?php
echo"
<div class='content-wrapper'>
    <section class='content'>
           
           <div class='row'>
              <div class='col-xs-12'>
                 <div class='box'>
                    <div class='box-header'>
                       <h3 class='box-title'>Edit Siswa</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class='box-body'>
                    <form role='form' id='form-model' name='form-model' enctype='multipart/form-data' method='post'>
                      <div class='col-xs-12 col-md-6'>                                          
                        <div class='form-group'>
                           <label for='nama'>Nama Siswa :</label>
                           <input type='hidden' name='nis' id='nis' value='".$siswa->row()->nis."'>
                           <input type='text' class='form-control' id='nama' name='nama' maxlength='30' value='".$siswa->row()->nama."'>
                        </div>                      
                        <div class='form-group'>
                           <label for='kelas' >Kelas :</label>
                           <select name='kelas' id='kelas' class='form-control'>
                            <option value='10' "; if($siswa->row()->kelas == "10" ){echo "selected";}else{} echo ">10</option>
                            <option value='11' "; if($siswa->row()->kelas == "11" ){echo "selected";}else{} echo ">11</option>
                            <option value='12' "; if($siswa->row()->kelas == "12" ){echo "selected";}else{} echo ">12</option>
                           </select>
                        </div>                      
                        <div class='form-group'>
                           <label for='pot'>Pendapatan Orang Tua :</label>
                           <input type='text' class='form-control' id='pot' name='pot' maxlength='30' value='".$siswa->row()->pot."'>
                        </div>                      
                        <div class='form-group'>
                           <label for='rns'>Rata-rata Nilai Semester :</label>
                           <input type='text' class='form-control' id='rns' name='rns' maxlength='30' value='".$siswa->row()->rns."'>
                        </div>                      
                        <div class='form-group'>
                           <label for='jto'>Jumlah Tanggungan Orang Tua :</label>
                           <input type='number' class='form-control' id='jto' name='jto' maxlength='30' value='".$siswa->row()->jto."'>
                        </div>                      
                        <div class='form-group'>
                           <label for='ne'>Nilai Extra :</label>
                           <input type='text' class='form-control' id='ne' name='ne' maxlength='30' value='".$siswa->row()->ne."'>
                        </div>                      
                        <div class='form-group'>
                           <label for='prestasi'>prestasi :</label>
                           <input type='text' class='form-control' id='prestasi' name='prestasi' maxlength='30' value='".$siswa->row()->prestasi."'>
                        </div>
                      </div>
                   </div>

                   <div class='box-footer'>
                     <button type='button' class='btn btn-lg btn-default' onclick=javascript:batal();>Batal</button>
                     
                        <button type='submit' class='btn btn-lg btn-info' onclick=javascript:edit_model(); >Simpan</button>
                   </div>
                 </div>
                 <!-- /.box -->
              </div>
           </div>
           </form>
        </section>
 </div>
";
?>