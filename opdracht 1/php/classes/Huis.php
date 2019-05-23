<?php
include "belasting.php";
include "WOZwaarde.php";

$huis = new Huis("piet", 4, "");


$huis->fillBelasting();
$huis->berekenBelasting();
$huis->show();
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

    //getters
    public function getKamers() { return $this->kamers; }
    public function getToiletten () { return $this->toiletten; }
    public function getVerwarming () { return $this->Verwarming; }
    public function getTypeVerwarming () { return $this->typeVerwarming; }
    public function getStraatnaam () { return $this->straatnaam; }
    public function getHuisnummer () { return $this->huisnummer; }
    public function getPlaatsnaam () { return $this->plaatsnaam; }
    public function getOppervlakte () { return $this->oppervlakte; }
    public function getWozWaarde () { return $this->wozWaarde; }
    //setters
    public function setKamers ($a) { $this->kamers = $a; }
    public function setToiletten ($a) { $this->toiletten = $a; }
    public function setVerwarming ($a) { $this->Verwarming = $a; }
    public function setTypeVerwarming ($a) { $this->typeVerwarming = $a; }
    public function setStraatnaam ($a) { $this->straatnaam = $a; }
    public function setHuisnummer ($a) { $this->huisnummer = $a; }
    public function setPlaatsnaam ($a) { $this->plaatsnaam = $a; }
    public function setOppervlakte ($a) { $this->oppervlakte = $a; }
    public function setWozWaarde ($a) { $this->wozWaarde = $a; }


    private function fillWoz() {
      // new WOZWaarde(min, belasting, max)
      $belasting[0] = new WOZWaarde(PHP_INT_MIN, 600, 100000);
      $belasting[1] = new WOZWaarde(100000, 600, 200000);
      $belasting[2] = new WOZWaarde(200000, 6000);
    }


    private function berekenBelasting() {
      $belast = new Belasting();
      $belast->berekenBelasting($wozWaarde, $kamers, $plaatsnaam,$wozWaardes);
      return $belast;
    }

    public function show() {
     echo '<div class="output jumbotron col-md-4 col-sm-11">
             <form class="input_huis" action="index.html" method="post">
               <span class="in_span  " id="kamers">Aantal kamers: </span>
                 <div class="form-control col-12"> $kamers </div> <br>
               <span class="in_span  " id="toiletten"> Aantal toiletten: </span>
                 <div class="form-control col-12"> $toiletten </div> <br>
               <span class="in_span  " id="verwarming"> Verwarming: </span>
               <!-- dropdown menu\'s -->
                 <!-- wel of geen verwarming -->
                 <div class="form-control col-12"> $Verwarming </div>
                 <!-- type verwarming -->
                 <div class="form-control col-12"> $typeVerwarming </div>
                 <br>
               <span class="in_span  " id="straatnaam"> Straatnaam en huisnummer: </span>
                 <div class="form-control col-12"> $straatnaam </div>
                 <div class="form-control col-12"> $huisnummer </div>
               <br>
               <span class="in_span  " id="plaatsnaam"> Plaatsnaam: </span>
                 <div class="form-control col-12"> $plaatsnaam </div>
                 <br>
               <span class="in_span  " id="oppervlakte"> Oppervlakte: </span>
                 <div class="form-control col-12"> $oppervlak </div>
                 <br>
               <span class="in_span  " id="woz_waarde"> Woz waarde: </span>
                 <div class="form-control col-12"> $wozWaarde </div>
                 <br>
               <span class="out_span" id="belasting"> Belasting: </span>
                 <div class="form-control col-12"> $this->berekenBelasting() </div>
           </div>';
    }



  }





 ?>
