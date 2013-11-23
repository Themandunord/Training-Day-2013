<?php
// Vérification de la validité des informations
 
// Hachage du mot de passe
$pass_hache = md5($_POST['pass_new']);
$name = $_POST['name_new'];
$firstname = $_POST['firstname_new']
$email = $_POST['email_new'];
$phone = $_POST['phone_new'];
$pseudo = $_POST['pseudo_new'];

include 'database.php';
// Insertion
$req = $bdd->prepare('INSERT INTO user(name, firstname, pass, email, phone, pseudo, date_inscription) VALUES(:name, :firstname, :pass, :email, :phone, :pseudo, CURDATE())');
$req->execute(array(
    'name' => $name,
    'firstname' => $firstname,
    'pass' => $pass_hache,
    'email' => $email,
    'phone' => $phone,
    'pseudo' => $pseudo));


echo 'Vous êtes enregistrer.';
header('Location: index.php?page=login.php');
die('redirecting...');

?>