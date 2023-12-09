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
                <h1 class="section-title bg-white text-center text-primary px-3">Lengkapi Data Diri</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <form action="" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="NISN" id="NISN"
                                        placeholder="Your NISN">
                                    <label for="NISN">NISN</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="ktp" id="ktp"
                                        placeholder="Your No.KTP">
                                    <label for="No.KTP">No.KTP</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Your Nama">
                                    <label for="Nama">Nama</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                                    <label for="password">Jenis Kelamin</label>
                            </div>
                                </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="tl" id="tl"
                                        placeholder="Tempat Lahir">
                                    <label for="Nama">Tempat Lahir</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="date" id="date"
                                        placeholder="date">
                                    <label for="Nama">Tanggal Lahir</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" aria-label="Default select example">
                                    <option value="">Pilih Agama</option>
                                    <?php
                                        $data = mysqli_query($conn, "SELECT * FROM tb_agama");
                                        while ($d = mysqli_fetch_array($data)) {
                                        echo "<option value='" . $d['id_agama'] . "'>" . $d['agama'] . "</option>";
                                        }
                                    ?>
                                    </select>
                                    <label for="password">Agama</label>
                                </div>
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
    <?php
    if (isset($_POST['submit'])) {
        $nisn = $_POST['nisn'];
        $username = $_POST['username'];
        $no_ktp = $_POST['no_ktp'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $id_agama = $_POST['id_agama'];
    
        $sql = mysqli_query($conn,"INSERT INTO tb_pendaftar (nisn,username,no_ktp,nama,jk,tmp_lahir,tgl_lahir,id_agama) VALUES ('$nisn','$username','$no_ktp','$nama','$jk','$tmp_lahir','$tgl_lahir','$id_agama')");
        if ($sql) {
            ?>
    <script>
        alert('Data Berhasil Disimpan')
        window.location.href = "?page=user";
    </script>
    <?php
           }
        }
    ?>
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