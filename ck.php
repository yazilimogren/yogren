<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document)
.ready(function () {
$('#tik')
.click(function () {
for (var kaydet in CKEDITOR.instances) 
CKEDITOR.instances[kaydet].updateElement();
$.ajax({
type: 'POST',
url: 'icerikekle.php',
cache: false,
data: $('#kaydet').serialize(),
success: function (hesapCevap) {
$('#sonuc').html(hesapCevap);
}
});
return false;
});
});
</script>	
</head>
<body>
<form id="kaydet" name="kaydet" method="post">
<input type="text" name="konu">
<textarea name="ornek_1" id="ornek_1"></textarea><br />
<input type="submit" id="tik" />
</form>
<p id="sonuc"></p>
<script type="text/javascript">
CKEDITOR.replace( 'ornek_1' );	
</script>
</body>
</html>
