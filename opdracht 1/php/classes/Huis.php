<?php
class Huis extends Belasting {

    private $kamers; // integer
    private $toiletten; // integer
    private $verwarming; // boolean
    private $typeVerwarming; // String
    private $straatnaam; // String
    private $huisnummer; // integer
    private $plaatsnaam; // String
    private $oppervlakte; // integer
    private $wozWaarde; // integer

    function House ($straatnaam, $huisnummer, $plaats) {
      $this->straatnaam = $straatnaam;
      $this->huisnummer = $huisnummer;
      $this->plaatsnaam = $plaats;
    }


    function berekenBelasting();



  }





 ?>
