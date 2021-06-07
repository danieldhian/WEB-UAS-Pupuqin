<?php
require_once "function.php";
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PupuQin</title>
</head>
<link href="css/layout.css" rel="stylesheet">
<body>

<div class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produk.php">Product</a>
            </li>

            <li><a href="article.html">Blog</a>
            </li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        </div>
        <div id="topbar">
           
        </div>
        <br>
        <br>
        <div class="text">
        <h3>Menyediakan produk terbaik untuk menyuburkan <br> tanaman di perkebunan anda tanpa khawatir akan harga</h3>
        </div>
        <br>
        <br>
        <div class="container">
            <a href="cart.php"><div class="filterDiv anor terbaru cod">
                    <div class="list-produk">
                        <img src="images/anorganik1.jpg" alt="Pupuk Anorganik 1" >   
                        <h4>Pupuk Anorganik Phonska </h4>
                        <div class="harga">
                            <p class="hargaAkhir">Rp 135.000</p>
                            <p class="hargaAsli">Rp 150.000</p>
                        </div>
                        <div class="diskon tag">
                            <span>- 10%</span>
                        </div>
                    </div>
                </div></a>
            <a href="#"><div class="filterDiv anor cod">
                <div class="list-produk">
                    <img src="images/anorganik2.jpg" alt="Pupuk Anorganik 2">
                    <h4>Pupuk Anorganik Urea</h4>
                    <div class="harga">
                        <p class="hargaAkhir">Rp 180.000</p>
                        <p class="hargaAsli"></p>
                    </div>
                </div>
            </div></a>  
            <a href="#"><div class="filterDiv anor terlaris">
                <div class="list-produk">
                    <img src="images/anotganik3.jpg" alt="Pupuk Anorganik 3">
                    <h4>Pupuk Anorganik SP-36</h4>
                    <div class="harga">
                        <p class="hargaAkhir">Rp 110.000</p>
                        <p class="hargaAsli"></p>
                    </div>
                </div>
            </div></a>
            <a href="#"><div class="filterDiv organik cod">
                <div class="list-produk">
                    <img src="images/organik1.jpg" alt="Pupuk Organik 1">
                    <h4>Pupuk Bumi Makmur</h4>
                    <div class="harga">
                        <p class="hargaAkhir">Rp 250.000</p>
                        <p class="hargaAsli"></p>
                    </div>
                </div>
            </div></a>
            <a href="#"><div class="filterDiv organik terlaris cod">
                <div class="list-produk">
                    <img src="images/organik2.jpg" alt="Pupuk Organik 2">
                    <h4>Pupuk Organik Sunvit</h4>
                    <div class="harga">
                        <p class="hargaAkhir">Rp 160.000</p>
                        <p class="hargaAsli">Rp 200.000</p>
                    </div>
                    <div class="diskon tag">
                        <span>- 20%</span>
                    </div>
                </div>
            </div></a>
            <a href="#"><div class="filterDiv organik terbaru ">
                <div class="list-produk">
                    <img src="images/organik3.png" alt="Pupuk Organik 3">
                    <h4>Pupuk Organik Petroganik</h4>
                    <div class="harga">
                        <p class="hargaAkhir">Rp 176.000</p>
                        <p class="hargaAsli">Rp 220.000</p>
                    </div>
                    <div class="diskon tag">
                        <span>- 20%</span>
                    </div>
                </div>
            </div></a>
        </div>
            <script src="js/filter.js"></script>

            <div class="container2">
            
        </div>
        
</body>
</html>