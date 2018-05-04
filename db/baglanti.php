<?php

$mysql_host="94.138.203.35"; //bağlantı kodları

$mysql_kullaniciadi="proje2";

$mysql_sifre="Sivas5858";

$mysql_vtadi="muhendislik";

$baglan= @mysql_connect($mysql_host,$mysql_kullaniciadi,$mysql_sifre);

mysql_query("SET NAMES UTF8");

if(! $baglan) die ("mysql bağlantısında hata oluştu");

mysql_select_db($mysql_vtadi,$baglan) or die ("veritabanına bağlanırken hata oluştu");

?>