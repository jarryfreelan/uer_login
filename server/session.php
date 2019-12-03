<?php

class Session{

    public $vars;

    public function __construct() {
    	session_start();
        $this->vars = &$_SESSION; //this will still trigger a phpmd warning
    }

    public static function destroy() {
    	session_destroy();
    }
}

?>