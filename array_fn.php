<?php
$array=[5,1,3,5,7,9,13];


// is_array()

// echo in_array(13,$array);

if(in_array(22,$array)){
    echo"數字有在陣列中";
}else{
    echo"數字不在陣列中";
}


echo "<pre>";

$tmp=array_keys($array);
print_r($tmp);

echo"</pre>";


// explode
$ss="today is a good day";
$tt=explode(" ",$ss);
print_r($tt);

echo "<br>";

// impolde

$cc=implode("--",$tt);
echo $cc;

echo "<pre>";



// 沒有sort
print_r($array);
echo"</pre>";

// sort過
sort($array);

echo "<pre>";
print_r($array);
echo"</pre>";

// 倒敘sort
rsort($array);

echo "<pre>";
print_r($array);
echo"</pre>";
echo "<pre>";

$score1=[
    '姓名'=>'JUDY',
    '國文'=>95,
    '英文'=>64,
    '數學'=>70,
    '地理'=>90,
    '歷史'=>84,
];

print_r($score1);
echo"</pre>";

echo "JUDY 的國文成績為：" . $score1['國文'];
echo"<pre>";
$score2=[
    '姓名'=>'amo',
    '國文'=>95,
    '英文'=>64,
    '數學'=>70,
    '地理'=>90,
    '歷史'=>84,
];

print_r($score2);
echo"</pre>";



// 定義包含多個学生成績的數組
$students = [
    [
        '姓名' => 'JUDY',
        '國文' => 95,
        '英文' => 64,
        '數學' => 70,
        '地理' => 90,
        '歷史' => 84,
    ],
    [
        '姓名' => 'amo',
        '國文' => 85,
        '英文' => 75,
        '數學' => 90,
        '地理' => 78,
        '歷史' => 92,
    ],
    // 添加更多學生的成績...
];

// 創建一个新數組来存儲所有学生的 '國文' 分數
$chineseScores = [];

// 使用循環提取每個學生的 '國文' 分數
foreach ($students as $student) {
    $chineseScores[] = $student['國文'];
}

// 輸出所有學生的 '國文' 分數
echo "所有學生的國文成績：";
echo"<pre>";
print_r($chineseScores);
echo"</pre>";