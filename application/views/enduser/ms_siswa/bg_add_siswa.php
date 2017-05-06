<?php
echo"
<div class='content-wrapper'>
    <section class='content'>
           
           <div class='row'>
              <div class='col-xs-12'>
                 <div class='box'>
                    <div class='box-header'>
                       <h3 class='box-title'>Tambah Siswa</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class='box-body'>
                     <form role='form' id='form-model' name='form-model' enctype='multipart/form-data' method='post' action='".base_url("siswa/save_siswa")."'>
                      <div class='col-xs-12 col-md-7'>
                      
                                           
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='nama'>Nama Siswa :</label>
                           <input type='text' class='form-control' id='nama' name='nama' maxlength='30' placeholder='Enter Nama Siswa'>
                        </div>             
                        </div>
                        <hr>    
                        <div class='col-xs-12 col-md-7'>
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='kelas' >Kelas :</label>
                           <select name='kelas' id='kelas' class='form-control'>
                            <option value='10'>10</option>
                            <option value='11'>11</option>
                            <option value='12'>12</option>
                           </select>                            
                        </div>  
                              
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='pot'>Pendapatan Orang Tua :</label>
                           <input type='text' class='form-control' id='pot' name='pot' maxlength='30' placeholder='ex 2000000'>
                        </div>                                             
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='rns'>Rata-rata Nilai Semester :</label>
                           <input type='text' class='form-control' id='rns' name='rns' maxlength='30' placeholder='1 - 100'>
                        </div>                                           
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='jto'>Jumlah Tanggungan Orang Tua :</label>
                           <input type='number' class='form-control' id='jto' name='jto' maxlength='30' placeholder='1'>
                        </div> 
                              
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='ne'>Nilai Extra :</label>
                           <input type='text' class='form-control' id='ne' name='ne' maxlength='30' placeholder='1 - 100'>
                        </div>                                             
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='prestasi'>prestasi :</label>
                           <input type='text' class='form-control' id='prestasi' name='prestasi' maxlength='30' placeholder='1 - 10'>
                        </div>                       
                      </div>
                   </div>

                   <div class='box-footer'>
                     <button type='button' class='btn btn-lg btn-default' onclick=javascript:batal();>Batal</button>
                     <button type='submit' class='btn btn-lg btn-info'>Simpan</button>                     
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