<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Register extends Dbh
{
    protected function sendEmail($name, $email, $level)
    {
        // Load Composer's autoloader
        require '../vendor/autoload.php';

        try {
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth   = true; // Enable SMTP authentication
            $mail->Username   = 'joshuaadeyemi445@gmail.com'; // SMTP username
            $mail->Password   = 'yrkddeezyduwkodd'; // App-specific password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
            $mail->Port       = 465; // TCP port to connect to
 
            //Recipients
            $mail->setFrom('joshuaadeyemi445@gmail.com', 'YOUCARE'); // Fixed sender name
            $mail->addAddress($email);

            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'YOUCARE Registration';
            $email_template  = "<strong>Dear ". $name ."!</strong><br/>"
                             . "<p>Your Registration has been Successful:</p>"
                             . "<p>Your Level: " . $level . "</p>"
                             . "<p>Thank you!</p>"
                             . "<br/><b>RECTEM COM SCI Team</b>";
            $mail->Body = $email_template;

            // Attempt to send the email
            if ($mail->send()) {
                header("location: ../login.php?status=emailsent");
                exit();
            } else {
                header("location: ../login.php?status=sentemailfailed&error=" . urlencode($mail->ErrorInfo));
                exit();
            }
        } catch (Exception $e) {
            header("location: ../login.php?status=sentemailfailed&error=" . urlencode($e->getMessage()));
            exit();
        }
    }

    protected function setUser($name, $email, $matricno, $level, $department, $password)
    {
        // Hash the password
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL statement
        $stmt = $this->connect()->prepare('INSERT INTO users (name, email, matricno, level, department, password)
            VALUES (?, ?, ?, ?, ?, ?);');

        // Bind the parameters and execute the statement
        if (!$stmt->execute(array($name, $email, $matricno, $level, $department, $hashedPwd))) {
            $stmt = null;
            header("location: ../register.php?status=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($email)
    {
        $stmt = $this->connect()->prepare('SELECT id FROM users WHERE email = ?');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../register.php?status=stmtfailed");
            exit();
        }

        $resultCheck = $stmt->rowCount() > 0 ? false : true;
        return $resultCheck;
    }

    protected function getUserId($email)
    {
        $stmt = $this->connect()->prepare('SELECT id FROM users WHERE email = ?;');

        $stmt->execute([$email]); // Execute the prepared statement

        if ($stmt->rowCount() == 0) {
            // If no user is found, redirect with an appropriate status
            header("location: ../register.php?status=stmtfailed");
            exit();
        }

        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        return $userData['id']; 
    }
}
