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
                <form action="/adminjakarta/<?= $data['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT" />
                    <div>
                        <label for="name">Date</label>
                        <br />
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1 js-datepicker form-control" type="text"
                                    placeholder="BIRTHDATE" name="tahun" value="<?= $data['tahun'] ?>" />
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>
                    </div>

                    <br />
                    <div>
                        <label for="name">Value</label>
                        <br />
                        <input type="text" class="form-control" id="namamenu" placeholder="Input product name"
                            name="nilai" value="<?= $data['nilai'] ?>" />
                    </div>
                    <br />
                    <label for="bulan">Bulan</label>
                    <br />
                    <select name="bulan" id="bulan"class="form-control">
                        <option value="januari" <?= $data['bulan'] == "januari" ? "selected" : "" ?>>januari</option>
                        <option value="februari" <?= $data['bulan'] == "februari" ? "selected" : "" ?>>februari</option>
                        <option value="maret" <?= $data['bulan'] == "maret" ? "selected" : "" ?>>maret</option>
                        <option value="april" <?= $data['bulan'] == "april" ? "selected" : "" ?>>april</option>
                        <option value="mei" <?= $data['bulan'] == "mei" ? "selected" : "" ?>>mei</option>
                        <option value="juni" <?= $data['bulan'] == "juni" ? "selected" : "" ?>>juni</option>
                        <option value="juli" <?= $data['bulan'] == "juli" ? "selected" : "" ?>>juli</option>
                        <option value="agustus" <?= $data['bulan'] == "agustus" ? "selected" : "" ?>>agustus</option>
                        <option value="september" <?= $data['bulan'] == "september" ? "selected" : "" ?>>september</option>
                        <option value="oktober" <?= $data['bulan'] == "oktober" ? "selected" : "" ?>>oktober</option>
                        <option value="november" <?= $data['bulan'] == "november" ? "selected" : "" ?>>november</option>
                        <option value="desember" <?= $data['bulan'] == "desember" ? "selected" : "" ?>>desember</option>
                    </select>
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