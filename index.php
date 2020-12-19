<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <div class="container-fluid">
        <?php
        $page = $_GET['page'] ?? '';
        $home = 'home.php';
        if ($page === 'register') {
            $home = 'formTambah.php';
        } elseif ($page === 'edit') {
            $home = 'formUbah.php';
        } elseif ($page === 'delete') {
            $home = 'konfirmasiHapus.php';
        }
        include($home);
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>