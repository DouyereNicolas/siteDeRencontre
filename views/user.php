


<!DOCTYPE html>
<html lang=fr>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>USER INFO</title>
</head>

<body class="VbBodyUser">

<?php


var_dump ($_POST);

if (!empty($_POST)) {
 
 
  echo 'formulaire rempli <br>';
   

    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']); 
  


    //ajouter le nouvel inscrit au tableau

    //initialiser les cookies
    //setcookie('login', $login, time()+24*60*60); // en sec.
   // setcookie('pwd', $pwd, time()+24*60*60);
    //header("Location: index.php");
      //affichage résultat en html


?>

recupération des valeurs de  $_POST<br>
nom: <?= $lastname ?> et prénom :<?= $firstname ?><br>


  <?php require('../controllers/lovers_controller.php'); ?>
  <!-- // création et affichage du tableau des zamoureux...<br> -->

  <?php
  $ArrayMembersNEW = CreatTabMembers();
  //var_dump($ArrayMembersNEW);

  $MemberInfo = extractMember($ArrayMembersNEW, 10);
  //var_dump($MemberInfo);
  $lastname = extractMemberDetails($MemberInfo, 'lastname');
  $firstname = extractMemberDetails($MemberInfo, 'firstname');
  $picture = extractMemberDetails($MemberInfo, 'picture');
  $age = extractMemberDetails($MemberInfo, 'age');
  $gender = extractMemberDetails($MemberInfo, 'gender');
  $mail = extractMemberDetails($MemberInfo, 'mail');
  $zipcode = extractMemberDetails($MemberInfo, 'zipcode');
  $description = extractMemberDetails($MemberInfo, 'description');

  $genderSearch = extractMemberDetails($MemberInfo, 'genderSearch');
  $match = extractMemberDetails($MemberInfo, 'match');
  //var_dump($picture);

  ?>
  <br><br>
  <br><br>
  <br>




  <div class="container">
    <div class="row ">
      <div class="col">
        <div class="text-center">
          <h1>Bienvenue sur notre site </h1>
        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-6">
        <div class="text-center">
          <img class="VbPictMember" src="../assets/img/member_08.jpg" alt="photo du membre">
        </div>
      </div>
      <div class="col-6">
        <div class="bg-light text-center">
          Bonjour <?= $firstname . ' ' . ucwords($lastname) ?>
        </div>
      </div>
    </div>
  </div>

<?php

}
else{
  header("Location: ../index.php");  //formulaire non rempli !!
}
?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>