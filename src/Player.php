<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../vendor/autoload.php';

use \Chifoumi\Model\Play;

    $play = new Play();
    $play->setShotPlayer1($_POST['shotPlayer1']);
    $play->setShotPlayer2($_POST['shotPlayer2']);
    
    echo $play->chifoumi();



