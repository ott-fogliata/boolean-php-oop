<?php

// definire una classe animale
// creiamo tanti oggetti che partono dalla classe animale
// aggiungere gli oggetti-animale alla fattoria


class Animal {

    protected $label = 'animale generico'; 

    protected $animalClass; // mammifero, oviparo... 

    public function getLabel() {
        return $this->label;
    }

    public function getAnimalClass() {
        return $this->animalClass;
    }

}


class Mucca extends Animal{

    // qui inseriremo solo le proprietà relative alla mucca
    // di certo non relative alla galline

    public $litriLatteAvg = 50;

    public function __construct()
    {
        $this->label = 'mucca';
        $this->animalClass = 'mammifero';
    }

}

class Maiale extends Animal{

    public $size = 100;

    public function __construct()
    {
        $this->label = 'maiale';
        $this->animalClass = 'mammifero';
    }

}

class Gallina extends Animal{

    public $numUovaPerDay = 1;

    public function __construct()
    {
        $this->label = 'gallina';
        $this->animalClass = 'oviparo';
    }

}

class Gallo extends Animal{

    public $piumaggioType = 'lorem';

    public function __construct()
    {
        $this->label = 'gallo';
        $this->animalClass = 'oviparo';
    }

}

