
 <?php
 $Doekoe = array('50', '20', '10', '5', '2', '1');
 $aantal = $argv[1];
 $Bruh = intval($aantal);
 $restanten = $aantal;
 $aantal = round($aantal += 0.02, 2, PHP_ROUND_HALF_UP);
 $compleetCentjes = ($aantal - $Bruh) * 100;
 $restantenCentjes = $compleetCentjes;
 foreach ($Doekoe  as $value) {
   if ($aantal > 0) {
     $totaal = floor($restanten / $value);
     if ($totaal > 0) {
         echo "U krijgt $totaal x €$value " . PHP_EOL;
         $aantal = $restanten;
         $restanten = floor($restanten % $value);
     }
   }
 }
 $centjes = array('50', '20', '10', '5');
 foreach ($centjes as $value2) {
   if ($compleetCentjes > 0) {
     $totaalCentjes = floor($restantenCentjes / $value2);
     if ($totaalCentjes > 0) {
       echo "U krijgt $totaalCentjes x $value2 cent" . PHP_EOL;
       $compleetCentjes = $restantenCentjes;
       $restantenCentjes = ($restantenCentjes % $value2);
     }
   }
 }


  ?>
