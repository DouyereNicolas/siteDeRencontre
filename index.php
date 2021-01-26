<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site de Rencontres</title>
</head>

<body>
  création et affichage du tableau des zamoureux...<br>
<?php require('controllers/lovers_controller.php'); ?>

<?php
 $ArrayMembersNEW = CreatTabMembers();
//var_dump($ArrayMembersNEW);

$MemberInfo = extractMember($ArrayMembersNEW, 10);
var_dump($MemberInfo);

$lastname = showMemberDetails($MemberInfo, 'lastname');
$firstaname = showMemberDetails($MemberInfo, 'firstname');
$picture = showMemberDetails($MemberInfo, 'picture');
var_dump($picture);
?>
Bonjour <?= $firstaname . ' ' . ucwords($lastname) . '<br>' ?>
<img src="assets/img/member_06.jpg" alt="photo du membre"><br>
</body>
</html>