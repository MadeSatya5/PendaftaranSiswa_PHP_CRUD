<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
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
            <h3>Formulir Pendaftaran Siswa Baru</h3>
        </header>

        <form action="proses-pendaftaran.php" method="POST">

            <fieldset>

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

            </fieldset>

        </form>

        </body>
    </html>