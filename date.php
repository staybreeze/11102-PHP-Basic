<h1>日期與時間</h1>
<?php

date_default_timezone_set('Asia/Taipei');
echo date("Y-m-d H:i:s");
echo "<br>";
echo date("y-M-D g:i:sa");
?>
<br>
<hr><br>
<h2>strtotime</h2>

<?php
echo strtotime("now");

echo "<br>";

$time = strtotime("now");
echo date("Y-m-d H:i:s", $time);

echo "<br>";

$d1 = date("2023-10-24");
$d2 = date("2023-10-22");
$days = (strtotime($d2) - strtotime($d1)) / (60 * 60 * 24);
echo $d1 . "到" . $d2 . "共" . $days . "天";
echo "<br><hr><br>";
?>

<h2>計算下次生日</h2>
<?php
$date = "1974-10-07";
// 計算秒數
$br = strtotime($date);
// 當年生日的位置
$diff = strtotime(date("Y") . "-" . date("m-d", $br));
// 計算現在的秒
$today = strtotime('now');
// 計算當下時間跟當年生日的差距
if ($diff > $today) {
    // 如果當年生日大於現在的時間(表示還沒到)
    // 設定一個新變數作為結果
    $days = ($diff - $today) / (60 * 60 * 24);
} else {
    // 小於的話代表已過，要比較明年的秒差
    // 賦予$diff新的值  
    // strtotime("+1 year",$diff)->在$diff的範圍增加1年的秒差
    $diff = strtotime("+1 year", $diff);
    $days = ($diff - $today) / (60 * 60 * 24);
}

echo "距離下一次生日:" . date("Y-m-d", $diff) . "還有" . floor($days) . "天";
?>

<h2>利用date()函式的格式化參數，完成以下的日期格式呈現</h2>


<h3>2021/10/05</h3>
<?php

echo date("Y/m/d");

?>
<br>
<hr>
<br>
<h3>10月5日 Tuesday</h3>
<?php

echo date("m月j日 l");
?>
<br>
<hr>
<br>
<h3>2021-10-5 12:9:5</h3>

<?php
echo date("Y-m-j g:i:s");

?>
<br>
<hr>
<br>
<h3>2021-10-5 12:09:05</h3>
<?php
echo date("Y-n-j G:i:s");

?>
<br>
<hr>
<br>
<h3>今天是西元2021年10月5日 上班日(或假日)</h3>
<?php

$date = date("Y-m-d N");


if (date("N") <= 5) {
    echo "今天是" . date("西元Y年m月d日") . " 上班日";
} else {
    echo "今天是" . date("西元Y年m月d日") . " 假日";
}
