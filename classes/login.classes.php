<?php
class Login extends Dbh
{
    
    protected function getUser($email, $password)
    {
        try {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ?;');
            if (!$stmt->execute([$email])) {
                throw new Exception('Error executing query.');
            }

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user || !password_verify($password, $user['password'])) {
                return false;
            }  

            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['level'] = $user['level'];
            $_SESSION['department'] = $user['department'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['created_at'] = $user['created_at'];

            $stmt = null;

            return $user;
        } catch (Exception $e) {
            error_log("Error fetching user data: " . $e->getMessage());
            return false;
        }
    }
}
