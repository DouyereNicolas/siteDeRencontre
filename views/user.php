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

  <div class="container">
    <?php
    if (!empty($_COOKIE['arrayInfoUser'])) {
      //echo "cookie arrayInfoUser  pas vide";
      // formulaire  rempli ou visiteur déja venu =>lecture du cookie
      // var_dump($_COOKIE['arrayInfoUser']);
      //require('../controllers/user_controller.php');
      //lecture du cookie et extraction des infos du user par fonction dans user_controller.php
      $arrayInfoUser = unserialize($_COOKIE['arrayInfoUser']);
      //var_dump($arrayInfoUser);
      $lastname = ucfirst($arrayInfoUser['lastname']);
      $firstname = ucfirst($arrayInfoUser['firstname']);
      $age = ucfirst($arrayInfoUser['age']);
      $gender = ucfirst($arrayInfoUser['gender']);
      $mail = ucfirst($arrayInfoUser['mail']);
      $zipCode = ucfirst($arrayInfoUser['zipCode']);
      $genderSearch = ucfirst($arrayInfoUser['genderSearch']);
      if ($genderSearch == 'homme') {
        $search = "la Femme";
      } else {
        $search = "l'Homme";
      }
    ?>

      <div class="row">
        <div class="col">
          <div class="text-center" style="color:black;">
            <h1>Bienvenue sur notre site </h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="bg-light text-center" style="color:black;">
            <section>
              <p><br>
                Bonjour <?= $firstname ?> <?= $lastname ?> <br>
                vous avez <?= $age ?> ans et vous habitez à <?= $zipCode ?><br>
                votre mail (info privée) est : <?= $mail ?><br>
                J'espère que vous trouverez sur notre site <?= $search ?> que vous attendez.<br> <br>
              </p>
            </section>
            <?php
            // ****** destruction cookies par fonction dans user_controller.php (bouton à mettre en oeuvre)
            //deleteCookie();

            ?>
          </div>
        </div>
      </div>
    <?php

    } else {   //   le formulaire n'a pas été rempli
      //   ***  retour au formulaire à remplir => index.php... ***
      header("Location: ../index.php");  //formulaire non rempli !!
    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>