<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM destinations
            WHERE
          lokasi LIKE '%$keyword%' OR
          harga LIKE '%$keyword%'
        ";
$destinations = query($query);
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Gambar</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Harga</th>
            <th scope="col">Setting</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($destinations as $dest): ?>
            <tr>
                <th scope="row">
                    <?= $i++; ?>
                </th>
                <td>
                    <img src="assets/img/uploaded/<?= $dest['gambar']; ?>" width="200px" alt="<?= $dest['gambar']; ?>">
                </td>
                <td>
                    <?= $dest['lokasi']; ?>
                </td>
                <td>
                    <?= rupiah($dest['harga']); ?>
                </td>
                <td>
                    <a href="edit.php?id=<?= $dest['id']; ?>" class="btn btn-secondary">Edit</a>
                    <a href="hapus.php?id=<?= $dest['id']; ?>" class="btn btn-danger m-2">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>