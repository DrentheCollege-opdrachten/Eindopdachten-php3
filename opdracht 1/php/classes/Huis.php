<?php
include "belasting.php";
include "WOZwaarde.php";

$huis = new Huis("piet", 4, "");


$huis->fillBelasting();
$huis->berekenBelasting();
class Huis {

    private $kamers; // integer
    private $toiletten; // integer
    private $verwarming; // boolean
    private $typeVerwarming; // String
    private $straatnaam; // String
    private $huisnummer; // integer
    private $plaatsnaam; // String
    private $oppervlakte; // integer
    private $wozWaarde; // integer
    private $belasting; // WOZWaarde []
    private $belast; // integer
    public function __constructor ($straatnaam, $huisnummer, $plaats) {
      $this->straatnaam = $straatnaam;
      $this->huisnummer = $huisnummer;
      $this->plaatsnaam = $plaats;
      $this->wozWaarde = 150000;

      fillWoz();
      berekenBelasting();
    }

    public function fillWoz() {
      // new WOZWaarde(min, belasting, max)
      $belasting[0] = new WOZWaarde(PHP_INT_MIN, 600, 100000);
      $belasting[1] = new WOZWaarde(100000, 600, 200000);
      $belasting[2] = new WOZWaarde(200000, 6000);
    }


    public function berekenBelasting() {
      $belast = new Belasting();
      $belast->berekenBelasting($wozWaarde, $kamers, $plaatsnaam,$wozWaardes);
    }



  }





 ?>
