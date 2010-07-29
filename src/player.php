<?php
/**
 * Dribbble player API class
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 **/
class Player extends Base
{
    /**
     * undocumented function
     *
     * @return void
     * @author Martin Bean <martin@digitalpop.co.uk>
     **/
    function find($id)
    {
        return $this->get('/players/'.$id);
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
        return $this->paginated_list($this->get('/players/'.$this->id.'/shots', array($page, $per_page)));
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
        return $this->paginated_list($this->get('/players/'.$this->id.'/shots/following', array($page, $per_page)));
    }
}