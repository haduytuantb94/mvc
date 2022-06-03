<?php
class Index extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() { //Hien thi danh sach cac Menu
        $this->view->render('index/index');
        $this->loadModel('index');
    }
    
    public function add() { // Add menu
        echo '<h3>'.__METHOD__.'</h3>';
    }
}