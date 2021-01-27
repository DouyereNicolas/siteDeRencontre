<!doctype html>
<html lang="fr">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
      <div class="ndPrincipal">
        <div class="row  m-4 p-0">
          <div class="col-12 col-lg-7 mb-4">
            <img src="assets/img/arabesque.png" style="width : 80%;"/>
            <div class="ndTextAccueil">
              <p>Vivez l'amour</p>
              <p>avec un grand</p>
              <p id="ndMajA">A</p>
            </div>
            <img src="assets/img/arabesqueRetourner.png" style="width : 80%;"/>
          </div>
          <div class="col-12 col-lg-5 mt-4">
            <div class="ndContForm container d-flex text-center">
              <form class="mx-auto ndForm text-center" method="post" action="views/user.php">
                <p> Inscrivez-Vous </p>
                <div class="row mt-4">
                  <div class="col-6">
                    <input type="text" class="form-control" name="lastname" placeholder="Nom de Famille" value="lastname">
                  </div>
                  <div class="col-6">
                    <input type="text" class="form-control" name="firstname" placeholder="Prénom" value="firstname">
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-6">
                    <input type="text" class="form-control" name="age" placeholder="Age" value="17">
                  </div>
                  <div class="col-6">
                    <select id="gender" name="gender" class="form-control">
                      <option selected>Homme</option>
                      <option>Femme</option>
                    </select>
                  </div>
                </div>
                <div class="row mt-4  mb-4">
                  <div class="col-6">
                    <input type="text" class="form-control" name="zipCode" placeholder="Code Postal" value="93000">
                  </div>
                  <div class="col-6">
                    <input type="text" class="form-control" name="mail" placeholder="Adresse Email" value="email@truc.net">
                  </div>
                </div>
                <p>Vous etes intéressé par&nbsp;:</p>
                <div class="row mt-4  mb-4">
                  <div class="col-6">
                    <input type="radio" name="genderSearch" id="genderSearch" value="Homme" checked>
                    <label for="genderSearch"> Homme </label>
                  </div>
                  <div class="col-6">
                    <input type="radio" name="genderSearch" id="genderSearch" value="Femme">
                    <label for="genderSearch"> Femme </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button class="btn" type="submit">Trouve l'Amour</button>
                  </div>
                </div>
              </form> 
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