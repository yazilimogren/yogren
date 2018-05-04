/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Kayıt Ol');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Giriş');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

function loginAjax(){
       //Remove this comments when moving to server
       
    $.post( "/login.php", function( data ) {
            if(data == 1){
                window.location.replace("/index.php");            
            } else {
                 shakeModal(); 
            }
        });
    

/*   Simulate error message from the server   */
    // shakeModal();
}

function kayit()//fonksiyon adı

{

var ad = $("input[name=ad]").val();

var soyad = $("input[name=soyad]").val();

var tel = $("input[name=tel]").val();//formdan gönderilen değerleri çekip değişkenlere aktardık

if (ad=="" || soyad=="" || tel=="")//değişkenler boş mu kontrol ettik

{

$('#basarisiz').show(1);

$('#kayit').hide(1);

}else

{

$.ajax ({ //ajaxı oluşturduk

type: "POST",

url: "uyeol.php",

data: $("#form1").serialize(),

success: function (sonuc) {

if (sonuc == "hata") {

alert ("veritabanına bağlanamadık");

}else {

$('#kayit').show(1);

$('#basarisiz').hide(1);

$("input[name=ad]").val("");

$("input[name=soyad]").val("");

$("input[name=tel]").val("");//input textlerin boşalttık

}

}

}) }} 

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Geçersiz e-posta veya parola !");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

   