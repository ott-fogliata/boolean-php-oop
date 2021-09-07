<?php

/*

Iniziamo subito con uno snack :slightly_smiling_face:
Scrivere una classe che descriva una fattoria. 
All’interno della fattoria c’è una proprietà di tipo array (vuoto, all’inizio) che conterrà in futuro tutti gli animali nella fattoria.
Aggiungere alla fattoria la mucca, 
il maiale e 2 galline, infine un gallo.

Quindi:

- Stampare a schermo tutti gli animali, 
dopo averli aggiunti all’oggetto con un metodo 
addAnimal($nomeAnimale);

- Un nostro vicino ci chiede in prestito la gallina,
quindi dobbiamo spostarla dalla nostra fattoria 
con un removeAnimal($nomeAnimale)

*/


class Fattoria {

    public $name;  // null

    public $address;  // null

    private $animals = [];

    public function __construct(string $nomeFattoria, string $indirizzo)
    {
        $this->name = $nomeFattoria;
        $this->address = $indirizzo;   
    }

    public function addAnimal(string $nomeAnimale) {
        $this->animals[] = $nomeAnimale;
    }

    public function getAnimals() {
        return $this->animals;
    }

    public function removeAnimal(string $nomeAnimale) {
        // dovremmo fare l'unset di una gallina nell'array
        // a partire dalla sua key -> primo step, trovare la key della gallina 

        // unset($array[$key])
        $keyAnimalToRemove = array_search($nomeAnimale, $this->animals);

        // todo exception

        unset($this->animals[$keyAnimalToRemove]);

        // array_values prende solo i valori da un array
        // e "ricalcola"/riposiziona i valori in un array posizionale
        $this->animals = array_values($this->animals);

    }

}


$fattoria = new Fattoria('Old West', 'new very road, 5');

$fattoria->addAnimal('mucca');
$fattoria->addAnimal('maiale');
$fattoria->addAnimal('gallina');
$fattoria->addAnimal('gallina');
$fattoria->addAnimal('gallo');

print_r($fattoria->getAnimals());

echo '<br/>';

$fattoria->removeAnimal('gallina');

print_r($fattoria->getAnimals());

