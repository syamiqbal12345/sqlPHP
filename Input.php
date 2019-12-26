<?php
include 'masuk.php';
$full_name               = $_POST['nama'];
$date_birth              = $_POST['lahir'];
$tempat_lahir            = $_POST['tempat'];
$sex                     = $_POST['kelamin'];
$nationality             = $_POST['negara'];
$no_paspor               = $_POST['nopass'];
$jenis_type              = $_POST['tipe'];
$code_negara             = $_POST['code'];
$tgl_pengeluaran_paspor  = $_POST['tglup'];
$no_reg                  = $_POST['regis'];
$date_expiry_paspor      = $_POST['experied'];
$issuing_office          = $_POST['kantor'];
$query="INSERT INTO paspor SET nama='$full_name', lahir='$date_birth',tempat='$tempat_lahir',tempat='$tempat_lahir', kelamin = '$sex',negara = '$nationality', nopass= '$no_paspor',tipe= '$jenis_type', code = '$code_negara', tglup = '$tgl_pengeluaran_paspor', regis ='$no_reg', experied = '$date_expiry_paspor',kantor = '$issuing_office' ";
$input= mysqli_query($dbconnect, $query);
if(!$input) {
    die ("query gagal dijalankan: ".mysqli_errno($dbconnect). " - ".mysqli_error($dbconnect));
}
header("location:register.php");
?>