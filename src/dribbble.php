<?php
/**
 * Dribbble API wrapper class
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
    public function __construct()
    {
        require_once(dirname(__FILE__) . '/base.php');
        require_once(dirname(__FILE__) . '/shot.php');
        require_once(dirname(__FILE__) . '/player.php');
        
        $this->shot   = new Shot();
        $this->player = new Player();
    }
}

?>