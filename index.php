<?php

//definizione della classe
class Movie {
//attributi all'interno della classe
    public $titolo;
    public $genere;
    public $durata;
    public$vietato_ai_minori;

    public function setAdult($vietato) {
        if($vietato === 'Horror') {
            $this->vietato_ai_minori = true;
        } else {
            $this->vietato_ai_minori = false;
        }
    }
    public function getAdult() {
        return $this->vietato_ai_minori;
    }
    function __construct($durata) {
        $this->durata = $durata;
    }
}

//variabile d'istanza
$john_wick = new Movie(101);
//accesso agli attributi di un'istanza
$john_wick->titolo = 'John Wick';
$john_wick->genere = 'Azione';
$john_wick->setAdult('Azione');
$john_wick_vietato = $john_wick->getAdult();

//variabile d'istanza
$inception = new Movie(148);
//accesso agli attributi di un'istanza
$inception->titolo = 'Inception';
$inception->genere = 'Azione';
$inception->setAdult('Azione');
$inception_vietato = $inception->getAdult();

$get_out = new Movie(120);
$get_out->titolo = 'Get Out';
$get_out->genere = 'Horror';
$get_out->setAdult('Horror');
$get_out_vietato = $get_out->getAdult();

var_dump($john_wick);
var_dump($inception);
var_dump($get_out);

echo $john_wick->titolo;
echo $john_wick->genere;
echo $john_wick->durata;

echo $inception->titolo;
echo $inception->genere;
echo $inception->durata;

echo $get_out->titolo;
echo $get_out->genere;
echo $get_out->durata;