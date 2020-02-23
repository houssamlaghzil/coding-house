<?php
function nob(){
$bg = array('"css/1.css"', '"css/2.css"', '"css/3.css"'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    echo $selectedBg;
}
 nob();

  ?>
