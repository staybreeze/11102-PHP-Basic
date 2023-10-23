<h2>字串取代</h2>

將”aaddw1123”改成”*********”


<?php
$s="aaddw1123";
echo "<br>";
$t=str_replace('a','*',$s);
echo $t;
echo "<br>";

$t=str_replace(['a','w','1'],'*',$s);
echo $t;
echo "<br>";
// repeat->(想變成的字串,字長)
echo str_repeat("*",10);
echo "<br>";
// 字長不確定，所以用strlen($s)
echo str_repeat("*",strlen($s));


?>
<hr>
<h2>字串分割</h2>

將”this,is,a,book”依”,”切割後成為陣列

<?php

$s="this,is,a,book";

$a=explode(',',$s);

echo "<pre>";
print_r($a);
echo "</pre>";

?>

<hr>
<h2>字串組合</h2>

將上例陣列重新組合成“this is a book”
<br>
<br>

<?php
echo join(' ',$a);


?>
<hr>
<h2>子字串取用</h2>



將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
<br>
<br>
<?php
$s="The reason why a great man is great is that he resolves to be a great man";
echo mb_substr($s,0 ,10);
echo "...";
echo "<br>";
$cs="今天天氣真的是不太好的樣子";
echo mb_substr($cs,0 ,3);
echo "...";
echo "<br>";
$cs="今天天氣真的是不太好的樣子";
echo substr($cs,0 ,3);
echo "...";


?>


<hr>
<h2>尋找字串與HTML、css整合應用</h2>
<ul>
    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>

</ul>

<br>
<?php



// $source = "學會PHP網頁程式設計，薪水會加倍，工作會好找";

// $target = '程式設計';

// $flag = '沒找到';
// $start = 0 ;
// // $pos = 0;
// while ($flag == "沒找到") {
//     $tmp = mb_substr($source, $start, mb_strlen($target));
//     if ($tmp == $target){
//         $flag="找到了";
//         break;
//     }
//     $start++;
//     // $pos++;
// }

// echo "<span>". $target."</span>";

// 之後要改會有維護困難的問題
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
echo str_replace('程式設計',"<span style='font-size:20px;color:red'>程式設計</span>",$str)

?>

<br>
<hr>

<?php

$key="薪水";

$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
echo str_replace($key,"<span style='font-size:20px;color:red'>$key</span>",$str)
?>
<!-- <style>
span{

color: red;
}
</style> -->