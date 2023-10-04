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
                    <a class="nav-link" href="author.php">Tác giả</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="post.php"><strong>Bài viết</strong></a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <h3 class="text-center"><strong>THÊM MỚI BÀI VIẾT</strong></h3>
            <form action="sql/post/process_add_post.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tiêu đề</span>
                    <input type="text" name="tieude" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tên bài hát</span>
                    <input type="text" name="tenbh" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Thể loại</span>
                    <select class="form-select" name="matl" aria-label="Default select example">
                        <option selected>Chọn thể loại</option>
                        <?php
                            include "sql/Connection.php";
                            $sql = "SELECT * from theloai";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <option value="<?= $row['ma_tloai'] ?>"><?= $row['ten_tloai']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="tomtat" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Tóm tắt</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="noidung" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Nội dung</label>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tác giả</span>
                    <select class="form-select" name="matg" aria-label="Default select example">
                        <option selected>Chọn tác giả</option>
                        <?php
                        include "sql/Connection.php";
                        $sql = "SELECT * from tacgia";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>
                            <option value="<?= $row['ma_tgia'] ?>"><?= $row['ten_tgia']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Hình ảnh</span>
                    <input type="text" name="hinhanh" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="mt-2 d-flex justify-content-end mb-5">
                    <button type="submit" class="btn btn-success mx-2">Thêm</button>
                    <a href="post.php" class="btn btn-warning">Quay lại</a>
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
