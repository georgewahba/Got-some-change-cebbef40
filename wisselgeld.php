<?php
$getal= (intval($argv[1]));

if ($getal=="0") {
print("geen wisselgeld");
exit();
}

print($getal *1 ." x 1 euro");
