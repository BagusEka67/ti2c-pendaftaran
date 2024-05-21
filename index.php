<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Mahasiswa Baru | Politeknik Negeri Madiun</title>
        <style>
        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #003366;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 36px;
        }
        header h3 {
            margin: 0;
            font-weight: normal;
            font-size: 24px;
        }
        nav {
            background-color: #00509e;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }
        nav ul li a:hover {
            color: #ffd700;
        }
        h4 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-top: 20px;
        }
        @media (max-width: 600px) {
            header h1, header h3 {
                font-size: 20px;
            }
            nav ul li {
                display: block;
                margin: 10px 0;
            }
            h4 {
                font-size: 24px;
            }
        }
    </style>
    </head>
    <body>
        <header>
            <h3>Pendaftaran Mahasiswa Baru</h3>
            <h1>Politeknik Negeri Madiun</h1>
        </header>
        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-mahasiswa.php">Pendaftar</a></li>
            </ul>
        </nav>
    </body>
</html>