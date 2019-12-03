<?php

class Session{

    public $vars;

    public function __construct() {
    	session_start();
        $this->vars = &$_SESSION; 
    }

    public static function destroy() {
    	session_destroy();
    }
}

?>