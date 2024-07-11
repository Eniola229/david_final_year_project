<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <!-- Main container for the form -->
    <div class="container">
        <!-- Page heading -->
        <h2>Register</h2>
        <?php include "components/messages.php" ?>
        <!-- Registration form -->
        <form action="includes/register.inc.php" method="post">
            <!-- Name input field -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <!-- Email input field -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <!-- Matric number input field -->
            <div class="form-group">
                <label for="matric">Matric Number:</label>
                <input type="text" id="matric" name="matricno" required>
            </div>
            <!-- Department input field -->
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" required>
            </div>
            <!-- Level dropdown menu -->
            <div class="form-group">
                <label for="level">Level:</label>
                <select id="level" name="level" required>
                    <option value="">Select Level</option>
                    <option value="ND1">ND1</option>
                    <option value="ND2">ND2</option>
                </select>
            </div>
            <!-- Password input field -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
             <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <!-- Submit button -->
            <div class="form-group">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>