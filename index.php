<!doctype html>
<html lang="fr">
  <head>
    <title>Site de rencontre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
  <div class="ndPrincipal">
    <div class="row  m-4 p-0">
      <div class="col-12 col-lg-6 border text-center">
        <img src="../assets/img/arabesque.png" style="width : 80%;"/>
        <img src="../assets/img/arabesqueRetourner.png" style="width : 80%;"/>
      </div>
      <div class="col-12 col-lg-6 ">
      <div class="ndContForm container d-flex ">
      <form class="mx-auto ndForm  text-center">
          <p> Inscrivez-Vous </p>
          <div class="row mt-4">
            <div class="col-6">
            <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-6">
            <input type="text" class="form-control" placeholder="First name">
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-6">
            <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-6">
            <input type="text" class="form-control" placeholder="First name">
            </div>
          </div>
          <div class="row mt-4  mb-4">
            <div class="col-6">
            <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col-6">
            <input type="text" class="form-control" placeholder="First name">
            </div>
          </div>
          <div class="row mt-4  mb-4">
            <div class="col-6">
              <input type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label for="gridRadios1"> First radio </label>
            </div>
            <div class="col-6">
              <input type="radio" name="gridRadios" id="gridRadios1" value="option1">
              <label for="gridRadios1"> First radio </label>
            </div>
          </div>

          

        </form> 
      </div>  
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>