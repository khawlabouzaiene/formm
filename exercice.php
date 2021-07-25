<?php
 
 

if(isset($_GET['nom'])){

   $nom=$_GET['nom'];
   $prenom=$_GET['prenom'];
   $adresse=$_GET['adresse'];
   $email=$_GET['email'];
   $telephone=$_GET['telephone'];
   $envoyer=$_GET["envoyer"];
   $erreur="";

}

if(isset($envoyer))
{
    if(empty($nom)) $erreur= "<li> Champ manquant! Entrez votre nom !</li>";
    if(empty($prenom)) $erreur.= "<li> Saisir votre prenom svp !</li>";
    if(empty($email)) $erreur.= "<li>Veuillez remplir votre email svp !</li>";
    if(empty($adresse)) $erreur.= "<li>Champ obligatoire saisir votre adresse!</li>";
    if(empty($telephone)) $erreur.= "<li>Entrez votre numéro de telephone svp !</li>";

  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

 <section>
  <form  name="fo" method="GET" action="">
      <fieldset>
        <legend >Inscription</legend>

        <div class="label">Nom</div>
        <div class="champ">
           <input type="text" name="nom" value="" />
        </div>
        <div class="label">Prénom</div>
        <div class="champ">
           <input type="text" name="prenom" value="" />
        </div>
        <div class="label">Email</div>
        <div class="champ">
           <input type="text" name="email" value="" />
        </div>
        <div class="label">Adresse</div>
        <div class="champ">
           <input type="adresse" name="adresse" value="" />
        </div>
        <div class="label">Telephone</div>
        <div class="champ">
           <input type="telephone" name="telephone" value="" />
        </div>
        <div class="champ">
           <input type="submit" name="envoyer" value="envoyer" />
        </div>
     </fieldset>
</form>
<?php if(!empty($erreur)){ ?>

<div id="erreur"> <?php echo $erreur ?> </div>

<?php }  ?>
</section>
