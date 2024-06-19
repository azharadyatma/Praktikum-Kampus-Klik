<?php
include "koneksi.php";

if (isset($_POST["proses"])) {
    $npm = $_POST['npm'];
    $nama_mhs = $_POST['input1'];
    $prodi_mhs = $_POST['input2'];
    $proses = mysqli_query($db, "INSERT INTO mahasiswa (id,nama_mhs, prodi_mhs) VALUES ('$npm','$nama_mhs', '$prodi_mhs')") or die(mysqli_error($db));
    $huruf_mutu = '';

    if ($proses) {
        echo "<script>alert('sukses')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }

    header("Location: formInput.php");
}

if (isset($_POST["edit-proses"])) {
    $npm = $_POST['npm'];
    $nama_mhs = $_POST['input1'];
    $prodi_mhs = $_POST['input2'];
    $edit_proses = mysqli_query($db, "UPDATE mahasiswa SET nama_mhs = '$nama_mhs', prodi_mhs = '$prodi_mhs' WHERE id = '$npm'") or die(mysqli_error($db));

    if ($edit_proses) {
        echo "<script>alert('sukses')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }

    header("Location: formInput.php");
}

if (isset($_GET['id']) && isset($_GET['hapus'])){
    $id = $_GET['id'];
    $query = mysqli_query($db, "DELETE FROM mahasiswa WHERE id=$id") or die(mysqli_error($db));

    if ($query) {
        echo "<script>alert('sukses')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }


     header("Location: formInput.php");
}