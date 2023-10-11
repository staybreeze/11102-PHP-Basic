<?php

// echo "<hr>";

// for($i=0;$i<10;$i++){
//     echo $i*10;
// }
// echo "<hr>";

// $score=10;
// while($score<60){
//     $score=$score+10;
// }

// echo $score;
// echo "<hr>";

// $score=[60,22,72,10,80,99,85,70];

// foreach($score as $idx=>$val){
//     echo '第'.$idx.'位同學的成績為'. $val.'<br>';}
//     echo "<hr>";

//  for($i=0; $i<10;$i++){

// echo $i*10;

// if($i>5){
//     echo '執行一半了...';}
// }
// echo "<hr>";
// for($i=1;$i<=10;$i+=2){
// echo $i;
// }
// echo "<hr>";

// for($i=10; $i<60;$i+=10){

// echo $i+10;
// }

// echo "<hr>";

$sum = 0;

$i = 1;
while ($i <= 10) {

    echo '當$i=' . $i . "時";
    echo '$sum+$i的結果是';
    echo $sum . "+" . $i . "=";
    echo $sum + $i;
    echo "<br>";
    $sum = $sum + $i;
    $i++;
}

echo "1加到100的總和是:" . $sum;
echo "<hr>";
?>


<h1>使用for迴圈來產生以下的數列</h1>
<ul>
    <li>1,3,5,7,9……n</li>
    <li>10,20,30,40,50,60……n</li>
    <li>3,5,7,11,13,17……97</li>

</ul>
<?php
// $n = 0;
for ($i = 1; $i <= 100; $i = $i + 2) {

    echo $i;
    echo ",";
}
echo "<hr>";

// for ($i = 10; $i <= 100; $i+=10) {
//     echo $i;
//     echo ",";
// }

for ($i = 1; $i <= 100; $i+=1) {
         echo $i*10;
         echo ",";
     }

echo "<hr>";


$a = 4;
$flag = true;
for ($i = 2; $i <= $a / 2; $i++) {
    // %不需要判斷1跟自己，因為都能被整除，因此小於即可，不用小於等於
    // $i<$a/2比$i<$a省一半時間
    echo "$a / $i 餘數=" . ($a % $i);
    if ($a % $i == 0) {
        $flag = false;
        break;
    }
    echo "<br>";
}
if ($flag == true) {
    echo "<br>";
    echo ' 答案:' . $a . "是質數";
} else {
    echo "<br>";
    echo '答案:' . $a . "不是質數";
}


echo "<br>"



?>


<h3>巢狀迴圈</h3>
<?php

$n = 300;
for ($j = 3; $j <= $n; $j++) {
    $flag = true;
    for ($i=2; $i<=($j/2); $i++) {
        // for($i=2;$i<$a/2;$i++) $a輸入4時，出現是質數的bug，因為帶入式子時，4/2不可能大於2，因此迴圈並沒有跑，但因為初始設定$flag=true，所以直接被判定為true
        // echo "$j / $i 餘數=" . ($j % $i);
        if (($j % $i) == 0) {
            $flag = false;
            break;
        }
    }

    // echo "<br>";

if ($flag == true) {
    echo $j;
    echo ",";
    // echo ' 答案:' . $j . "是質數";
} else {
    // echo "<br>";
    // echo '答案:' . $j . "不是質數";
}

}
echo "<br>"

?>