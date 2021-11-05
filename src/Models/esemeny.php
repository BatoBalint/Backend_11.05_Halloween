<?php

  namespace Petrik14s\Batobalint\Halloween\Models;

  use DateTime;

  class Esemeny {
    private $nev;
    private $szervezo;
    private $resztvevok = [];
    private $ido;

    public function getNev() { return $this->nev; }
    public function getSzervezo() { return $this->szervezo; }
    public function getResztvevok() { return $this->resztvevok; }
    public function getIdo() { return $this->ido; }

    public function __construct(string $nev, Lako $szervezo, DateTime $ido) {
      $this->nev = $nev;
      $this->szervezo = $szervezo;
      $this->ido = $ido;
    }

    function addPeople(Lako $lako) {
      array_push($this->resztvevok, $lako);
    }
  }

?>
