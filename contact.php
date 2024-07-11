<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <!-- Top navigation bar that contains links to different sections -->
    <div class="navbar">
         <?php include 'components/header.php'; ?>
    </div>

    <div>
        <!-- Contact section -->
        <section id="contact" class="contact">
            <h2>Contact Us</h2>
            <!-- Contact form -->
            <form action="/contact" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Send</button>
            </form>
        </section>
    </div>

</body>
</html>