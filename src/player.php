<?php
/**
 * Dribbble player API class
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 **/
class Player extends Base
{
    public $id;              // integer
    public $shots_count;     // integer
    public $avatar_url;      // string
    public $name;            // string
    public $created_at;      // string
    public $location;        // string
    public $following_count; // integer
    public $url;             // string
    public $draftees_count;  // integer
    public $followers_count; // integer
    
    /**
     * undocumented function
     *
     * @return void
     * @author Martin Bean <martin@digitalpop.co.uk>
     **/
    function find($id)
    {
        $this->get('/players/'.$id);
        return $this;
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
    public function following($options=array())
    {
        return $this->paginated_list($this->get('/players/'.$this->id.'/shots/following', $options));
    }
}