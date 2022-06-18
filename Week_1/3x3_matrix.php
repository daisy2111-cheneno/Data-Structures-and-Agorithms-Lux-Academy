<?php
$a = array(array(1,5,7),array(7,3,5),array(2,6,9));
$rows = count($a);
$cols = count($a[0]);

echo "3x3 matrix";
for ($k = 0; $k < $rows; $k++){
    for ($j = 0; $j < $cols; $j++){
        echo ($a[$k][$j]."  ");
    }
    echo ("<br>");
}
echo ("<br>");
echo ("<br>");
for ($k = 0; $k < $rows-1; $k++){
    for ($j = 0; $j < $cols-1; $j++){
        echo ($a[$k][$j]." ");
    }
    echo ("<br>");
}
echo ("<br>");
echo ("<br>");
for ($k = 0; $k < $rows-1; $k++){
    for ($j = 1; $j < $cols; $j++){
        echo ($a[$k][$j]." ");
    }
    echo ("<br>");
}
echo ("<br>");
echo ("<br>");
for ($k = 1; $k < $rows; $k++){
    for ($j = 0; $j < $cols-1; $j++){
        echo ($a[$k][$j]." ");
    }
    echo ("<br>");
}
echo ("<br>");
echo ("<br>");
for ($k = 1; $k < $rows; $k++){
    for ($j = 1; $j < $cols; $j++){
        echo ($a[$k][$j]." ");
    }
    echo ("<br>");
}
echo ("<br>");
echo ("<br>");

echo "minimum value";
#minimum value
echo "<br>";
$b =array(array(1,3),array(2,3));
$rows_b = count($b);
$cols_b = count($b[0]);
for ($i = 0; $i < $rows_b; $i++){
    for ($l = 0; $l < $cols_b; $l++){
        echo ($b[$i][$l]."  ");
    }
    echo ("<br>");
}
echo "<br>";
echo "<br>";
echo "Maximum Value";
echo "<br>";
#maximum values
$c =array(array(7,7),array(7,9));
$rows_c = count($c);
$cols_c = count($c[0]);
for ($m = 0; $m < $rows_c; $m++){
    for ($n = 0; $n < $cols_c; $n++){
        echo ($c[$m][$n]."  ");
    }
    echo ("<br>");
}
echo "<br>";
echo "<br>";


?>