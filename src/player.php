<?php

if (preg_match("/player\.php$/", $_SERVER['PHP_SELF'])){
	exit('No direct script access allowed');
}

/**
 * Dribbble player API class
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 **/
class Player extends Base
{
    public $id;
    public $name;
    public $username;
    public $url;
    public $avatar_url;
    public $location;
    public $twitter_screen_name;
    public $drafted_by_player_id;
    public $shots_counts;
    public $draftees_count;
    public $followers_count;
    public $following_count;
    public $created_at;
    
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
        $result = $this->paginated_list($this->get('/players/'.$this->id.'/shots', $options));
    	return $result->shots;
    }
    
    /**
     * Fetches shots by players that this player follows
     *
     * @param array $options
     * @return string
     **/
    public function shots_by_following($options=array())
    {
        return $this->paginated_list($this->get('/players/'.$this->id.'/shots/following', $options));
    }
    
    /*
    	Get a list of people this player follows
    */
    public function following($options=array())
    {
        $result = $this->paginated_list($this->get('/players/'.$this->id.'/following', $options));
    	return $result->players;
    }
    
    /*
    	Get a list of people this player has drafted
    */
    
    public function draftees($options=array())
    {
    	$result = $this->paginated_list($this->get('/players/'.$this->id.'/draftees', $options));
    	return $result->players;
    }
}