<?php
// 4. 初始化變數
// 1. for(起始值；條件式；增減值){
    
    // 增減值:算每一式的起始值
//    2.  程式碼
//3. 變數不得在未宣告時，計算公式
// }


// $sum
// $i   $sum+$i  $sum
// 1      0+1      1
// 2      1+2      3
// 3      3+3      6
// 4      6+4      10

// $sum=0;
// for($i=1;$i<=100;$i=$i+1)
// {$sum=$sum+$i;

// }
// echo "1加到100為".$sum;



$sum=220;
for($i=20;$i<=100;$i=$i){
    echo "當$i=".$i."時";
    echo '$sum+$i的結果是';
    echo $sum."+".$i."=";
    echo $sum+$i;
    echo "<br>";
    $sum=$sum+$i;
}

$sum=0;
for($i=0;$i<=100;$i=$i+2){
    echo "當$i=".$i."時";
    echo '$sum+$i的結果是';
    echo $sum."+".$i."=";
    echo $sum+$i;
    echo "<br>";
    $sum=$sum+$i;
}


?>
