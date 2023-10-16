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
