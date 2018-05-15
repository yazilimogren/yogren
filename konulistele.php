<?php include("baslik.php"); require_once("db_ayar.php"); 
$stmt = $db_con->prepare("SELECT konuicerik_id, konular.konular_id, konuicerik.konular_id, konular.konu_ad, konuicerik.uye_id, konu_icerik
FROM konuicerik
INNER JOIN konular ON konular.konular_id = konuicerik.konular_id
where konuicerik_id=:icerikid");
$stmt->execute(array(":icerikid"=>11));
$kayit = $stmt -> fetch(PDO::FETCH_ASSOC);

echo $kayit["konu_ad"]."<br>";
echo $kayit["konu_icerik"];
?>





<?php include("alt.php"); ?>