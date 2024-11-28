<?php
    include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 2");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta name="theme-color" content="#9dc183">
  <title>SMK AK NUSA BANGSA || website galeri</title>
  <link rel="shortcut icon" type="x-icon" href="img/logo1.jpg.png">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>/* Resetting default margin and padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  font-family: Arial, sans-serif;
  background-color: #fff;
}

/* Styling untuk video perkenalan */
.video-intro {
  position: relative;
  width: 100%;
  height: 100vh; /* Menggunakan tinggi penuh layar */
  overflow: hidden;
}

#intro-video {
  object-fit: cover;
  width: 100%;
  height: 100%;
  display: block;
}

/* Navbar Styling */
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #9DC183; /* Latar belakang solid untuk navbar */
  color: white;
  padding: 15px 0;
  z-index: 10; /* Agar navbar di atas video */
}

.navbar ul {
  list-style-type: none;
  text-align: center;
}

.navbar ul li {
  display: inline;
  margin: 0 20px;
}

.navbar ul li a {
  color: white;
  text-decoration: none;
  font-size: 18px;
  text-transform: uppercase;
}

.navbar ul li a:hover {
  border-bottom: 2px solid white;
}
.img{
  margin-left: 20px;
}
/* Styling untuk header */
.header {
  position: relative;
  z-index: 1; /* Agar header di atas video */
  text-align: center;
  padding: 50px 20px;
  color: white;
  background: #9dc183; /* Transparansi untuk background header */
}

.header h1 {
  font-size: 3em;
  margin-bottom: 20px;
}

.header p {
  font-size: 1.5em;
}
body, ul, li, a {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
}
/* Style header */
.main-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #9dc183;
    color: white;
}

/* Style logo */
.logo img {
    height: 50px;
    width: auto;
}
/* Style menu navigasi */
.nav-menu ul {
    display: flex;
    gap: 20px;
}
.dropbtn {
  background-color: #9dc183;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #9dc183;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #9dc183}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
.nav-menu a {
    color: white;
    font-size: 16px;
    font-weight: bold;
    transition: color 0.3s ease;
}

.nav-menu a:hover {
    color: #ffa500; /* Warna efek hover */
}
.row {
  margin: 8px -16px;
}
/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

/* Styling untuk teks di bawah video */
.footer-text {
  text-align: center;
  padding: 30px 20px;
  background-color: #9DC183;
  color: white;
  font-size: 1.2em;
}
</style>
</head>
<body>
<header class="main-header">
        <div class="logo">
        <img src="img/nubas.jpg" alt="Logo" />
        <img src="img/bonet.png" alt="Logo" />
        </div>
        <nav class="nav-menu">
            <ul>
            <div class="dropdown">
            <li><a href="#">Kompetensi</a></li>
            <div class="dropdown-content">
            <a href="#">PPLG</a>
            <a href="#">Analis Kimia</a>
            <a href="#">Farmasi</a>
            </div>
            </div>
            <div class="dropdown">
            <li><a href="#">Ekstrakulikuler</a></li>
            <div class="dropdown-content">
            <a href="#">Voli</a>
            <a href="#">GPS</a>
            <a href="#">Futsal</a>
            </div>
            </div>
            <li><a href="#">Profil Guru</a></li>
            <li><a href="#">Prestasi</a></li>
            </ul>
        </nav>
    </header>
  <!-- Video Pengenalan -->
  <div class="video-intro">
    <video id="intro-video" autoplay muted loop>
      <source src="img/.mp4" type="video/mp4">
    </video>
  </div>
  
  
 <div class="row">
      <div class="column">
        <div class="content">
          <img src="img/bonet.png" alt="Mountains" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/bonet.png" alt="Lights" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/bonet.png" alt="Nature" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/bonet.png" alt="Mountains" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
    </div>
    <div class="column">
        <div class="content">
          <img src="img/bonet.png" alt="Mountains" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/bonet.png" alt="Lights" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/bonet.png" alt="Nature" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
      <div class="column">
        <div class="content">
          <img src="img/bonet.png" alt="Mountains" style="width:100%">
          <h3>My Work</h3>
          <p>Lorem ipsum..</p>
        </div>
      </div>
    </div>

    <div class="content">
      <img src="img/bonet.png" alt="Bear" style="width:100%">
      <h3>Some Other Work</h3>
      <p>Lorem ipsum..</p>
    </div>

    <!-- END MAIN -->
    </div>
  <!-- Teks di Bawah Video -->
  <div class="footer-text">
    <p>Terima kasih telah mengunjungi website kami. Kami harap Anda menemukan informasi yang Anda cari!</p>
  </div>

</body>
</html>