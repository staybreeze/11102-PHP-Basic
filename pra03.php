<h1>尋找字串</h1>


<?php

// WHILE不確定會跑幾次的時候可以用(也就是不知道$SOURCE多長的時候)
// 宣告原始字串
$source = "嗨嗨你好嗎";

// 宣告要尋找的目標字串
$target = '嗎';

// 宣告一個標誌，用於指示是否找到了目標字串
$flag = '沒找到';

// 初始化開始搜索的位置為0
$start = 0;

// 進入一個while迴圈，只有當$flag的值是"沒找到"時才會執行
while ($flag == "沒找到") {
    // 使用mb_substr函數從原始字串中提取一個子字串，開始位置是$start，長度為$target的長度
    $tmp = mb_substr($source, $start, mb_strlen($target));
        // (範圍,從哪裡開始,找什麼)
    // mb_substr 多語言字串
    // mb_strlen 多語言字串長度
    // 比較提取的子字串是否等於目標字串
    if ($tmp == $target){
        // 如果相等，將$flag設置為"找到了"，然後跳出迴圈
        $flag="找到了";
        break;
    }
    // 如果子字串不等於目標字串，增加$start的值，以便在下一次迭代中搜索下一個子字串
    $start++;
}

// 打印結果
echo "找到了;位置在".$start; // 顯示目標字串在原始字串中的位置
echo "<br>";
echo "原始字串-$source"; // 顯示原始字串
// echo '原始字串-'.$source; 等同雙引號
echo "<br>";
echo "尋找目標-$target"; // 顯示尋找的目標字串
