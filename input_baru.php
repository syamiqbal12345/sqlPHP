<?php
include 'masuk.php';
$full_name               = $_POST['full_name'];
$date_birth              = $_POST['date_birth'];
$tempat_lahir            = $_POST['tempat_lahir'];
$sex                     = $_POST['sex'];
$nationality             = $_POST['nationality'];
$no_paspor               = $_POST['no_paspor'];
$jenis_type              = $_POST['jenis_type'];
$code_negara             = $_POST['code_negara'];
$tgl_pengeluaran_paspor  = $_POST['tgl_pengeluaran_paspor'];
$no_reg                  = $_POST['no_reg'];
$date_expiry_paspor      = $_POST['date_expiry_paspor'];
$issuing_office          = $_POST['issuing_office'];
$query="INSERT INTO paspor VALUES ('$full_name','$date_birth','$tempat_lahir','$sex','$nationality','$no_paspor','$jenis_type','$code_negara','$tgl_pengeluaran_paspor','$no_reg','$date_expiry_paspor','$issuing_office')";
mysqli_query($dbconnect, $query);
if($dbconnect-> connect_error)
{
    echo "koneksi gagal".$dbconnect ->connect_error;

}else{
    header ("location:sukses.php");
}
?>