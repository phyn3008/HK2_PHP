<?php
//1. Các phép toán số học
$n = 10;
$m = 5;
$kq1 = $m + $n;
echo "Phép cộng : $kq1";
$kq2 = $m - $n;
echo "Phép trừ : $kq2";
$kq3 = $m * $n;
echo "Phép nhân : $kq3";
$kq4 = $m / $n;
echo "Phép chia : $kq4";
$kq5 = $m % $n;
echo "Phép lấy dư : $kq5";


//2. Phép toán so sánh
$s = "10";
$ss = $n == $s; //So sánh tương đối (chỉ giá trị)
 echo $ss;
// --> gt: true ==> in

$s = "10";
$ss = $n === $s; //So sánh tuyệt đối (chỉ giá trị và kiểu giá trị)
echo $ss;
// --> gt: false ==> ko in

//3. Phép toán kết hợp
echo ++$n;
echo $m++;

//4.Phép toán 3 ngôi
$gt = $n > $m ? "$n > $m" : ($n == $m ? "$n == $m" : "$n < $m");
echo $gt;

//5.Phép toán Logic
$gt1 = ($n > $m && $s != $n) ? "Thỏa điều kiện" :"Không thỏa điều kiện" ;
echo $gt1;

?>


