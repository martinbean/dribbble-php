<?php
/**
 * Dribbble shot API class
 *
 * @author Martin Bean <martin@mcbwebdesign.co.uk>
 **/
class Shot extends Base
{
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
     * undocumented function
     *
     * @param int $page
     * @param int $per_page
     * @return string
     **/
    public function debuts($page=null, $per_page=null)
    {
        return $this->paginated_list($this->get('/shots/debuts', array($page, $per_page)));
    }
    
    /**
     * undocumented function
     *
     * @param int $page
     * @param int $per_page
     * @return string
     **/
    public function everyone($page=null, $per_page=null)
    {
        return $this->paginated_list($this->get('/shots/everyone', array($page, $per_page)));
    }
    
    /**
     * undocumented function
     *
     * @param int $page
     * @param int $per_page
     * @return string
     **/
    public function popular($page=null, $per_page=null)
    {
        return $this->paginated_list($this->get('/shots/popular', array($page, $per_page)));
    }
}