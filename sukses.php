<?php
include "masuk.php";
$query = mysqli_query($dbconnect,"SELECT * FROM stnk ORDER BY nopol DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="1" cellspacing="1">
        <link href="style.css" rel="stylesheet" type="text/css">
        <tr>
            <th>No</th>
            <th>No Polisi</th>
            <th>Nama Pemilik</th>
            <th>Alamat</th>
            <th>Merek/Type</th>
            <th>Jenis/Model</th>
            <th>Tahun Buat</th>
            <th>Tahun Rakit</th>
            <th>Isi Silinder</th>
            <th>Warna</th>
            <th>No Rangka</th>
            <th>No Mesin</th>
            <th>No BPKB</th>
            <th>SWDKLLJ</th>
            <th>Bahan Bakar</th>
            <th>Kode Lokasi</th>
            <th>Berat Kendaraan</th>
            <th>No Kohir</th>
            <th>Tanggal Berlaku</th>
            <th>No STNK</th>
        </tr>
        <?php /*if(($query)>0){ */?>
            <?php
            $no = 1;
            while($stnk = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $stnk["nopol"];?></td>
                    <td><?php echo $stnk["nmpemilik"];?></td>
                    <td><?php echo $stnk["alamat"];?></td>
                    <td><?php echo $stnk["merk_type"];?></td>
                    <td><?php echo $stnk["jenis_model"];?></td>
                    <td><?php echo $stnk["thnbuat"];?></td>
                    <td><?php echo $stnk["thnrakit"];?></td>
                    <td><?php echo $stnk["isi_silinder"];?></td>
                    <td><?php echo $stnk["warna"];?></td>
                    <td><?php echo $stnk["norang_nik"];?></td>
                    <td><?php echo $stnk["nomesin"];?></td>
                    <td><?php echo $stnk["nobpkb"];?></td>
                    <td><?php echo $stnk["wm_tnkb"];?></td>
                    <td><?php echo $stnk["bhn_bakar"];?></td>
                    <td><?php echo $stnk["kd_lokasi"];?></td>
                    <td><?php echo $stnk["jberat"];?></td>
                    <td><?php echo $stnk["nodaf"];?></td>
                    <td><?php echo $stnk["tgberlaku"];?></td>
                    <td><?php echo $stnk["nostnk"];?></td>
                </tr>
                <?php $no++; } ?>
       <!-- --><?php /*} */?>
    </table>
</form>