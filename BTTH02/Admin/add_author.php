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
        <nav class="navbar navbar-expand-lg bg-white" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Administration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="category.php">Thể loại</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="author.php"><strong>Tác giả</strong></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="post.php">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <h3 class="text-center"><strong>THÊM MỚI TÁC GIẢ</strong></h3>
            <form action="sql/author/process_add_author.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tên tác giả</span>
                    <input type="text" name="tentg" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Hình tác giả</span>
                    <input type="text" name="hinhtg" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="mt-2 d-flex justify-content-end mb-5">
                    <button type="submit" class="btn btn-success mx-2">Thêm</button>
                    <a href="author.php" class="btn btn-warning">Quay lại</a>
                </div>
            </form>
            <?php
            if(isset($_GET['response']) && $_GET['response'] == 'success'){
                echo '<p class="bg-success p-3 text-light">Thêm thành công</p>';
            }
            if(isset($_GET['response']) && $_GET['response'] == 'error'){
                echo '<p class="bg-danger p-3 text-light">Thêm thất bại</p>';
            }
            ?>
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
