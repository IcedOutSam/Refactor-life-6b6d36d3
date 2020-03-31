<?php
function numCall($inputTotaal) {
 if ($inputTotaal != is_numeric($input)) {
   throw new Exception($inputTotaal . " is geen getal");
 }
 return $input;
}
if ($inputTotaal == <=0.05) {
echo "Geen wisselgeld";
exit;
}
numCall($inputTotaal);
$euroArray = array('50', '20', '10', '5', '2', '1');
$inputTotaal = $argv[1];
$euroTotaal = intval($inputTotaal);
$restanten = $inputTotaal;
$inputTotaal = round($inputTotaal += 0.02, 2, PHP_ROUND_HALF_UP);
$inputCent = ($inputTotaal - $euroTotaal) * 100;
$restantenCentjes = $inputCent;
foreach ($euroArray  as $waarden) {
  if ($inputTotaal > 0) {
    $totaal = floor($restanten / $waarden);
    if ($totaal > 0) {
        echo "U krijgt $totaal x €$waarden " . PHP_EOL;
        $inputTotaal = $restanten;
        $restanten = floor($restanten % $waarden);
    }
  }
}
$centjes = array('50', '20', '10', '5');
foreach ($centjes as $waarden2) {
  if ($inputCent > 0) {
    $totaalCentjes = floor($restantenCentjes / $waarden2);
    if ($totaalCentjes > 0) {
      echo "U krijgt $totaalCentjes x $waarden2 cent" . PHP_EOL;
      $inputCent = $restantenCentjes;
      $restantenCentjes = ($restantenCentjes % $waarden2);
    }
  }
}


 ?>
