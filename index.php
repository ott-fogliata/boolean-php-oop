<?php 



class Movie {

    public $title;  // segnaposto di una proprietà

    public $durata;

    // ..
}

// 1. la creazione di un classe

// 2. l'istanza di un oggetto => prendiamo la classe 
// e generaiamo da quest'ultima un oggetto.


$primoFilm = new Movie();
$primoFilm->title = 'Titanic';
$primoFilm->durata = 100;
$primoFilm->copertina = 'bla bla';  // bad
var_dump($primoFilm);



$secondoFilm = new Movie();
$secondoFilm->title = 'Terminator';
$secondoFilm->durata = 100;

var_dump($secondoFilm);

// ------------------------------------------------

class User {

    private $nomeCognome;  // null

    public function setNomeCognome($nome, $cognome) {
        // questo metodo accetta una stringa
        // e salva questa stringa all'interno
        // della proprietà nomeCognome
        $this->nomeCognome = "{$nome} {$cognome}";
    }

    public function getNomeCognome() {
        return $this->nomeCognome;
    }

}


$utente = new User();
$utente->setNomeCognome('Ottavio', 'Fogliata');
echo $utente->getNomeCognome();


var_dump($utente);


// -------------------------------------------------

class Home {

    private $nStanze;

    private $metratura = 100;  // valore di default

    private $piani;

    private $nBagni;

    private $address;

    // metratura è opzionale
    // address è obbligatoriamente una stringa
    public function __construct($nStanze, $piani, string $address, $metratura = 100, $nBagni = 2) {
        // qui va il codice da eseguire
        // in maniera automatica al new Home();
        $this->nStanze = $nStanze;
        $this->metratura = $metratura;
        $this->piani = $piani;
        $this->address = $address;
        $this->nBagni = $nBagni;
    }

    public function dimmiNumeroStanze() {
        return $this->nStanze;
    }



}


$nuovaCasa = new Home(5, 2, 'Via da qualche parte');

var_dump($nuovaCasa);

echo $nuovaCasa->dimmiNumeroStanze();



class Human {

    private $vivo = true;

    public function muori() {
        $this->vivo = false;
    }
}


$essereUmano = new Human();
$essereUmano->muori();


// -----------------------------------------------------------------------



class Stanza {

    private $nomeStanza;

    private $invitati = [];

    public function __construct($nomeStanza = 'salotto')
    {
        $this->nomeStanza = $nomeStanza;        
    }

    public function aggiungiInvitato(string $nomeInvitato) {
        $this->invitati[] = $nomeInvitato;
    }

    public function getListaInvitati() {
        return $this->invitati;
    }

}

// seguendo la classe Stanza, creare due stanze oggetto
// un salotto e un balcone. Inserire gli invitati in una e nell'altra stanza
// e stampare gli invitati presenti in ciascuna stanza. 
// --> naturalmente bisogna completare i due metodi


$salotto = new Stanza();
$salotto->aggiungiInvitato('Ciccio');
$salotto->aggiungiInvitato('Anna');

print_r($salotto->getListaInvitati());

$balcone = new Stanza('balcone');
$balcone->aggiungiInvitato('Pino');
$balcone->aggiungiInvitato('Maria');

print_r($balcone->getListaInvitati());