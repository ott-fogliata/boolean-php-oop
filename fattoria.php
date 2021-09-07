<?php

require_once('animal.php');

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

- al posto della stringa che descrive l'animale
utilizziamo le classi (e gli oggetti) a partire
da animal.php

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

    public function addAnimal(Animal $nomeAnimale) {
        $this->animals[] = $nomeAnimale;
    }

    public function getAnimals() {
        return $this->animals;
    }

    public function removeAnimal(Animal $nomeAnimale) {
        // dovremmo fare l'unset di una gallina nell'array
        // a partire dalla sua key -> primo step, trovare la key della gallina 

        // Sviluppare il remove attraverso l'oggetto che riceve il metodo.

        
        // unset($array[$key])
        $keyAnimalToRemove = array_search($nomeAnimale, $this->animals);

        // verifichiamo che l'animale già esista all'interno dell'array
        // quindi, in parole povere, che $keyAnimalToRemove non sia false.
        // se non lo trova, non proseguiamo e lanciamo un eccezione.

        if($keyAnimalToRemove === false) {
            throw new Exception("L'animale non è presente nella fattoria");
        }

        unset($this->animals[$keyAnimalToRemove]);

        // array_values prende solo i valori da un array
        // e "ricalcola"/riposiziona i valori in un array posizionale
        // $this->animals = array_values($this->animals);
        

    }

}


$fattoria = new Fattoria('Old West', 'new very road, 5');

/*
$fattoria->addAnimal('mucca');
$fattoria->addAnimal('maiale');
$fattoria->addAnimal('gallina');
$fattoria->addAnimal('gallina');
$fattoria->addAnimal('gallo');

print_r($fattoria->getAnimals());

echo '<br/>';

$fattoria->removeAnimal('gallina');

*/


// creaiamo un oggetto-animale

$primaMucca = new Mucca();
var_dump($primaMucca);

echo "<hr/>";

$maiale = new Maiale();
$primaGallina = new Gallina();
$secondaGallina = new Gallina();
$secondaGallina->numUovaPerDay = 10;
$gallo = new Gallo();
$cavallo = new Cavallo();

$fattoria->addAnimal($primaMucca);
$fattoria->addAnimal($maiale);
$fattoria->addAnimal($primaGallina);
$fattoria->addAnimal($secondaGallina);
$fattoria->addAnimal($gallo);

try {
    // se non c'è eccezione faccio questo:
    $fattoria->removeAnimal($cavallo); 
} catch (Exception $e) {
    // la $e l'oggetto errore, creato dal PHP
    // se qualcosa va storto, faccio questo:
    echo "Riscontrato un errore:" . $e->getMessage();
}


$fattoria->removeAnimal($secondaGallina);

var_dump($fattoria->getAnimals());

