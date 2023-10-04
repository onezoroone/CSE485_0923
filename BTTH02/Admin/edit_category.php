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
                    <a class="nav-link" href="category.php"><strong>Thể loại</strong></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="author.php">Tác giả</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="post.php">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <h3 class="text-center"><strong>SỬA THÔNG TIN THỂ LOẠI</strong></h3>
            <?php
                include "sql/Connection.php";
                $id = $_GET['id'];
                $sql = "SELECT * FROM theloai where ma_tloai = $id";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <form action="sql/category/process_edit_category.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Mã thể loại</span>
                    <input type="text" name="matl" readonly value="<?= $result['ma_tloai'] ?>" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tên thể loại</span>
                    <input type="text" name="tentl" value="<?= $result['ten_tloai'] ?>" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="mt-2 d-flex justify-content-end mb-5">
                    <button type="submit" class="btn btn-success mx-2">Lưu</button>
                    <a href="category.php" class="btn btn-warning">Quay lại</a>
                </div>
            </form>
            <?php
            if(isset($_GET['response']) && $_GET['response'] == 'success'){
                echo '<p class="bg-success p-3 text-light">Sửa thành công</p>';
            }
            if(isset($_GET['response']) && $_GET['response'] == 'error'){
                echo '<p class="bg-danger p-3 text-light">Sửa thất bại</p>';
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
