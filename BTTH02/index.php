<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="logo.png" alt="logo" width="250px" height="100px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><strong>TRANG CHỦ</strong></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login.php">ĐĂNG NHẬP</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
                </div>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://mms.businesswire.com/media/20200806005964/en/811138/5/Large.jpg" class="d-block w-100" alt="1" height="500px">
                </div>
                <div class="carousel-item">
                <img src="https://mms.businesswire.com/media/20200806005964/en/811138/5/Large.jpg" class="d-block w-100" alt="2" height="500px">
                </div>
                <div class="carousel-item">
                <img src="https://mms.businesswire.com/media/20200806005964/en/811138/5/Large.jpg" class="d-block w-100" alt="3" height="500px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="heading">
          <h3 class="heading-title text-center mt-3 text-primary">TOP BÀI HÁT YÊU THÍCH</h3>
        </div>
      <div class="content row m-1">
        <div class="box col-md-2 rounded border mb-3 p-0 mx-3">
            <a href="detail.php" style="text-decoration:none">
                <img src="https://i.ytimg.com/vi/4xFajqdEmYk/maxresdefault.jpg" alt="" class="img-fluid">
                <div class="text-center p-3">
                    <h4 class="title text-primary text-align-center">Cây, lá và gió</h4>
                </div>
            </a>
        </div>
        <div class="box col-md-2 rounded border mb-3 p-0 mx-3">
            <img src="https://i.ytimg.com/vi/ULZNKAV5lh0/maxresdefault.jpg" alt="" class="img-fluid p-0">
            <div class="text-center p-3">
                <h4 class="title text-primary text-align-center">Cuộc sống mến thương</h4>
            </div>
        </div>
        <div class="box col-md-2 rounded border mb-3 p-0 mx-3">
            <img src="https://i.ytimg.com/vi/KuUsjJE-n0A/maxresdefault.jpg" alt="" class="img-fluid">
            <div class="text-center p-3">
                <h4 class="title text-primary text-align-center">Lòng mẹ</h4>
            </div>
        </div>
        <div class="box col-md-2 rounded border mb-3 p-0 mx-3">
            <img src="https://i.ytimg.com/vi/rFmz9VLQHAk/maxresdefault.jpg" alt="" class="img-fluid">
            <div class="text-center p-3">
                <h4 class="title text-primary text-align-center">Phôi pha</h4>
            </div>
        </div>
        <div class="box col-md-2 rounded border mb-3 p-0 mx-3">
            <img src="https://i.ytimg.com/vi/tEoVdgQ2L-0/maxresdefault.jpg" alt="" class="img-fluid">
            <div class="text-center p-3">
                <h4 class="title text-primary text-align-center">Nơi tình yêu bắt đầu</h4>
            </div>
        </div>
        
      </div>

      <footer>
        <hr>
        <h3 class="text-center"><strong>TLU'S MUSIC GARDEN</strong></h3>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
