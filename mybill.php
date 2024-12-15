<?php 

echo "Enter units you consumed: ";
$myUnits = (int)readline();

if ($myUnits <= 100){
    $bill = $myUnits * 5;

}elseif ($myUnits <= 200) {
    $bill = 100 * 5 + ($myUnits - 100) * 10;
 } 
//  elseif($myUnits <= 300){
//     $bill = 100 * 5 +100 * 10 + 100 * 10 + ($myUnits -300) * 10;
//  }
 
 else {
    $bill = 100 * 5 + 100 * 10 +($myUnits -200) * 15;

 }
 echo " Total Bill : $bill";