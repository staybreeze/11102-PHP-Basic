<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }
    span{
        color:crimson
    }
</style>
<h1>直角三角形</h1>
<?php


// echo "*<br>";
//     echo "*";
//     echo "<br>";
// echo "**<br>";
//     echo "*";
//     echo "*";
//     echo "<br>";
// echo "***<br>";
//     echo "*";
//     echo "*";
//     echo "*";
//     echo "<br>";
// echo "****<br>";
//     echo "*";
//     echo "*";
//     echo "*";
//     echo "*"; 
//     echo "<br>";
// echo "*****<br>";
//     echo "*";
//     echo "*";
//     echo "*";
//     echo "*";
//     echo "*";
//     echo "<br>";
// echo "<hr>";


// $i  $j
// 0 < 0
// 1   1
// 2   2
// 3   3
// 4   4
// 5   5
$change=7;
for ($i = 0; $i < $change; $i++) {

    // for($j=0;$j<?;$j++)
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h1>倒直角三角形</h1>

<?php


// $i  $j
// 5   5
// 4   4
// 3   3
// 2   2
// 1   1
// 0 < 0

for ($i = $change-1; $i >= 0; $i--) {
    // for($j=0;$j<?;$j++)
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

?>
<hr>
<h1>正三角形</h1>
<?php



// $i  $j   $k
// 0    4    1
// 1    3    3
// 2    2    5
// 3    1    7
// 4    0    9


for ($i = 0; $i < $change; $i++) {
    // 空白
    for ($j = 0; $j < $change-1 - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < $i * 2 + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
<hr>
<h1>倒正三角形</h1>
<?php

for ($i = $change-1; $i >= 0; $i--) {
    // 空白
    for ($j = 0; $j < $change-1 - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < $i * 2 + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}

?>

<hr>
<h1>菱形(方法一)</h1>

<?php

for ($i = 0; $i < 5; $i++) {
    // 空白
    for ($j = 0; $j < 4 - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < $i * 2 + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}



for ($i = 3; $i >= 0; $i--) {
    // 空白
    for ($j = 0; $j < 4 - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 0; $k < $i * 2 + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
// $i  $j   $k
// 5    0    9
// 4    1    7
// 3    2    5
// 2    3    3
// 1    4    1

?>

<hr>
<h1>菱形(方法二)</h1>
<?php

// $i  $j   $k
// 0    4    1
// 1    3    3
// 2    2    5
// 3    1    7
// 4    0    9

// 5    1    7
// 6    2    5
// 7    3    3
// 8    4    1

// $change*2-1因為是兩個三角形相加
// (($change*2-1)/2)使之一定是基數
$mid=floor(($change*2-1)/2);
for ($i = 0; $i < $change*2-1; $i++) {

    if ($i <=$mid) {
        $tmp = $i;
    } else {
        $tmp--;
    }
    for ($j = 0; $j < ($mid - $tmp); $j++) {
        echo "&nbsp;";
    }

    for ($k = 0; $k < ($tmp * 2 + 1); $k++) {
        echo "*";
    }
    echo "<br>";
}

?>
<hr>
<h1>矩形A</h1>
<h3>笨方法</h3>
<?php

// $i  $j  $k   
// 0    6   0  
// 1    1   5  
// 2    1   5  
// 3    1   5  
// 4    1   5  
// 5    1   5  
// 6    1   5  
// 7    6   0  



?>


<hr>
<h1>矩形B</h1>
<h3>(中間挖空、什麼時候挖空)</h3>
<?php

// $i  $j  $k   
// 0    6   0  
// 1    1   5  
// 2    1   5  
// 3    1   5  
// 4    1   5  
// 5    1   5  
// 6    1   5  
// 7    6   0  

for ($i = 0; $i < $change; $i++) {
    for ($j = 0; $j < $change; $j++) {


        if ($i == 0 || $i == $change-1) {
            echo "*";
        }elseif ($j==0||$j==$change-1) {
            echo "*";
        }else{
            echo"&nbsp";
        }

    }
    echo "<br>";
}

?>

<hr>




<h1>矩形C</h1>
<?php

for ($i = 0; $i < $change; $i++) {
    for ($j = 0; $j < $change; $j++) {


        if ($i == 0 || $i == $change-1 ) {
            echo "*";
        }elseif ($j==0||$j==$change-1) {
            echo "*";

        }elseif($j==$i||$i+$j==$change-1)
       {echo "*"; } else{
            echo"&nbsp";
        }

    }
    echo "<br>";
}
?>

<hr>




<h1>矩形D</h1>
<?php

for ($i = 0; $i < $change; $i++) {
    for ($j = 0; $j < $change; $j++) {


        if ($i == 0 || $i == $change-1 ) {
            echo "*";
        }elseif ($j==0||$j==$change-1) {
            echo "*";

        }elseif($j==$i||$i+$j==$change-1)
       {echo "<span>*</span>"; } else{
            echo"&nbsp";
        }

    }
    echo "<br>";
}
?>
