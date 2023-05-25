ss<?php
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $naissance=$_POST['naissance'];
        $genre=$_POST['genre'];
        $admission=$_POST['admission'];
        $ic=$_POST['ic'];
        //connexion à la base de données
        require'connexion.php';
        $divine="INSERT INTO `ufr_sds`(nom, prenom, naissance, genre, admission, ic) VALUES ('$nom','$prenom','$naissance','$genre','$admission','$ic')";
            if($connexion->query($divine)===True){
                echo"succes";
            }
            else{
                echo"erreur";
            }   
?>