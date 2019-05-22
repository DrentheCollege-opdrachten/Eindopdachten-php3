<?php
  class WOZWaarde {
    private $min;
    private $max;
    private $belasting;

    public WOZWaarde ($min, $max = PHP_INT_MAX, $belasting) {
      $this->min = $min;
      $this->max = $max;
      $this->Belasting = $belasting;
    }

    public isCorrect ($current) {
      if ($current >= $this->min && $current <= $this->max) {
        return $this->Belasting;
      } else {
        return -1;
      }
    }
  }


 ?>
