<!DOCTYPE html>
<html lang="en">

<?= $this->include('layout/head') ?>
<style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        padding: 0;
        margin: 0;
    }

    body {
        font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    }

    .table-container {
        max-height: 400px;
        /* Atur tinggi maksimum kontainer tabel */
        overflow-y: auto;
        /* Tambahkan scroll vertikal jika konten melebihi tinggi */
        border: 1px solid #ddd;
        /* Tambahkan border di sekitar kontainer */
    }

    table {
        width: 100%;
        /* Tabel akan memenuhi lebar kontainer */
        border-collapse: collapse;
        /* Hilangkan jarak antara border sel */
    }

    th,
    td {
        padding: 10px 15px;
        /* Atur padding untuk memberikan ruang lebih */
        border: 1px solid #ddd;
        /* Tambahkan border untuk tiap sel */
        text-align: left;
        /* Perataan teks di kiri */
    }

    th {
        background-color: #6c7ae0;
        /* Warna latar belakang header */
        color: white;
        /* Warna teks header */
        position: sticky;
        top: 0;
        z-index: 1;
        /* Buat header tetap berada di atas saat scroll */
    }

    tr:nth-child(even) {
        background-color: #f8f6ff;
        /* Warna latar belakang baris genap */
    }

    tr:hover {
        background-color: #e0e0e0;
        /* Warna latar belakang saat baris di-hover */
    }
</style>

<body>
    <!-- Spinner Start -->

    <!-- Spinner End -->


    <!-- Topbar Start -->

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?= $this->include('layout/navbaradmin') ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <!-- Header End -->


    <!-- About Start -->

    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1>Histori Penambahan, Pengeditan, dan Pengapusan Data</h1>
            </div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Action</th>
                            <th>Nama Tabel</th>
                            <th>id</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($histori as $item): ?>
                            <tr>
                                <td><?php echo $item['user_id']; ?></td>
                                <td><?php echo $item['action']; ?></td>
                                <td><?php echo $item['table_name']; ?></td>
                                <td><?php echo $item['record_id']; ?></td>
                                <td><?php echo $item['timestamp']; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <br />
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <?= $this->include('layout/script') ?>
</body>

</html>