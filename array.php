<?php

// $a=array();
$a=[];
$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[0];
echo '<br>';
echo $a[3];

$b=[];
$b['Name']='WSL';
$b['University Graduate']='NTU';
$b['Tel']='1234567';
$b['Bloodtype']='X';

echo "<pre>";
print_r($b);
echo "</pre>";

echo $b['Name'];
echo '<br>';
echo $b['University Graduate'];

$c=[];
$c['Name']='WSL';
$c['Hobby']=['Watch movie','Play PC games', 'Read novels'];

echo "<pre>";
print_r($c);
echo "</pre>";

echo $c['Name'];

echo '<br>';
echo$c['Hobby'][0];
echo '<br>';
echo $c['Hobby'][2];
echo '<br>';
print_r($c['Hobby']);

$x=[];
$x['lesson']=['國文','英文','數學','地理','歷史'];
$x['judy']=['95','64','70','90','84',];

print_r($x['lesson']);
print_r($x['judy']);

echo "<hr>";
$a=[2=>"A",3=>"B",4=>"C"];

print_r($a);

echo "<hr>";

$b=[
    [22,33,44,55],
    [29,12,33,77],
    [98,22]
  ];
  print_r($b);
echo "<br>";
  echo $b[0][2];

  echo "<hr>";

  $c=[
    '數學'=>[
                [
                    '姓名'=>'小明',
                    '成績'=>98
                ],
                [
                    '姓名'=>'小美',
                    '成績'=>22
                ],
                [
                    '姓名'=>'阿明',
                    '成績'=>60
                ]
        
            ],
    '國文'=>[
                [
                    '姓名'=>'小明',
                    '成績'=>58
                ],
                [
                    '姓名'=>'小美',
                    '成績'=>73
                ],
                [
                    '姓名'=>'阿明',
                    '成績'=>90
                ]
        
            ]
];

print_r($c);

echo "<br>";
echo $c['數學'][0]['成績'];


