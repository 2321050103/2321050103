<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 2</title>

    <style>
        .warning {
            color: red;
        }
    </style>
</head>

<body>

    <form action="login.php" method="post">
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>
        <div>
            <input type="submit" value="Đăng Nhập">
        </div>
    </form>
    <?php
    include("connect.php");
    if (isset($_POST['username']) && isset($_POST['password'])) {


        $ten_dang_nhap = $_POST['username'];
        $mat_khau = $_POST['password'];


        $sql = "select * from nguoi_dung where ten_dang_nhap = '$ten_dang_nhap' and mat_khau = '$mat_khau'";

        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION["username"] = $ten_dang_nhap;

            header('location: index.php');
            
        } else {
            echo "<p class='warning'>Sai thông tin đăng nhập</p>";
        }
    }
    ?>


</body>

</html>