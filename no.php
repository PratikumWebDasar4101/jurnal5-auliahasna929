<?php
if (isset($_POST['submit'])) {
	$nim=$_POST['nim'];
$nama=$_POST['Nama'];
$email=$_POST['email'];
$komentar=$_POST['Komentar'];
$hitung= count(explode(" ", $komentar));

echo "Nim :$nim";
echo "<br><br>Nama :$nama";
echo "<br><br>Email :$email";
echo "<br><br>Jumlah Kata :$hitung";

if ($hitung <5) {
	$selisih=5-$hitung;
		echo "<br><br>Error :Maaf Jumlah Kata yang masukan kurang $selisih kata :)";
	}else{
		die("<br><br>$Komentar");
	}

}

?>