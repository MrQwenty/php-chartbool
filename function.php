<?php
function getDatabase(){
  $data = [];
  for ($i=0; $i < 12; $i++) {
    $data[] = rand(100,1000);
  }
  return $data;
}
 ?>
