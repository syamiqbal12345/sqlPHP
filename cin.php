<!DOCTYPE html>
<html>
<head>
    <title>STNK</title>

    <h3>Masukkan Data STNK</h3>
    </head>
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<form  action="input_baru.php" method="POST">
    <fieldset>
    <p>
        <label>No Polisi:</label>
        <input type="text" name="nopol"/>
    </p>
    <p>
        <label>Nama Pemilik:</label>
        <input type="text" name="nmpemilik"/>
    </p>
    <p>
        <label>Alamat:</label>
        <input type="text" name="alamat"/>
    </p>
    <p>
        <label>Merek/Type:</label>
        <input type="text" name="merk_type"/>
    </p>
    <p>
        <label>Jenis/Model:</label>
        <input type="text" name="jenis_model"/>
    </p>
    <p>
        <label>Tahun Buat:</label>
        <input type="date" name="thnbuat"/>
    </p>
     <p>
         <label>Tahun Rakit:</label>
         <input type="date" name="thnrakit"/>
     </p>
     <p>
         <label>Isi Silinder:</label>
         <input type="text" name="isi_silinder"/>
     </p>
     <p>
         <label>Warna:</label>
         <input type="text" name="warna"/>
     </p>
     <p>
         <label>No Rangka:</label>
         <input type="text" name="norang_nik"/>
     </p>
     <p>
         <label>No Mesin:</label>
         <input type="text" name="nomesin"/>
     </p>
     <p>
         <label>No BPKB:</label>
         <input type="text" name="nobpkb"/>
     </p>
     <p>
        <label>SWDKLLJ:</label>
        <input type="text" name="wm_tnkb"/>
     </p>
     <p>
         <label>Bahan Bakar:</label>
         <input type="text" name="bhn_bakar"/>
     <p>
         <label>Kode Lokasi:</label>
         <input type="text" name="kd_lokasi"/>
     </p>
     <p>
         <label>Berat Kendaraan:</label>
         <input type="text" name="jberat"/>
     </p>
     <p>
         <label>No Kohir:</label>
         <input type="text" name="nodaf"/>
     </p>
     <p>
         <label>Tanggal Berlaku:</label>
         <input type="date" name="tgberlaku"/>
     </p>
     <p>
         <label>No STNK:</label>
         <input type="text" name="nostnk"/>
     </p>
        <p>
            <input type="submit" name="submit" value="submit" />
        </p>
    </fieldset>
</form>
</body>
</html>