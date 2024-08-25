<!DOCTYPE html>
<html lang="en">

<?= $this->include('layout/head') ?>

<body>
    <!-- Spinner Start -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?= $this->include('layout/navbaradmin') ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Tingkat Penghunian Kamar Di Indonesia</h1>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="/img/hotel1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1>Data TPK di Beberapa Provinsi</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h4 class="mb-3">Jakarta</h4>
                        <a class="btn" href="/adminjakarta"><i class="fa fa-arrow-right text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h4 class="mb-3">Jawa Barat</h4>
                        <a class="btn" href=""><i class="fa fa-arrow-right text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h4 class="mb-3">Banten</h4>
                        <a class="btn" href=""><i class="fa fa-arrow-right text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    
    <!-- Feature End -->


    <!-- Team Start -->
    
    <!-- Team End -->


    <!-- Appointment Start -->
    
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?= $this->include('layout/footer') ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <?= $this->include('layout/script') ?>
</body>

</html>