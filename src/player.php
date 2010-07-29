<?php
/**
 * Dribbble player API class
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 **/
class Player extends Dribbble
{
    /**
     * Constructs the class
     *
     * @param int $id Dribbble player ID
     * @return void
     **/
    function __construct($id=null)
    {
        $this->id = $id;
    }
    
    /**
     * Fetches this player's shots
     *
     * @param int $page
     * @param int $per_page
     * @return string
     **/
    public function shots($page=null, $per_page=null)
    {
        return $this->paginated_list('/players/'.$this->id.'/shots', array($page, $per_page));
    }
    
    /**
     * Fetches shots by players that this player follows
     *
     * @param int $page
     * @param int $per_page
     * @return string
     **/
    public function everyone($page=null, $per_page=null)
    {
        return $this->paginated_list('/players/'.$this->id.'/shots/following', array($page, $per_page));
    }
}