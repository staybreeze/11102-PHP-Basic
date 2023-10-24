<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {

            width: 80vw;
            height: 80vh;
            margin: auto;
            text-align: center;
        }


        table,
        tr,
        td {

            border: 3px double black;
            border-collapse: collapse;

        }

        tr {
            border: 1px solid black;
        }

        td {
            width: 50vw;
            height: 5vh;
            text-align: center;
            margin: auto;
            padding: 5px 10px;
            border: 1px solid black;
        }

        .color {

            background-color: beige;
        }

        .chinese {

            font-weight: bolder;
        }
    </style>

</head>

<body>
    <div class="container">
        <table>
            <tr class=chinese>
                <td class=color>日</td>
                <td>一</td>
                <td>二</td>
                <td>三</td>
                <td>四</td>
                <td>五</td>
                <td class=color>六</td>
            </tr>
            <tr>
                <td class=color>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class=color>7</td>
            </tr>
            <tr>
                <td class=color>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td class=color>14</td>
            </tr>
            <tr>
                <td class=color>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td class=color>21</td>
            </tr>
            <tr>
                <td class=color>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td class=color>28</td>
            </tr>
            <tr>
                <td class=color>29</td>
                <td>30</td>
                <td colspan="5"></td>
                <!-- <td></td> -->
                <!-- <td></td> -->
                <!-- <td> </td> -->
                <!-- <td class=color> </td> -->
            </tr>
            <tr>
                <td colspan="7"> </td>
                <!-- <td> </td> -->
                <!-- <td> </td> -->
                <!-- <td> </td> -->
                <!-- <td> </td> -->
                <!-- <td> </td> -->
                <!-- <td class=color> </td> -->
            </tr>
        </table>
    </div>
    <!-- 月曆某格跟星期(X軸$j)與週(Y軸$i)的關係
(7*週-星期+1)-第一週的空白 -->
    <?php
    echo "<h3>";
    echo date("西元Y年m月");
    echo "</h3>";
    $thisMonth = date("m");
    echo $thisMonth;
    echo "<br>";
    $thisFirstDay = date("Y-m-1");
    $thisFirstDate = date("w", strtotime($thisFirstDay));
    echo $thisFirstDate;
    echo "<br>";
    $thisMonthDays = date("t");
    echo     $thisMonthDays;
    echo "<br>";
    $thisLastDay1 = date("Y-m-$thisMonthDays");
    $thisLastDay2 = date("Y-m-t");
    echo $thisLastDay1;
    echo "<br>";
    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    echo $weeks;

    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    for ($i = 0; $i < 6; $i++) {

        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            echo "<td>";
            // 之所以(6 - $j)，是因為前面7 * ($i + 1)的起始值是7，如果不-6，那第一個位置會顯示7
            $tmp = 7 * ($i + 1) - (6 - $j) - $thisFirstDate;
            // 讓空白不顯示數字
            if ($tmp > 0 && $tmp <= $thisMonthDays) {
                echo $tmp;
            }
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
    <?php
    echo "<h3>";
    echo date("西元Y年m月");
    echo "</h3>";
    $thisMonth = date("m");
    // 該月的第一天
    $thisFirstDay = date("Y-m-1");
    // 該月第一天是星期幾
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    // 該月總天數
    $thisMonthDays = date("t");
    // 該月的最後一天
    $thisLastDay = date("Y-m-$thisMonthDays");
    // 該月有幾週
    // 總天數+第一週前面的空白

    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    // 表格第一格是幾月幾號
    // $thisFirstDay減去$thisFirstDate的天數(格子)，也就會到第一格
    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    echo $firstCell;
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    // $i < $weeks 執行幾週，就是執行幾次
    for ($i = 0; $i < $weeks; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {

            echo "<td>";
            $addDays = 7 * $i + $j;

            $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
            echo date("Y-m-d", $thisCellDate);

            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
    ?>
    <?php
    echo "<h3>";
    echo date("西元Y年m月");
    echo "</h3>";
    $thisMonth = date("m");
    // 該月的第一天
    $thisFirstDay = date("Y-m-1");
    // 該月第一天是星期幾
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    // 該月總天數
    $thisMonthDays = date("t");
    // 該月的最後一天
    $thisLastDay = date("Y-m-$thisMonthDays");
    // 該月有幾週
    // 總天數+第一週前面的空白

    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    // 表格第一格是幾月幾號
    // $thisFirstDay減去$thisFirstDate的天數(格子)，也就會到第一格
    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    echo $firstCell;
    echo "<table>";
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";
    // $i < $weeks 執行幾週，就是執行幾次
    for ($i = 0; $i < $weeks; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            // 每格的位置公式
            // 等同=(7*週-星期+1)-第一週的空白
            $addDays = 7 * $i + $j;
            //     每一格的日期是$firstCell加上 $addDays = 7 * $i + $j
            // 因為$i跟$j會遞增，所以每格的值會改變
            $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
            // 如果星期是六(6)或日(0)，變顏色
            if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                // 會有兩種td
                // 一個上顏色
                // 其餘不上顏色
                echo "<td style='background:pink'>";
            } else {
                echo "<td>";
            }
            // 如果該格的月份跟當月份相同時，則顯示
            // 這個做法的目的在於，頭尾的不同月份不會顯示，也就是去空白
            if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                echo date("Y-m-d", $thisCellDate);
            }
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>