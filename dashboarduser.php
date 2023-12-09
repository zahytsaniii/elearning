<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
include 'spinner.php';
include 'navbaruser.php';
include 'koneksi.php';
?>

<!-- About Start -->
<div class="container-lg py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-md-2 wow fadeInUp" data-wow-delay="0.1s" >
        <img src="img/najip.jpg" class="img-fluid rounded-start ml-3" width="200" height="400" alt="...">
      </div>
      <div class="col-md-9 wow fadeInUp" data-wow-delay="0.3s">
        <h1>Nama Orang</h1>
        <p>
          Polisi tidur 
        </p>
      </div>
    </div>
  </div>
</div> 
<!-- About End -->

<!-- Isi Tabel -->
                <div class="container-lg wow fadeInUp" data-wow-delay="0.1s" >
                <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
                </div>

<?php
include 'footer.php';
?>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>