<?php 
fscanf(STDIN, "%d", $buy);
$present = 0;

$flg=0;
if($buy >= 3){
  $drank =$buy;
  $flg = 1;
  while($flg == 1){
    $get = floor($drank / 3);
    $present = $present + $get;
    $leave = $drank % 3;
    $drank = $get +$leave;
    if($drank < 3){
      $flg =0;
    }
  }
}
echo $buy + $present.PHP_EOL;
?>