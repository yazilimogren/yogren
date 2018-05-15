<?php
	session_start();
	require_once 'db_ayar.php';

	if(isset($_POST['btn-login']))
	{
		
		$uye_email = trim($_POST['uye_email']);
		$uye_parola = trim($_POST['uye_parola']);
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM uyeler WHERE uye_mail=:email and onay=1");
			$stmt->execute(array(":email"=>$uye_email));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if($row['uye_parola']==$uye_parola){
				
				echo "ok"; // log in
				$_SESSION['user_session'] = $row['uye_id'];
			}
			else{
				
				echo "E-mail veya parola eşleşmedi."; // wrong details 
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>