<?php
  include_once "WOZWaarde.php";
  include_once "Belasting.php";

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

      public function __construct ($straatnaam, $huisnummer, $plaats) {
        $this->straatnaam = $straatnaam;
        $this->huisnummer = $huisnummer;
        $this->plaatsnaam = $plaats;
        $this->wozWaarde = 150000;
        $belasting = array('','','' );
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


      public function berekenBelasting() {
        $belast = new Belasting();
        $wozclasses = array(new WOZWaarde(PHP_INT_MIN, 600, 100000),
                            new WOZWaarde(100000, 2000, 200000),
                            new WOZWaarde(200000, 6000, PHP_INT_MAX));
        // $this->plaatsnaam == null, $this->belasting == null
        $waarde = $belast->berekenBelasting($this->wozWaarde, $this->kamers, $this->plaatsnaam, $wozclasses);
        return $waarde;
      }

      public function show() {
       echo "<div class=\"output jumbotron col-md-4 col-sm-11\">
               <form class=\"input_huis\" action=\"index.html\" method=\"post\">
                 <span class=\"out_span\">Aantal kamers: </span>
                   <div class=\"form-control col-12\"> $this->kamers </div> <br>
                 <span class=\"out_span\"> Aantal toiletten: </span>
                   <div class=\"form-control col-12\"> $this->toiletten </div> <br>
                 <span class=\"out_span\"> Verwarming: </span>
                 <!-- dropdown menu\'s -->
                   <!-- wel of geen verwarming -->
                   <div class=\"form-control col-12\"> $this->verwarming </div>
                   <!-- type verwarming -->
                   <div class=\"form-control col-12\"> $this->typeVerwarming </div>
                   <br>
                 <span class=\"out_span\"> Straatnaam en huisnummer: </span>
                   <div class=\"form-control col-12\"> $this->straatnaam </div>
                   <div class=\"form-control col-12\"> $this->huisnummer </div>
                 <br>
                 <span class=\"out_span\"> Plaatsnaam: </span>
                   <div class=\"form-control col-12\"> $this->plaatsnaam </div>
                   <br>
                 <span class=\"out_span  \"> Oppervlakte: </span>
                   <div class=\"form-control col-12\"> $this->oppervlakte </div>
                   <br>
                 <span class=\"out_span  \"> Woz waarde: </span>
                   <div class=\"form-control col-12\"> $this->wozWaarde </div>
                   <br>
                 <span class=\"out_span\"> Belasting: </span>
                   <div class=\"form-control col-12\"> " . $this->berekenBelasting() . " </div>
             </div>";
      }



    }

?>
