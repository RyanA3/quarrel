<?php

class Controller {

    public function model($model) {
        $model_dir = 'src/model/' . $model . '.php';

        if(!file_exists($model_dir)) {
            echo "ERROR: Model($model) not found!";
            return null;
        }

        require_once $model_dir;
        return new $model();
    }

    public function view($name, $data = []) {
        $view_dir = 'src/view/' . $name . '.php';

        if(!file_exists($view_dir)) {
            echo "ERROR: View($name) not found";
            return;
        }

        include $view_dir;
    }

}