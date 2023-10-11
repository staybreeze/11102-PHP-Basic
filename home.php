<?php
$score=30;
echo "我的成績:";
if($score>=60){
    echo"pass";
}else{
    echo"fail";
}

echo "<hr>";

$score="30";
if($score>=90 && $score<=100){

    echo $grade="A";

}
elseif ($score>=80 && $score <=89) {
   echo $grade="B";
}
elseif ($score>=70 && $score <= 79) {
    echo $grade="C";
}
else if($score>=60 && $score <=69){

    echo $grade="D";

}
else if ($score<60){
echo $grade="E";
}

echo "<hr>";
echo "我的評價:";

switch($grade){

    case"A":
echo 'best';
        break;
        case"B":
            echo 'great';
        break;
        case"C":
            echo 'good';
            break;
            case"D":
                echo 'not bad';
                break;
                case"E":
                    echo 'bad';
                
}

echo '<hr>';

$year='2000';
if (($year%4==0 && $year%100!=0 )|| ($year%400==0)) {
    echo"是閏年";

}else{
    echo"是平年";
}
echo '<hr>';

// $n="";;
// for($i=1;$i<=$n)