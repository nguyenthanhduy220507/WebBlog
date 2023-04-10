<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="shortcut icon" type="image/x-icon" href="/img/that_right.jpg">

    <title>Zz</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/Znake-Spotify-v1.0/style.css">


</head>

<body>
    <?php
    require 'connect.php';
    require '../admin/search.php';
    require '../admin/page_search.php';

    $sql = "select * from products";
    $result_silde = mysqli_query($ket_noi, $sql);
    $list_side = mysqli_fetch_all($result_silde, MYSQLI_ASSOC); //lấy tất cả các phần tủ của mảng
    $list_three_side_end = array_slice($list_side, -3, 3, true); // lấy 3 phần tử cuối của mảng
    ?>
    <header>
        <div class="collapse" id="navbarHeader" style="background-color:#472270;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none"><i class="znake-icon-twitter text-white"> Follow on Twitter</i></a></li>
                            <li><a href="#" class="text-white text-decoration-none"><i class="znake-icon-facebook text-white"> Like on Facebook</i></a></li>
                            <li><a href="#" class="text-white text-decoration-none"><i class="znake-icon-github text-primary"> </i> Github</a></li>
                            <li><a href="/html/group.html" class="text-white text-decoration-none"><i class="znake-icon-spotify-user text-primary"> </i> Group</a></li>
                            <li><a href="/html/contact.html" class="text-white text-decoration-none"><i class="znake-icon-bancontact text-primary"> </i> Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <i class="znake-icon-bigcartel">
                        <strong> Home</strong>
                    </i>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php $active = 'class="active"'; ?>
                 <!-- cắt mảng thành 3 phần tử cuối cùng -->
                 <?php foreach ($result_silde as $index => $list) : ?>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?php echo $index; ?>" <?php echo $active; ?>  ></button>
                    <?php $active = ''; ?>
                <?php endforeach; ?>
            </div>
            <div class="carousel-inner">
                <?php $active = 'active'; ?>
                <!-- duyệt  -->
                <?php foreach ($result_silde as $list) : ?>
                    <div class="carousel-item <?php echo $active; ?>">
                        <img src="<?php echo $list['image'] ?>" class="d-block w-100" alt="<?php echo $list['title'] ?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h1><?php echo $list['title'] ?></h1>
                            <p><?php echo $list['description'] ?></p>
                            <a href="show.php?id=<?php echo $list['id'] ?>" class="btn btn-lg btn-primary">View</a>
                        </div>
                    </div>
                    <?php $active = ''; ?>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach ($result as $list) : ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="<?php echo $list['image'] ?>" alt="<?php echo $list['title'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $list['title'] ?></h5>
                                    <p class="card-text"><?php echo $list['description'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="show.php?id=<?php echo $list['id'] ?>" class="btn btn-sm btn-outline-dark">View</a>
                                            <a href="/Bai3/c.php?id=<?php echo $list['id'] ?>" class="btn btn-sm btn-outline-primary">Like</a>
                                        </div>
                                        <small class="text-muted">Like +1</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <?php 
            require '../admin/prev_next.php';
        ?>
    </main>
    <footer class="text-muted py-5 bg-dark">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#" class="text-decoration-none text-white fw-bold fs-4">Back to top</a>
            </p>
            <p class="mb-1">273 An Dương Vương Quận 5 Thành Phố Hồ Chí Minh &copy; Coppy right!</p>
            <p class="mb-0">Công Nghệ Thông Tin Khóa K20 <a href="#" class="text-white text-decoration-none">&copy;SGU-fit</a> Web Blog <a href="#" class="text-decoration-none text-white">Python Linux Mã Nguồn Mở</a>.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>