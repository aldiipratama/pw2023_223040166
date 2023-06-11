<?php

define('BASE_URL', 'localhost:8080/pw2023_223040166/Tubes/0_Minimum/');

function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'db_tourismagency') or die('Koneksi Gagal');
    return $conn;
}

function query($q)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $q) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function register($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data['username']));
    $email = mysqli_real_escape_string($conn, $data['email']);
    $password = mysqli_real_escape_string($conn, $data['psw']);
    $password2 = mysqli_real_escape_string($conn, $data['psw-repeat']);
    $checkUser = mysqli_query($conn, "SELECT * FROM user WHERE nama = '$username'");
    $checkEmail = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    $role = 2;

    if (mysqli_fetch_row($checkUser)) {
        // check apakah username telah digunakan
        echo "<script>
        alert('Username Telah Digunakan!');
        alert('Silahkan coba dengan Username lain');
        </script>";
        return false;
    }

    if (strpos($username, ' ') !== false) {
        // cek apakah username mengandung spasi
        echo "<script>
        alert('Username Tidak boleh mengandung spasi!');
        </script>";
        return false;
    }

    if (mysqli_fetch_row($checkEmail)) {
        // cek apakah email sudah digunakan
        echo "<script>
        alert('Email Telah Digunakan!');
        alert('Silahkan coba dengan Email lain');
        </script>";
        return false;
    }

    if ($password !== $password2) {
        // cek apakah password sesuai
        echo "<script>
                alert('Password Tidak Sesuai');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO user VALUES (NULL, '$username', '$email', '$password', '$role')");
    return mysqli_affected_rows($conn);
}

function rupiah($angka)
{
    $hasil = 'Rp. ' . number_format($angka, 2, ",", ".");
    return $hasil;
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM destinations WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapusBook($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM tb_booking WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function tambah($data)
{
    $conn = koneksi();
    $lokasi = htmlspecialchars($data['lokasi']);
    $harga = (int) $data['harga'];

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $q = "INSERT INTO destinations
            VALUES
            (NULL, '$gambar', '$lokasi', $harga)";

    if (!is_numeric($harga)) {
        echo "<script>
                alert('Harga harus berupa angka!');
            </script>";
        return false;
    }

    mysqli_query($conn, $q);
    return mysqli_affected_rows($conn);
}
function edit($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $gambarOld = $data['gambarOld'];
    $lokasi = htmlspecialchars($data['lokasi']);
    $harga = $data['harga'];

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarOld;
    } else {
        $gambar = upload();
    }

    $q = "UPDATE destinations SET
            gambar = '$gambar',
            lokasi = '$lokasi',
            harga = $harga
            WHERE id = '$id'";

    if (!is_numeric($harga)) {
        echo "<script>
                alert('Harga harus berupa angka!');
            </script>";
        return false;
    }

    mysqli_query($conn, $q);
    return mysqli_affected_rows($conn);
}

function ubahBook($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $alamat = $data['alamat'];
    $telepon = $data['telepon'];

    $q = "UPDATE destinations SET
            firstname = '$firstname',
            lastname = '$lastname',
            alamat = '$alamat',
            telepon = '$telepon
            WHERE id = '$id'";

    mysqli_query($conn, $q);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $q = "SELECT * FROM destinations
            WHERE
            lokasi LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'";

    return query($q);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    $gambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensi = explode('.', $namaFile);
    $ekstensi = strtolower(end($ekstensi));

    if (!in_array($ekstensi, $gambarValid)) {
        echo "<script>
                alert('Hanya bisa mengupload gambar!');
            </script>";
        return false;
    }

    if ($ukuranFile > 5000000) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    $newFile = uniqid() . '.' . $ekstensi;

    move_uploaded_file($tmpName, 'assets/img/uploaded/' . $newFile);

    return $newFile;
}

function bookingList($data)
{
    $conn = koneksi();

    $id = $data['id'];

    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $email = $data['email'];
    $address = $data['address'];
    $tujuan = $data['tujuan'];
    $telepon = $data['contact'];

    $q = "INSERT INTO tb_booking
            VALUES
            (NULL, '$firstname', '$lastname', '$email', '$address', '$tujuan', '$telepon')
            ";

    mysqli_query($conn, $q);
    return mysqli_affected_rows($conn);
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die;
}

function uriIS($uri)
{
    return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}

?>