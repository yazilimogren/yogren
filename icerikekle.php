<?php
session_start();
include_once("db_ayar.php");

        $konu = $_POST['konu'];
        $uye = $_SESSION['user_session'];
        $icerik = $_POST['icerik1'];
        
         
if ($icerik != "") {    
    try
    {
        
            $stmt = $db_con->prepare("INSERT INTO konuicerik(konular_id,uye_id,konu_icerik) VALUES(:konu, :uye, :icerik)");
            $stmt->bindParam(":konu",$konu);
            $stmt->bindParam(":uye",$uye);
            $stmt->bindParam(":icerik",$icerik);
            
            

            

            if($stmt->execute())
            {
                echo "tamam";
            }
            else
            {
                echo "hata";
            }


    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
else {
    echo "bos";
}

?>