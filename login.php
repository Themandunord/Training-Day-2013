<?php include "include/header.php"; 


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
                    <label for="nom">Nom :</label>
                      <input type="text" name="name_new" id="name_new"/>
                      
                    <label for="">Prénom :</label>
                      <input type="text" name="firstname_new" id="firstname_new"/>
                      
                    <label for="mail"> Adresse mail :</label>
                    <input type="email" name="email_new" id="email_new" />

                    <label>Votre mot de passe :</label>
                    <input type="password" name="pass_new" id="pass_new" />
                      
                    <label>Téléphone :</label>
                    <input type="tel" name="phone_new" id="phone_new"/>

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
</div>
</div>
<?php include "include/footer.php"; ?>
