<?php

  namespace Petrik14s\Batobalint\Halloween\Models;

  class Lako {
    private $nev;

    public function getNev() { return $this->nev; }

    public function __construct(string $nev) {
      $this->nev = $nev;
    }

    public function __toString() {
      return 'Nev: ' . $this->nev;
    }
  }

?>
