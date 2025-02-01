<?php

class Calendars 
{
   public $theme = 'sapin_enchante';
   public $surprise = 'joyeux_noel';

   // Je vais créer une fonction surprise

   public function surprise()
   {
      return "{$this->theme} vous souhaite un {$this->surprise}.";
   }
}

//Je crée l'objet calendar
$calendar = new Calendars();

var_dump($calendar->theme); 

//Inscription de ma phrase pour mon html
$phrase = "Choisissez votre ". $calendar->theme .".";
var_dump($phrase); 

//j'appelle la méthode surprise()
var_dump($calendar->surprise());

?>