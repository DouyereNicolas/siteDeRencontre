  <?php require('../controllers/lovers_controller.php'); ?>
  <?php $ArrayMembersNEW = CreatTabMembers();

  $arrayCurrentUser = unserialize($_COOKIE["arrayInfoUser"]);
  $lastNameUser = $arrayCurrentUser["lastname"];
  $firstNameUser = $arrayCurrentUser["firstname"];

  ?>
  <!-- // création et affichage du tableau des zamoureux...<br> -->
  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>MEMBERS INFO</title>
  </head>


  <body class="VbBodyUser ">
    <?php include("navBarViews.php"); ?>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center"><br><br><br>
          <h1>Nos gentils membres </h1>
        </div>
      </div> <!-- fermeture row -->
      <div class="row">
        <div class="col-6 d-flex col-lg-3">

          <?php
          for ($indMember = 0; $indMember < 20; $indMember++) {
            // $indMember = 15;
            //for ($indMember= 0;$indMember<20; $indMember++){
            $value = extractMember($ArrayMembersNEW, $indMember); //array

            $lastname = ucfirst($value['lastname']);
            $firstname = ucfirst($value['firstname']);
            $picture = $value['picture'];
            //var_dump($picture);
            $age = $value['age'];
            $gender = $value['gender'];
            $mail = $value['mail'];
            $zipCode = $value['zipCode'];
            $description = $value['description'];
            $genderSearch = $value['genderSearch'];
            $match = $value['match'];
            //}
            //var_dump($value);
            if (($indMember % 4) == 0) {
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-6 d-flex col-lg-3 ">
        <?php
            } else {
        ?>
        </div>
        <div class="col-6 d-flex col-lg-3 ">
        <?php
            }
        ?>

        <!-- affichage des infos -->
        <div class="card mt-3 bg-transparent">
          <!-- When you need equal height, add .h-100 to the cards-->
          <div class="text-center">
            <img class="VbPictMember mt-3" src="../assets/img/<?= $picture ?>" alt="photo du membre" class="card-img-top" />
          </div>
          <div class="card-body mt-3 ">
            <h5 class="card-title"><?= $lastname ?> <?= $firstname ?>, <?= $age ?> </h5>
            <p class="card-text"><?= $gender ?> <br>
              <?= $mail ?> <br>
              <?= $zipCode ?> <br>
              Recherche <?= $genderSearch ?>
              <!-- <?= $match ?> <br> <?= $description ?> -->
            </p>
            <button type="button" data-bs-toggle="modal" data-bs-target="#infos<?= $indMember ?>" class="btn btn-primary align-bottom">Description</button>
          </div>
        </div> <!-- fermeture div Card  -->
        <!--   fenetre modale liée à <a> ou  par <button> par son id -->

        <div class="modal fade" id="infos<?= $indMember ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Contenu de la fenêtre modale  -->
              <div class="modal-header">
                <h5 class="modal-title text-center"><?= $firstname ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body ">
                <?= $description ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>
      <?php
          }
      ?>
        </div> <!-- fermeture derniere col -->
      </div> <!-- fermeture dernier row -->
      <div class="row ">
        <div class="col-12 ">
          <br> <br> <br> <br> <br> <br>
          il nous faut un pied de page !!!

          <br> <br> <br> <br> <br> <br> <br>
        </div>
      </div>

    </div> <!-- fermeture container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Required JavaScript Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>

  </html>