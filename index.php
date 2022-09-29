
<?php


if($_GET["parselno"]){  // eğer girdi adında bir GET varsa
                $degisken = $_GET["parselno"]; // GET değerini değişkene aktarıyoruz
		
}

if($_GET["parselno1"]){  // eğer girdi adında bir GET varsa
                $degisken2 = $_GET["parselno1"]; // GET değerini değişkene aktarıyoruz
		 echo $degisken2;
}



$url = "https://cbsapi.tkgm.gov.tr/megsiswebapi.v3/api/parsel/$degisken/$degisken2/";
$icerik = file_get_contents($url);
echo($icerik);

echo "<br>";
echo "<br>";

$ekranayazdir=explode('"parselId":',$icerik);
$ekranayazdir=explode(",",$ekranayazdir[1]);
echo $ekranayazdir[0];


	header("Location: https://cbsapi.tkgm.gov.tr/megsiswebapi.v3/api/parsel/download/$ekranayazdir[0]/dxf"); 


?>


