<?php
include_once "cell.php";


class Screen {
  private $cells;
  private $helpArray;
  function __construct () {
    $this->cells = new SplFixedArray(16);
    $this->helpArray = array (1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8);
    $this->fillArray($this->cells, $this->helpArray);
  }

  private function fillArray ($arr1, $arr2) {
    for ($i=0; $i < sizeof($arr1); $i++) {
      $int = $this->getSemiRandomInt($arr2);
        $this->cells[$i] = new Cell($i, $int);
    }
  }

  private function getSemiRandomInt ($arr) {
    $int = -1;
    $random = rand(0, sizeof($arr));
    $int = $arr[$random];
    array_splice($arr, $random, $random);

    return $int;
  }

  public function show () {
    $g = 0;
    for ($i=0; $i < 4; $i++) {
      echo "<tr id=\"row$i\">\n";
      for ($j=0; $j < 4; $j++) {
        $this->cells[$g++]->show();
      }
      echo "</tr><br>\n";
    }
  }
}

 ?>
