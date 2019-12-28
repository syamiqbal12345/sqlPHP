<?php
include 'masuk.php';
$nopol              = $_POST ['nopol'];
$nmpemilik          = $_POST ['nmpemilik'];
$alamat             = $_POST ['alamat'];
$merk_type          = $_POST ['merk_type'];
$jenis_model        = $_POST ['jenis_model'];
$thnbuat            = $_POST ['thnbuat'];
$thnrakit           = $_POST ['thnrakit'];
$isi_silinder       = $_POST ['isi_silinder'];
$warna              = $_POST ['warna'];
$norang_nik         = $_POST ['norang_nik'];
$nomesin            = $_POST ['nomesin'];
$nobpkb             = $_POST ['nobpkb'];
$wm_tnkb            = $_POST ['wm_tnkb'];
$bhn_bakar          = $_POST ['bhn_bakar'];
$kd_lokasi          = $_POST ['kd_lokasi'];
$jberat             = $_POST ['jberat'];
$nodaf              = $_POST ['nodaf'];
$tgberlaku          = $_POST ['tgberlaku'];
$nostnk             = $_POST ['nostnk'];
$stnk= "INSERT INTO stnk VALUES ('$nopol','$nmpemilik','$alamat','$merk_type','$jenis_model','$thnbuat','$thnrakit','$isi_silinder','$warna','$norang_nik','$nomesin','$nobpkb','$wm_tnkb','$bhn_bakar','$kd_lokasi','$jberat','$nodaf','$tgberlaku','$nostnk')";
mysqli_query($dbconnect, $stnk);
if($dbconnect-> connect_error)
{
    echo "koneksi gagal".$dbconnect ->connect_error;

}else{
    header ("location:sukses.php");
}
?>