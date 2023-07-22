<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/hover.css">
  <link rel="icon" href="../img/Logo CN.png">
  <title>Mapel</title>
</head>

<body>
  <div class="d-flex flex-column position-fixed" style="background-color : #d4d4d4">
    <!-- SIDEBAR -->
    <div class="d-flex justify-content-start">
      <div class="sidebar col-2" style="background-color :#0F2443; height: 660px;">
        <!-- Isi Sidebar -->
        <!-- IMAGE -->
        <div class="container-fluid">

          <div class="nav-brand d-flex justify-content-center pb-3">
            <span class="border-bottom border-light w-75 mb-3">
              <center>
                <img src="../img/Logo CN.png" class="w-50 mt-5 pb-3 img-fluid" alt="...">
              </center>
            </span>
          </div>
        </div>
        <!-- Dashboard - Mapel -->
        <div class="container-fluid" style="font-family: 'Lato', sans-serif;">

          <ul class="navbar-nav mt-4">
            <!-- LIST KONTEN -->
            <div class="kontenside">
              <div class="">
                <div class="d-flex justify-content-start ms-4">

                  <li class="nav-item">
                    <a class="nav-link active" href="../Dashboard/dashboard.html">
                      <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <div class="d-flex">
                          <span class="bi bi-house-fill fs-6"></span>
                          <span class="nav-link-text ms-5 fs-6">Dashboard</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </div>
              </div>


              <div class="mt-3">
                <div class="d-flex justify-content-start ms-4">

                  <li class="nav-item">
                    <a class="nav-link active" href="../Murid/view.html">
                      <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                          <span class="bi bi-person-fill fs-6"></span>
                          <span class="nav-link-text ms-5 fs-6">Murid</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </div>
              </div>

              <div class="mt-3">
                <div class="d-flex justify-content-start ms-4">

                  <li class="nav-item">
                    <a class="nav-link active" href="../Guru/view.html">
                      <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                          <span class="bi bi-person-fill fs-6"></span>
                          <span class="nav-link-text ms-5 fs-6">Guru</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </div>
              </div>

              <div class="mt-3">
                <div class="d-flex justify-content-start ms-4">

                  <li class="nav-item">
                    <a class="nav-link active" href="view.html">
                      <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                          <span class="bi bi-book-half fs-6"></span>
                          <span class="nav-link-text ms-5 fs-6">Mapel</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </div>
              </div>

              <div class="mt-3">
                <div class="d-flex justify-content-start ms-4">

                  <li class="nav-item">
                    <a class="nav-link active" href="../Users/users.html">
                      <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                          <span class="bi bi-person-fill-add fs-6"></span>
                          <span class="nav-link-text ms-5 fs-6">Users</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </div>
              </div>

              <center>
                <div class="garis w-75" style="background-color: #ffffff; margin-top: 120px;">
                  <hr>
                </div>
              </center>
              <div class="">
                <div class="d-flex justify-content-start ms-4">

                  <li class="nav-item">
                    <a class="nav-link active" href="" data-bs-toggle="modal" data-bs-target="#logoutModal">
                      <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                          <span class="bi bi-box-arrow-left fs-6"></span>
                          <span class="nav-link-text ms-5 fs-6">Log Out</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </div>
              </div>


          </ul>
        </div>
      </div>
      <!-- TUTUP SIDEBAR -->

      <div class="content d-flex justify-content-center align-items-start w-100" style="background-color : #d4d4d4">
        <!-- isi konten -->
        <!-- Ini Untuk Navbar -->
        <div class="container">

          <!-- Ini Komponen navbar -->
          <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #091527">
            <div class="container">
              <a class="navbar-brand text-light py-2 ms-3 fs-4" style="font-family: 'Poppins', sans-serif;">Mapel</a>
            </div>
          </nav>
          <!-- Tutup Navbar -->

          <!-- Isi Cards -->
          <div class="content d-flex justify-content-center align-items-start">
            <div class="container-fluid">
              <div class="card mt-4 shadow-lg" style="max-height: 550px;">
                <div class="card-body overflow-auto">
                  <table class="table table-hover">
                    <thead>
                      <th class="text-center" style="font-family: 'Poppins', sans-serif;">Id</th>
                      <th class="text-center" style="font-family: 'Poppins', sans-serif;">Kode
                        Mapel</th>
                      <th class="text-center" style="font-family: 'Poppins', sans-serif;">Nama Mapel
                      </th>
                      <th class="text-center" style="font-family: 'Poppins', sans-serif;">Aksi
                      </th>
                      <th class="text-end"><button type="button" class="btn btn-sm btn-primary rounded-circle"
                          data-bs-toggle="modal" data-bs-target="#tambahmapelModal">
                          <i class="bi bi-plus-lg"></i></button>
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center" style="font-family: 'Lato', sans-serif;">1234
                        </td>
                        <td class="text-center" style="font-family: 'Lato', sans-serif;">
                          Q123
                        </td>
                        <td class="text-center" style="font-family: 'Lato', sans-serif;">
                          Pemodelan Perangkat Lunak
                        </td>
                        <td class="text-center">
                          <button class="btn btn-sm btn-primary w-25" data-bs-toggle="modal"
                            data-bs-target="#ubahModal">
                            <i class="bi bi-pencil-fill"></i>
                          </button>
                          <button class="btn btn-sm btn-danger w-25" data-bs-toggle="modal"
                            data-bs-target="#hapusModal">
                            <i class="bi bi-trash-fill"></i>
                          </button>
                        </td>
                        <td class="text-center"></td>
                      </tr>

                    </tbody>
                  </table>
                  <div class="d-flex justify-content-start">
                    <button type="button" class="btn btn-sm btn-warning text-light px-4"
                      style="font-family: 'Poppins', sans-serif;">PDF</button>
                    <button type="button" class="btn btn-sm btn-success ms-3 px-4"
                      style="font-family: 'Poppins', sans-serif;">EXCEL</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- BAGIAN TAMBAH MAPEL -->
  <!-- Modal -->
  <div class="modal fade" id="tambahmapelModal" tabindex="1" aria-labelledby="tambahmapelLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-4" id="tambahmapelLabel" style="font-family: 'Poppins', sans-serif;">
            Tambah Mata Pelajaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="get">
            <div class="input-group mb-3">
              <input type="text" name="" class="form-control" placeholder="Nama Mapel" aria-label="Username"
                aria-describedby="basic-addon1" style="font-family: 'Lato', sans-serif;">
            </div>
            <div class="modal-footer">
              <div style="font-family: 'Poppins', sans-serif;">
                <a href="">
                  <button type="submit" class="btn btn-primary">Tambah Mapel</button>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- MODAL PERINGATAN LOG OUT -->
  <!-- Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Poppins', sans-serif;">Peringatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="font-family: 'Lato', sans-serif;">
          Yakin ingin keluar?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
            style="font-family: 'Poppins', sans-serif;">Tidak</button>
          <a href="../index.html">
            <button type="button" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">iya</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- BAGIAN UBAH MAPEL -->
  <!-- Modal -->
  <div class="modal fade" id="ubahModal" tabindex="1" aria-labelledby="ubahLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-4" id="ubahLabel" style="font-family: 'Poppins', sans-serif;">
            Ubah Mata Pelajaran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="get">
            <div class="input-group mb-3">
              <input type="text" name="" class="form-control" placeholder="Nama Mapel" aria-label="Username"
                aria-describedby="basic-addon1" style="font-family: 'Lato', sans-serif;">
            </div>
            <div class="modal-footer">
              <div style="font-family: 'Poppins', sans-serif;">
                <a href="">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL PERINGATAN HAPUS Mapel -->
  <!-- Modal -->
  <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Poppins', sans-serif;">Peringatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="font-family: 'Lato', sans-serif;">
          Hapus Data Pemodelan Perangkat Lunak?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
            style="font-family: 'Poppins', sans-serif;">Tidak</button>
          <a href="">
            <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">iya</button>
          </a>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>