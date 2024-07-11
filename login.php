<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginpage.css">
    
</head>
<body>
    
    <!-- Container for the login form -->
    <div class="login-container">
        <!-- Heading for the login form -->
        <h2>Student/Staff Login</h2>
        <?php include 'components/messages.php'; ?>
        <form action="includes/login.inc.php" method="post">
            <!-- Label for the email input field -->
            <label for="email">Email</label>
            <!-- Input field for the email -->
            <input type="text" maxlength="" id="email" name="email" required>
            
            <!-- Label for the password input field -->
            <label for="password">Password</label>
            <!-- Input field for the password-->
            <input type="password" id="password" name="password" required>
            
            <!-- Submit button for the form -->
            <p><a style="color: white; text-decoration: none;" href="register.php">Create An Account</a></p>
                <button type="submit">
                  Login 
                </button>
          
            <!-- <button type="submit" onclick="redirectToHomepage()">Login</button> -->
            <!-- <script>
                // JavaScript function to redirect to the homepage
                function redirectToHomepage() {
                    // Redirect to the homepage URL
                    window.location.href = 'homepage.html'; // Replace 'homepage.html' with your actual homepage URL
                } -->
            </script>
        </form>
    </div>
</body>
</html>