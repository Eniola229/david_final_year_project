<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <link rel="stylesheet" href="announcements.css">
</head>

<body>
    <!-- Top navigation bar that contains links to different sections -->
    <div class="navbar">
        <?php include 'components/header.php'; ?>
    </div>

    <!-- Main content section -->
    <div class="container">
        <!-- Announcements section -->
        <section id="announcements" class="announcements">
            <h2>Announcements</h2>
            <ul>
                <li>
                    NACOS first meeting will be held online this week.
                    <button>+</button>
                    <div class="more-info">
                        More details about the NACOS first meeting, including the date and time, will be sent to your email.
                    </div>
                </li>
                <li>
                    Project submissions are due by the end of the month.
                    <button>+</button>
                    <div class="more-info">
                        Ensure all your projects are submitted via the online portal before the deadline.
                    </div>
                </li>
                <li>
                    Project Defence will take place next week.
                    <button>+</button>
                    <div class="more-info">
                        The schedule for project defence will be shared on the course page. Please prepare your presentations.
                    </div>
                </li>
            </ul>
        </section>
    </div>


     
    
    <!-- Footer section at the bottom -->
    <div class="footer">
        <p>&copy; 2024 Rectem Computer Science Department. All rights reserved.</p>
    </div>
    <script src="announcements.js"></script>
</body>
</html>
