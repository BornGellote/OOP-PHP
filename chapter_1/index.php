<?php

require_once './class/creating-objects.php';
require_once './class/defining-methods.php';
require_once './class/object-interaction.php';


//creating-objects
$artObject = new User();
$artObject->name = 'Artem Smith';
$artObject->username = '@arttex';
$artObject->followerCount = 5000;
var_dump($artObject);
echo '</br>';


//defining-methods
$basket = new Basket();
$basket->itemsTotal = 50;
$basket->shippingCost = 10;
$basket->discount = 30;

$subTotal = $basket->calculateSubTotal(); 
var_dump($subTotal);
echo '</br>';


//object-interaction
$song1 = new Song();
$song1->songId = 1;
$song1->title = "Come Together";

$song2 = new Song();
$song2->songId = 2;
$song2->title = 'Yellow Submarine';

$playlist = new Playlist();
$playlist->name = 'Rock!';
$playlist->addSong($song1);
$playlist->addSong($song2);
var_dump($playlist->songs);


