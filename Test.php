<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test {

    private $CI;

    public function __construct() {
        $this->CI =& get_instance();
        
    }

    public function show(...$content) {
        $layout = array();
       $arr = array(...$content);

        $layout['header'] = $this->CI->load->view('templates/header',null, true);
        foreach($arr as $page) {
            // (location,return val)
             $this->CI->load->view($page[0], $page[1]);
        }
        $layout['footer'] = $this->CI->load->view('templates/footer', null, true);

        
        
    }


    
}