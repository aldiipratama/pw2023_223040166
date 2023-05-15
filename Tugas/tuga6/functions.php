<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($q)
{
    global $conn;
    // Mengambil data dari tabel mahasiswa
    $result = mysqli_query($conn, $q);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $nama = $data["nama"];
    $nrp = $data["nrp"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];

    $query = "INSERT INTO mahasiswa
                VALUES
                (null, '$nama', '$nrp', '$email', '$jurusan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa
                            WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $nrp = $data["nrp"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];

    $query = "UPDATE mahasiswa
                SET nama = '$nama',
                    nrp = '$nrp',
                    email = '$email',
                    jurusan = '$jurusan'
                WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'";
    return query($query);
}

?>