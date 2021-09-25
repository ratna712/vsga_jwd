<?php
require("koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'assets/struktur/header.php'; ?>

<body>

    <?php include 'assets/struktur/navbar.php'; ?>

    <!-- ======= Hero Section ======= -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://lspdigital.id/images/homepage/c2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://lspdigital.id/images/homepage/c3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://lspdigital.id/images/homepage/c1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <main id="main">
        <br>
        <br>
        <section>
            <div class="container text-center">
                <h3>DAFTAR SKEMA</h3>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM skema");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-sm-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data['nama_skema']; ?></h5>
                                <p class="card-text"><?php echo $data['penjelasan']; ?></p>
                                <a href="#" class="btn btn-primary">Lihat Skema</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>


    </main><!-- End #main -->

    <?php include 'assets/struktur/footer.php'; ?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php include 'assets/struktur/js.php'; ?>

</body>

</html>