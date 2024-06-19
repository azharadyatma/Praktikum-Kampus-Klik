<?php
include_once('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai Mahasiswa</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <form action="tampil.php" class="navbar-search" method="POST">
                <input type="text" name="cari" class="search-query" placeholder="Cari">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
            <div class="span9" id="content">
                <div class="row-fluid">
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"></div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <form action="proses.php" method="POST">
                                    <fieldset>
                                        <legend>FORM INPUT NILAI MAHASISWA</legend>
                                        <div class="control-group">
                                            <label for="npm">NPM</label>
                                            <div class="controls">
                                                <input type="text" name="npm" value="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="npm">NAMA</label>
                                            <div class="controls">
                                                <input type="text" name="input1" value="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="npm">PRODI</label>
                                            <select name="input2" id="input2">
                                                <option value="" disabled selected>Pilih program studi</option>
                                                <option value="Informatika">Informatika</option>
                                                <option value="Sistem Informasi">Sistem Informasi</option>
                                                <option value="Kedokteran">Kedokteran</option>
                                            </select>
                                        </div>

                                        <div class="form_action">
                                            <button type="submit" class="btn btn-primary" name="proses">Kirim</button>
                                            <button type="reset" class="btn">Cancel</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <?php
                    include_once("tampil.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>