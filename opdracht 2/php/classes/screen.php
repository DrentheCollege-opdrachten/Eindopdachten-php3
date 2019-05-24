<?php
include_once ="cells.php";

class Screen {
  private $cells;
  private $helpArray;
  function __construct () {
    $cells = new SplFixedArray(24);
    $helpArray = (1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8)
    fillArray($cells, $helpArray);
  }

  private function fillArray ($arr1, $arr2) {
    for ($i=0; $i < sizeof($arr); $i++) {
      $int = getSemiRandomInt($arr2);
      if ($int != -1) {
        $arr[] = new Cell($i, $int);
      }
    }
  }

  private function getSemiRandomInt ($arr) {
    $int = -1;
    $random = rand(0, sizeof($arr));
    $int = $arr[$random];
    array_splice($arr, $random, $random);

    return $int
  }

  public function show () {}
}

 ?>
