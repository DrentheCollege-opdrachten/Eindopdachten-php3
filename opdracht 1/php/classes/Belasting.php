<?php
include 'WOZWaarde.php';
  class Belasting {
    protected function berekenBelasting($wozWaarde, $kamers, $straat) {
      $belasting = 0;
      if ($wozWaarde < 100000) {
        $belasting += 600;
      } else if ($wozWaarde < 200000){
        $belasting += 2000;
      } else {
        $belasting += 6000;
      }




    }
  }
 ?>
