<style>
    table,
    tr,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td {
        padding: 5px;
    }
</style>

<h2>九九乘法表</h2>

<?php
echo "<table>";
for ($j = 1; $j <= 9; $j++) {
    // echo $j . "*" . $i . '=' . ($j * $i) . '&nbsp&nbsp&nbsp&nbsp';
    echo "<tr>";
    for ($i = 1; $i <= 9; $i++) {
        // echo '1*' . $i . '=' . (1 * $i) . '&nbsp&nbsp&nbsp&nbsp';
        echo "<td>";
        echo $j . "*" . $i . '=' . ($j * $i);
        echo "</td>";
    }
    echo "</tr>";
    echo "<br>";
}
echo "</table>";
?>










<h2>九九乘法表-有標頭</h2>
<?php

echo "<table>";
echo "<tr>";
for ($j = 0; $j < 10; $j++) {
    if ($j == 0) {
        echo "<tr style='background:#eee'>";
    } else {
        echo "<tr>";
    }
    for ($i = 0; $i < 10; $i++) {
        if ($i == 0) {
            echo "<td style='background:#eee'>";
        } else {
            echo "<td>";
        }
        if ($i == 0 && $j == 0) {
            echo "";
        } else if ($j == 0) {
            echo $i;
        } else if ($i == 0) {
            echo $j;
        } else {
            echo $j * $i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>九九乘法表-留左下</h2>
<?php

echo "<table>";
echo "<tr>";
for ($j = 0; $j < 10; $j++) {
    if ($j == 0) {
        echo "<tr style='background:#eee'>";
    } else {
        echo "<tr>";
    }
    for ($i = 0; $i < 10; $i++) {
        if ($i == 0) {
            echo "<td style='background:#eee'>";
        } else {
            echo "<td>";
        }
        if ($i == 0 && $j == 0) {
            echo "";
        } else if ($j == 0) {
            echo $i;
        } else if ($i == 0) {
            echo $j;
            // 以下ELSEIFF放在這裡，$j才不會被吃掉
        } elseif ($j < $i) {
            echo "";
        } else {
            echo $j * $i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>










<br>
<hr>
<br>




<h2>九九乘法表(有表頭)</h2>






<?php
echo "<table>";

for ($j = 0; $j < 10; $j++) {
    echo "<tr>";


    // if ($j == 0) {
    //     echo "<tr style='background:#eee;'>";

    // }
    for ($i = 0; $i < 10; $i++) {
        echo "<td";

        if ($j == 0 || $i == 0) {
            echo " style='background:#eee;'";
        }

        echo ">";

        


        if ($j == 0 && $i == 0) {
            echo "";
        } elseif ($j == 0) {
            echo $i;
        } elseif ($i == 0) {
            echo $j;
        } else {
            echo $j * $i;
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<!-- 這部分的語法是不正確的，因為您不應該在 <td> 開始標記中添加其他 HTML 標記。正確的方式是像在第一段程式碼中一樣，將 style 屬性添加到 <td> 開始標記的內部，而不是包含在其他 <td> 中。這將為單元格的內容指定背景顏色。
 -->



<!-- // echo "<table>";

// echo "<tr>";

// for ($m = 1; $m <= 9; $m++) {

//     echo "<td>";
//     echo $m;

//     echo "</td>";
// }
// echo "</tr>";

// for ($m = 1; $m <= 9; $m++) {
//     // echo $j . "*" . $i . '=' . ($j * $i) . '&nbsp&nbsp&nbsp&nbsp';
//     echo "<tr>";
//     for ($k = 1; $k <= 9; $k++) {
//         echo "<td>";
//         echo $k * $m;
//         echo "</td>";
//     }

//     echo "</tr>";
//     echo "<br>";
// }
// echo "</table>";




// $j(外圈)     $i(內圈)     執行結果($j*$i)
// 1              1            1
// 1              2            2
// 1              3            3
// 1              4            4
// 1              5            5
// 1              6            6
// 1              7            7
// 1              8            8
// 1              9            9

// 2              1            2 -->