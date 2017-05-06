$("#form-model").validate({
      errorClass:'error',
      ignore: ":hidden:not(select)",
      onclick: false,
      rules:{
          bobot_kelas             : {required: true, min :1 , max : 10, number: true},                                       
          bobot_pot               : {required: true, min :1 , max : 10, number: true},                                                                                       
          bobot_rns               : {required: true, min :1 , max : 10, number: true},                                       
          bobot_jto               : {required: true, min :1 , max : 10, number: true},                                       
          bobot_ne                : {required: true, min :1 , max : 10, number: true},                                       
          bobot_prestasi          : {required: true, min :1 , max : 10, number: true},                                       
      },
      messages: {
          bobot_kelas: {
                required: message_alert("Bobot Kelas harus diisi. "),
          },
          bobot_pot: {
                required: message_alert("Bobot Pendapatan Orang Tua harus diisi. "),
          },          
          bobot_rns: {
                required: message_alert("Bobot Rata-rata nilai Semester harus diisi. "),
          },
          bobot_jto: {
                required: message_alert("Bobot Jumlah Tanggungan Ortu harus diisi. "),
          },
          bobot_ne: {
                required: message_alert("Bobot Nilai extra harus diisi. "),
          },
          bobot_prestasi: {
                required: message_alert("Bobot Prestasi harus diisi. "),
          },
        
         
      },
    
  }); 

function simpan(){
  if($("#form-model").valid()){   
  $.ajax({
    type: 'POST',
    data: $("#form-model").serialize(),
    url: base_url+'bobot/simpan/',
    dataType: 'JSON',
        success: function(response) {
            if (response.msg == 'sukses'){
              top.location.href = base_url+'bobot'; 
      }else{
        $.ambiance({message: "total bobot tidak boleh lebih dari 10!",
            type: "error",
            fade: false});
      
      }
    }
  });
}else{
  return;
}
}

function batal() {
   top.location.href = base_url+'index';
    //
}