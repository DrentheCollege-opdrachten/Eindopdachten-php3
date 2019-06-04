<?php

class cell {
  private $id;
  private $numb;
  function __construct ($id, $numb) {
    $this->id = $id;
    $this->numb = $numb;
  }
// function to show the cell
  public function show () {
    echo "<td class=\"cell $this->numb\"id= \"$this->id\" onclick=\"clicked($(this))\"> ? </td>\n";
  }

}


 ?>
