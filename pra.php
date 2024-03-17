<h3>閏年判斷，給定一個西元年份，判斷是否為閏年</h3>

<?php

$year=1000;


    echo "年份".$year;
    echo "<hr>";

// 不要被題目牽著走，先整理出相同為TRUE的條件，整理TRUE就能找出FALSE
    if($year%4==0 && $year%100!=0 ||$year%400==0 ){
            echo $year. "是閏年";

        }else{
            echo $year.'是平年';
        }