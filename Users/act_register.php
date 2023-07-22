<?php
// $title = "Register";

include '../koneksi.php';

// $error = "";
// $sukses = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nama_lengkap = $_POST['nama_lengkap'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $role = $_POST['role'];

  $query = "INSERT INTO users (nama_lengkap, username, password, role) VALUES ('$nama_lengkap', '$username','$password','$role')";
  $result = mysqli_query($koneksi, $query);

  if ($result > 0) {
    // $error = "username sudah tersedia";
    // $query = "SELECT * FROM login WHERE username='$username'";
    // $result = mysqli_query($koneksi, $query);
    // $row = mysqli_num_rows($result);
    echo "<script>
                alert('data tersimpan');
                window.location='users.php';
              </script>";
  } else {
    echo "<script>
                alert('data gagal tersimpan');
                window.location='users.php';
              </script>";
  }
  //  if($result) {
  //     // var_dump($result);
  //     echo "data berhasil disimpan";
  //     } else {
  //     echo "data gagal disimpan";
  //     }
}
