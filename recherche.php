<?php include "include/header.php"; 


if(!empty($_POST)){// Hachage du mot de passe
	$pass_hache = md5($_POST['pass']);
	$pseudo = $_POST['pseudo'];
	 

	include 'include/database.php';

	// VÈrification des identifiants
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
	    setcookie('pseudo', $pseudo, time() + 365*24*3600, null, null, false, true); // On Ècrit un cookie
		  setcookie('pass', $pass_hache, time() + 365*24*3600, null, null, false, true); // On Ècrit un autre cookie...
	    echo 'Vous Ítes connectÈ !';
	     header('Location: index.php?page=admin.php');
            die('redirecting...');
	}
}

?>

<div class="container" style="width:80%;">
    <div class="hero-unit" style="margin-top:30px">
    <!-- Element du body-->
		<div class="row">
            <div class="col-lg-6 col-mg-6" id="canvas_france">
				<!-- carte -->
				<script src="js/raphael-min.js" charset="utf-8" ></script>
				<script src="js/script.js" charset="utf-8" ></script>
			</div>
			<div class="col-lg-6">
			
				<!-- param recherche -->
				<form role="form" id="tab" method="POST" action="include/register.php">
                <div class="form-group">
                <label for="depart">D√©part :</label>
                  <input class="form-control" type="text" name="depart" id="depart" class="input-xlarge"/>
                  
                <div class="form-group">
                <label for="arrivee">Arriv√©e :</label>
                  <input class="form-control" type="text" name="arrivee" id="arrivee" class="input-xlarge"/>
                </div> 
                
                <button class="btn btn-primary">Cr√©er un compte</button>
              
            </form>
			</div>
		</div>

	</div>
</div>
<script>
  // Pour chaque fichier
  $('#top-menu li').removeClass("active");
  // on remplace login par l'id du lien dans le menu
  $('#recherche').addClass('active');

</script>
<?php include "include/footer.php"; ?>
