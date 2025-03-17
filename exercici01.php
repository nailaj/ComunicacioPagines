<?php
class persona{
    public $nom;
    public $cognoms;
    public $genere;
    public $correu;
    public $ciutat;
    public $aficions;
    public $motivacions;
 
    public function_construct($dades)
    $this->nom = htmlspecialchars(trim($dades["nom"]));
}
?>