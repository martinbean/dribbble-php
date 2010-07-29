<?php
/**
 * Dribbble shot API class
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 **/
class Shot extends Base
{
    /**
     * Player information
     *
     * @var object
     */
    public $player;
    
    /**
     * Shot image URL
     *
     * @var string
     */
    public $image_url;
    
    /**
     * Shot title
     *
     * @var string
     */
    public $title;
    
    /**
     * Shot URL
     *
     * @var string
     */
    public $url;
    
    /**
     * Shot ID
     *
     * @var integer
     */
    public $id;
    
    /**
     * Shot image teaser URL
     *
     * @var string
     */
    public $teaser_url;
    
    /**
     * Shot image height
     *
     * @var integer
     */
    public $height;
    
    /**
     * Shot image width
     *
     * @var integer
     */
    public $width;
    
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