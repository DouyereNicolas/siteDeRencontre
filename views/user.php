<<<<<<< HEAD
<?php 
  include("../controllers/lovers_controller.php"); 
  $arrayMembers = CreatTabMembers();
  $arrayCurrentUser = unserialize($_COOKIE["arrayInfoUser"]);
  $lastNameUser = ucfirst($arrayCurrentUser['lastname']);
  $firstNameUser = ucfirst($arrayCurrentUser['firstname']);
  $age = ucfirst($arrayCurrentUser['age']);
  $gender = ucfirst($arrayCurrentUser['gender']);
  $mail = $arrayCurrentUser['mail'];
  $zipCode = $arrayCurrentUser['zipCode'];
  $genderSearch = $arrayCurrentUser['genderSearch'];
?> 
=======
>>>>>>> 341d2cec11ba026f7ab4b8d05c6d13a3c9aa4291
<!DOCTYPE html>
<html lang=fr>

<head>
  <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>USER INFO</title>


</head>
<body>
  
<?php include("navBarViews.php");?>

<div class="row w-100 mx-auto ">
<div class="col-12 col-lg-6 ">
  <div class="container  ">
    <div class="card mx-auto my-auto ndColorCarUser " style="width: 80%; height : 500px;">
      <div class="card-body d-flex " style="color:red;">
      <div class="texteCard p-4">
        <p class="w-100 mb-4"style="text-align : center; font-size : 25px;">Votre Profil :</p>
        <p class="card-text">Votre Nom : <?=$lastNameUser;?></p>
        <p class="card-text">Votre prénom : <?=$firstNameUser;?></p>
        <p class="card-text">votre age : <?=$age;?></p>
        <p class="card-text">Vous etes : <?=$gender;?> et vous recherchez : <?=$genderSearch;?></p>
        <p class="card-text">Votre adresse mail : <?=$mail;?></p>
        <p class="card-text">Votre code postal : <?=$zipCode;?></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="col-12 col-lg-6 border">
    <div class="container" style="height : 100%;">
    <?php 
            $item = 0;
            foreach($arrayMembers as $key => $value){
                if($value["gender"] == $genderSearch){
                    $lastName = $value['lastname'];    
                    $firstName = $value['firstname'];
                    $age = $value['age'];
                    $picture = $value['picture'];
                    $match = $value['match'];
                    if($item == 0 || $item == 3 || $item == 6 || $item == 9){
                      ?> <div class="row w-100 border text-center"> <?php
                    }
                    ?><div class="col-6 col-lg-4 border">
                        <img src="../assets/img/<?=$picture;?>" class="testImage" style="width : 120px;height : 120px;"/>
                        <p>h</p>
                        <p>h</p>
                      </div>

                  <?php
        
        if($item == 2 || $item == 5 || $item == 8 || $item == 9){
          ?> </div> <?php
        }
        $item = $item + 1;
        };
        };
            
        ?>
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