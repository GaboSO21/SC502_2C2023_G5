<?php
    class Conectar{
        
        private $con;

        public function __construct(){
            // host - usuario - pswd - nombredb
            $this->con = new mysqli('localhost', 'root', '', 'aura_botanica');
        }


    }
?>


