<?php
session_start();
include "Admin/sql/Connection.php";
if(isset($_POST['btn-login'])){
        $user  = $_POST['user'];
        $pass = $_POST['pass'];
        $query = "Select pass from nguoidung where username = '$user'";
        $result = $conn->query($query);
        if($result->rowCount()>0){
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $hashpass = $row['password'];
            if (password_verify($pass, $hashpass)) {
                $_SESSION['user'] = $user;
                $_SESSION['loggedIn'] = true;
                header("Location: index.php");
                exit();
            } else {
                header("Location: login.php?error");
            }
        }else{
            header("Location: login.php?error");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .social_icon span a i:hover{
            color: black;
        }
        #btn-login{
            background-color: #FFC312; 
            color:black;
            width:100px;
        }
        #btn-login:hover{
            background-color: white;
        }
        .link{
            color:#ffc312;
            text-decoration: none;
        }
        .link:hover{
            color:white;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="logo.png" alt="logo" width="250px" height="100px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="#"><strong>ĐĂNG NHẬP</strong></a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="card" style="width:400px;background-color: rgba(0,0,0,0.5);">
                    <div class="card-header">
                        <h3 style="color:white">Sign In</h3>
                        <div class="d-flex justify-content-end social_icon position-absolute end-0" style="top: -30px;">
                            <span><a href="#" style="color: #FFC312;"><i class="bi bi-facebook fs-1 m-1"></i></a></span>
                            <span><a href="#" style="color: #FFC312;"><i class="bi bi-google fs-1 m-1"></i></a></span>
                            <span><a href="#" style="color: #FFC312;"><i class="bi bi-twitter fs-1 m-1"></i></a></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="input-group mb-3">
                                <div class="input-group-text">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <input type="text" name="user" class="form-control" placeholder="username">
                            </div>

                            <div class="input-group">
                                <div class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                                </div>
                                <input type="text" name="pass" class="form-control" placeholder="password">
                            </div>
                            <div class="mt-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" style="color:white">Remember Me</label>
                            </div>
                            <button type="submit" id="btn-login" class="btn btn-login mb-5 float-end">Login</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="links d-flex justify-content-center">
                            Don't have an account?<a class="link" href="#">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="link">Forgot your password?</a>
                        </div>
                    </div>
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
