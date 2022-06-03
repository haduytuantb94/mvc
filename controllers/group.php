<?php

class Group extends Controller {
    
    public function index() {
        $this->view->render('group/index');
        $this->loadModel('group');
    }
    public function add() {
        echo '<h3>'.__METHOD__.'</h3>';
    }
} 