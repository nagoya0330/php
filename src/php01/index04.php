<?php
$a = 15;
$b = 3;
$c =10;

$name1 = $a+$b;
$name2 = $b*4;
$name3 = $a*$b;
$name4 = $a/$b;
$name5 = $c-5;

echo $name1;
echo "<br />";
echo $name2;
echo "<br />";
echo $name3;
echo "<br />";
echo $name4;
echo "<br />";
echo $name5;
echo "<br />";

/*自分の回答 算術演算子
a = 15;
$b = 3;
$c = 10;

echo $a + $b;
echo "<br />";
echo $b * 4;
echo "<br />";
echo $a * $b;
echo "<br />";
echo $a / $b;
echo "<br />";
echo $c - 5;
*/

$a = 15;
$b = 3;
$c = 10;
$d = 5;

$a = $b;
$c += $d;

echo $a;
echo "<br />";
echo $c;
echo "<br />";

/*自分の回答　複合演算子
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$name6 = $a/$d;
$name7 = $c+=$d;

echo $name6;
echo "<br />";
echo $name7;
*/

$a = 20; /*比較演算子*/
$b = 5;

echo ($a>$b);
echo "<br />";

$a = 20;
$b = 5;
echo ($a>10 && $a<30);
echo "<br />";

$a=10;
$b=10;
$c=5;
$d=5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
echo "<br />";