<?php
    session_start();
    include "library/config.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $hasil = mysqli_query($con,$query);
    $data = mysqli_fetch_array($hasil);

    $jml = mysqli_num_rows($hasil); 

    // jika $jml bernilai benar atau ada menjalankan = 
    if ($jml > 0 ){
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        header('location: index.php'); // jika berhasil login maka akan diarahkan ke index.php
    // jika $jml bernilai salah atau tidak ada menjalankan =
    } else{
        echo "<p align='center'>Login Gagal!</p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    }
?>
