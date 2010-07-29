<?php
/**
 * Dribbble base API class
 *
 * @author Martin Bean <martin@digitalpop.co.uk>
 **/
class Base
{
    /**
     * Dribbble API base URL
     *
     * @var string
     **/
    var $baseUrl = "http://api.dribbble.com/";
    
    /**
     * undocumented function
     *
     * @return void
     * @author Martin Bean <martin@digitalpop.co.uk>
     **/
    public function get($url)
    {
        return json_decode(file_get_contents($this->baseUrl.$url));
    }
    
    /**
     * undocumented function
     *
     * @param string $url
     * @param array  $options
     * @return string
     **/
    public function paginated_list($url, $options)
    {
        return json_decode(file_get_contents($this->baseUrl.$url.'?'.http_build_query($options)));
    }
}