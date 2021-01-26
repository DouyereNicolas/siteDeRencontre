<?php

$ArrayMembers = [
  ['index' => '02', 'name' => 'Aisne'],
  ['index' => '59', 'name' => 'Nord'],
  ['index' => '60', 'name' => 'Oise'],
  ['index' => '62', 'name' => 'Pas-de-Calais'],
  ['index' => '80', 'name' => 'Somme']
];
/*
lastname => 'DOE'
firstname => 'John'
age => '33ans'
gender => 'homme'
mail => 'mail@mail.com'
zipcode => '76600'
picture => 'monimage.jpg' !! ATTENTION !!, il va falloir mettre le nom de la photo que vous allez enregistrer dans votre assets/img
description => 'Je suis un homme qui ...'
*/


foreach ($ArrayMembers as $order => $value) 
    // on acquiert chaque lg du tableau HtdeFr et son ss-tab ($value) associé.
{
  // var_dump($order);   // order est un integer (rang du ss-tableau)
  // var_dump($value);  // contient les clés et valeurs de la ligne étudiée.

  echo ' [' . ($order) . '] --- ';
  foreach ($value as $key => $infos)  //on acquiert chaque element (clé/valeur) du ss-tab 
  {
    // var_dump($key);
    // var_dump($infos);
    echo '(' . $key . ')     ' . $infos . ' ';
  }
  echo '<br>';
}
// echo 'Fin du tableau<br>';

var_dump($ArrayMembers);

//$nbrlg = count($HtdeFr); pour compter le nbre de lg d'un tableau

?>