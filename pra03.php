<h1>尋找字串</h1>
<?php

// WHILE不確定會跑幾次的時候可以用(也就是不知道$SOURCE多長的時候)
$source = "嗨嗨你好嗎";

$target = '嗎';

$flag = '沒找到';
$start = 0 ;
// $pos = 0;
while ($flag == "沒找到") {
    $tmp = mb_substr($source, $start, mb_strlen($target));
    if ($tmp == $target){
        $flag="找到了";
        break;
    }
    $start++;
    // $pos++;
}
echo "找到了;位置在".$start;
echo "<br>";
echo "原始字串-$source";
// echo '原始字串-'.$source; 等同雙引號
echo "<br>";
echo "尋找目標-$target";