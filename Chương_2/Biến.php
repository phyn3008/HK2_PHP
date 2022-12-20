<?php
    //Biến trong PHP
    //Biến sẽ bắt đầu bằng ký tự $
    //Biến có thể lưu trữ số, chuôi, logic, đối tượng, và mảng

    $n = 5; //n lưu một số nguyên
    echo $n;
    echo gettype($n);

    $m = 7.3;
    echo $m;
    echo gettype($m);

    $s ="HELLO WORLD";
    echo $s;
    echo gettype($s);

    $t = true;
    echo $t;
    echo gettype($t);

    //Chú ý về chuỗi và sử dụng cặp ngoặc kép hay cặp ngoặc đơn
    $ho = 'Phan Hồ Yến';
    $ten ='Nhi';
    // echo "Chào bạn $ho $ten";
    // Nếu sử dụng dấu nháy đơn thì phải dùng phép toán nối chuỗi (.)
    echo 'Chào bạn'  . $ho . ' ' . $ten;


    //Khi muốn sử dụng văn bản thuần túy nên dùng nối đơn để project chạy nhanh
?>