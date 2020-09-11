<?php
//masukkan fungsi pengiriman emailnya
require "smtpnya/pengirim_email.php";

//Menangkap inputannya
$nama = (isset($_POST['nama']))? $_POST['nama'] : null;
$nim = (isset($_POST['nim']))? $_POST['nim'] : null;
$email = (isset($_POST['email']))? $_POST['email'] : null;
$angk = (isset($_POST['angk']))? $_POST['angk'] : null;
$telp = (isset($_POST['telp']))? $_POST['telp'] : null;

if ((!empty($nama)) AND (!empty($nim)) AND (!empty($email)) AND (!empty($angk)) AND (!empty($telp))){
	$pengirim = "Hotspot Account Request";
	echo kirimemail_satu($nama,$nim,$email,$angk,$telp);
}
else {
	echo "Inputannya kosong.";
}
?>