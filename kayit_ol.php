<?php
	session_start();
	require_once 'db_ayar.php';

	if(isset($_POST['btn-register']))
	{
		$uye_ad = trim($_POST['uye_ad']);
		$uye_soyad = trim($_POST['uye_soyad']);
		$uye_universite = trim($_POST['uye_universite']);
		$uye_unvan = trim($_POST['uye_unvan']);
		$uye_email = trim($_POST['uye_email']);
		$uye_parola = trim($_POST['uye_parola']);
		 
    
    try
    {
        $stmt = $db_con->prepare("SELECT * FROM uyeler WHERE uye_mail=:email");
        $stmt->execute(array(":email"=>$uye_email));
        $count = $stmt->rowCount();
        
        if($count==0){
            $stmt = $db_con->prepare("INSERT INTO uyeler(uye_ad,uye_soyad,uye_universite,uye_unvan,uye_mail,uye_parola) VALUES(:ad, :soyad, :universite, :unvan,:email,:parola)");
            $stmt->bindParam(":ad",$uye_ad);
            $stmt->bindParam(":soyad",$uye_soyad);
            $stmt->bindParam(":universite",$uye_universite);
            $stmt->bindParam(":unvan",$uye_unvan);
            $stmt->bindParam(":email",$uye_email);
            $stmt->bindParam(":parola",$uye_parola);
            

            

            if($stmt->execute())
            {
                echo "kayitolundu";
            }
            else
            {
                echo "Sorgu hatası !";
            }

        }
        else{

            echo "1"; //  not available
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

	}

?>
