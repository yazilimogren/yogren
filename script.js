/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

$('document').ready(function()
{ 
	 /* validation */
	  $("#login-form").validate({
      rules:
	  {
			uye_parola: {
			required: true,
			},
			uye_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            uye_parola:{
                      required: "Lütfen Parolanızı Giriniz"
                     },
            uye_email: "Lütfen E-Mail Adresinizi Giriniz",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
	  		uye_ad: {
	  			required: true,
	  		},
	  		uye_soyad: {
	  			required: true,
	  		},
	  		uye_universite: {
	  			required: true,
	  		},
	  		uye_unvan: {
	  			required: true,
	  		},
			uye_parola: {
			required: true,
			maxlength: 8,
			},
			uye_parola_tekrar: {
				required: true,
				equalTo: '#uye_parola'
			},
			uye_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
	   		uye_ad:{
	   			required: "Lütfen Adınızı Giriniz"
	   		},
	   		uye_soyad:{
	   			required: "Lütfen Soyadınızı Giriniz"
	   		},
	   		uye_universite:{
	   			required: "Lütfen Üniversitenizi Giriniz"
	   		},
	   		uye_unvan:{
	   			required: "Lütfen Ünvanınızı Giriniz"
	   		},
            uye_parola:{
                required: "Lütfen Parolanızı Giriniz",
                maxlength: "Şifreniz en fazla 8 karakter olmalıdır"
            },
            uye_parola_tekrar: {
            	required: "Lütfen Parolanızı Tekrar Giriniz",
            	equalTo: "Parolanız eşleşmedi"
            },
            uye_email: "Lütfen edu.tr uzantılı E-Mail Adresinizi Giriniz",
       },
	   submitHandler: submitForm2	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#login-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'giris_yap.php',
			data : data,
			beforeSend: function()
			{	
				$("#error2").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; gönderiliyor ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; Giriş Yapılıyor ...');
						setTimeout(' window.location.href = "profil.php"; ',2000);
					}
					else{
									
						$("#error2").fadeIn(1000, function(){						
				$("#error2").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Giriş Yap');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */

	   /* kayıt */
	   function submitForm2()
	   {		
			var data = $("#register-form").serialize();

        $.ajax({

            type : 'POST',
            url  : 'kayit_ol.php',
            data : data,
            beforeSend: function()
            {
                $("#error").fadeOut();
                $("#btn-register").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; gönderiliyor ...');
            },
            success :  function(data)
            {
                if(data==1){

                    $("#error").fadeIn(1000, function(){


                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Kullanıcı Mevcut !</div>');

                        $("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Kayıt Ol');

                    });

                }
                else if(data=="kayitolundu")
                {

                    $("#btn-register").html('Kayıt Oldunuz ...');
						setTimeout(' window.location.href = "index.php"; ',2000);
                    

                }
                else{

                    $("#error").fadeIn(1000, function(){

                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

                        $("#btn-register").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Kayıt Ol');

                    });

                }
            }
        });
        return false;
    }
    /* form submit */
    $('#btn-paylas')
.click(function () {
for (var kaydet in CKEDITOR.instances) 
CKEDITOR.instances[kaydet].updateElement();
$.ajax({
type: 'POST',
url: 'icerikekle.php',
cache: false,
data: $('#icerik-formu').serialize(),
success: function (hesapCevap) {
	if (hesapCevap == "tamam") {
$('#sonuc').html("<div class='alert alert-success alert-dismissible fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Kayıt başarıyla eklendi </strong></div>");
CKEDITOR.instances[kaydet].setData('');
}
else if (hesapCevap == "bos") {
	$('#sonuc').html("İçerik alanı boş olamaz !");
}
else {
	$('#sonuc').html("Bir hata oluştu !");
}
}
});
return false;
});
	
	
	
	
	
	
});

