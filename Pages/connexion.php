<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale-1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="i.css">
    <title>Connexion</title>
</head>
<body>
<?php
function verification(){
include("fonction.php");
}?>

<div class ="container">
 <h1 align="center"> Bienvenue sur notre site portfolio</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
     <form method="post" action="fonction.php">
    <div class="mb-3">
        <p> </p>
<p> </p>
        <p>Veuillez entrer vos identifiants</p>
        <label for="Email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Habitant@gmail.com" name="email" required>
        <div id="emailHelp" class="form-text">Nous nallons jamais utiliser votre adresse à des fins autres.</div>
    </div>
    <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
        <input type="password" class="form-control" id="Password" minlength="8" name="password" required>
        <div id="PasswordHelp" class="form-text">Votre mot de passe doit avoir minimum 8 caractères.</div>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="Check" required>
        <label class="form-check-label" for="Check">jaccepte l utilisation des cookies</label>
    </div>
    <button type="submit" class="btn btn-info">Envoyer</button>

</form>
        </div>
        <div class="col-6" id="test">
            <p id="texte"><i>Connectez-vous pour consulter votre CV</i></p>
        </div>
    </div>

</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>