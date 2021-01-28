<?php

// function readInfoCookie(){
//     //var_dump($_COOKIE);
//     $arrayInfoUser = unserialize($_COOKIE['arrayInfoUser']);
//     var_dump($arrayInfoUser);
//     $lastname = ucfirst($arrayInfoUser['lastname']);
//     $firstname = ucfirst($arrayInfoUser['firstname']);
//     return $lastname;
//     echo "dans usercontrpoller.php ";
//   }


   // ****** destruction cookies
  function deleteCookie(){
    setcookie('arrayInfoUser', "", time() +1); 
      // setcookie('login', "", 1);  
      echo 'dans user_controller <br>';
  }


  
    //initialiser les cookies
    //setcookie('login', $login, time()+24*60*60); // en sec.
   // setcookie('pwd', $pwd, time()+24*60*60);
    //header("Location: index.php");
      //affichage résultat en html


?>