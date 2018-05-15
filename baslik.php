<?php
session_start();
?>
<!DOCTYPE html>
<html ng-app="App">
<head>
	<title>yazilim-ogren.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link href="stilim.css" rel="stylesheet" />

	<link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
	<script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="script.js"></script>
</head>
<body ng-controller="AppController">

<!-- Kayıt Formu Başı -->
<div class="modal fade" id="kayitModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="signin-form">

  <div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Yazılım Öğren Kayıt Sayfası</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Ad" name="uye_ad" id="uye_ad" />
        <span id="check-e"></span>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Soyad" name="uye_soyad" id="uye_soyad" />
        <span id="check-e"></span>
        </div>
        <div class="form-group">
        <input type="email" class="form-control" placeholder="E-mail" name="uye_email" id="uye_email" />
        <span id="check-e"></span>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Üniversite" name="uye_universite" id="uye_universite" />
        <span id="check-e"></span>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Ünvan" name="uye_unvan" id="uye_unvan" />
        <span id="check-e"></span>
        </div>
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Parola" name="uye_parola" id="uye_parola" />
        </div>
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Parola" name="uye_parola_tekrar" id="uye_parola_tekrar" />
        </div>
        
      <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-register" id="btn-register">
        <span class="glyphicon glyphicon-log-in"></span> &nbsp; Kayıt Ol
      </button> 
        </div>  
      
      </form>

    </div>
    
</div>
</div>
<!--Kayıt Formu sonu -->

<!-- Giriş Formu Başı -->
<div class="modal fade" id="girisModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="signin-form">

  <div class="container">
     
        
       <form class="form-signin" method="post" id="login-form" enctype="multipart/form-data">
      
        <h2 class="form-signin-heading">Yazılım Öğren Giriş Sayfası</h2><hr />
        
        <div id="error2">
        <!-- error will be shown here ! -->
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="E-mail" name="uye_email" id="uye_email" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Parola" name="uye_parola" id="uye_parola" />
        </div>
       
      <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
        <span class="glyphicon glyphicon-log-in"></span> &nbsp; Giriş Yap
      </button> 
        </div>  
      
      </form>

    </div>
    
</div>
</div>
<!--Giriş Formu sonu -->
<div class="wrapper">
		<div class="baslik">
			<div class="baslikWrap1"><a href="">Yazılım Bilimi</a></div>
			<div class="baslikWrap2">
				<div class="baslikWrap3"><a href="index.php">Ana Sayfa</a></div>
				<div class="baslikWrap3"><a href="hakkimizda.php"><span class="baslikyazitip">Hakkımızda</span></a></div>
                <?php
                if (isset($_SESSION['user_session'])!="") {
                    echo "<div class='baslikWrap3'><a href='profil.php' ><span class='baslikyazitip'>Profilim</span></a></div>";
                    echo "<div class='baslikWrap3'><a href='cikis_yap.php' ><span class='baslikyazitip'>Çıkış Yap</span></a></div>";
                }
                else {
				echo "<div class='baslikWrap3'><a href='#' data-toggle='modal' data-target='#kayitModal'><span class='baslikyazitip'>Üye Ol</span></a></div>
				<div class='baslikWrap3'><a href='#' data-toggle='modal' data-target='#girisModal'><span class='baslikyazitip'>GİRİŞ</span></a></div>";
                }
                ?>
			</div>
		</div>