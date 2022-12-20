<?php
//Mảng có chỉ số là số nguyên : 0,1,2,... Có 2 cách khai báo và sử dụng
//Cách 1:
$arr1 = array();//Khởi tạo một mảng rỗng
$arr1[0] = 5; //  Gán giá trị cho phần tử thứ 0
$arr1[1] = "Hello"; //  Gán giá trị cho phần tử thứ 1
$arr1[2] = "PHP"; //  Gán giá trị cho phần tử thứ 2
$arr1[3] = 15; //  Gán giá trị cho phần tử thứ 3
var_dump(arr1); //Xuất ra mảng
echo "<br>"
// echo "<hr>"
print_r($arr1);

echo "<pre>";
print_r($arr1);
echo "</pre>"; //Thẻ pre giữ nguyên định dạng
echo "<hr>"

$arr2 =array("CSS","HTML","JS"); // Vừa khởi tạo vừa gán giá trị
print_r($arr2);

//Cách 1:
$arr3 = [];//Khởi tạo một mảng rỗng
$arr3[] = 5; //  Gán giá trị cho phần tử thứ 0
$arr3[] = "Hello"; //  Gán giá trị cho phần tử thứ 1
$arr3[] = "PHP"; //  Gán giá trị cho phần tử thứ 2
$arr3[] = 15; //  Gán giá trị cho phần tử thứ 3
var_dump(arr3); //Xuất ra mảng
echo "<br>"
// echo "<hr>"
print_r($arr3);

echo "<pre>";
print_r($arr3);
echo "</pre>"; //Thẻ pre giữ nguyên định dạng
echo "<hr>"

$arr4 =["CSS","HTML","JS"]; // Vừa khởi tạo vừa gán giá trị
print_r($arr4);
?>