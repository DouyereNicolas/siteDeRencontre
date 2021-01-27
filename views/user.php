
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

if (!empty($_POST)) {
  
  require ('../controllers/user_controller.php'); 

//recupération des valeurs de  $_POST<br>
// $lastname = $_POST['lastname'];
// $firstname = $_POST['firstname'];

// Déclaration d'un tableau associatif
$arrayInfoUser= array(
  'lastname' => ucfirst(htmlspecialchars($_POST['lastname'])), 
  'firstname' => htmlspecialchars($_POST['firstname']), 
  'age' => htmlspecialchars($_POST['age']),
  'gender' => htmlspecialchars($_POST['gender']), 
  'mail' => htmlspecialchars($_POST['mail']), 
  'zipCode' => htmlspecialchars($_POST['zipCode']),  
  'genderSearch' => htmlspecialchars($_POST['genderSearch'])
);

setcookie('arrayInfoUser', serialize($arrayInfoUser), time() + 24 * 3600); //  ** pour 2jours
?>

  <div class="container">
    <div class="row ">
      <div class="col">
        <div class="text-center">
          <h1>Bienvenue sur notre site </h1>
        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col">
        <div class="bg-light text-center">
 
        Bonjour
nom: <?= ucfirst($arrayInfoUser['lastname']) ?> et prénom :<?= $arrayInfoUser['firstname'] ?><br>
  <br>
    
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