<?php

    class Login {

        public function index($a = '', $b = '') {
            echo 'Login! (controller, index)';
            echo $a, ' ', $b;
        }

        public function other($a = '', $b = '') {
            echo 'Login (controller, other())';
            echo $a, ' ', $b;
        }

    }

?>