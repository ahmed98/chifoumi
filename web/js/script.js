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

/**
 * Display computer block
 * @type type
 */
$('.btn-computer').click(function() {
    $('.player').show();
    $('.btn-choose').hide();
     $('.player-2-wrapper').hide();
    $('.mode').val('computer');
    $('.player-2-screen i').removeClass('fa fa-user').addClass('fa fa-laptop');
});

/**
 * Display player block
 */
$('.btn-player').click(function() {
    $('.player').show();
    $('.btn-choose').hide();
    $('.laptop-wrapper').hide();
    $('.mode').val('player');
    $('.player-2-screen i').removeClass('fa fa-laptop').addClass('fa fa-user');
});

/**
 * Player 1 strats playins
 */
$('.scissor-player-1, .leaf-player-1, .stone-player-1').click(function() {
    $('.tab-player-1 tr td i').css('color','inherit');
    $('i').css('color','inherit');
    shotPlayer1 = parseInt($(this).data('shot'));
    $('i', this).css('color','red');
    
    if($('.mode').val() === 'computer') {
        shotPlayer2 = Math.floor(Math.random()*3+1);
        $('.'+ chifoumiList[shotPlayer2]+ ' i').css('color', 'red');
    } 
     if(shotPlayer2 !== 0) {
        startChifoumi();
     }
   
});
  /**
   * Player 2 starts playins
   */
$('.scissor-player-2, .leaf-player-2, .stone-player-2').click(function() {
     $('.tab-player-2 tr td i').css('color','inherit');
    shotPlayer2 = parseInt($(this).data('shot2'));
    $('i', this).css('color','red');
    if(shotPlayer1 != 0) {
        startChifoumi();
    }
});
/**
 * Launch the game
 * 
 * @returns {undefined}
 */
 var startChifoumi = function () {
    $('.result').html('');
    $.post('src/Player.php',{shotPlayer1: shotPlayer1, shotPlayer2: shotPlayer2}, function(data) {
        $('.result').show();
        if(data == 0) {
            $('.result').html('Egalité').css('color','#ffaa00'); 
        } else if(data == 1) {
            $('.result').html('Vous avez gagné').css('color','#31a524'); 
            scorePlayer1 = scorePlayer1 + 1;
        } else {
            $('.result').html('Vous avez perdu').css('color','#ff0000');  
            scorePlayer2 = scorePlayer2 + 1;
        }
        $('.player1Score').html(scorePlayer1);
        $('.player2Score').html(scorePlayer2);
        
        shotPlayer1 = 0;
        shotPlayer2 = 0;
    });
};

