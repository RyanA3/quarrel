<?php

    class Home extends Controller {

        public function index() {
            $items = $this->model('item')->get();

            $this->view('home/index', ['items'=>$items]);
        }

        public function create() {

            if(isset($_POST['action'])) {
                $newItem = $this->model('item');
                $newItem->name = $_POST['name'];
                $newItem->create();

                // Redirect user back to item list
                header('location:home/index');
            } else {
                $this->view('home/create');
            }


        }

    }
