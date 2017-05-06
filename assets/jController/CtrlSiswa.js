$("#form-model").validate({
      errorClass:'error',
      ignore: ":hidden:not(select)",
      onclick: false,
      rules:{
          nis               : {required: true},                                       
          nama              : {required: true},                                       
          pot               : {required: true},                                       
          rns               : {required: true, min :1 , max : 100, number: true},                                       
          jto               : {required: true},                                       
          ne                : {required: true, min :1 , max : 100, number: true},                                       
          prestasi          : {required: true, min :1 , max : 10, number: true},                                       
      },
      messages: {
          nis: {
                required: message_alert("NIS harus diisi. "),
          },
          nama: {
                required: message_alert("Nama Siswa harus diisi. "),
          },
          pot: {
                required: message_alert("Pendapatan Orang Tua harus diisi. "),
          },
          rns: {
                required: message_alert("Rata-rata nilai Semester harus diisi. "),
          },
          jto: {
                required: message_alert("Jumlah Tanggungan Ortu harus diisi. "),
          },
          ne: {
                required: message_alert("Nilai extra harus diisi. "),
          },
          prestasi: {
                required: message_alert("Prestasi harus diisi. "),
          },
        
         
      },
    
  }); 

function simpan_model(){
var nama_model = $('#nama_model').val();

$.ajax({
 type: 'POST',
        data: 'nama_model='+nama_model,
       url: base_url+'ms_model/save_model',
        success: function(msg) {
            if (msg != 0){
              //top.location.href = base_url+'prospek/detail/'+id_lead;
              top.location.href = base_url+'ms_model/index';
                
            }else{

            }           
        } 


    });
}



function simpan_model_add() {
    var nama_model = $('#nama_model').val();
    //
    $.ajax({
        type: 'POST',
        data: 'nama_model='+nama_model,
        url: base_url+'ms_model/save_model',
        success: function(msg) {
          if(msg == 1){
             $('#nama_model').val('');
          }else{

          }
        } 
    });
}

function edit_model() {
    var nama_model = $('#nama_model').val();
    var id_model = $('#id_model').val();
    //
    $.ajax({
        type: 'POST',
        data: 'nama_model='+nama_model+'&id_model='+id_model,
        url: base_url+'ms_model/editt_model',
        success: function(msg) {
          if(msg == 1){
            top.location.href = base_url+'ms_model/index';
          }else{

          }
        } 
    });
}

function batal() {
   top.location.href = base_url+'siswa/index';
    //
}

