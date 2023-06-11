<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$jumlahDataPerhalaman = 6;
$jumlahData = count(query("SELECT * FROM destinations"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$query = "SELECT * FROM destinations
            WHERE
          lokasi LIKE '%$keyword%' OR
          harga LIKE '%$keyword%' LIMIT $awalData, $jumlahDataPerhalaman
        ";

$destinations = query($query);
?>
<div class="container">
    <div class="row mt-5">
        <?php foreach ($destinations as $dest): ?>
            <div class="col-lg-4 mt-2">
                <div class="card" style="width: 18rem;background-color: var(--bg-color);">
                    <img src="assets/img/uploaded/<?= $dest['gambar']; ?>" class="card-img-top"
                        alt="<?= $dest['gambar']; ?>" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $dest['lokasi']; ?>
                        </h5>
                        <p class="card-text">
                            <?= rupiah($dest['harga']); ?>
                        </p>
                        <a href="#" class="btn btn-primary">Booking</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php if ($halamanAktif > 1): ?>
                    <li class="page-item"><a class="page-link"
                            href="?halaman=<?= $halamanAktif - 1; ?>#destinations">Previous</a></li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $jumlahHalaman; $i++): ?>
                    <?php if ($i == $halamanAktif): ?>
                        <li class="page-item page-link bg-primary text-white">
                            <?= $i; ?>
                        </li>
                    <?php else: ?>
                        <li class="page-item page-link">
                            <?= $i; ?>
                        </li>
                    <?php endif; ?>
                <?php endfor; ?>
                <?php if ($halamanAktif < $jumlahHalaman): ?>
                    <li class="page-item"><a class="page-link"
                            href="?halaman=<?= $halamanAktif + 1; ?>#destinations">Next</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>