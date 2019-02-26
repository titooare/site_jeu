
@extends('template')

@section('content')
	

	@foreach ( $reponse as $donnee)
    	
            
    
    	  <div class="card col-4 p-4 mb-4 ">

                    <img class="card-img-top" src="{{asset($donnee -> jacket)}}" alt="Card image cap">

                    <div class="card-body">
                      <h5 class="card-title">{{$donnee -> nom }}<br /></h5>
                      <p class="card-text">{{$donnee -> commentaires }}</p>
                      </div>
						


                        <button type="button" class="btn btn-danger "><a title="Titre du lien" href="description/{{$donnee -> ID }}">acheter</a></button>



                    <div class="card-footer">
                       <h3 class=" prix"><b>{{$donnee -> prix }}€</b></h3>
                    </div>
            </div>
                  
    	@endforeach		
	

@endsection


    
    						
    
    
