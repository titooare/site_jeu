@extends('template')


@section('content')


	
 <div class="container pt-3">
            
            <div class="row">
                
            <div class="card  col-5">
                  <div class="card-header">
                    <b>MON PANIER </b>
                  </div>
                  <div class="card-body row">
                  @foreach ( $jeux as $jeu)
                      <div class="col-4">
                        <img class="card-img-top imagePanier" src="{{asset($jeu[0]->jacket )}}" alt="Card image cap">
                        
                      </div>
                      <div class="col-8">
                          <h5 class="card-title"><b>{{ $jeu[0]->prix }}€ </b> </h5>
                          <p class="card-text"><b>{{ $jeu[0]->nom }} </b></p>
                          <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Qté
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">1</button>
    <button class="dropdown-item" type="button">2</button>
    <button class="dropdown-item" type="button">3</button>
  </div>
</div>



<?php  $priceTotal = 0;?>

@foreach($jeux as $jeu)

 <?php   
 
 $priceTotal = $priceTotal + $jeu[0]->prix;
 
 ?> 

@endforeach




	                         
                      </div>
                       @endforeach
                  </div>
                  <div class="card text-right">
                      <b> SOUS-TOTAL   {{$priceTotal}} €</b>
                  </div>
                </div>
                            <div class="card  col-3">
                  <div class="card-header">
                    <b>LIVRAISON </b>
                  </div>
                  <div class="card-body row">
                      
                      
                      <div class="col8">
                    <b>
                    <p class=" text-left">Annie Dupont</p>
                          <p>Rue du Chêne, 1</p>
                          <p>Saint-Etienne</p>
                          <p>42000</p>
                          <p>06 66 66 55 66 </p>
                          </b>
                      </div>
                  </div>
                  <div class="card text-right ">
                    <div class="row">
                        <div class="col-6">
                          <button type="button" class="btn btn-warning btn-sm">Modifier</button>
                        </div> 
                        <div class="col-6 text-center">
                          <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
                        </div>
                    </div>
                  </div>
                </div>
                           <div class="card text-center col-4">
                  <div class="card-header ">
                      <b>TOTAL</b>
                  </div>
                
                  <div class="card-body row ">
                   <div class="col-6 text-left">
                      <b class="inline">Sous-Total</b>
                       <br>
                        <b class="inline">Livraison</b>
                       
                    </div>
                    <div class="col-6 text-left">
                        <b >{{$priceTotal}}€</b>
                        <br>
                        <b>2€</b>
                        <br>
                        
                    </div>
                        <div class="input-group input-group-sm mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text input-warning" id="inputGroup-sizing-sm">CODE PROMO </span>
                          </div>
                          <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                      <div class="col-6 text-left">
                      <b class="inline">Code </b>
                       <br>
                        <b class="inline">Total:</b>
                       
                    </div>
                    <div class="col-6 text-left">
                        <b>-5%</b>
                        <br>
                        <b>{{$priceTotal * (1 - 5/100)+2}}€</b>
                        
                        
                    </div>
                     <div class="p-4">
                    <a href="cb.html" class="btn btn-success  ">PAIEMENT</a>
                      </div>
                  </div>
                
                  <div class="card-footer text-muted">
                      
                    <div>                      <b> NOUS ACCEPTONS :</b>
                      </div>
                      <div>
                          <img style="max-height: 40px;" src="{{asset('/img/Paysafecard_logo.svg.png')}}">
                          <img style="max-height: 40px;" src="{{asset('/img/kisspng-paypal-business-logo-computer-icons-payment-gateway-5b2485d385eee5.1083245415291202115486.jpg')}}">
                          <img style="max-height: 40px;" src="{{asset('/img/kisspng-logo-bitcoin-brand-trademark-font-cara-menambang-bitcoin-untuk-pemula-lewat-faucet-5b66359dcbe281.4419503815334250538351.jpg')}}">
                          <img style="max-height: 40px;" src="{{asset('/img/MasterCard_Logo.svg.png')}}">
                          
                      </div>
                  </div>
                </div>
                     
            </div>        
        </div>
   	


	
          
    


@endsection
