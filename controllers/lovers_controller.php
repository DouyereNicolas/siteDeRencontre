<?php
function CreatTabMembers(){
  $ArrayMembers = [
  ['lastname' => 'ripley', 
  'firstname' => 'ellen', 
  'age' => '30ans ', 
  'gender' =>'femme', 
  'mail' => 'ellen.ripley@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'ellen_00.jpg', 
  'description' => 'Je suis lieutenant de première classe matricule 36706. Je suis considérée comme une légende car je suis parmi les personnes ayant jamais réussi à ne pas être exterminée par les Xenomorphes. J\'ai été est ressuscitée et je suis maintenant bien plus expérimentée face au Aliens.'],
  
  ['lastname' => 'granger', 
  'firstname' => 'hermione', 
  'age' => '27ans ', 
  'gender' =>'femme', 
  'mail' => 'hermione.granger@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'hermione_01.jpg', 
  'description' => 'je suis une sorcière née moldue (non sorcière), je suis brune aux cheveux bouclés, aux yeux marrons. Je suis généreuse et très sensible. Je suis studieuse et j\'adore lire.'],

  ['lastname' => 'everdeen ', 
  'firstname' => 'katniss', 
  'age' => '25ans ', 
  'gender' =>'femme', 
  'mail' => 'katniss.everdeen@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'katniss_02.jpg', 
  'description' => 'Je suis la fille du feu, le symbole de la rébellion, la survivante des hunger games. '],

  ['lastname' => 'connor', 
  'firstname' => 'sarah', 
  'age' => '25ans ', 
  'gender' =>'femme', 
  'mail' => 'sarah.connor@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'sarah_03.jpg', 
  'description' => 'J\'étais serveuse dans un restaurant à Los Angeles avant que ma vie bascule lorsqu\'un androïde Terminator est envoyé du futur pour me tuer. J\'ai un fils John'],

  ['lastname' => 'sachs', 
  'firstname' => 'andrea', 
  'age' => '25ans ', 
  'gender' =>'femme', 
  'mail' => 'andrea.sachs@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'andrea_04.jpg', 
  'description' => 'Je suis diplômée d\'université et je me suis distinguée pour mon emploi en tant qu\'assistante personnelle de la légende de la mode Miranda Priestly. je suis maintenant reporter. '],

  ['lastname' => 'jones', 
  'firstname' => 'bridget', 
  'age' => '25ans ', 
  'gender' =>'femme', 
  'mail' => 'bridget.jones@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'bridget_05.jpg', 
  'description' => 'Je suis londonienne célibataire romantique et fragile, qui recherche l\'homme idéal et tient un journal intime.'],

  ['lastname' => 'wonder Woman', 
  'firstname' => 'diana', 
  'age' => '25ans ', 
  'gender' =>'femme', 
  'mail' => 'wonder.woman@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'diana_06.jpg', 
  'description' => 'Je suis la princesse Diana d\'une tribu d\'Amazones. Ambassadrice amazone dans votre monde, je possède différents pouvoirs surnaturels ainsi que des cadeaux des dieux grecs, comme un lasso magique (qui détecte la vérité et provoque une sensation de brûlure en cas de mensonge) et des bracelets à l\'épreuve des balles. Je fais partie de la Ligue des justiciers d\'Amérique. '],

  ['lastname' => 'croft', 
  'firstname' => 'lara', 
  'age' => '25ans ', 
  'gender' =>'femme', 
  'mail' => 'lara.croft@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'lara_07.jpg', 
  'description' => 'Je suis la fille de Lord Henshingly Croft et de Lady Angeline Lodge-Croft. J\'ai  grandit dans un milieu aristocratique et j\'ai reçu la meilleure éducation possible. Je suis la seule survivante d\'un accident d\'avion en Indes, ce qui m\'a  décidé à parcourir le monde en solitaire, telle une aventurière.'],

  ['lastname' => 'amidala', 
  'firstname' => 'padmé', 
  'age' => '25ans ', 
  'gender' =>'femme', 
  'mail' => 'padmé.amidala@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'padme_08.jpg', 
  'description' => 'J\'ai été reine démocratiquement élue puis Sénatrice de Naboo avant de représenter le secteur Chommell en tant que sénatrice au Sénat Galactique.  Je suis l\une des figures politiques les plus respectées de la Galaxie. J\'ai contribué, avec d\'autres sénateurs, à la fondation de ce qui devint plus tard l\'Alliance Rebelle.'],

  ['lastname' => 'Undómiel', 
  'firstname' => 'Arwen', 
  'age' => '25ans ', 
  'gender' =>'femme', 
  'mail' => 'Arwen.Undomiel@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'arwen_09.jpg', 
  'description' => 'Je suis surnommée Undómiel, « étoile du soir » en quenya du Troisième Âge.Je suis le troisième et dernier enfant (et la seule fille) d\'Elrond le Semi-elfe et de Celebrían, fille de Galadriel. J\'ai choisi d\'abandonner mon immortalité par Amour.'],

  ['lastname' => 'skywalker', 
  'firstname' => 'anakin', 
  'age' => '25ans ', 
  'gender' =>'homme', 
  'mail' => 'anakin.skywalker@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'femme',
  'match' => '0',
  'picture' => 'anakin_10.jpg', 
  'description' => 'je suis est un personnage de fiction, successivement chevalier Jedi et seigneur Sith, et le personnage central des deux premières trilogies de la saga cinématographique Star Wars conçue par George Lucas.'],

  ['lastname' => 'sparrow', 
  'firstname' => 'jack', 
  'age' => '25ans ', 
  'gender' =>'homme', 
  'mail' => 'jack.sparrow@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'femme',
  'match' => '0',
  'picture' => 'jack_11.jpg', 
  'description' => 'je suis  le Seigneur pirate de la mer des Caraïbes. J\'apprécie la liberté que m\' apporte ma vie de boucanier, buvant du rhum et séduisant des femmes tout en cherchant des trésors surnaturels. J\'ai recours à de nombreuses reprises à la négociation et à la trahison, préférant les pourparlers aux armes pour survivre.'],

  ['lastname' => 'bond', 
  'firstname' => 'james', 
  'age' => '45ans ', 
  'gender' =>'homme', 
  'mail' => 'james.bond@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'femme',
  'match' => '0',
  'picture' => 'james_12.jpg', 
  'description' => 'Je passe une bonne partie de mes jeunes années à l\'étranger, ce qui me permet de maîtriser parfaitement l\'allemand et le français, grâce au travail de mon père comme représentant à l\'étranger de la firme britannique d\'équipement militaire Vickers. À onze ans, je deviens orphelin en perdant mes deux parents dans un accident d\'alpinisme dans le massif des Aiguilles Rouges, au-dessus de Chamonix-Mont-Blanc. '],

  ['lastname' => 'brown', 
  'firstname' => 'emmet', 
  'age' => '75ans ', 
  'gender' =>'homme', 
  'mail' => 'emmet.brown@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'femme',
  'match' => '0',
  'picture' => 'emmet_13.jpg', 
  'description' => 'J\'ai passé mon enfance dans la maison du 1640 avenue Riverside à Hill Valley, dont le terrain fut acheté en 1915 par la famille Brown. Ma passion pour les sciences me vient à l\'âge de onze ans, à la lecture de Vingt mille lieues sous les mers de Jules Verne, ce qui m\'amène des années plus tard à passer un doctorat en physique nucléaire. Alors que j\'enseigne à l\'Institut de technologie de Californie, je suis retenu par Robert Oppenheimer pour travailler sur le projet Manhattan. Après la guerre, je retourne dans ma maison de Hill Valley, fabriquant des inventions plus ou moins fonctionnelles, comme un casque lecteur de pensées.'],

  ['lastname' => 'dawson', 
  'firstname' => 'jack', 
  'age' => '25ans ', 
  'gender' =>'homme', 
  'mail' => 'jack.dawson@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'femme',
  'match' => '0',
  'picture' => 'jack_14.jpg', 
  'description' => 'Je suis né à Chippewa Falls dans le Wisconsin. On ignore qui étaient mes parents, mais ils sont décédés lorsque j\' avais quinze ans, ce qui me poussa à voyager à travers le monde.'],

  ['lastname' => 'callahan', 
  'firstname' => 'harry', 
  'age' => '55ans ', 
  'gender' =>'homme', 
  'mail' => 'harry.callahan@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'femme',
  'match' => '0',
  'picture' => 'harry_15.jpg', 
  'description' => 'Matricule no 2211 de la police de San Francisco, je suis un fonctionnaire violent, froid et cynique, aux méthodes expéditives.
  Je mène ma propre guerre au sein du système judiciaire américain que je juge imparfait et inefficace. Ce mépris réciproque enversma hiérarchie, et plus généralement l\'ordre établi, est plus que conflictuel. Régulièrement, on me menace de me suspendre et même de me renvoyer.'],

  ['lastname' => 'mcClane', 
  'firstname' => 'john', 
  'age' => '65ans ', 
  'gender' =>'homme', 
  'mail' => 'john.mclane@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'femme',
  'match' => '0',
  'picture' => 'john_16.jpg', 
  'description' => 'Je suis lieutenant de la police de New York, depuis un bon moment. J\'ai été marié et j\'ai eu deux enfants. Je suis de nature entêtée et je désire toujours avoir le dernier mot. Je suis divorcé et j\'ai réussi à me réconcilier avec mes deux enfants.'],

  ['lastname' => 'jones', 
  'firstname' => 'indiana', 
  'age' => '45ans ', 
  'gender' =>'homme', 
  'mail' => 'indiana.jones@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'femme',
  'match' => '0',
  'picture' => 'indiana_17.jpg', 
  'description' => 'Je suis aventurier et professeur d\'archéologie, ma vie est rythmée par la recherche et découverte d\'artéfacts et de reliques légendaires, tout en étant confronté à des mythes et croyances diverses.'],

  ['lastname' => 'wilson', 
  'firstname' => 'wade', 
  'age' => '35ans ', 
  'gender' =>'homme', 
  'mail' => 'kint.verbal@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'femme',
  'match' => '0',
  'picture' => 'wade_18.jpg', 
  'description' => 'Je suis un anti-héros évoluant dans l\'univers Marvel de la maison d\'édition Marvel Comics.Je suis est un mercenaire  doté d\'une capacité surhumaine de guérison accélérée et capable de prouesses physiques. Je suis aussi connu sous le surnom de « Mercenaire à la grande bouche » en raison de ma tendance à discuter et plaisanter constamment, notamment en cassant le quatrième mur (en parlant à ses lecteurs) pour causer des effets humoristiques et en faisant des gags récurrents.'],

  ['lastname' => 'lannister', 
  'firstname' => 'tyrion', 
  'age' => '25ans ', 
  'gender' =>'homme', 
  'mail' => 'tyrion.lannister@mail.com', 
  'zipCode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'tyrion_19.jpg', 
  'description' => 'Je suis surnommé le Lutin, Je suis le troisième enfant de lord Tywin Lannister, et donc le frère de Cersei et Jaime Lannister.  Je préfére la lecture et les arts à la chevalerie.'],

];
  $array = ['lastname' => 'ripley', 
  'firstname' => 'ellen', 
  'age' => '30ans ', 
  'gender' =>'femme', 
  'mail' => 'ellen.ripley@mail.com', 
  'zipcode' => '76600',
  'genderSearch' => 'homme',
  'match' => '0',
  'picture' => 'ellen_00.jpg', 
  'description' => 'Je suis lieutenant de première classe '];

  return $ArrayMembers;
//var_dump($ArrayMembers);
}

function extractMember($arrayName, $indMember){
 //extrait les infos du ($indMember+1)ème membre du [array] multiDim passé en paramétre.
   //$sous_util = ['lastname' => 'DOE',  etc.. 'description' => 'je suis très']
   $sous_util = $arrayName[$indMember];
   //var_dump( $sous_util);
   return $sous_util;

}

function extractMemberDetails($arrayName, $info){
 //extrait et/ou affiche le champ '$info' du [array] à 1 dimension passé en paramétre.
   $myinfo = $arrayName[$info];

  //var_dump( $sous_util);
  return $myinfo;
}

// function assignMemberDetails($value){
//   var_dump($value);
// $lastname = $value['lastname'];
// //echo $lastname . '<br>';
// $firstname = $value['firstname'];
// $picture = $value['picture'];
// //var_dump($picture);
// $age = $value['age'];
// $gender = $value['gender'];
// $mail = $value['mail'];
// $zipCode = $value['zipCode'];
// $description = $value['description'];
// $genderSearch = $value['genderSearch'];
// $match = $value['match'];

// }
// function assignMembersdetails($MemberInfo)
// {
  
//   $lastname = extractMemberDetails($MemberInfo, 'lastname');
//   $firstname = extractMemberDetails($MemberInfo, 'firstname');
//   $picture = extractMemberDetails($MemberInfo, 'picture');
//   $age = extractMemberDetails($MemberInfo, 'age');
//   $gender = extractMemberDetails($MemberInfo, 'gender');
//   $mail = extractMemberDetails($MemberInfo, 'mail');
//   $zipCode = extractMemberDetails($MemberInfo, 'zipCode');
//   $description = extractMemberDetails($MemberInfo, 'description');
//   $genderSearch = extractMemberDetails($MemberInfo, 'genderSearch');
//   $match = extractMemberDetails($MemberInfo, 'match');
// }