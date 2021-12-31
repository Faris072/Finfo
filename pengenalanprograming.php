<!doctype html>
<html lang="id">

<head>
    <title>Homepage</title>

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
    <!--link css-->
    <link rel="stylesheet" href="style.css">

    <style>
        
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!--position sticky untuk ketika di scroll ke bawah position menjadi fixed saat di scroll top ke atas position relative-->
        <div class="container">
            <button class="btn btn-primary" onclick="sidebar();" autofocus><i class="fas fa-bars"></i></button>
            <a class="navbar-brand px-5" href="#" style="font-family: 'Fredericka the Great', cursive;">F-Info</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse pl-5" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active p-1">
                        <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item p-1 dropdown navdropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Programing & Coding
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item disabled" href="#">UX</a>
                            <a class="dropdown-item" href="#">HTML</a>
                            <a class="dropdown-item" href="#">CSS</a>
                            <a class="dropdown-item" href="#">JavaScript</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item disabled" href="#">UI</a>
                            <a class="dropdown-item" href="#">PHP</a>
                            <a class="dropdown-item" href="#">LARAVEL</a>
                        </div>
                    </li>
                    <li class="nav-item p-1 dropdown navdropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Trik Game Android
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item disabled" href="#">Game Populer</a>
                            <a class="dropdown-item" href="#">Mobile Legends</a>
                            <a class="dropdown-item" href="#">PUBG Mobile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item disabled" href="#">Game Lainnya</a>
                            <a class="dropdown-item" href="#">Free Fire</a>
                            <a class="dropdown-item" href="#">POU</a>
                        </div>
                    </li>
                    <li class="nav-item p-1 dropdown navdropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Trading
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Analisis Fundamental</a>
                            <a class="dropdown-item" href="#">Analisis Tekhnical</a>
                        </div>
                    </li>
                    <li class="nav-item p-1 dropdown navdropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Artikel Sehari-hari
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item disabled" href="#">Kesehatan</a>
                            <a class="dropdown-item" href="#">Covid-19</a>
                            <a class="dropdown-item" href="#">Comming soon</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item disabled" href="#">Lainnya</a>
                            <a class="dropdown-item" href="#">Flu</a>
                            <a class="dropdown-item" href="#">Batuk</a>
                        </div>
                    </li>
                </ul>
                <a class="nav-link btn btn-success py-1 ml-0" href="login.php">Login</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid-xl">
        <div class="sidebar" id="sidebar">
            <ul>
                <li>
                    <a data-toggle="collapse" data-target="#intro"><i class="far fa-handshake pr-2" autofocus></i><b>Pengenalan</b></a>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#sublisthtml" aria-expanded="true"><i class="fab fa-html5 pr-2"></i> <b>HTML 5</b> <i class="fas fa-caret-down pl-3"></i></a>
                    <ul id="sublisthtml" class="collapse">
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#sublistcss"><i class="fab fa-css3-alt pr-2"></i> <b>CSS 3</b> <i class="fas fa-caret-down pl-3"></i></a>
                    <ul id="sublistcss" class="collapse">
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#sublistjs"><i class="fab fa-js-square pr-2"></i> <b>JavaScript</b> <i class="fas fa-caret-down pl-3"></i></a>
                    <ul id="sublistjs" class="collapse">
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#sublistbootstrap"><i class="fab fa-bootstrap pr-2"></i> <b>Bootstrap 4</b> <i class="fas fa-caret-down pl-3"></i></a>
                    <ul id="sublistbootstrap" class="collapse">
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#sublistphp"><i class="fab fa-php pr-2"></i> <b>PHP</b> <i class="fas fa-caret-down pl-3"></i></a>
                    <ul id="sublistphp" class="collapse">
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="collapse" data-target="#sublistC"><i class="fab fa-cuttlefish pr-2"></i> <b>Pemrograman C</b> <i class="fas fa-caret-down pl-3"></i></a>
                    <ul id="sublistC" class="collapse">
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                        <li><a href="">Struktur Dasar HTML</a></li>
                    </ul>
                </li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt pr-2"></i> <b>Logout</b></a></li>
            </ul>
            <br><br><br><br><br><br>
        </div>
        <div class="content" id="content">
            <marquee style="background-color:skyblue; padding:5px;">Selamat Datang di F-Info. Dapatkan informasi menarik dari sini</marquee>
            <div class="container my-5">
                <div class="isi my-5">
                    <img src="programing/programing.png" width="400" alt="" style="float:left;">
                    <br>
                    <h2><b>Apa itu programing?</b></h2>
                    <p>programing adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere obcaecati temporibus, mollitia sapiente dolorum animi laboriosam veniam vel, accusantium, voluptatem explicabo dignissimos officia tempora culpa velit repellendus expedita quidem dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ipsam fugit explicabo, beatae magni consequatur iste delectus, voluptatum nesciunt illum tempore culpa alias? Corporis suscipit labore, exercitationem impedit sequi architecto!</p>
                    <br><br><br>
                    <img src="programing/programing2.png" width="400" alt="" style="float:right;">
                    <br>
                    <h2><b>Apa itu programing?</b></h2>
                    <p>programing adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere obcaecati temporibus, mollitia sapiente dolorum animi laboriosam veniam vel, accusantium, voluptatem explicabo dignissimos officia tempora culpa velit repellendus expedita quidem dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ipsam fugit explicabo, beatae magni consequatur iste delectus, voluptatum nesciunt illum tempore culpa alias? Corporis suscipit labore, exercitationem impedit sequi architecto!</p>
                    <br><br><br>
                    <img src="programing/programing4.png" width="400" alt="" style="float:left;">
                    <br>
                    <h2><b>Apa itu programing?</b></h2>
                    <p>programing adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere obcaecati temporibus, mollitia sapiente dolorum animi laboriosam veniam vel, accusantium, voluptatem explicabo dignissimos officia tempora culpa velit repellendus expedita quidem dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ipsam fugit explicabo, beatae magni consequatur iste delectus, voluptatum nesciunt illum tempore culpa alias? Corporis suscipit labore, exercitationem impedit sequi architecto!</p>
                    <br><br><br>
                    <img src="programing/programing3.png" width="400" alt="" style="float:right;">
                    <br>
                    <h2><b>Apa itu programing?</b></h2>
                    <p>programing adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere obcaecati temporibus, mollitia sapiente dolorum animi laboriosam veniam vel, accusantium, voluptatem explicabo dignissimos officia tempora culpa velit repellendus expedita quidem dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ipsam fugit explicabo, beatae magni consequatur iste delectus, voluptatum nesciunt illum tempore culpa alias? Corporis suscipit labore, exercitationem impedit sequi architecto!</p>
                    <br><br><br><br>
                </div>
                <div class="nextprev my-5">
                    <a class="btn btn-secondary" href="#" disabled>
                        <h4><i class="fas fa-step-backward mr-1"></i> Prev</h4>
                    </a>
                    <a style="float:right;" class="btn btn-success" href="strukturdasarhtml.php">
                        <h4>Next <i class="fas fa-step-forward ml-1"></i></h4>
                    </a>
                </div>
            </div>
            <div class="footer bg-dark py-5" style="margin-bottom:0; padding-bottom:0;">
                <div class="container py-2">
                    <div class="row">
                        <div class="col-md-1 col-sm-1">
                            <center>
                                <h2><b>F-Info</b></h2>
                            </center>
                        </div>
                        <div class="col-md-10 col-sm-10 py-3">
                            <div class="list" style="color:white;">
                                <ul id="listfooter">
                                    <li>
                                        <h6><b>Programing & Coding</b></h6>
                                        <ul>
                                            <li>Pengenalan Programing</li>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>JavaScript</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h6><b>Programing & Coding</b></h6>
                                        <ul>
                                            <li>Pengenalan Programing</li>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>JavaScript</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h6><b>Programing & Coding</b></h6>
                                        <ul>
                                            <li>Pengenalan Programing</li>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>JavaScript</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h6><b>Programing & Coding</b></h6>
                                        <ul>
                                            <li>Pengenalan Programing</li>
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>JavaScript</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-1">
                            <center><a class="btn btn-primary" href="#">Login</a></center>
                        </div>
                    </div>
                </div>
                <br>
                <center>
                    <p style="color:white;">
                        copyright 2020 - <?php echo date('Y'); ?>
                        <br>
                        Muhammad Faris Shafwan.
                    </p>
                </center>
                <br><br>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function sidebar() {
            let x = document.getElementById('sidebar');
            let y = document.getElementById('content');
            if (x.style.width != '0%') { //saat sidebar ditutup
                x.style.width = '0%';
                y.style.width = '100%';
                y.style.filter = ''; //karena di ukuran < 600 ada filter maka saat sidebar ditutup filternya di hilangkan
                y.style.backgroundColor = '';
            } else if (window.innerWidth <= 600) { //saat ukuran < 600 (hp)
                x.style.width = '80%';
                y.style.width = '20%';
                y.style.filter = 'blur(3px) brightness(40%)';
                y.style.backgroundColor = 'rgba(0,0,0,0.5)';
            } else if (window.innerWidth <= 990) { //saat ukuran <990 (tablet)
                x.style.width = '45%';
                y.style.width = '55%';

            } else { //saat ukuran normal (laptop)
                x.style.width = '20%';
                y.style.width = '80%';
            }
        }
    </script>
</body>

</html>