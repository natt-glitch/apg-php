<?php
    if (!defined('INDEX')) die(); //memastikan file ini hanya bisa diakses melalui index.php

    $halaman = [
        "dashboard",
        "pegawai",
        "pegawai_tambah",
        "pegawai_insert",
        "pegawai_edit",
        "pegawai_update",
        "pegawai_hapus",
        "jabatan",
        "jabatan_tambah",
        "jabatan_insert",
        "jabatan_edit",
        "jabatan_update",
        "jabatan_hapus",
        "nata"
    ];

    if (isset($_GET['hal'])) { //jika terdapat parameter hal pada URL
        $hal = $_GET['hal'];    //maka halaman yang ditampilkan sesuai dengan parameter yang ada
    } else { //jika tidak ada parameter hal pada URL
        $hal = 'dashboard'; //maka halaman yang ditampilkan adalah dashboard
    }

    foreach($halaman as $h){ //foreach digunakan untuk melakukan perulangan pada array $halaman
        if($hal == $h){ //jika parameter hal sama dengan data pada array $halaman
            include "content/$h.php"; //menginputkan file yang ada pada folder content sesuai dengan parameter hal
            break;
        }
    }
?>
