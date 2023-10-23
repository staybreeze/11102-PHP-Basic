<h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>

</ul>

<?php

for ($i = 0; $i < 6; $i++) {
    echo rand(1, 38);
    echo ",";
}

?>
<br>
<hr>
<br>

<?php
// for必須知道確定範圍
// 雖然知道要執行六次
// 但執行六次若有重複，該格便被空下來
// 而且算為執行次數
// 也就是說
// 用for執行本題目，可能會出現6個以下的空格
// 因此在不知道要執行多少次以便取得無空格的六個數
// 較適合用while

// 因為while適合在不知道範圍時使用
// $num = [];
// for ($i = 0; $i < 6; $i++) {
// $tmp=rand(1,38);
// if(!in_array($tmp,$num)){
//     $num[]=$tmp;
// }
// }

// foreach ($num as $n) {
//     echo $n . ",";
// }

?>

<?php
$num = [];
// 我們要取得六個數
// 取得數的次數小於六時，便執行，直到取滿六個數
// 因此為<6
// 而非<=6
// 因為若為=6，那就還會執行一次，會得到七個數
while (count($num) < 6) {

    $tmp = rand(1, 38);
    if (!in_array($tmp, $num)) {
        // 把亂數放到陣列裡
        $num[] = $tmp;
    }
}

foreach ($num as $n) {
    echo $n . ",";
}

?>


<h2>找出五百年內的閏年</h2>
<ul>
    <li>請依照閏年公式找出五百年內的閏年</li>
    <li>使用陣列來儲存閏年</li>
    <li>使用迴圈來印出閏年</li>
</ul>
<?php


// 2023~2525

$years = [];
for ($i = 2023; $i < 2525; $i++) {

    if ($i % 4 == 0 && $i % 100 != 0 || $i % 400 == 0) {
        $years[] = $i;
    }
}


foreach ($years as $key => $year) {
    echo $year."<br>";
}
echo "<pre>";
print_r($years);


echo "</pre>";
