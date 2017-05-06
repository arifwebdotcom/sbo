(function($){
  $(function(){

   /* $( "#next_sign" ).click(function() {
      $( ".box-password" ).slideToggle("slow");
      $( ".box-username" ).hide("slow");
    });*/

    

   

  }); // end of document ready
})(jQuery);


function nextt(e){
   if (e.which == 13) {
    next();
  }
}

function loginn(e){
   if (e.which == 13) {
    login();
  }
}

function next(){
  var username = $('#username').val();
  $.ajax({
    type: 'POST',
    data: "username="+username,
    url: base_url+'index/cekusername/',
    dataType: 'JSON',
        success: function(response) {
      if (response.msg == 'sukses'){
            $( "#usn" ).html($( "#username" ).val());
            $( "#usern" ).val($( "#username" ).val());
            $( ".box-password" ).slideToggle("slow");
            $( ".box-username" ).hide("slow");
            $("#password").focus();
      }else{
            $.ambiance({message: "Username tidak terdaftar!",
            type: "error",
            fade: false});
      }
    }
  });
}

function login(){
  var username = $('#username').val();
  var password = $('#password').val();
  $.ajax({
    type: 'POST',
    data: "username="+username+"&password="+password,
    url: base_url+'index/signin/',
    dataType: 'JSON',
        success: function(response) {
            if (response.msg == 'sukses'){
              top.location.href = base_url+'index'; 
      }else{
        $.ambiance({message: "Username / Password anda salah!",
            type: "error",
            fade: false});
      
      }
    }
  });
}