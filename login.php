<?php include "include/header.php"; 


if(!empty($_POST)){// Hachage du mot de passe
	$pass_hache = md5($_POST['pass']);
	$pseudo = $_POST['email'];
	 

	include 'include/database.php';

	// Vérification des identifiants
	$req = $db->prepare('SELECT id FROM user WHERE email = :email AND pass = :pass');
	$req->execute(array(
	    'email' => $pseudo,
	    'pass' => $pass_hache));
	 
	$resultat = $req->fetch();
	 
	if (!$resultat)
	{
	    echo 'Mauvais identifiant ou mot de passe !';
      header('Location: login.php');
        die('redirecting...');
	}
	else
	{
	    session_start();
	    $_SESSION['id'] = $resultat['id'];
	    $_SESSION['email'] = $pseudo;
	    setcookie('email', $pseudo, time() + 365*24*3600, null, null, false, true); // On écrit un cookie
		  setcookie('pass', $pass_hache, time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...
	    echo 'Vous êtes connecté !';
	     header('Location: index.php');
            die('redirecting...');
	}
}

?>

   <div class="container" style="margin-top:100px">    
            <form action='login.php' method="POST">
              <div class="row">
                <div class="col-lg-6">
                  <h2>Connexion</h2>
                 <div class="form-group">
                  <label for="nom">Email :</label>
                    <input class="form-control" type="text" name="email" id="email" class="input-xlarge"/>
                    
                  <div class="form-group">
                    <label for="nom">Mot de passe :</label>
                    <input class="form-control" type="password" name="pass" id="pass" class="input-xlarge"/>
                    
                  <div class="form-group">

                </div>


                <div class="control-group">
                  <!-- Button -->
                  <div class="controls">
                    <button class="btn btn-success">Login</button>
                  </div>
                </div>
              </div>
              </div>
            </form>                
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h2>Créer un compte</h2>
            <form role="form" id="tab" method="POST" action="include/register.php">
                <div class="form-group">
                <label for="nom">Nom :</label>
                  <input class="form-control" type="text" name="name_new" id="name_new" class="input-xlarge"/>
                  
                <div class="form-group">
                <label for="">Prénom :</label>
                  <input class="form-control" type="text" name="firstname_new" id="firstname_new" class="input-xlarge"/>
                </div> 
                <div class="form-group">
                  <label for="mail"> Adresse mail :</label>
                  <input class="form-control" type="email" name="email_new" id="email_new" class="input-xlarge"/>
                </div>
                <div class="form-group">
                  <label>Votre mot de passe :</label>
                  <input class="form-control" type="password" name="pass_new" id="pass_new" class="input-xlarge"/>
                </div>    
                <div class="form-group">
                  <label>Téléphone :</label>
                  <input class="form-control" type="tel" name="phone_new" id="phone_new" class="input-xlarge"/>
                </div>
                <button class="btn btn-primary">Créer un compte</button>
              
            </form>
          </div>
        </div>
        <div class="clearfix"></div>
</div>
<script>
  // Pour chaque fichier
  $('#top-menu li').removeClass("active");
  // on remplace login par l'id du lien dans le menu
  $('#login').addClass('active');

</script>
<?php include "include/footer.php"; ?>
