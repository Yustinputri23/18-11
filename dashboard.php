<?php
session_start();
 if ($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK AK NUSA BANGSA || dashboard admin</title>
  <link rel="shortcut icon" type="x-icon" href="img/ak.png">
  <!-- ubuntu -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<style>
    *{
    font-family: "Ubuntu", sans-serif;
    padding: 0%;
    margin: 0%;
}

/* Header Styles */
header {
    background-color:  #9dc183;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo img {
    height: 70px;
    width: auto;
}

.container{
    display: flex;
    min-height: 100vh;
}
.sidebar{
    background-color: #9dc183;
    width: 260px;
    padding: 24px;
    display: flex;
    box-sizing: border-box;
    flex-direction: column;
    transition: all ease-in 3s;
}


.main-content{
    background-color:rgb(243, 247, 246) ;
    flex-grow: 1;
}

.sidebar .description-header{
    font-style: normal;
    font-weight: 700;
    font-size: 21px;
    line-height: 18px;
    text-align: center;
    color: #fff;
   
}

.sidebar a{
    text-decoration: none;
}

.sidebar .header .list-item{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 12px 10px;
    border-radius: 8px;
    height: 70px;
    box-sizing: border-box;
}

.sidebar .header .list-item .icon{
    margin-right:12px ;
}

.sidebar .header .ilustrasen{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    box-sizing: border-box;
}

.sidebar .main .list-item .description{
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 20px;
    text-align: center;
    color: #fff;
}

.sidebar .main .list-item .icon{
    margin-right: 12px;
}
.sidebar .main .list-item{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 12px 10px;
    border-radius: 8px;
    width: 212px;
    box-sizing: border-box;
    transition: all ease-in .2s
}

.sidebar .main .list-item:hover{
    background: #f5f5f5dd;
    transition: all ease-in .2s
}
.search-container {
  display: flex;
  align-items: center;
  background-color: white;
  border: 1px solid #ddd;
  border-radius: 50px;
  padding: 16px 20px;
  width: 500px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.search-input {
  border: none;
  outline: none;
  flex-grow: 1;
  font-size: 16px;
  margin-right: 10px;
}

.search-icons {
  display: flex;
  gap: 10px;
}

.search-icons i {
  font-size: 18px;
  color: #666;
  cursor: pointer;
}
.icon-lens::before {
  content: "🔍"; /* Replace with lens icon or SVG */
}
.main-content {
            flex: 1;
            padding: 20px;
        }

        /* Header */
        h1 {
            text align:center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Overview section */
        .overview {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .card h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 24px;
            font-weight: bold;
        }

        /* Recent Activity Section */
        .recent-activity {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .recent-activity h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .recent-activity ul {
            list-style-type: none;
        }

        .recent-activity ul li {
            margin: 10px 0;
            font-size: 16px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .overview {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .overview {
                grid-template-columns: 1fr;
            }
        }
  </style>
</head>
<body>
 <!-- Header -->
 <header>
        <div class="logo">
        <img src="img/.jpg" alt="Logo" />
        <img src="img/bonet.png" alt="Logo" />
        </div>
        <div class="search">
        <div class="search-container">
    <input type="text" placeholder="Search Here" class="search-input">
    <div class="search-icons" input type="submit" name="cari" value="cari">
      <i class="icon-lens"></i>
    </div>
  </div>
    </header>

    <div class="container">
<div class="sidebar">
  <div class="header">
    <div class="main">
  <div class="list-item">
  <a href="dashboard2.php">
        <img src="home.svg" alt="" class="icon">
        <span class="description">Dashboard</span>
      </a>
  </div>
  <div class="list-item">
  <a href="profil.php">
          <img src="user.svg" alt="" class="icon">
          <span class="description">Profil</span>
        </a>
    </div>
    <div class="list-item">
    <a href="data-image.php">
          <img src="foto.svg" alt="" class="icon">
          <span class="description">Data Foto</span>
        </a>
    </div>
    <div class="list-item">
    <a href="category.php">
          <img src="katagori.svg" alt="" class="icon">
          <span class="description">Category</span>
        </a>
    </div>
    <div class="list-item">
    <a href="keluar.php">
          <img src="door.svg" alt="" class="icon">
          <span class="description">Keluar</span>
        </a>
    </div>
    </div>

    </div>
    </div>
  <div class="main-content">
  <!-- untuk isi nya -->
  <div class="main-content">
           

           <div class="overview">
               <div class="card">
                   <h2>Total Users</h2>
                   <p>1500</p>
               </div>
               <div class="card">
                   <h2>Total Orders</h2>
                   <p>320</p>
               </div>
               <div class="card">
                   <h2>Total Revenue</h2>
                   <p>$2300</p>
               </div>
           </div>

           <div class="recent-activity">
               <h2>Recent Activity</h2>
               <ul>
                   <li>User John Doe placed an order.</li>
                   <li>User Jane Smith updated profile.</li>
                   <li>New user registered: Adam Lee.</li>
               </ul>
           </div>
       </div>
   </div>
  </div>
</div>  
</body>
</html>