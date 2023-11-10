<?php
function factorial($a) {
  if ($a <= 1) {
    return 1;
  } else {
    return $a*factorial($a - 1);
  }
}

$a = 5;
echo "Faktorial dari 5 = " .factorial($a);