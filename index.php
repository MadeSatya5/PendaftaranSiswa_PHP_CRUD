<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        body {
            max-width: 1000px;
            margin: auto;
            font-family: Arial, sans-serif;
            color: #333;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container{
            margin-top: 70px;
            border: 2px solid black;
        }
        header {
            text-align: center;
            padding: 10px;
            border-bottom: 2px solid #333;
            margin-bottom: 20px;
        }
        h4{
            text-align: center;
        }
        header h3 {
            color: #555;
            font-size: 24px;
            margin: 5px 0;
        }
        header h1 {
            color: #333;
            font-size: 32px;
            margin: 5px 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            text-decoration: none;
            color: #0066cc;
            font-weight: bold;
        }
        nav ul li a:hover {
            color: #004999;
        }
        p {
            text-align: center;
            font-weight: bold;
            color: #006600;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h3>Pendaftaran Siswa Baru</h3>
            <h1>SMK Coding</h1>
        </header>
        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-siswa.php">Pendaftar</a></li>
            </ul>
        </nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>
