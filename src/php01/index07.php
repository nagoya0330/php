<?php
function text($score1, $score2, $score3) 
{
    $value = $score1 + $score2 + $score3;
    return $value;
}

$total = text($score1, $score2, $score3);
$result = ($total>210) ? "合計点は".$total."なので合格です" : "合計点は".$total."なので不合格です";
echo $result;

function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo $total . "点なので合格です";
    } else {
        echo $total . "点なので不合格です";
    }
}
echo (exam(80, 60, 90));
 
function area($bottom, $high, $vertical, $horizontal, $top, $bottom2, $high2)
{
  $triangle = $bottom*$high/2;
  $square = $vertical*=$horizontal;
  $trapezoid = ($top+$bottom2)*$high2/2;
}
echo $triangle;
echo $square;
echo $trapezoid;


function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);


