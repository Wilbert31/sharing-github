<?php

  require_once APPROOT . '/controllers/Users.php';
  
  $users = new Users;
  $users->login();

  class Main extends Controller {

    public function __construct(){
      
    }
    
    public function index(){
      
      $data = [
        
      ];
     
      $this->view('main/index', $data);
    }

    

    public function home(){
      $data = [
        
      ];

      $this->view('main/home', $data);
    }
  }