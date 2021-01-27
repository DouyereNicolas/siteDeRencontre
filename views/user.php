<?php 
  include("../controllers/lovers_controller.php"); 
  $arrayMembers = CreatTabMembers();
  $arrayCurrentUser = unserialize($_COOKIE["arrayInfoUser"]);
  $lastNameUser = $arrayCurrentUser["lastname"];
  $firstNameUser = $arrayCurrentUser["firstname"];
?>
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>3D Carousel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    
<div class="row m-0 text-white" style="background-color:#ebd2bb;width:100%;height:50px;position:absolute;top:0;left:0;border:2px solid #7e5253">
    <div class="col-4 border">Bonjour, Monsieur <?=$lastNameUser;?> <?=$firstNameUser;?></div>
    <div class="col-4 border"><a href="lovers.php">Match</a></div>
    <div class="col-4 border"><a href="../views/user.php">User</a></div>
</div>

<div class="row w-100 mx-auto">
<div class="col-12 col-lg-8">
  <div class="container border">
    <div class="card mx-auto" style="width: 80%; height : 500px;">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  </div>
  <div class="col-12 col-lg-4 border">

  </div>
  
</div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>