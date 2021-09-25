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
                <h3>ARTIKEL</h3>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <?php
                $query = mysqli_query($koneksi, "SELECT id, title, excerpt, created_at FROM `posts`");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-md-4 mb-3">
                        <div class="card position absolute h-100">
                            <img src="assets/img/about.jpg" width="100" height="300" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data['title']; ?></h5>
                                <p>
                                    <?php $data['id']; ?>
                                    <small>Dibuat pada :
                                        <?php echo $data['created_at']; ?>
                                    </small>
                                </p>
                                <p class="card-text"><?php echo $data['excerpt']; ?></p>
                                <a href="post.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Read More</a>
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