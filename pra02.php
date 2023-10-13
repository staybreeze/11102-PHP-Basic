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

// 2              1            2
echo "</table>";
?>