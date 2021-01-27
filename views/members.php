  <?php require('../controllers/lovers_controller.php'); ?>
  <!-- // création et affichage du tableau des zamoureux...<br> -->
  <!DOCTYPE html>
  <html lang=fr>

  <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>MEMBERS INFO</title>
  </head>

  <body class="VbBodyUser">
    <div class="container">
      <div class="row ">
        <div class="col  text-center">
          <h1>Bienvenue sur notre site </h1>
        </div>
      </div>

      <?php

      // ********   if (cookie valable) {


      $ArrayMembersNEW = CreatTabMembers();
      //var_dump($ArrayMembersNEW);

      foreach ($ArrayMembersNEW as $order => $value)
      // on acquiert chaque lg du tableau HtdeFr et son ss-tab ($value) associé.
      {
        // var_dump($order);   // order est un integer (rang du ss-tableau)
        //var_dump($value);  // contient les clés et valeurs de la ligne étudiée.

        echo ' [' . ($order) . '] --- ';

        $lastname = $value['lastname'];
        //echo $lastname . '<br>';
        $firstname = $value['firstname'];
        $picture = $value['picture'];
        //var_dump($picture);
        $age = $value['age'];
        $gender = $value['gender'];
        $mail = $value['mail'];
        $zipCode = $value['zipCode'];
        $description = $value['description'];
        $genderSearch = $value['genderSearch'];
        $match = $value['match'];
      ?>
        <div class="row ">
          <div class="col-6 text-center">

            <?= $age ?> <br>
            <?= $gender ?> <br>
            <?= $mail ?> <br>
            <?= $zipCode ?> <br>

            <?= $genderSearch ?> <br>
            <?= $match ?> <br>
            <img class="VbPictMember" src="../assets/img/<?= $picture ?> " alt="photo du membre">
          </div>
          <div class="col-6  text-center">
            <?= $lastname ?> <br>
            <?= $firstname ?> <br>
            <?= $description ?> <br>
          </div>
        </div>
    </div>
  <?php

        echo '<br>';
      }
      // echo 'Fin du tableau<br>';


  ?>

  <?php

  //            }
  //            echo '<br>';
  ///           }
  // echo 'Fin du tableau<br>';
  ?>



  <?php

  //}
  //else{
  // header("Location: ../index.php");  //formulaire non rempli !!
  //}
  ?>

   <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 </body>
 </html>


  <!-- // $MemberInfo = extractMember($ArrayMembersNEW, 10);
// $lastname = extractMemberDetails($MemberInfo, 'lastname');
// $firstname = extractMemberDetails($MemberInfo, 'firstname');
// $picture = extractMemberDetails($MemberInfo, 'picture');
// $age = extractMemberDetails($MemberInfo, 'age');
// $gender = extractMemberDetails($MemberInfo, 'gender');
// $mail = extractMemberDetails($MemberInfo, 'mail');
// $zipCode = extractMemberDetails($MemberInfo, 'zipCode');
// $description = extractMemberDetails($MemberInfo, 'description');
// $genderSearch = extractMemberDetails($MemberInfo, 'genderSearch');
// $match = extractMemberDetails($MemberInfo, 'match');
//var_dump($picture); -->