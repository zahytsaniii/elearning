<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
include 'spinner.php';
include 'navbaruser.php';
include 'koneksi.php';
?>

<!-- Register Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="section-title bg-white text-center text-primary px-3">Upload Berkas</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <form action="" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="formFile" class="form-label">Foto Diri</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">KTP</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Ijazah</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Raport Semester 1-5</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="col-12">
                                <label for="formFile" class="form-label">Bukti Bayar</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Register End -->

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