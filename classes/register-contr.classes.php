<?php
class RegisterContr extends Register
{
    private $name;
    private $email;
    private $matricno;
    private $level;
    private $department;
    private $password;
    private $confirm_password;

    public function __construct(
        $name, $email, $matricno, $level, $department, $password, $confirm_password
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->matricno = $matricno;
        $this->level = $level;
        $this->department = $department;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
    }

    public function registerUser() {
        if (!$this->emptyInput()) {
            header('location: ../register.php?status=emptyInput');
            exit();
        }
        if (!$this->passwordNotMatch()) {
            header('location: ../register.php?status=passwordNotMatch');
            exit();
        }
        if (!$this->invalidEmail()) {
            header('location: ../register.php?status=invalidEmail');
            exit();
        }
        if (!$this->idTakenCheck()) {
            header('location: ../register.php?status=useroremailtaken');
            exit();
        }
        if ($this->invalidMatricNo()) {
            header('Location: ../register.php?status=invalidMatricNo');
            exit();
        }

        // If all checks pass, proceed with user registration
        $this->setUser(
            $this->name,
            $this->email,
            $this->matricno,
            $this->level,
            $this->department,
            $this->password,
        );

        // Send confirmation email
        $this->sendEmail($this->name, $this->email, $this->level);
    }

    private function emptyInput() {
        // Check for empty inputs
        return !(
            empty($this->email) ||
            empty($this->name) ||
            empty($this->matricno) ||
            empty($this->level) ||
            empty($this->department) ||
            empty($this->password)
        );
    }
    private function passwordNotMatch() {
        // Check if passwords are the same
        return $this->password === $this->confirm_password;
    }

    private function invalidEmail() {
        // Validate email format
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    } 

    private function idTakenCheck() {
        // Check if username or email is already taken
        return $this->checkUser($this->email);
    }

    private function invalidMatricNo() {
       return strlen($this->matricno) >= 15;
    }

}
 