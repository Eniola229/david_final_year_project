<?php
    include 'includes/public_view.inc.php';
?>

    <!---------THis is the header nav-------->
    <?php 

    if (isset($_SESSION['role'])) {
      if ($_SESSION['role'] == 0 || $_SESSION['role'] == 1) {
    ?>
    <div class="navbar-container">
            <!-- Logo text that links to the home section -->
            <a class="logo">Rectem Computer Science</a>
            <!-- Links in the navigation bar --> 
            <div class="navbar-links">
                <a href="index.php">Home</a>
                <a href="announcements.php">Announcements</a>
                <a href="courses.php">Courses</a>
                <a href="materials.php">Materials</a>
                <a href="timetable.php">Timetable</a>
                <a href="contact.php">Contact Us</a>
                <a href="includes/logout.inc.php">Logout</a>
            </div>
        </div>

      <?php 
  } else { 
  ?>
   <div class="navbar-container">
            <!-- Logo text that links to the home section -->
            <a class="logo">Rectem Computer Science</a>
            <!-- Links in the navigation bar --> 
            <div class="navbar-links">
                <a href="index.php">Home</a>
                <a href="contact.php">Contact Us</a>
                <a href="login.php">Login</a>
            </div>
    </div>

  <?php 
  } 
} else { 
?>
   <div class="navbar-container">
            <!-- Logo text that links to the home section -->
            <a class="logo">Rectem Computer Science</a>
            <!-- Links in the navigation bar --> 
            <div class="navbar-links">
                <a href="index.php">Home</a>
                <a href="contact.php">Contact Us</a>
                <a href="login.php">Login</a>
            </div>
    </div>
<?php 
}
?>