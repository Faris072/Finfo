pengaturangame.php<?php
include('../config.php');
include('function.php');

editprograming($koneksi);
?>

<!doctype html>
<html lang="id">

<head>
    <title>Admin Homepage</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/7b5d20839a.js" crossorigin="anonymous"></script>
    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--Font Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!--link CSS-->
    <link rel="stylesheet" href="styleadmin.css">
    <style>

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <button class="btn btn-outline-light mr-5" onclick="sidebar();">=</button>
            <a class="navbar-brand" href="#" style="font-family:fredericka the great; color:white;">Admin F-Info</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home Admin <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid-xl d-flex">
        <div class="sidebar">
            <div class="menu">
                <ul>
                    <li>
                        <a href="" data-target="#target1" data-toggle="collapse">pengaturan beranda</a>
                        <ul class="collapse show" id="target1">
                            <li><a href="#" style="background-color:blue;">Pengaturan Programing</a></li>
                            <li><a href="#">Pengaturan Game</a></li>
                            <li><a href="#">Pengaturan Trading</a></li>
                            <li><a href="#">Pengaturan Artikel</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid-xl bg-light">
                <div class="container p-1 pt-3 pl-5">
                    <p>F-info / admin / pengaturan beranda / <a href="index.php">pengaturan programing</a></p>
                </div>
            </div>
            <div class="container p-5">
                <?php
                $sql = "SELECT * FROM homepage_programing";
                $query = mysqli_query($koneksi, $sql);
                while ($pecah = mysqli_fetch_array($query)) {
                ?>
                    <div class="konten m-auto p-5">
                        <center>
                            <h3><?php echo $pecah['judul']; ?></h3>
                        </center>
                        <div class="isikonten py-3">
                            <center><?php echo $pecah['logo_FA']; ?></center>
                            <p><?php echo $pecah['isi']; ?></p>
                            <br>
                            <a href="<?php echo $pecah['link']; ?>"></a>
                            <br>
                        </div>
                    </div>
                    <div class="edit p-5" style="display:none;">
                        <center>
                            <h3>Edit <?php echo $pecah['judul']; ?></h3>
                        </center>
                        <form action="" method="POST">
                            <input type="number" name="id" value="<?php echo $pecah['id']; ?>" hidden>
                            <table cellpadding="5" cellspacing="0" border="0">
                                <tr>
                                    <td>Judul</td>
                                    <td>:</td>
                                    <td><input type="text" name="judul" value="<?php echo $pecah['judul']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Logo</td>
                                    <td>:</td>
                                    <td><input type="text" name="logo" value="<?php echo $pecah['logo_FA']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>isi</td>
                                    <td>:</td>
                                    <td><textarea rows="10" cols="100" name="isi"><?php echo $pecah['isi']; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td>link</td>
                                    <td>:</td>
                                    <td><input type="text" name="link" value="<?php echo $pecah['link']; ?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td><input type="submit" class="btn btn-success" name="edit" value="Simpan Perubahan"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <button class="btn btn-primary" onclick="edit();">Edit</button>
                <?php } ?>
            </div>
        </div>
        <div class="mode" style="position:fixed; bottom:15px; right:15px;">
            <button onclick="mode();" style="background-color:black; width:50px; height:50px; border-radius:100%; border:0;"><i class="fas fa-moon fa-2x" style="color:white;"></i></button>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--script JS-->
    <script src="jsadmin.js"></script>
    <script>

    </script>
</body>

</html>