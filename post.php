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

        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 mt-5">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT id, title, excerpt, body, created_at FROM `posts` where id='$_GET[id]'");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <?php $data['id']; ?>
                        <h1 class="mb-5"><?php echo $data['title']; ?></h1>

                        <p>Dibuat pada : <?php echo $data['created_at']; ?>
                            <img src="assets/img/about.jpg" alt="" class="img-fluid">
                        </p>
                        <article class="my-3 fs-6">
                            <?php echo $data['body']; ?>
                        </article>

                        <a href="artikel.php" class="text-decoration-none">Kembali</a>
                    <?php } ?>
                </div>
            </div>
        </div>


    </main><!-- End #main -->

    <?php include 'assets/struktur/footer.php'; ?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php include 'assets/struktur/js.php'; ?>

</body>

</html>