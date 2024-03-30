<?php

    class Home extends Controller {

        public function index($a = '', $b = '') {
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

        public function detail($ItemID = '') {
            $item_detail = $this->model('item')->find($ItemID);

            $this->view('home/detail', $item_detail);
        }

        public function edit($ItemID = '') {
            $itemToEdit = $this->model('item')->find($ItemID);

            if(isset($_POST['action'])) {
                $itemToEdit->name = $_POST['name'];
                $itemToEdit->update();
                header('location:/home/index');
            } else {
                $this->view('home/edit', $itemToEdit);
            }
        }

        public function delete($ItemID = '') {
            $itemToDelete = $this->model('item')->find($ItemID);

            if(isset($_POST['action'])) {
                $itemToDelete->delete();
                header('location:/home/index');
            } else {
                $this->view('home/delete', $itemToDelete);
            }
        }

    }
