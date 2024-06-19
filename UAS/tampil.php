<?php
include_once("koneksi.php");
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($db, $query);

if (isset($_POST["cari"])) {
    $cari = $_POST["cari"];
    $query = "SELECT * FROM mahasiswa WHERE nama_mhs LIKE '$cari%' OR prodi_mhs LIKE '$cari%' OR id LIKE '$cari%'";
    $result = mysqli_query($db, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Tabel Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Prodi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($result as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['nama_mhs']; ?></td>
                                        <td><?php echo $data['prodi_mhs']; ?></td>
                                        <td><a href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
                                            | <a href="proses.php?id=<?php echo $data['id']; ?>&hapus=true">HAPUS</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>