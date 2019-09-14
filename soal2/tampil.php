<?php
if(isset($_POST['submit'])){
$user = trim($_POST['user']);
$pass = trim($_POST['password']);
    //Cek Input kosong
    if(empty($user)){
        echo "Username masih kosong.<br>";
    }
    if(empty($pass)){
        echo "Password masih kosong.<br>";
    }

    //Cek username sesuai REGEX
    if(preg_match("/^[A-Za-z].{5,8}$/",$user)){
        $user_valid = TRUE;
    } else {
        echo "User Tidak sesuai dengan ketentuan .<br>";
    }
    //Cek pass sesuai REGEX
    if(preg_match("/[A-Za-z0-9\s$&+,:;=?@#|'<>.^*()%!-]@.{7,}$/",$pass)){
        $pass_valid = TRUE;
    }else{
        echo "Password Tidak sesuai dengan ketentuan .<br>";
    }

    // Cek semua input sudah diisi apa belum
    if( !empty($user) and !empty($pass) and $user_valid and $pass_valid ){
        // Disini tempat menulis kode (semua syarat sudah input terpenuhi).
        // Misalnya menulis kode query ke database
        echo "Selamat semua input sudah diisi dengan benar.<br>";
    }

}

?>