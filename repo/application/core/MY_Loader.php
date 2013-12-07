<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class MY_Loader extends CI_Loader {
	
    public function template($template_name, $vars = array(), $return = FALSE){
		
		$vars['page'] = $template_name;
		
        $content  = $this->view('header', $vars, $return);
        $content .= $this->view('home', $vars, $return);
        $content .= $this->view('footer', $vars, $return);

        if($return) {
            return $content;
        }
    }
	
}