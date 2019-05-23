<?php
include 'WOZWaarde.php';
  class Belasting extends WOZWaarde{
    public function berekenBelasting($wozWaarde, $kamers, $stad, $wozWaardes) {
      $i = 0;
      while ($i < sizeof($wozwaardes)) {
        $waarde = $wozWaardes->isCorrect($wozWaarde);
        if ($waarde > -1) {
          break;
        }
      }

      switch ($kamers) {
        case 1:
          $waarde += 100;
          break;
        case 2:
          $waarde += 300;
          break;
        default:
          $waarde += 800;
          break;
      }
      $steden = array('amsterdam', 'rotterdam', 'groningen');
      $stad = strtolower($stad);
    foreach ($steden as $plek) {}
      if ($stad == $plek) {
        $waarde += 1000;
      }
    }
      // code...



    }
 ?>
