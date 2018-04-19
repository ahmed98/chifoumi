<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="web/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="web/css/style.css">
        <link href="web/css/font-awesome.min.css" rel="stylesheet">
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="contain btn-choose">
            <h2>Chifoumi</h2>
            <button type="button" class="btn btn-primary btn-lg btn-block btn-computer">Jouer contre l'ordinateur</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block btn-player">Jouer contre un adversaire</button>
        </div>
    </body>
    <div class="contain player">
        <a href=" <?php echo $_SERVER['REQUEST_URI'];?>" class="back"><i class="fa fa-caret-left"></i> Retour à la page d'acceuil</a>
        <div class="player-1-screen">
            <h3>Vous</h3>
            <i class="fa fa-user"></i>
            <div> Score: <strong class="player1Score"></strong></div>
        </div>
        
        <div class="player-2-screen">
            <h3>Adversaire</h3>
            <i class="fa fa-user"></i>
            <div> Score: <strong class="player2Score"></strong></div>
        </div>
        <div class="result"></div>
        <input type="hidden" value="computer" class="mode">

        <table class="table table-no-border">
            <thead>
            </thead>
            <tbody class="tab-player-1">
                <tr>
                    <td><a  href="javascript:void(0)" class="scissor-player-1" data-shot="3"><i class="fa fa-cut"></i></a></td>
                    <td><a href="javascript:void(0)" class="leaf-player-1" data-shot="2"><i class="fa fa-leaf"></i></a></td>
                    <td><a href="javascript:void(0)" class="stone-player-1" data-shot="1"><i class="fa fa-cloud"></i></a></td>
                </tr>
            </tbody>
        </table>
        <div class="laptop-wrapper">
            <table class="table table-no-border">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td class="scissor-laptop"><i class="fa fa-cut"></i></td>
                        <td  class="leaf-laptop"><i class="fa fa-leaf"></i></td>
                        <td class="stone-laptop"><i class="fa fa-cloud"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="player-2-wrapper">

            <table class="table table-no-border">
                <thead>
                </thead>
                <tbody class="tab-player-2">
                    <tr>
                        <td><a  href="javascript:void(0)" class="scissor-player-2" data-shot2="3"><i class="fa fa-cut"></i></a></td>
                        <td><a href="javascript:void(0)" class="leaf-player-2" data-shot2="2"><i class="fa fa-leaf"></i></a></td>
                        <td><a href="javascript:void(0)" class="stone-player-2" data-shot2="1"><i class="fa fa-cloud"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="web/js/jquery.js"></script>
    <script src="web/js/script.js"></script>
</html>
