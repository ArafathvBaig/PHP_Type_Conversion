<?php
$arafath = 5;
echo gettype($arafath) . "\n";
$arafath1 = (float) $arafath;
echo gettype($arafath1) . "\n";
$arafath2 = (string) $arafath;
echo gettype($arafath2) . "\n";
$arafath3 = (boolean) $arafath;
echo gettype($arafath3) . "\n";
$arafath4 = (array) $arafath;
echo gettype($arafath4) . "\n";
settype($arafath, 'object');
echo gettype($arafath) . "\n";
