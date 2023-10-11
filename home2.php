<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, tr, td{
    border: 1px solid black;
    border-collapse: collapse;

}
table{
    width:100%;
    margin: auto;

}
td{

    width:15%;
    height:70vh;}
    </style>

</head>
<body>
    <?php

$a=['國文'=> [
        'name'=>'judy',
        'score'=>95 ],

    '英文'=>[
             'name'=>'judy',
             'score'=>64
    ]
    ]



    ?>
<table>

<tr>

    <td></td>
    <td>國文</td>
    <td>英文</td>
    <td>數學</td>
    <td>地理</td>
    <td>歷史</td>
</tr>
<tr>
    <td>
    <?php
echo $a['國文']['name'];

    ?>
    </td>
    <td>

    <?php

echo $a['國文']['score'];
?>
    </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
</table>
</body>
</html>