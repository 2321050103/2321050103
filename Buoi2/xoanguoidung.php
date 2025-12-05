<?php
include "connect.php";

if (!isset($_GET['id'])) {
    die("Không có ID để xoá!");
}

$id = intval($_GET['id']);  // tránh lỗi SQL injection & lỗi cú pháp

$sql = "DELETE FROM nguoi_dung WHERE id = $id";

if (mysqli_query($connect, $sql)) {
    mysqli_close($connect);
    header("Location: index.php?page_layout=nguoidung");
    exit();
} else {
    echo "Lỗi SQL: " . mysqli_error($connect);
}
?>
