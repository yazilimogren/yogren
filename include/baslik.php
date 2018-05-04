
<!DOCTYPE html>
<html>
<head>
  <title>yazilim-ogren.com</title>
  
  <link rel="stylesheet" type="text/css" href="css/stilim.css"/>
        <!-- En son derlenmiş ve minimize edilmiş CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Opsiyonel tema -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<!-- En son derlenmiş ve minimize edilmiş JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <style>body{padding-top: 60px;}</style>
        
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
 
        <link href="css/login-register.css" rel="stylesheet" />
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        
        <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
        <script src="js/login-register.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/script.js"></script>
</head>
<body>    
 <div class="modal fade login" id="loginModal">
                      <div class="modal-dialog login animated">
                      <div class="modal-content">
                         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Giriş</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">                     
                              
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="/login.php" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="text" placeholder="E-Posta" name="email">
                                    <input id="password" class="form-control" type="password" placeholder="Parola" name="password">
                                    <input class="btn btn-default btn-login" type="button" value="Giriş" onclick="loginAjax()" id="btn-login" name="btn-login">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" onsubmit="return false" accept-charset="UTF-8">
                                <input id="ad" class="form-control" type="text" placeholder="AD">
                                <input id="soyad" class="form-control" type="text" placeholder="SOYAD">
                                <input id="email" class="form-control" type="text" placeholder="E-POSTA" name="email">                               
                                <input id="universite" class="form-control" type="text" placeholder="ÜNİVERSİTE" name="universite">
                                 <input id="unvan" class="form-control" type="text" placeholder="ÜNVAN" name="unvan">
                                  <input id="password_confirmation" class="form-control" type="password" placeholder="PAROLA" name="password_confirmation">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="PAROLA TEKRAR" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="ÜYE OL" name="btn-register" id="btn-register" onclick="kayit()">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Üye değil misiniz?
                                 <a href="javascript: showRegisterForm();">Üye Ol</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Bir hesabınız var mı?</span>
                             <a href="javascript: showLoginForm();">Giriş</a>
                        </div>
                    </div>        
                      </div>
                      </div>
</div>                
	<div class="wrapper">
		<div class="baslik">
			<div class="baslikWrap1"><a href="">Yazılım Öğren</a></div>
			<div class="baslikWrap2">
				<div class="baslikWrap3"><a href="index.php">Ana Sayfa</a></div>
				<div class="baslikWrap3"><a href=""><span class="baslikyazitip">Hakkımızda</span></a></div>
				<div class="baslikWrap3"><a data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();"><span class="baslikyazitip">Üye Ol</span></a></div>
				<div class="baslikWrap3"><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();"><span class="baslikyazitip">GİRİŞ</span></a></div>
			</div>
		</div>