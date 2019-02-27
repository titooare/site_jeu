@extends('template')


@section('content')
	

   	


	
          <div class=" jacketDoom col-12 row">
              
                <div class="card" style="width: 18rem;">
									<p>{{ $jeu->nom }}</p>
                   <img class="card-img-top" src="{{asset($jeu -> jacket)}}" alt="Card image cap">
                     <div class="card-body">
                        <div class="container">
                          <div class="row">
                            <div class="col-6">
                               <p class="card-text"> <a href="../panier/{{$jeu -> ID }}" class="btn btn-danger">acheter</a></p>

                            </div>
                             <div class="col-3">
                                <h3><span class="badge badge-warning">{{ $jeu->prix }}€</span></h3>
                              </div>
                           </div>
                         </div>
                     </div>
                </div>
                <div class="container col-3 votes">
                   <big>satisfait</big>
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                     </div>
                     <big>recomandé</big>
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">70%</div>
                     </div>
                      <big>mauvais</big>
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 15%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">15%</div>
                     </div>

                          <p>{{ $jeu->commentaires }}</p>

                            <h3><a href="#" class="badge badge-info modalVideo ">demo</a></h3>

              </div>

               <div class=" container col-2 col-3 conect">
                <div class="row">
                   <div class="alert alert-success" role="alert">
                     <h4 class="alert-heading">se connecter</h4>
                        <form method="post" action="connection2.php">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Pseudo</label>
													 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pseudo" placeholder="Entrer pseudo">
                        </div>
                       <div class="form-group">
                           <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="mot de passe">
                      </div>
						</form>					
                      <form class="form-group form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        <br>
		                      <a title="Titre du lien" href="index.php">   <button  type="submit" class="btn btn-success">Connection</button></a>
													<button type="button" class="btn btn-success "><a title="Titre du lien" href="pgDoom.php?id=">Connection</a></button>
                       </form>
											 </div>
                  </div>
                <a href="pgIdentifiant2.html"><button type="button" class="btn btn-info">INSCRIPTION</button></a>
               </div>

                   </div>
        
    


@endsection
