<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <title>iSchool</title>
</head>

<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">iSchool</a>
            <span class="navbar-text">Học và Thực hành</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav custom-nav pl-5">
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="#">Khóa học</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="#">Thanh toán</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="#">Hồ sơ</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="#">Đăng xuất</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="#">Đăng nhập</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="#">Đăng ký</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="#">Phản hồi</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <!-- Start Video Background -->
    <div class="container-fluid remove-video-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/mixkit-man-working-with-data-center-computer-23214-medium.mp4">
            </video>
            <div class="vid-overlay"></div>
        </div>
        <div class="vid-content">
            <h1 class="my-content">Chào mừng đến với iSchool</h1>
            <small class="my-">Học và thực hành</small><br />
            <a href="#" class="btn btn-danger">Bắt đầu</a>
        </div>
    </div>
    <!-- End Video Background -->

    <!-- Start Text Banner -->
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i>100+ Khóa học Online</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i>Giảng viên chuyên nghiệp</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>Truy cập trọn đời</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-dong-sign mr-3"></i>Chính sách hoàn học phí*</h5>
            </div>
        </div>
    </div>
    <!-- End Text Banner -->

    <!-- Start Most Popular Course -->
    <div class="container mt-5">
        <h1 class="text-center">Popular Course</h1>
        <!-- Start Most Popular Course 1st Card Deck -->
        <div class="row card-deck mt-4">
            <div class="col-sm">
                <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
                    <div class="card">
                        <img src="image/courseimg/spring.jpg" alt="Guitar" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-tittle">Learn Guitar Easy Way</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, rerum!</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
                                <span class="font-weight-bolder">&#8377 200</span>
                            </p>
                            <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
                    <div class="card">
                        <img src="image/courseimg/ai.jpg" alt="Guitar" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-tittle">Learn Guitar Easy Way</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, rerum!</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
                                <span class="font-weight-bolder">&#8377 200</span>
                            </p>
                            <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
                <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
                    <div class="card">
                        <img src="image/courseimg/ml.jpg" alt="Guitar" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-tittle">Learn Guitar Easy Way</h5>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, rerum!</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
                                <span class="font-weight-bolder">&#8377 200</span>
                            </p>
                            <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Most Popular Course 1st Card Deck -->
            <!-- Start Most Popular Course 2st Card Deck -->
            <div class="row card-deck mt-4">
                <div class="col-sm">
                    <a href="#" class="btn" style="text-align: left; padding: 0px;">
                        <div class="card">
                            <img src="image/courseimg/python.jpg" alt="Guitar" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-tittle">Learn Python</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, rerum!</p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
                                    <span class="font-weight-bolder">&#8377 200</span>
                                </p>
                                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="#" class="btn" style="text-align: left; padding: 0px;">
                        <div class="card">
                            <img src="image/courseimg/angular.jpg" alt="Guitar" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-tittle">Learn Python</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, rerum!</p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
                                    <span class="font-weight-bolder">&#8377 200</span>
                                </p>
                                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="#" class="btn" style="text-align: left; padding: 0px;">
                        <div class="card">
                            <img src="image/courseimg/vue.jpg" alt="Guitar" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-tittle">Learn Python</h5>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, rerum!</p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
                                    <span class="font-weight-bolder">&#8377 200</span>
                                </p>
                                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <!-- End Most Popular Course 2st Card Deck -->
            <div class="text-center m-2">
                <a href="#" class="btn btn-danger btn-sm">View All Course</a>
            </div>
        </div>
        <!-- Start Most Popular Course -->

        <!-- Jquery and Bootstrap JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>

        <!-- Font Awesome JavaScript -->
        <script src="js/all.min.js"></script>

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
</body>

</html>