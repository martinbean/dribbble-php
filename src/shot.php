<?php
/**
 * Dribbble shot API class
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 **/
class Shot extends Base
{
    public $id;                // integer
    public $title;             // string
    public $url;               // string
    public $image_url;         // string
    public $image_teaser_url;  // string
    public $width;             // integer
    public $height;            // integer
    public $views_count;       // integer
    public $likes_count;       // integer
    public $comments_count;    // integer
    public $rebounds_count;    // integer
    public $created_at;        // string
    public $player;            // object
    
    /**
     * undocumented function
     *
     * @return void
     * @author Martin Bean <martin@digitalpop.co.uk>
     **/
    function find($id)
    {
        return $this->get('/shots/'.$id);
    }
    
    /**
     * Fetches shots of debutants
     *
     * @param array $options
     * @return string
     **/
    public function debuts($options=array())
    {
        return $this->paginated_list($this->get('/shots/debuts', $options));
    }
    
    /**
     * Fetches shots from everyone
     *
     * @param array $options
     * @return string
     **/
    public function everyone($options=array())
    {
        return $this->paginated_list($this->get('/shots/everyone', $options));
    }
    
    /**
     * Fetches popular shots
     *
     * @param array $options
     * @return string
     **/
    public function popular($options=array())
    {
        return $this->paginated_list($this->get('/shots/popular', $options));
    }
}