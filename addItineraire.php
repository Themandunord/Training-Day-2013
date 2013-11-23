<?php

include "include/header.php";

?>

<div class="container">
			<form action='login.php' method="POST">
              <div class="row">
                <div class="col-lg-6">
                  <h2>Ajouter un itinéraire</h2>

                  <form action='login.php' method="POST">
		              <div class="row">
		                <div class="col-lg-6">
		                 <div class="form-group">
		                  <label for="nom">Ville de Départ</label>
		                  <input class="form-control" type="text" name="email" id="email" class="input-xlarge"/>
		              	 </div>
		              	 <div class="form-group">
		                  <label for="nom">Ville de D'arrivée</label>
		                  <input class="form-control" type="text" name="email" id="email" class="input-xlarge"/>
		              	 </div>
		              	 <div class="form-group">
		                  <label for="nom">Heure de départ</label>
		                  <input class="form-control" type="text" name="email" id="email" class="input-xlarge"/>
		              	 </div>
		              	 <div class="form-group">
		                  <label for="nom">Date de départ</label>
		                  <input class="form-control" type="text" name="email" id="email" class="input-xlarge"/>
		              	 </div>
		              	 <div class="form-group">
		                  <label for="nom">Prix</label>
		                  <input class="form-control" type="text" name="prix" id="prix" class="input-xlarge"/>
		              	 </div>
		              	 <button type="submit" class="btn btn-info">Envoyer</button>

		              </div>
                	</div>
              	</div>
              </div>
            </form>         
                 	

</div>     
<?php


include "include/footer.php";
?>