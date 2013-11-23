<?php

if(!empty($_POST)){// Hachage du mot de passe
	$pass_hache = md5($_POST['pass']);
	$pseudo = $_POST['pseudo'];
	 

	include 'include/database.php';

	// Vérification des identifiants
	$req = $db->prepare('SELECT id FROM user WHERE pseudo = :pseudo AND pass = :pass');
	$req->execute(array(
	    'pseudo' => $pseudo,
	    'pass' => $pass_hache));
	 
	$resultat = $req->fetch();
	 
	if (!$resultat)
	{
	    echo 'Mauvais identifiant ou mot de passe !';
      header('Location: index.php?page=admin.php');
        die('redirecting...');
	}
	else
	{
	    session_start();
	    $_SESSION['id'] = $resultat['id'];
	    $_SESSION['pseudo'] = $pseudo;
	    setcookie('pseudo', $pseudo, time() + 365*24*3600, null, null, false, true); // On écrit un cookie
		  setcookie('pass', $pass_hache, time() + 365*24*3600, null, null, false, true); // On écrit un autre cookie...
	    echo 'Vous êtes connecté !';
	     header('Location: index.php?page=admin.php');
            die('redirecting...');
	}
}

?>

   <div class="container" style="width:80%;">
        <div class="hero-unit">
    <!-- Element du body-->

        <div class="" id="loginModal">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h1>Connexion</h1>
          </div>
          <div class="modal-body">
            <div class="well">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                <li><a href="#create" data-toggle="tab">Créer un compte</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="login">
                  <form class="form-horizontal" action='login.php' method="POST">
                    <fieldset>
                        <legend class="">Login</legend>   
                      <div class="control-group">
                        <!-- Username -->
                        <label class="control-label"  for="user">Pseudo</label>
                        <div class="controls">
                          <input type="text" id="user" name="user" placeholder="" class="input-xlarge">
                        </div>
                      </div>
 
                      <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="pass">Mot de passe</label>
                        <div class="controls">
                          <input type="password" id="pass" name="pass" placeholder="" class="input-xlarge">
                        </div>
                      </div>
 
 
                      <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                          <button class="btn btn-success">Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>                
                </div>
                <div class="tab-pane fade" id="create">
                  <form id="tab" method="POST" action="include/register.php">
                    <label for="user_new">Pseudo</label>
                    <input type="text" name="user_new" id="user_new" class="input-xlarge">
                    <label for="email_new">Email</label>
                    <input type="text" name="email_new" id="email_new" class="input-xlarge">
                    <label class="control-label" for="pass_new">Mot de passe</label>
                        <div class="controls">
                          <input type="password" id="pass_new" name="pass_new" placeholder="" class="input-xlarge"> 
                    <div>
                      <button class="btn btn-primary">Créer un compte</button>
                    </div>
                  </div>
                </form>
                
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>a