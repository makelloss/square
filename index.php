<?php
$R = rand(0,250);
$d = $R * 2;
echo "<div style= \"color:red; width: {$d}px; height: {$d}px; border: solid 1px; border-radius: 50%;\"> </div>";
$s = 3.14 * $R * $R;
echo "площадь круга = $s";