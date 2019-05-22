<?php
  class WOZWaarde {
    private $min;
    private $max;
    private $belasting;

    public function __constructor ($min, $belasting, $max = PHP_INT_MAX) {
      $this->min = $min;
      $this->max = $max;
      $this->Belasting = $belasting;
    }

    public function isCorrect ($current) {
      if ($current > $this->min && $current <= $this->max) {
        echo $this->belasting;
        return $this->$belasting;
      } else {
        return -1;
      }
    }
  }


 ?>
