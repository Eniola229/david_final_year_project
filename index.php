<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link to the CSS file that contains all styles for this page -->
    <link rel="stylesheet" href="homepage.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
    <!-- Top navigation bar that contains links to different sections -->
    <div class="navbar">
        <?php include 'components/header.php'; ?>
    </div>
<!--style="margin: 40px; width: 1200px;-->
    <div class="image-container">
        <img src="images/My Website Background.svg" alt="Background Image">
    </div>

    <!-- Placeholder and Button Section -->
    <section id="search" class="search">
        <h2></h2>
        <div class="search-container" style="margin-left: 10%;">
            <input type="text" class="search-input" id="course" name="course" placeholder="Quick Search">
            <button class="search-button">Find Course</button>
        </div> 

         <script>
        $(document).ready(function(){
             $('#course').on('keyup', function(){
                var query = $(this).val();
                $.ajax({
                    url: 'classes/coursesearch.classes.php',
                    type: 'GET',
                    data: {course: query},
                    success: function(data){
                        $('#results').html(data);
                    }
                });
            });
        });
    </script>
    <div id="results"></div>
    </section>

    <!-- Footer section at the bottom -->
    <div class="footer">
        <p>&copy; 2024 Rectem Computer Science Department. All rights reserved.</p>
    </div>
</body>
</html>
