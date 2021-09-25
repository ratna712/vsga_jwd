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
                <h3>Comment</h3>

                <br>
                <div class="container">
                    <div class="col-12 mb-5">
                        <div id="editor"></div>
                    </div>
                </div>
                <a class="btn btn-danger" href="pdf.php">Download PDF</a>
            </div>
        </section>


    </main><!-- End #main -->

    <?php include 'assets/struktur/footer.php'; ?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php include 'assets/struktur/js.php'; ?>

</body>

</html>