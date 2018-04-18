/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var scorePlayer1 = 0;
var scorePlayer2 = 0;
var shotPlayer1  = 0 ;
var shotPlayer2  = 0;
var chifoumiList = {"1":"stone-laptop", "2":"leaf-laptop", "3":"scissor-laptop"};
$('.btn-computer').click(function() {
    $('.player').show();
    $('.btn-choose').hide();
     $('.player-2-wrapper').hide();
    $('.mode').val('computer');
});
$('.btn-player').click(function() {
    $('.player').show();
    $('.btn-choose').hide();
    $('.laptop-wrapper').hide();
    $('.mode').val('player');
});
$('.scissor-player-1, .leaf-player-1, .stone-player-1').click(function() {
    $('.tab-player-1 tr td i').css('color','inherit');
    shotPlayer1 = parseInt($(this).data('shot'));
    $('i', this).css('color','red');
    
    if($('.mode').val() === 'computer') {
        shotPlayer2 = Math.floor(Math.random()*3+1);
        $('.'+ chifoumiList[shotPlayer2]+ ' i').css('color', 'red');
    } 
    startChifoumi();
});
   
    $('.scissor-player-2, .leaf-player-2, .stone-player-2').click(function() {
         $('.tab-player-2 tr td i').css('color','inherit');
        shotPlayer2 = parseInt($(this).data('shot2'));
        $('i', this).css('color','red');
        startChifoumi();
    });

 var startChifoumi = function () {
      $.post('src/Player.php',
        {
        shotPlayer1: shotPlayer1,
        shotPlayer2: shotPlayer2
        }, function(data) {
        $('.result').show();
        if(data == 0) {
            $('.result').html('Egalité'); 
        } else if(data == 1) {
            $('.result').html('Vous avez gagné');
            scorePlayer1 = scorePlayer1 + 1;
        } else {
            $('.result').html('Vous avez perdu'); 
            scorePlayer2 = scorePlayer2 + 1;
        }
        $('.player1Score').html('Votre score: '+ scorePlayer1);
         $('.player2Score').html('Score joueur 2: '+ scorePlayer2);
        });
};

