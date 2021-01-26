  <?php require('../controllers/lovers_controller.php'); ?>
// création et affichage du tableau des zamoureux...<br>

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
  <img src="../assets/img/member_08.jpg" alt="photo du membre"><br>