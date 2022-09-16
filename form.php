<?php

if(isset($_POST['weight'])) {
  $weight = (int)$_POST['weight'];
}

if(isset($_POST['height'])) {
  $height = (int)$_POST['height'];
  $height = $height/100;
  $height = $height * $height;
}

$BMI = $weight/$height;

echo number_format($BMI, 2, '.', '');