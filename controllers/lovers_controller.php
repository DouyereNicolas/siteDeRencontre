<?php
function CreatTabMembers(){

  $ArrayMembers = [
  ['lastname' => 'karenine', 
  'firstname' => 'anna', 
  'age' => '25ans, ', 
  'gender' =>'femme', 
  'mail' => 'anna.karenine@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_00.jpg', 
  'description' => 'je suis très mignonne...'],
  
  ['lastname' => 'granger', 
  'firstname' => 'hermione', 
  'age' => '27ans, ', 
  'gender' =>'femme', 
  'mail' => 'hermione.granger@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_01.jpg', 
  'description' => 'je suis très mignonne...'],

  ['lastname' => 'everdeen ', 
  'firstname' => 'katniss', 
  'age' => '25ans, ', 
  'gender' =>'femme', 
  'mail' => 'katniss.everdeen@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_02.jpg', 
  'description' => 'je suis très mignonne...'],

  ['lastname' => 'connor', 
  'firstname' => 'sarah', 
  'age' => '25ans, ', 
  'gender' =>'femme', 
  'mail' => 'sarah.connor@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_03.jpg', 
  'description' => 'je suis très mignonne...'],

  ['lastname' => 'sterling', 
  'firstname' => 'clarisse', 
  'age' => '25ans, ', 
  'gender' =>'femme', 
  'mail' => 'clarisse.sterling@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_04.jpg', 
  'description' => 'je suis très mignonne...'],

  ['lastname' => 'jones', 
  'firstname' => 'bridget', 
  'age' => '25ans, ', 
  'gender' =>'femme', 
  'mail' => 'bridget.jones@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_05.jpg', 
  'description' => 'je suis très mignonne...'],

  ['lastname' => 'dashwood', 
  'firstname' => 'marianne', 
  'age' => '25ans, ', 
  'gender' =>'femme', 
  'mail' => 'marianne.dashwood@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_06.jpg', 
  'description' => 'je suis très mignonne...'],

  ['lastname' => 'chase', 
  'firstname' => 'annabeth', 
  'age' => '25ans, ', 
  'gender' =>'femme', 
  'mail' => 'annabeth.chase@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_07.jpg', 
  'description' => 'je suis très mignonne...'],

  ['lastname' => 'desmarets', 
  'firstname' => 'clémence', 
  'age' => '25ans, ', 
  'gender' =>'femme', 
  'mail' => 'clemence.desmarets@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_08.jpg', 
  'description' => 'je suis très mignonne...'],

  ['lastname' => 'Undómiel', 
  'firstname' => 'Arwen', 
  'age' => '25ans, ', 
  'gender' =>'femme', 
  'mail' => 'Arwen.Undomiel@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_09.jpg', 
  'description' => 'je suis très mignonne...'],

  ['lastname' => 'skywalker', 
  'firstname' => 'anakin', 
  'age' => '25ans, ', 
  'gender' =>'homme', 
  'mail' => 'anakin.skywalker@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_10.jpg', 
  'description' => 'je suis très sympa...'],

  ['lastname' => 'sparrow', 
  'firstname' => 'jack', 
  'age' => '25ans, ', 
  'gender' =>'homme', 
  'mail' => 'jack.sparrow@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_11.jpg', 
  'description' => 'je suis très sympa...'],

  ['lastname' => 'bond', 
  'firstname' => 'james', 
  'age' => '25ans, ', 
  'gender' =>'homme', 
  'mail' => 'james.bond@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_12.jpg', 
  'description' => 'je suis très sympa...'],

  ['lastname' => 'brown', 
  'firstname' => 'emmet', 
  'age' => '55ans, ', 
  'gender' =>'homme', 
  'mail' => 'emmet.brown@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_13.jpg', 
  'description' => 'je suis très sympa...'],

  ['lastname' => 'lecter', 
  'firstname' => 'hannibal', 
  'age' => '25ans, ', 
  'gender' =>'homme', 
  'mail' => 'hannibal.lecter@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_14.jpg', 
  'description' => 'je suis trèèèèèès sympa...'],

  ['lastname' => 'callahan', 
  'firstname' => 'harry', 
  'age' => '55ans, ', 
  'gender' =>'homme', 
  'mail' => 'harry.callahan@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_15.jpg', 
  'description' => 'je suis très sympa...'],

  ['lastname' => 'karenine', 
  'firstname' => 'anna', 
  'age' => '25ans, ', 
  'gender' =>'homme', 
  'mail' => 'anna.karenine@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_16.jpg', 
  'description' => 'je suis très sympa...'],

  ['lastname' => 'jones', 
  'firstname' => 'indiana', 
  'age' => '45ans, ', 
  'gender' =>'homme', 
  'mail' => 'indiana.jones@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_17.jpg', 
  'description' => 'je suis très sympa...'],

  ['lastname' => 'verbal', 
  'firstname' => 'kint', 
  'age' => '35ans, ', 
  'gender' =>'homme', 
  'mail' => 'kint.verbal@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_18.jpg', 
  'description' => 'je suis très sympa...'],

  ['lastname' => 'lannister', 
  'firstname' => 'tyrion', 
  'age' => '25ans, ', 
  'gender' =>'homme', 
  'mail' => 'tyrion.lannister@mail.com', 
  'zipcode' => '76600', 
  'picture' => 'member_19.jpg', 
  'description' => 'je suis très sympa...'],

];
return $ArrayMembers;
//var_dump($ArrayMembers);
}

function extractMember($arrayName, $indMember){
 //extrait les infos du ($indMember+1)ème membre du [array] passé en paramétre.
   //$sous_util = ['lastname' => 'DOE',  etc.. 'description' => 'je suis très']
   $sous_util = $arrayName[$indMember];
   //var_dump( $sous_util);
   return $sous_util;

}

function showMemberDetails($arrayName, $info){
 //extrait et/ou affiche le champ '$info' du [array] à 1 dimension passé en paramétre.
   $myinfo = $arrayName[$info];

  //var_dump( $sous_util);
  return $myinfo;

}

//$nbrlg = count($HtdeFr); pour compter le nbre de lg d'un tableau

?>