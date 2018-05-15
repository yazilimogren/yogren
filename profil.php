<?php
session_start();
if(!isset($_SESSION['user_session']))
{
    header("Location: index.php");
}
include("baslik.php");
include_once 'db_ayar.php';
$sql = "SELECT * FROM dersler";
$sql2 = "SELECT dersler.ders_id, konular.konular_id, konular.ders_id, dersler.ders_ad, konular.konu_ad
FROM konular
INNER JOIN dersler ON konular.ders_id = dersler.ders_id";
$stmt = $db_con->prepare("SELECT * FROM uyeler WHERE uye_id=:uid");
$sorgu = $db_con->prepare($sql);
$sorgu2 = $db_con->prepare($sql2);

$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$sorgu->execute();
$sorgu2->execute();

$row=$stmt->fetch(PDO::FETCH_ASSOC);
//$row2=$sorgu->fetch(PDO::FETCH_ASSOC);

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="profil.css">
<script src="https://cdn.ckeditor.com/4.9.2/full-all/ckeditor.js"></script>


<div class="card">
  <img src="<?php if($row["uye_resim"] == "") { echo "uyeresim/avatar.png"; }
  else { echo "uyeresim/".$row["uye_resim"]; } ?>" style="width:100%">
  <h1><?php echo $row["uye_unvan"]; ?></h1>
  <p class="title"><?php echo $row["uye_ad"]." ".$row["uye_soyad"]; ?></p>
  <p><?php echo $row["uye_universite"]; ?></p>

 <p><button>Kişi Bilgileri</button></p>
 <p><button onclick="window.location.assign('paylasim.php')">PAYLAŞTIKLARIM</button></p>
</div>

<form name="icerik-formu" id="icerik-formu" action="icerikekle.php" method="post" onsubmit="return false;">
   <div class="container">
        <div class="row">
            <div class="col-md-3">
                <select id="ders" name="ders" ng-model="ders" class="form-control">
                    <option value="">DERS</option>
                    <?php
                     while ($kayit = $sorgu -> fetch(PDO::FETCH_ASSOC))
                        {
                            echo "<option value='".$kayit["ders_id"]."'>".$kayit["ders_ad"]."</option>";
                        }
                     
                    
                    ?>
                </select>
            </div>
            <div class="col-md-3">
                <select id="konu" name="konu" ng-model="konu" class="form-control">
                	<option value="">KONU</option>
                    <option ng-repeat="konu in konular | filter:ders" value="{{konu.konular_id}}">{{konu.konu_ad}}</option>
                    
                </select>
            </div>
        </div>
        
</div>
<p></p>
<div id="sonuc">
    
</div>
    <textarea name="icerik1" id="icerik1">
        
    </textarea>
    <p></p>
    <script>
                CKEDITOR.replace( 'icerik1' );
    </script>
    <center><button style="width: 150px;" id="btn-paylas" name="btn-paylas" onclick="icerikEkle()">KAYDET</button><center>
</form>

<p></p>

<p></p>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="kategori_filtre.js"></script>
<?php
include("alt.php");
?>

