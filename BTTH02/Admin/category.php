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
                    <a class="nav-link active" href="#"><strong>Thể loại</strong></a>
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
        <div class="container">
            <a href="add_category.php" class="btn btn-success mt-5">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên thể loại</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "sql/Connection.php";
                    $sql = "SELECT * FROM theloai";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <tr>
                    <th scope="row"><?= $row['ma_tloai'] ?></th>
                    <td><?= $row['ten_tloai'] ?></td>
                    <td><a href="edit_category.php?id=<?= $row['ma_tloai'] ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="" data-bs-toggle="modal" data-bs-target="#Modal<?= $row['ma_tloai'] ?>"><i class="bi bi-trash-fill"></i></a></td>
                    </tr>
                        <div class="modal fade" id="Modal<?= $row['ma_tloai'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn chắc chắn muốn xóa thể loại <?= $row['ten_tloai'] ?> không?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                        <a href="sql/category/process_delete_category.php?id=<?= $row['ma_tloai'] ?>" type="button" class="btn btn-primary">Có</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php  }  ?>
                </tbody>
            </table>
            <?php
            if(isset($_GET['response']) && $_GET['response'] == 'success'){
                echo '<p class="bg-success p-3 text-light">Xóa thành công</p>';
            }
            if(isset($_GET['response']) && $_GET['response'] == 'error'){
                echo '<p class="bg-danger p-3 text-light">Xóa thất bại</p>';
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
