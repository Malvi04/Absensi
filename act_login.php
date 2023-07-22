<?php
session_start();

// koneksi 
include 'koneksi.php';

// if (isset($_SESSION['login'])) {
    $pass = md5($_POST['password']);
    $username = mysqli_escape_string($koneksi, $_POST['username']);
    $password = mysqli_escape_string($koneksi, $pass);
    $role = mysqli_escape_string($koneksi, $_POST['role']);

    // cek username
    $cek_user = "SELECT * FROM login WHERE username='$username' and role='$role' ";
    $query = mysqli_query($koneksi, $cek_user);
    $user_valid = mysqli_fetch_array($query);

    // uji jika username sudah terdaftar
    if ($user_valid) {
        // cek password sesuai atau tidak
        if ($password == $user_valid['password']) {
            // jika pass sesuai
            // untuk session
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['role'] = $user_valid['role'];

            // role
            if ($role == "Admin") {
                header('location:Dashboard/dashboard.php');
            } elseif ($role == "Users") {
                header('location:users.php');
            } elseif ($role == "BK") {
                header('location:bk');
            }
        } else {
            echo "<script>
                alert('login gagal, password tidak sesuai');
                window.location='index.php';
             </script>";
        }
    } else {
        echo "<script>
            alert('login gagal, username tidak tersedia');
            window.location='index.php';
         </script>";
    }
// }
