<?php
require 'klein.php';

respond('*', function( $request, $response, $app ){
  $response->render('includes/header.html');
});

respond('/', function( $request, $response, $app ){
  $response->render('home.php');
});

respond('/home', function( $request, $response, $app ){
  $response->render('home.php');
});

respond('/clients', function( $request, $response, $app ){
  $response->render('clients.php');
});

respond('/contact', function( $request, $response, $app ){
  $response->render('contact.php');
});

respond('/services', function( $request, $response, $app ){
  $response->render('services.php');
});

with( '/clients', function(){
  respond('/fans', function ( $request, $response, $app ){
    $response->render('includes/breadcrumb.php');
    $response->render('client/fans.php');
  });
});

respond('*', function( $request, $response, $app ){
  $response->render('includes/footer.html');
});

dispatch();
