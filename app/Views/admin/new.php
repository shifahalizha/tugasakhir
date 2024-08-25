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

    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-12">
                <form action="/adminjakarta" method="post" enctype="multipart/form-data">
                    <label for="name">Date</label>
                    <br />
                    <div class="col-2">
                        <div class="input-group">
                            <input class="input--style-1 js-datepicker form-control" type="text" placeholder="Date"
                                name="tahun" />
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                    </div>

                    <br />
                    <label for="bulan">Bulan</label>
                    <br />
                    <select name="bulan" id="bulan"class="form-control">
                        <option value="januari">januari</option>
                        <option value="februari">februari</option>
                        <option value="maret">maret</option>
                        <option value="april">april</option>
                        <option value="mei">mei</option>
                        <option value="juni">juni</option>
                        <option value="juli">juli</option>
                        <option value="agustus">agustus</option>
                        <option value="september">september</option>
                        <option value="oktober">oktober</option>
                        <option value="november">november</option>
                        <option value="desember">desember</option>
                    </select>
                    <br />
                    <label for="name">Value</label>
                    <br />
                    <input type="text" class="form-control" id="namamenu" placeholder="Input value" name="nilai" />
                    <br />
                    <br />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Header Start -->
    <!-- Header End -->

    <?= $this->include('layout/footer') ?>
    <!-- About Start -->

    <!-- About End -->


    <?= $this->include('layout/script') ?>

</body>

</html>