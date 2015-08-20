<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Header( "Last-Modified: " . gmdate( "D, j M Y H:i:s" ) . " GMT" );
Header( "Expires: " . gmdate( "D, j M Y H:i:s", time() ) . " GMT" );
Header( "Cache-Control: no-store, no-cache, must-revalidate" ); // HTTP/1.1
Header( "Cache-Control: post-check=0, pre-check=0", FALSE );
Header( "Pragma: no-cache" ); // HTTP/1.0

date_default_timezone_set('Asia/Jakarta');    

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KidoKado.com</title>
    <link rel="shortcut icon" href="<?=base_url();?>asset/images/favicon.ico">
    <link rel="stylesheet" href="<?=base_url();?>asset/css/style.css">
    <script src="<?=base_url();?>asset/js/jquery.min.js"></script>
    <script src="<?=base_url();?>asset/js/jquery-ui.min.js"></script>
</head>

<body>
    <header id="header">
        <div class="unpadded grid">
            <div id="logo"><img src="<?=base_url();?>asset/img/logo.png"></div>
            <div id="userspace">
                <div class="content">
                    <div class="cart">Rp 250.000 (2 item)</div>
                    <div class="user">Username</div>
                </div>
                <div class="search">
                    <input class="input" type="text" id="searchbar" placeholder="Cari">
                </div>
            </div>
            <div id="nav">
                <a href="home"><div class="item <?=($navActive=="home")?"active":"";?>">Home</div></a>
                <a href="product"><div class="item <?=($navActive=="product")?"active":"";?>">Produk</div></a>
                <a href="howto"><div class="item <?=($navActive=="howto")?"active":"";?>">Cara Order</div></a>
                <a href="confirm"><div class="item <?=($navActive=="confirm")?"active":"";?>">Konfirmasi Transfer</div></a>
                <a href="reseller"><div class="item <?=($navActive=="reseller")?"active":"";?>">Reseller</div></a>
                <a href="info"><div class="item <?=($navActive=="info")?"active":"";?>">Informasi</div></a>
                <a href="contact"><div class="item <?=($navActive=="contact")?"active":"";?>">Hubungi Kami</div></a>
                <div class="unfloat"></div>
            </div>
        </div>
    </header>
    
    <div id="banner-container">
        <div class="content grid unpadded">
            <img src="<?=base_url();?>asset/img/Banner_01.png">
        </div>
    </div>