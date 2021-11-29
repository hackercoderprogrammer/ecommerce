<?php
require 'vendor/autoload.php';
Flight::set('flight.views.path', 'templete');
Flight::route('/', function(){
    Flight::render('header');
    Flight::render('home');
    Flight::render('footer');
});

Flight::route('/product_desc/@id', function($id){
    Flight::render('header');
    Flight::render('product_desc',array('product_id' =>$id));
    Flight::render('footer');
});

Flight::route('/payment', function(){
    Flight::render('header');
    Flight::render('payment');
    Flight::render('footer');
});

Flight::route('/charges', function(){
    Flight::render('charge');
   
});
Flight::start();
?>