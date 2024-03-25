<?php

    class Home {

        public function index($a = '', $b = '') {
            echo 'Home! (controller, index)';
            echo $a, ' ', $b;
        }

    }

?>