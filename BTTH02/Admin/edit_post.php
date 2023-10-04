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
            <h3 class="text-center"><strong>SỬA THÔNG TIN BÀI VIẾT</strong></h3>
            <?php
            include "sql/Connection.php";
            $id = $_GET['id'];
            $sql = "SELECT * FROM baiviet where ma_bviet = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <form action="sql/post/process_edit_post.php" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Mã bài viết</span>
                    <input type="text" class="form-control" readonly name="id" value="<?= $id ?>" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tiêu đề</span>
                    <input type="text" class="form-control" name="tieude" value="<?= $result['tieude']; ?>" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tên bài hát</span>
                    <input type="text" class="form-control" name="tenbh" value="<?= $result['ten_bhat']; ?>" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Mã thể loại</span>
                    <select class="form-select" name="matl" aria-label="Default select example">
                        <option selected>Chọn thể loại</option>
                        <?php
                        include "sql/Connection.php";
                        $sql1 = 'SELECT * FROM theloai';
                        $result1 = $conn->query($sql1);
                        $sql2 = 'SELECT theloai.ma_tloai FROM theloai INNER JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai where ma_bviet = :id';
                        $stmt = $conn->prepare($sql2);
                        $stmt->bindParam(':id', $id);
                        $selecteds = [];
                        $stmt->execute();
                        while ($index = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $selecteds[] = $index['ma_tloai'];
                        }
                        if ($result1->rowCount() > 0) {
                            while ($row1 = $result1->FETCH(PDO::FETCH_ASSOC)) {
                                $matl = $row1['ma_tloai'];
                                $isSelected = in_array($matl, $selecteds) ? 'selected' : '';
                                ?>
                                <option value="<?= $matl ?>" <?= $isSelected ?>><?= $row1['ten_tloai']; ?></option>
                                <?php
                            }};
                        ?>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="tomtat" id="floatingTextarea2" style="height: 100px"><?= $result['tomtat']; ?></textarea>
                    <label for="floatingTextarea2">Tóm tắt</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="noidung" id="floatingTextarea2" style="height: 100px"><?= $result['noidung']; ?></textarea>
                    <label for="floatingTextarea2">Nội dung</label>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Mã tác giả</span>
                    <select class="form-select" name="matg" aria-label="Default select example">
                        <option>Chọn tác giả</option>
                        <?php
                        include "sql/Connection.php";
                        $sql1 = 'SELECT * FROM tacgia';
                        $result2 = $conn->query($sql1);
                        $sql2 = 'SELECT tacgia.ma_tgia FROM tacgia INNER JOIN baiviet ON tacgia.ma_tgia = baiviet.ma_tgia where ma_bviet = :id';
                        $stmt = $conn->prepare($sql2);
                        $stmt->bindParam(':id', $id);
                        $selecteds = [];
                        $stmt->execute();
                        while ($index = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $selecteds[] = $index['ma_tgia'];
                        }
                        if ($result2->rowCount() > 0) {
                            while ($row1 = $result2->FETCH(PDO::FETCH_ASSOC)) {
                                $matg = $row1['ma_tgia'];
                                $isSelected = in_array($matg, $selecteds) ? 'selected' : '';
                                ?>
                        <option value="<?= $matg ?>" <?= $isSelected ?>><?= $row1['ten_tgia']; ?></option>
                        <?php
                        }};
                        ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Ngày viết</span>
                    <input type="text" value="<?= $result['ngayviet'] ?>" disabled class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Hình ảnh</span>
                    <input type="text" name="hinhanh" value="<?= $result['hinhanh'] ?>" class="form-control" aria-describedby="basic-addon1">
                </div>
                <div class="mt-2 d-flex justify-content-end mb-5">
                    <button type="submit" class="btn btn-success mx-2">Lưu</button>
                    <a href="post.php" class="btn btn-warning">Quay lại</a>
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
