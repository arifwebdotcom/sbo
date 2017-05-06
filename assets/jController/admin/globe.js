
function change_password(selection,url) {
    if ($("#"+selection).valid()) {
        $.ajax({
            type    : "POST",
            url     : base_url+url,
            data    : $("#"+selection).serialize(),
            dataType: 'json',
            success : function(response){
                if (response.msg == "success") {
                    notif(lang.notif('wja30'),'success');
                    $('#'+selection)[0].reset();
                    $("label.error").hide();
                    $(".modal").modal("hide");
                }else{
                    
                }
            },
            error : function(){
                
            }
        });
    }
}
$(function(){
		//select active nav
	var link=window.location;
	$('ul.nav li a[href="'+link+'"]').parent().addClass("active");
	
	//pagination
	
	$(document).on('click','.pagination li a',function() {
		var url = $(this).attr('href');		
		$.ajax({
			type	: 'POST',
			data	: 'ajax=1',
			url		: url,
			success: function(msg) {				
                $('#div-paging').html(msg);
				//$('#page').html(msg1);
				checkall();
				//checkAll();
			}
		});
		return false;
	});	
		
    $(document).on('click','#pagination-4 li a',function() {
        var url = $(this).attr('href');     
        $.ajax({
            type    : 'POST',
            data    : 'ajax=2',
            url     : url,
            success: function(msg) {                
                $('#div-paging1').html(msg);
                //$('#page').html(msg1);
                //checkall();
                checkAll();
            }
        });
        return false;
    }); 
        
	//checkall cehckbox
	$("table").on('click', '#checkall', function () {
		$(this).parents('table:eq(0)').find(':checkbox').prop('checked', this.checked);
	});
});
$(document).ready(function() {
		/*NUMBER FORMAT*/
	$("input.rupiah").priceFormat({	    
	    limit: 18,
    	centsLimit: 2,
		centsSeparator: ",",
    	thousandsSeparator: ".",
    	prefix: "Rp. ",
	});
	/*NUMBER FORMAT*/
});

function checkall(args) {
    $("table").on('click', '#checkall', function () {
        $(this).parents('table:eq(0)').find(':checkbox').prop('checked', this.checked);
    });
}

function delete_table(url) {
    var values =   $('input:checkbox:checked.checkboxDelete').map(function (){
        return this.value;
    }).get();
    if(values == ""){
        //$(".box-header").html("Konfirmasi");
        $("#body_delete > p").html("Tidak ada data yang dipilih");
        $("#delete_cancel").hide(); 
        $("#delete_ok").hide();
    }else{
        //$(".box_header").html("Konfirmasi");
        $("#delete_cancel").show(); 
        $("#body_delete > p").html("Apakah anda yakin untuk menghapus data ini ?");
        $("#delete_ok").show().attr("onclick","delete_data('"+values+"','"+url+"')");
    }
}

function delete_table_bm(url) {
    var values =   $('input:checkbox:checked.checkboxDelete').map(function (){
        return this.value;
    }).get();
    if(values == ""){
        //$(".box-header").html("Konfirmasi");
        $("#body_delete > p").html("Tidak ada data yang dipilih");
        $("#delete_cancel").hide(); 
        $("#delete_ok").hide();
    }else{
        //$(".box_header").html("Konfirmasi");
        $("#delete_cancel").show(); 
        $("#body_delete > p").html("Data Status <b>CHECKED</b> tidak dapat dihapus. Apakah anda ingin melanjutkan untuk menghapus data ini ? ");
        $("#delete_ok").show().attr("onclick","delete_data('"+values+"','"+url+"')");
    }
}
function delete_table_sb(url) {
    var values =   $('input:checkbox:checked.checkboxDelete').map(function (){
        return this.value;
    }).get();
    if(values == ""){
        //$(".box-header").html("Konfirmasi");
        $("#body_delete > p").html("Tidak ada data yang dipilih");
        $("#delete_cancel").hide(); 
        $("#delete_ok").hide();
    }else{
        //$(".box_header").html("Konfirmasi");
        $("#delete_cancel").show(); 
        $("#body_delete > p").html("Apakah anda yakin untuk menghapus data ini ?");
        $("#delete_ok").show().attr("onclick","delete_data_sb('"+values+"','"+url+"')");
    }
}

function delete_table_br(url) {
    var values =   $('input:checkbox:checked.checkboxDelete').map(function (){
        return this.value;
    }).get();
    if(values == ""){
        //$(".box-header").html("Konfirmasi");
        $("#body_delete > p").html("Tidak ada data yang dipilih");
        $("#delete_cancel").hide(); 
        $("#delete_ok").hide();
    }else{
        //$(".box_header").html("Konfirmasi");
        $("#delete_cancel").show(); 
        $("#body_delete > p").html("Apakah anda yakin untuk menghapus data ini ?");
        $("#delete_ok").show().attr("onclick","delete_data_br('"+values+"','"+url+"')");
    }
}

//del select
function delete_data(values,url) {
    $.ajax({
        type    : "POST",
        url     : base_url+url,
        data    : {delete:values},
        success : function(){    
                location.reload();        
        },
        error : function(){
            
        }
    });
}

function delete_data_sb(values,url) {
    $.ajax({
        type    : "POST",
        url     : base_url+url,
        data    : {delete:values},
        dataType: 'json',
        success : function(response){    
            if(response.msg == "gagal"){                
                $.ambiance({message: "Satuan "+response.nama+" tidak dapat dihapus karena sedang digunakan!",
                type: "error",
                fade: false});  
                location.reload();
            }else{
                location.reload();
            }        
        }
    });
}

function delete_data_br(values,url) {
    $.ajax({
        type    : "POST",
        url     : base_url+url,
        data    : {delete:values},
        dataType: 'json',
        success : function(response){    
            if(response.msg == "gagal"){                
                $.ambiance({message: "Bahan tidak dapat dihapus karena sedang digunakan!",
                type: "error",
                fade: false});  
                location.reload();
            }else{
                location.reload();
            }        
        }
    });
}


function searchdt(id,url) {
    $.ajax({
        type    : 'POST',
        data    : 'search='+$(id).val(),
        url     : base_url+url,
        success: function(msg) {
            $('#div-paging').html(msg);
         checkall();
        }
    });
}

function searchitemsurat(id,url) {
    var surat_jalan_search = $('#surat_jalan_search').val();
    $.ajax({
        type    : 'POST',
        data    : 'search='+$(id).val()+'&surat_jalan_search='+surat_jalan_search,
        url     : base_url+url,
        success: function(msg) {
            $('#div-paging').html(msg);
         //   checkAll();
        }
    });
}

function searchdetail(id,url,id_inventory) {
    $.ajax({
        type    : 'POST',
        data    : 'search='+$(id).val()+'&id_inventory='+id_inventory,
        url     : base_url+url,
        success: function(msg) {
            $('#div-paging').html(msg);
         //   checkAll();
        }
    });
}

function searchdtt(id,url) {
    $.ajax({
        type    : 'POST',
        data    : 'search='+$(id).val(),
        url     : base_url+url,
        success: function(msg) {
            $('#div-paging1').html(msg);
         //   checkAll();
        }
    });
}

function checkall(args) {
    $("table").on('click', '#checkall', function () {
        $(this).parents('table:eq(0)').find(':checkbox').prop('checked', this.checked);
    });
}