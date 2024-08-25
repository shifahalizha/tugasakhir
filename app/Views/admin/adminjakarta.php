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
                <h1>Tingkat Penghunian Kamar di Jakarta</h1>
            </div>
            <form method="get" action="">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <select class="form-select" name="tahun" aria-label="Pilih Tahun">
                            <option value="">Pilih Tahun</option>
                            <?php for ($year = date('Y'); $year >= 2013; $year--): ?>
                                <option value="<?= $year ?>" <?= $year == $selectedYear ? 'selected' : '' ?>><?= $year ?>
                                </option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Bulan</th>
                            <th>Nilai TPK(persen)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jakarta as $item): ?>
                            <tr>
                                <td><?php echo date('Y', strtotime($item['tahun'])); ?></td>
                                <td><?php echo $item['bulan']; ?></td>
                                <td><?php echo $item['nilai']; ?></td>
                                <td>
                                    <div>
                                        <form action="/adminjakarta/<?= $item['id']; ?>" method="post"
                                            onsubmit="return confirm('Apakah Anda yakin?')">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit"
                                                style="background: none; border: none; cursor: pointer;"><i
                                                    class="fas fa-trash-alt"></i></button>
                                            <a href="/adminjakarta/<?= $item['id']; ?>/edit"><i class="fas fa-edit"></i></a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <br />
            <div>
                <a href="adminjakarta/new" class="btn btn-primary">Tambah Data</a>
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <?= $this->include('layout/script') ?>
</body>

</html>