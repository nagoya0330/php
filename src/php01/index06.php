<?php
//for ($i=2;$i<=10; $i+=2){echo $i;}自分の回答
for($i=1;$i<=5;$i++){echo $i*2 .'<br />';}
$i=0;
while($i<3){echo 'i=' . $i . '<br />';$i+=1;}

$count=0;
while($count<20){$count +=1;echo $count . '<br />';}
//while($count<21){echo $count . '<br />';$count+=1;} 自分の回答


$num=0;

do{
    echo ' num =' . $num . '<br />';
    $num++;
}   while ($num<3);


$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++ ) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
} 

$i = 0;
do {
  echo "●●●●●" . '<br />';
  $i++;
} while ($i < 6);

for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br />";
}