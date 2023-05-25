<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de liste d'inscription</title>
    <link rel="stylesheet" href="style\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <div class="container mt-3">
    <div class="row bg-gray-2OO">
     <h1 class="gsuis">Application web "Je Suis"</h1><br><br><br><br>
     <h3 class="form">Formulaire d'enregistrement des étudiants de l'UFR-SDS</h3> 
    </div>
  </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 od">
                <img src="images/Od.PNG" class="od" alt="" img-responsive>
            </div>  
            <div class="col-md-6 ad">  
                <form method="POST" action="enregistrement.php">
                    <div class="container">
                        <div class="row">
                            <div class="col quick"><h1>UFR SDS</h1></div>
                            <div class="col didi"><img src="images/logos.png" alt="" height="50" width="50"></div>
                        </div>
                    </div>
                        <h3>Populi Sapientia Populo</h3>
                     <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required><br>
                
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required><br>
                
                    <label for="naissance">Naissance :</label>
                    <input type="date" id="naissance" name="naissance" required><br>
                
                    <label for="genre">Genre :</label>
                    <select id="genre" name="genre" required>
                        <option value="">Sélectionnez une option</option>
                        <option value="Femme">Femme</option>
                        <option value="Homme">Homme</option>
                        <!-- <option value="Autre">Autre</option> -->
                    </select><br>
                
                    <label for="admission">Admission :</label>
                    <select id="admission" name="admission" class="enre" required>
                        <option value="">Sélectionnez une option</option>
                        <option value="Première année">Première année</option>
                        <option value="Deuxième année">Deuxième année</option>
                        <option value="Troisième année">Troisième année</option>
                    </select><br>
                
                    <label for="ic"> (I.C.) :</label>
                    <input type="text" id="ic" name="ic" required><br>

                     <div class="container">
                      <div class="row">
                        <div class="col"><input type="submit" value="Envoyer"></div>
                        <div class="col"><a href="liste.php"><input type="button"class="button" value="liste" height=20 width=20></a></div>
                      </div>
                     </div>
                    
                    

                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid footer "><br><br>
            <div class="row mt-3 pt-3 mb-3 pb-3 ">
              <div class="col-md-5 yes d-flex fd-row">
                <img src="images/copyright.png" alt="" width="20" height="20">
                <h4 class="annee">2023-2024.Tous droits réservés</h4>
              </div>
              <div class="col-md-2 offset-1">
                <h4 class="ovis">Optimale Vision</h4>
              </div>
              <div class="col-md-2 offset-1">
                <h4>70053631</h4>
              </div>
            </div><br>
          </div>   
    </footer>
</body>
</html>