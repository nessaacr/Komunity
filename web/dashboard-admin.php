<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KomUnity - Dashboard</title>
    <link rel="stylesheet" href="css/dashboard-admin.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Varela+Round" />
    <link rel='stylesheet' type="text/css" href='https://fonts.googleapis.com/css?family=Montserrat' />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
</head>
<body>
<div id="container">
    <script src="scripts/dashboard-sidenav.js"></script>
    <header>
        <ul class="header">
            <li class="header-content">
                <a href="dashboard-admin.php"> <img class="icon" src="img/komunity-icon.png"></a>
            </li>
            <li class="header-content">
                <h1 class="appbar"><span style="color:#605E5A">Kom</span><span style="color: #7F836A">Unity</span></h1>
            </li>
            <li class="header-content">
                <div class="dashboard-sidenav" id="dashboard-sidenav">
                    <a href="javascript:void(0)" class="close-button" onclick="closeNav()">&times;</a>
                    <a href="anggotarumah.php" class="side-nav-content">Status Anggota Rumah</a>
                    <a href="kebijakan-privasi.php" class="side-nav-content">Kebijakan Privasi</a>
                    <a href="tentang-komunity.php" class="side-nav-content">Tentang KomUnity</a>
                </div>
                <span style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776;</span>
            </li>
        </ul>
    </header><br><br>
    <div class="dashboard"><br>
        <div class="status">
            <p class="cluster">Data Harian Komplek A</p>
            <p class="date">24 Agustus 2021</p>
            <div class="container-status">
                <div class="container-case">
                    <h2 class="container-title">Kasus Covid-19</h2>
                    <p class="container-content">29</p>
                </div>
                <div class="container-visitor">
                    <h2 class="container-title">Pengunjung</h2>
                    <p class="container-content">36</p>
                </div>
            </div>
        </div>
        <br>
        <div class="dashboard-button">
            <div>
                <a href="konfirmasipositif.php" class="dashboard-button-text"><img class="dashboard-button-content" src="img/konfirmasi-positif.png"><br> Konfirmasi Positif Covid-19</a>
            </div>
            <div>
                <a href="konfirmasi-negatif.php" class="dashboard-button-text"><img class="dashboard-button-content" src="img/konfirmasi-negatif.png"><br> Konfirmasi Negatif Covid-19</a>
            </div>
            <div>
                <a href="#" class="dashboard-button-text"><img class="dashboard-button-content" src="img/check-in-out-pengunjung.png"><br> Check In/Out Pengunjung</a>
            </div>
            <div>
                <a href="emergency.php" class="dashboard-button-text"><img class="dashboard-button-content" src="img/panggilan-darurat.png"><br> Panggilan Darurat</a>
            </div>
            
        </div>
        <div class="container-fogging">
            <h1 class="fogging-title">Fogging Hari Ini</h1>
            <p class="fogging-content">Hari ini fogging untuk disinfeksi area Komplek A, Blok B</p>
        </div>
        <footer>
            <a href="tentang-komunity.php" class="footer-link">About KomUnity</a>
            <a href="kebijakan-privasi.php" class="footer-link">Privacy Policy</a><br>
            <img class="footer-icon" src="img/komunity-icon.png">
            <p class="copyright">KomUnity © 2021</p>
        </footer>
    </div>
</div>
</body>
</html>