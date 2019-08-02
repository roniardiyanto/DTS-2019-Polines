<?php
function buatBaris( $awal, $akhir){
 for($a = $awal; $a < $akhir; $a += 2){
  $array = array();
  $array = $a;
  print_r($array . " ");
 }; 
};

buatBaris(1, 20);
echo "<br>";
buatBaris(21, 40);
echo "<br>";
buatBaris(41, 60);
echo "<br>";
buatBaris(61, 80);
echo "<br>";
buatBaris(81, 100);
?>