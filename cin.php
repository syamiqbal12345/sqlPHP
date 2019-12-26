<!DOCTYPE html>
<html>
<head>
    <title>Paspor input</title>
</head>
<body>
<form  action="input_baru.php" method="POST">
    <fieldset>
    <p>
        <label>Name:</label>
        <input type="text" name="full_name"/>
    </p>
    <p>
        <label>Tanggal Lahir:</label>
        <input type="date" name="date_birth"/>
    </p>
    <p>
        <label>Tempat Lahir:</label>
        <input type="text" name="tempat_lahir"/>
    </p>
    <p>
        <label>Jenis kelamin:</label>
        <label><input type="radio" name="sex" value="laki-laki" /> Laki-laki</label>
        <label><input type="radio" name="sex" value="perempuan" /> Perempuan</label>
    </p>
    <p>
        <label>Kewarganegaraan :</label>
        <input type="text" name="nationality"/>
    </p>
    <p>
        <label>No. Paspor :</label>
        <input type="text" name="no_paspor"/>
    </p>
        <p>
            <label>Type Paspor :</label>
            <input type="text" name="jenis_type"/>
        </p>
    <p>
        <label>Kode Negara :</label>
        <input type="text" name="code_negara"/>
    </p>
    <p>
        <label>Tanggal Pengeluaran Paspor :</label>
        <input type="date" name="tgl_pengeluaran_paspor"/>
    </p>
    <p>
        <label>No. Reg :</label>
        <input type="text" name="no_reg"/>
    </p>
    <p>
        <label>Tanggal Habis Berlaku :</label>
        <input type="date" name="date_expiry_paspor"/>
    </p>
    <p>
        <label>Kantor yang meneluarkan :</label>
        <input type="text" name="issuing_office"/>
    </p>
        <p>
            <input type="submit" name="submit" value="submit" />
        </p>
    </fieldset>

</form>
</body>
</html>