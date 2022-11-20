<?php
session_start(); //ouverture session
$SESSION['email']=$_POST['email']; //ajout email de session
$SESSION['password']=$_POST['password'];
//Fonction pour ajouter les info dans la base de données (inscription)
try
{
	$db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
// verification motDePasse
$sqlQuery = 'SELECT * FROM Connexion where courriel= :nom';
$usersStatement = $db->prepare($sqlQuery);
$usersStatement->execute(array(
    'nom' => $_POST['email'],
));
$users = $usersStatement->fetch();

if ($_POST['password'] == $users['motDePasse']): ?>
<script> alert("connexion reussie")</script>
<meta http-equiv="refresh" content="1;presentation.php?email=<?php echo($_POST['email'])?>">
<?php else: ?>
<script> alert("mot de passe incorrect veuillez reesayer")</script>
<meta http-equiv="refresh" content="1;connexion.php">
<?php endif; ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


