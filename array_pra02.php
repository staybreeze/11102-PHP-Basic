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
<!-- 

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
    echo $year . "<br>";
}
echo "<pre>";
print_r($years);


echo "</pre>";
?> -->
<hr>
<h2>已知西元1024年為甲子年，請設計一支程式，可以接受任一西元年份，輸出對應的天干地支的年別。(利用迴圈)</h2>
<ul>
    <li>天干：甲乙丙丁戊己庚辛壬癸</li>
    <li>地支：子丑寅卯辰巳午未申酉戌亥</li>
    <li>天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….</li>
</ul>

<?php
// 自己摸索出來的
// $change=2000;

// echo "西元".$change. "年是";
// $i=$change;
// // for ($i = 10; $i <= 2000; $i++) {
//     if ($i / 10 % 1) {
//         echo "乙";
//     } elseif ($i / 10 % 2) {
//         echo "丙";
//     } elseif ($i / 10 % 3) {
//         echo "丁";
//     } elseif ($i / 10 % 4) {
//         echo "戊";
//     } elseif ($i / 10 % 5) {
//         echo "己";
//     } elseif ($i / 10 % 6) {
//         echo "庚";
//     } elseif ($i / 10 % 7) {
//         echo "辛";
//     } elseif ($i / 10 % 8) {
//         echo "壬";
//     } elseif ($i / 10 % 9) {
//         echo "癸";
//     }else{
//     echo "甲";}

// $j=$change;
//     if ($j / 12 % 1) {
//         echo "子";
//     } elseif ($j / 12 % 2) {
//         echo "丑";
//     } elseif ($j / 12 % 3) {
//         echo "寅";
//     } elseif ($j / 12 % 4) {
//         echo "卯";
//     } elseif ($j / 12 % 5) {
//         echo "辰";
//     } elseif ($j / 12 % 6) {
//         echo "巳";
//     } elseif ($j / 12 % 7) {
//         echo "午";
//     } elseif ($j / 12 % 8) {
//         echo "未";
//     } elseif ($j / 12 % 9) {
//         echo "申";
//     }elseif ($j/ 12 % 10) {
//         echo "酉";
//     } elseif ($j / 12 % 11) {
//         echo "戌";
//     } else {
//         echo "亥";
//     }
// echo "年";

echo"<br>";

$year=1688;
$sky = ['甲', '乙', '丙', '丁', '戊', '癸', '己', '庚', '辛', '壬',];
$land = ['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥',];

echo "西元".$year."年是";
echo $sky[($year - 1024) % 10];
echo $land[($year - 1024) % 12];
echo "年";
echo"<br>";

?>
<hr>
<h2>請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h2>

<p>例：$a=[2,4,6,1,8] 反轉後 $a=[8,1,6,4,2]</p>

<!-- 發現有中軸線，所以兩邊位置交換即可 -->

<?php

$a=[8,7,890,56,84,90];

echo"<pre>";
print_r($a);
echo"</pre>";
// floor(count($a)/2) ->因為只有一半要交換，因此算出陣列一半的數，即執行次數
for($i=0;$i<floor(count($a)/2);$i++){
// 先把值儲存在$tmp
    $tmp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];

    // 再把$tmp還回去
    $a[count($a)-1-$i]=$tmp;
}
echo"<pre>";
print_r($a);
echo"</pre>";

echo"<pre>";
print_r(array_reverse($a));
echo"</pre>";