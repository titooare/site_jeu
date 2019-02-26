@extends('template')


@section('content')

<div class="multi_couleur col-12">

<div class="container">
		<div class="row justify-content-center">
            <a href="index.php" > <img src="img/logo.png"></a>
		  <h1>bienvenue cher vendeur G2A</h1>
		  <div class="alert " role="alert">
                     <h4 class="alert-heading">entrer un jeux sur la platforme G2A</h4>
                        <form action="testUser.php" method="post">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Nom du jeux</label>
                            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez le nom du jeux">
                        </div>
                       <div class="form-group">
                           <label for="exampleInputPassword1">console</label>
                        <input type="text" name="console" class="form-control" id="exampleInputPassword1" placeholder="Entrez la console du jeux">
                      </div>
                       <div class="form-group">
                           <label for="exampleInputPassword1">prix</label>
                        <input type="number" name="prix" class="form-control" id="exampleInputPassword1" placeholder="entrez le prix du jeux">
                      

                         <small id="emailHelp" class="form-text text-muted">Veuillez entrer un chiffre ou un nombre.</small>
                      </div>
                       <div class="form-group">
                           <label for="exampleInputPassword1"> nombre de joueurs max</label>
                        <input type="number" name="nbre_joueurs_max" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nombre de joueurs maximum">
                      </div>

                      <div class="form-group">
                           <label for="exampleInputPassword1">commentaires</label>
                        <input type="text" name="commentaires" class="form-control" id="exampleInputPassword1" placeholder="Entrez un commentaire modéré">
                      </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">adresse jacket</label>
                        <input type="text" name="jacket" class="form-control" id="exampleInputPassword1" placeholder="Entrer l'adresse de l'image de la jacket">
                      </div>

                        <br><br>
                       <center><button type="submit" value="Envoyer"class="btn btn-info pl-5 pr-5"><h4>ENVOYER</h4></button></center>
                      </div>
              </form>
         </div>
            </div>

    </div>

</div>
	
@endsection