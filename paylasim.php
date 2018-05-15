<?php 
session_start();
require_once("db_ayar.php");
include("baslik.php");
$stmt = $db_con->prepare("SELECT konuicerik_id, konular.konular_id, konuicerik.konular_id, konular.konu_ad, konuicerik.uye_id
FROM konuicerik
INNER JOIN konular ON konular.konular_id = konuicerik.konular_id
where uye_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$count = $stmt->rowCount();


?>

<p>
</p>

<table class="table">
	<?php

	if ($count > 0) {
		echo "<thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Konu Başlık</th>
      <th scope='col'>İŞLEM</th>
      
    </tr>
  </thead><tbody>";
  while ($kayit = $stmt -> fetch(PDO::FETCH_ASSOC)){
          echo ' 
          <tr>
      <th scope="row">'.$kayit["konuicerik_id"].'</th>
      <td>'.$kayit["konu_ad"].'</td>
      <td><a href="#">DÜZENLE</a></td>
      
    </tr>
  </tbody>
          '; 
        }
	}
	
  
  ?>
    
	
  
  
</table>

<p></p>

<?php

include("alt.php");

?>