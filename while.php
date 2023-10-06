<?php

echo "<hr>";

for($i=0;$i<10;$i++){
    echo $i*10;
}
echo "<hr>";

$score=10;
while($score<60){
    $score=$score+10;
}

echo $score;
echo "<hr>";

$score=[60,22,72,10,80,99,85,70];

foreach($score as $idx=>$val){
    echo '第'.$idx.'位同學的成績為'. $val.'<br>';}
    echo "<hr>";

 for($i=0; $i<10;$i++){

echo $i*10;

if($i>5){
    echo '執行一半了...';}
}
echo "<hr>";
for($i=1;$i<=10;$i+=2){
echo $i;
}
echo "<hr>";

for($i=10; $i<60;$i+=10){

echo $i+10;
}

echo "<hr>";

for($i=1;$i<100;$-1
){
    echo $i;
}
?>