<?php
/**
 * Dribbble base API class
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 **/
class Dribbble
{
    /**
     * An instance of the shot API class
     *
     * @var object
     **/
    var $shot;
    
    /**
     * An instance of the player API class
     *
     * @var object
     **/
    var $player;
    
    /**
     * Constructs the class
     *
     * @return void
     **/
    function __construct()
    {
        require_once(str_replace('dribbble.php', 'shot.php',   __FILE__));
        require_once(str_replace('dribbble.php', 'player.php', __FILE__));
        
        $this->shot   = new Shot();
        $this->player = new Player();
    }
}