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
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31485994-5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-31485994-5');
    </script>
</head>

<body>

<div class="row m-0 text-white" style="background-color:#ebd2bb;width:100%;height:50px;position:absolute;top:0;left:0;border:2px solid #7e5253">
    <div class="col-4 border">Bonjour, Monsieur <?=$lastNameUser;?> <?=$firstNameUser;?></div>
    <div class="col-4 border"><a href="lovers.php">Match</a></div>
    <div class="col-4 border"><a href="user.php">User</a></div>
</div>

    <div class="slider">
        <div class="wrapper ">
        <?php 
            $item = 0;
            foreach($arrayMembers as $key => $value){
                if($value["gender"] == $arrayCurrentUser["genderSearch"]){
                    $lastName = $value['lastname'];    
                    $firstName = $value['firstname'];
                    $age = $value['age'];
                    $picture = $value['picture'];
                    $match = $value['match'];
                    $item = $item + 1;
            if($item == 1){ ?>
                <div style="background-image: url('../assets/img/<?=$picture;?>')" class="item item<?=$item?> active">
            <?php }else{?>
                <div style="background-image: url('../assets/img/<?=$picture;?>')" class="item item<?=$item?>">
            <?php };?>

                <div class="item__info ">
                    <p class="item__year ndText2"><span><?=ucfirst($lastName);?> <?=ucfirst($firstName);?></span></p>
                    <p class="item__name ndText"><span>j'ai <?=$age;?></span></p>
                    <form action="lovers.php" method="post">
                        <input type="image" class="btn2 buttonTest" id="match" alt="Match" src="../assets/img/coeurVide.png">
                    </form>
                </div>
            </div>
        <?php
        };
        };
            
        ?>
        </div>
        <div class="arrow arrow-next"></div>
        <div class="arrow arrow-prev"></div>
    </div>
<script src="../assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>