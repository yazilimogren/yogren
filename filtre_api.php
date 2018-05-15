<?php
require_once("db_ayar.php");

$liste = $db_con->prepare("SELECT dersler.ders_id,konular.konular_id,dersler.ders_ad, konular.konu_ad FROM konular 
INNER JOIN dersler ON konular.ders_id = dersler.ders_id");
$liste->execute();
foreach ($liste as $row)
{
    $hepsi[] = $row;
}
echo json_encode($hepsi);
?>