<?php
include_once '../Dashboard/header.php';
?>

<div class="content d-flex justify-content-center align-items-start w-100" style="background-color : #d4d4d4">
  <!-- isi konten -->
  <!-- Ini Untuk Navbar -->
  <div class="container">

    <!-- Ini Komponen navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #091527">
      <div class="container">
        <a class="navbar-brand text-light py-2 ms-3 fs-4  " style="font-family: 'Poppins', sans-serif;">Murid</a>
      </div>
    </nav>
    <!-- Tutup Navbar -->


    <!-- Isi Cards -->

    <!-- CARD DETAIL STATUS -->

    <div class="card mt-4 shadow-lg p-3" style="height: 550px;">
      <a class="navbar-brand text-black my-2 mx-3 fs-3" style="font-family: 'Poppins', sans-serif;">Pilih
        Jurusan</a>

      <!-- LIST KELAS -->

      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col-4">
            <a href="rpl/kelas_rpl.html">
              <button class="w-100" style="background-color : #091527">
                <div class="card" style="background-color : #091527">
                  <div class="card-body p-5">
                    <h5 class="card-title fs-3 text-light text-center m-1" style="font-family: 'Poppins', sans-serif;">RPL</h5>
                  </div>
                </div>
              </button>
            </a>
          </div>
          <div class="col-4">
            <a href="#">
              <button class="w-100" style="background-color : #091527">
                <div class="card" style="background-color : #091527">
                  <div class="card-body p-5">
                    <h5 class="card-title fs-3 text-light text-center m-1" style="font-family: 'Poppins', sans-serif;">MM</h5>
                  </div>
                </div>
              </button>
            </a>
          </div>
          <div class="col-4">
            <a href="#">
              <button class="w-100" style="background-color : #091527">
                <div class="card" style="background-color : #091527">
                  <div class="card-body p-5">
                    <h5 class="card-title fs-3 text-light text-center m-1" style="font-family: 'Poppins', sans-serif;">TKJ</h5>
                  </div>
                </div>
              </button>
            </a>
          </div>
        </div>
      </div>


      <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-4">
            <a href="#">
              <button class="w-100" style="background-color : #091527">
                <div class="card" style="background-color : #091527">
                  <div class="card-body p-5">
                    <h5 class="card-title fs-3 text-light text-center m-1" style="font-family: 'Poppins', sans-serif;">BDP</h5>
                  </div>
                </div>
              </button>
            </a>
          </div>
          <div class="col-4">
            <a href="#">
              <button class="w-100" style="background-color : #091527">
                <div class="card" style="background-color : #091527">
                  <div class="card-body p-5">
                    <h5 class="card-title fs-3 text-light text-center m-1" style="font-family: 'Poppins', sans-serif;">OTKP</h5>
                  </div>
                </div>
              </button>
            </a>
          </div>
        </div>
      </div>


    </div>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-family: 'Poppins', sans-serif;">Tidak</button>
        <a href="../index.html">
          <button type="button" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">iya</button>
        </a>
      </div>
    </div>
  </div>
</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

</html>