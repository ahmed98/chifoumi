<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Player
 *
 * @author amustapha
 */

namespace Chifoumi\Model; 


class Play {
    /**
     *
     * @var int 
     */
    private $shotPlayer1;
    /**
     *
     * @var int 
     */
    private $shotPlayer2;
    
    /**
     * Chifoumi calculate
     * 
     * @return 0 if equality 1 if player 1 wins -1 if player 2 wins
     */
    public function chifoumi()
    {
        try {
            if($this->shotPlayer1 == $this->shotPlayer2) {
                return 0;
            } else if(($this->shotPlayer1 == 3 && $this->shotPlayer2 == 2) || ($this->shotPlayer1 == 2 && $this->shotPlayer2 == 1) || ($this->shotPlayer1 == 1 && $this->shotPlayer2 == 3)) {
                return 1;
            } else {
                return -1;
            }
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }
    /**
     * 
     * @return int
     */
    function getShotPlayer1() {
        return $this->shotPlayer1;
    }
    /**
     * 
     * @return int
     */
    function getShotPlayer2() {
        return $this->shotPlayer2;
    }
    /**
     * 
     * @param string $shot
     */
    function setShotPlayer1($shot) {
        $this->shotPlayer1 = $shot;
    }
    /**
     * 
     * @param string $shot
     */
    function setShotPlayer2($shot) {
        $this->shotPlayer2 = $shot;
    }



}
