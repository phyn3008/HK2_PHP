<?php
//Hằng trong PHP
//1. Trong các phiên bản cũ(dùng đc cả cũ và mới)
define("Hang_So_1",10);
//2. Trong các phiên bản mới
const Hang_So_2 = "Hello";


//Nen cân nhắc để dùng phiên bản nào 
echo Hang_So_1;
echo gettype(Hang_So_1);

echo Hang_So_2;
echo gettype(Hang_So_2);

?>