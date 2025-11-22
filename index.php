<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php
            // in ra màn hình
            echo "Hello World! <br>";
            echo "Hi ";
            // Biến
            // Cú pháp $+ tên biến
            $ten =" hoang manh cuong";
            $tuoi = 20;
             echo $ten . " ".$tuoi ."tuổi"."<br>";
           // hằng
           define("soPI","3,14");
           echo(soPI)."<br>";
           // phân biệt " và '
           echo '$ten'."<br>";
           echo "$ten"."<br>";
           // Chuỗi
           # 5.1 Kiểm ttra đỗ dài của chuỗi
           echo strlen(  $ten )."<br>";
           # 5.2 Đếm sso từ
           echo str_word_count( $ten);
           # 5.3 kiểm tra ký tự trong từ
           echo strpos( $ten,"a");
           # 5.4 thay thế ký tự trong chuõi
           echo str_replace("manh","van",$ten);
           // Toán tử
           $soThuNhat =10;
           $soThuHai =5;
           #phép cộng
           # +-*/
           # +=*=.....
           # so sánh == !=
            echo $soThuNhat %=  $soThuHai;
            // Câu điều kiện
            // if("đeiefu kiện")
            //logic
            //else if
            //else
            // kiểm tra tổng của số thứ nhất và số thứ hai
            // nếu <15 in ra nhỏ hơn 15
            // nếu =15 in ra bằng 15
           // còn lại lớn hơn 15
           echo $tong=$soThuNhat+$soThuHai;
           if ($tong<15){
            echo "nhỏ hơn 15";
           } elseif($tong==15){
            echo "tổng= 15";
           } else {
            echo "lớn hơn 15";
           }
// 8. switch case
$color="red";
switch($color){
    case "red":
        echo "is red";
        break;
         case "blue":
        echo "is blue";
        break;
         case "black":
        echo "is black";
        break;


}
//9.for
for($i=0;$i<100;$i++){
    echo.$i ."<br>";
}
//10.mảng
$mang=["anh","nhatanh"];
// 11. Đếm phaan tử
echo count($mang);
echo $mang[1];
print_r($mang);
$mang[0]="hai anh";
print_r($mang);
$mang[]="hai anh";
print_r($mang);
unset($mang3);
print_r($mang);

    
    
    ?>
</body>
</html>