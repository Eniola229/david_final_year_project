<?php 
class LoginContr extends Login
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function loginUser()
    {
        session_start();

        if ($this->emptyInput() == false) {
            header('Location: ../login.php?status=emptyinput');
            exit;
        }
        
        $userData = $this->getUser($this->email, $this->password);
        if (!$userData) {
            header('Location: ../login.php?status=loginfailed');
            exit;
        }

        // if (!$this->CheckLogin($this->email)) {
        //     error_log("Failed to send login email notification.");
        // }

       
        $_SESSION['role'] = $userData['role']; 

        if ($_SESSION['role'] == "" || $_SESSION['role'] == "0") {
             header("Location: ../index.php?status=loginsuccess");
             exit;  
           
        } else if ($_SESSION['role'] == "1") {
            header("Location: ../admin.php");
            exit;  
        } 
    }

    private function emptyInput()
    {
        return !empty($this->email) && !empty($this->password);
    }
}
