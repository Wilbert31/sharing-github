<?php
    class Users extends Controller {

        public function __construct(){
            $this->userModel = $this->model('User');
        }

        public function login(){
            // Check post
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
                // Sanitize Post Data
               
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                // init data
                $data = [ 
    
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'emailErr' => '',
                    'passwordErr' => ''
    
                ];
                
                // Validate Email
                if(empty($data['email'])){  
                    $data['emailErr'] = 'Please enter email.';
                } else {
                    // Check for user/email
                    if($this->userModel->findUserByEmail($data['email'])){
                        // User found
                    } else {
                        // User not found
                        $data['emailErr'] = 'No user found.';
                    }
                }
                
    
                // Validate Password
                if(empty($data['password'])){
                    $data['passwordErr'] = 'Please enter password.';
                } elseif(strlen($data['password']) < 6){
                    $data['passwordErr'] = 'Password must be atleast 6.';
                } 
                // Make sure errors are empty 
                if(empty($data['emailErr']) && empty($data['passwordErr'])){
                    // Validated
                    // Check and set logged in user
                    $loggedInUser = $this->userModel->login($data['email'], $data['password']);
    
                    if($loggedInUser){
                        //Create a session
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['passwordErr'] = 'Password incorrect';
    
                        $this->view('main/index', $data);
                    }
                } else {
                    // Load the view with errors
                    $this->view('main/index', $data);
                }
    
            } else {
                // init data
                $data = [ 
                    'email' => '',
                    'password' => '',
                    'emailErr' => '',
                    'passwordErr' => ''
                ];
    
                // Load view
                $this->view('main/index', $data);
            }
        }

        public function signUp(){
            
        }

        public function createUserSession($user){
            $_SESSION['userId'] = $user->id;
            $_SESSION['userEmail'] = $user->email;
            $_SESSION['userName'] = $user->name;
            redirectTo('');
        }

        public function logout(){
            unset($_SESSION['userId']);
            unset($_SESSION['userEmail']);
            unset($_SESSION['userName']);
    
            session_destroy();
            redirectTo('');
        }
    }

    

?>