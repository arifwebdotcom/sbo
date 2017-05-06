<?php
echo"
<div class='content-wrapper'>
    <section class='content'>
           
           <div class='row'>
              <div class='col-xs-12'>
                 <div class='box'>
                    <div class='box-header'>
                       <h3 class='text-center'><b>BOBOT</b></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class='box-body'>
                     <form role='form' id='form-model' name='form-model' enctype='multipart/form-data' method='post' >
                      <div class='col-xs-12 col-md-7'>              ";
                      if($bobot->num_rows() > 0){
                      echo "          
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_kelas'>Bobot Kelas:</label>
                           <input type='hidden' id='id_bobot' name='id_bobot' value='".$bobot->row()->id."'>
                           <input type='text' class='form-control' id='bobot_kelas' name='bobot_kelas' maxlength='30' placeholder='1 - 10' value='".$bobot->row()->b_kelas."'>
                        </div>                       
                                            
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_pot'>Bobot POT:</label>
                           <input type='text' class='form-control' id='bobot_pot' name='bobot_pot' maxlength='30' placeholder='1 - 10' value='".$bobot->row()->b_pot."'>
                        </div>  
                                           
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_rns'>Bobot RNS:</label>
                           <input type='text' class='form-control' id='bobot_rns' name='bobot_rns' maxlength='30' placeholder='1 - 10' value='".$bobot->row()->b_rns."'>
                        </div>    
                       
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_jto'>Bobot JTO:</label>
                           <input type='text' class='form-control' id='bobot_jto' name='bobot_jto' maxlength='30' placeholder='1 - 10' value='".$bobot->row()->b_jto."'>
                        </div>                       
                                            
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_ne'>Bobot Nilai Extra:</label>
                           <input type='text' class='form-control' id='bobot_ne' name='bobot_ne' maxlength='30' placeholder='1 - 10' value='".$bobot->row()->b_rns."'>
                        </div>  
                       
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_prestasi'>Bobot Prestasi :</label>
                           <input type='text' class='form-control' id='bobot_prestasi' name='bobot_prestasi' maxlength='30' placeholder='1 - 10' value='".$bobot->row()->b_prestasi."'>
                        </div>  ";
                      }else{
                         echo "          
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_kelas'>Bobot Kelas:</label>
                           <input type='hidden' id='id_bobot' name='id_bobot' value='baru'>
                           <input type='text' class='form-control' id='bobot_kelas' name='bobot_kelas' maxlength='30' placeholder='1 - 10'>
                        </div>                       
                                            
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_pot'>Bobot POT:</label>
                           <input type='text' class='form-control' id='bobot_pot' name='bobot_pot' maxlength='30' placeholder='1 - 10'>
                        </div>  
                                           
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_rns'>Bobot RNS:</label>
                           <input type='text' class='form-control' id='bobot_rns' name='bobot_rns' maxlength='30' placeholder='1 - 10'>
                        </div>    
                       
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_jto'>Bobot JTO:</label>
                           <input type='text' class='form-control' id='bobot_jto' name='bobot_jto' maxlength='30' placeholder='1 - 10'>
                        </div>                       
                                            
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_ne'>Bobot Nilai Extra:</label>
                           <input type='text' class='form-control' id='bobot_ne' name='bobot_ne' maxlength='30' placeholder='1 - 10'>
                        </div>  
                       
                        <div class='form-group col-xs-12 col-md-10'>
                           <label for='bobot_prestasi'>Bobot Prestasi :</label>
                           <input type='text' class='form-control' id='bobot_prestasi' name='bobot_prestasi' maxlength='30' placeholder='1 - 10'>
                        </div>  ";
                      }
                        echo "
                      </div>
                    </div>

                   <div class='box-footer'>
                     <button type='button' class='btn btn-lg btn-default' onclick=javascript:batal();>Batal</button>
                     <button type='button' class='btn btn-lg btn-info' onclick=javascript:simpan();>Simpan</button>                     
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