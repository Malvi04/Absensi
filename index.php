<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="img/Logo CN.png">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/login.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- left -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7 col-sm-0 vh-100 lefts" style="background-color: #091527">
        <div class="header pt-3">
          <img src="img/Logo CN.png" alt="logo" width="80px" />
          <span class="pt-4 ps-3 fs-4 ms-2 text-white" style="font-family: 'Lato', sans-serif;">SMK CITRA NEGARA</span>
          <div class="left pt-5 text-white" style="font-family: 'Poppins', sans-serif">
            <p class="mb-0">Laporan</p>
            <p class="mb-0">Absensi</p>
            <p>Siswa</p>
          </div>
        </div>
      </div>

      <div class="col-lg-5 pt-5 mt-4">
        <div class="form">
          <h3 class="text-center" style="font-family: 'Poppins', sans-serif">Selamat Datang</h3>
          <p class="text-center" style="font-family: 'Lato', sans-serif;">Silahkan Login Terlebih Dahulu</p>
          <form action="act_login.php" method="POST">
            <div class="mb-3 ps-5 px-5">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="username" required />
            </div>
            <div class="mb-3 ps-5 px-5">
              <label class="form-label">Role</label>
              <select class="form-control" name=" role" required>
                <option value="">Pilih Role</option>
                <option value="Admin">Admin</option>
                <option value="Users">Users</option>
                <option value="BK">BK</option>
              </select>
            </div>
            <div class="mb-3 ps-5 px-5">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1 myInput" name="password" required />
            </div>
            <button type="submit" class="btn btn-primary position-absolute" style="background-color: #0b0722">Login</button>
            <br><br><br><br><br><br><br>
            <p class="mb-3 text-muted text-center">Created By RPL&copy; 2023</p>
            <!-- <br><br><br><br> -->
            <!-- <a href="register.php" class="btn btn-primary ">Register</a> -->
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- akhir left -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>