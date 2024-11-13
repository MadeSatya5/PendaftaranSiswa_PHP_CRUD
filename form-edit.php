<?php
include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Siswa | SMK Coding</title>
        <style>
        body {
                max-width: 600px;
                margin: auto;
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                padding: 20px;
            }
            header {
                text-align: center;
                margin-bottom: 20px;
            }
            header h3 {
                color: #555;
                font-size: 24px;
            }
            form {
                background: #ffffff;
                border-radius: 5px;
                padding: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            fieldset {
                border: none;
                padding: 0;
            }
            label {
                display: inline-block;
                margin-bottom: 5px;
                font-weight: bold;
            }
            input[type="text"],
            textarea,
            select {
                width: 100%;
                padding: 8px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            textarea {
                resize: none;
                height: 80px;
            }
            input[type="radio"] {
                margin-right: 5px;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
            p {
                margin-bottom: 15px;
            }
    </style>
    </head>
    <body>
        <header>
            <h3>Formulir Edit Siswa</h3>
        </header>

        <form action="proses-edit.php" method="POST">

            <fieldset>

                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <?php $jk = $siswa['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

            </fieldset>


        </form>

        </body>
</html>