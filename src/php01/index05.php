<?php
$a = 5;
if ($a === 5) {
echo "\$aは5です";
} /*$aの前の\はなんだなんだろう*/
echo "<br />";
$a=7;
if ($a===5) {echo "\$aは5です";}else{echo"\$aは5以外です";}
echo "<br />";
$people="Saburo";
switch ($people) {
    case "Taro":
        echo "太郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
}
echo "<br />";
/*
switch($people){
    case $people === "Saburo":  echo "三郎です";
         break;
    case $people ==="Jiro": echo"次郎です";
         break;
    default:echo"一郎です";
         break;
}
*/
$a=7;
$result=($a===7)?"TRUE":"FALSE";
echo $result;