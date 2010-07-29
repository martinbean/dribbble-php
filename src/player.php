<?php
/**
 * Dribbble player API class
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 **/
class Player extends Base
{
    /**
     * Player avatar URL
     *
     * @var string
     */
    public $avatar_url;
    
    /**
     * Player name
     *
     * @var string
     */
    public $name;
    
    /**
     * Player location
     *
     * @var string
     */
    public $location;
    
    /**
     * Player's profile URL
     *
     * @var string
     */
    public $url;
    
    /**
     * Player ID
     *
     * @var integer
     */
    public $id;
    
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
     * @param array $options
     * @return string
     **/
    public function shots($options=array())
    {
        return $this->paginated_list($this->get('/players/'.$this->id.'/shots', $options));
    }
    
    /**
     * Fetches shots by players that this player follows
     *
     * @param array $options
     * @return string
     **/
    public function everyone($options=array())
    {
        return $this->paginated_list($this->get('/players/'.$this->id.'/shots/following', $options));
    }
}