<?php
//72, 101, 108, 108, 111, 32, 87, 111, 114, 108, 100, 33

$b = ++$a + $a; //2
$c = $b + $a; //3
$d = $c + $b; //5
$z = $d * $b; //10
$s = $c * $z + $b; //32
$h = $s * $b + $z - $b; //72
$e = $z * $z + $a; //101
$o = $e + $z; //111
$l = chr($o - $c); //l

echo chr($h) . chr($e) . $l . $l . chr($o) . chr($s) . chr($h + $z + $d) . chr($o) . chr($o + $c) . $l . chr(--$e) . chr(++$s);

?>
