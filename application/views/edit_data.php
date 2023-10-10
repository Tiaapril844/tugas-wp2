<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <center><h1>Edit Data Mahasiswa</h1></center>
    <form action="<?= base_url('kampus/edit_aksi'); ?>" method="post">
        <input type="hidden" name="id" value="<?= $mahasiswa->id; ?>">
        <table style="margin:20px auto;">
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim" value="<?= $mahasiswa->nim; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $mahasiswa->nama; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?= $mahasiswa->alamat; ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?= $mahasiswa->pekerjaan; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>