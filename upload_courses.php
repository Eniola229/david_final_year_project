<?php
  include "includes/check_admin.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Courses</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #343a40;
      color: white;
      padding: 15px;
    }
    .sidebar a {
      color: white;
      display: block;
      padding: 10px 15px;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      flex: 1;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <?php include "components/sidebar.php";
    ?>
  </div>
  <div class="content">
    <h1>Upload Courses</h1>
    <p><?php include "components/messages.php" ?></p>

    <form action="includes/uploadcourse.inc.php" method="POST">

      <div class="form-group">
        <label for="course-title">Course Title</label>
        <input type="text" class="form-control" name="course_name" id="course-title" placeholder="Enter course title">
      </div>
      <div class="form-group">
        <label for="course-code">Course Code</label>
        <input type="text" class="form-control" name="course_code" id="course-code" placeholder="Enter course code">
      </div>
      <div class="form-group">
        <label for="course-title">Lecturer</label>
        <input type="text" class="form-control" name="lecturer" id="lecturer" placeholder="Enter Lecturer">
      </div>
      <div class="form-group">
        <label for="course-title">Level</label>
        <input type="text" class="form-control" name="level" id="level" placeholder="Enter Lecturer">
      </div>

      <button type="submit" class="btn btn-primary">Upload Course</button>
    </form>

  </div>
</body>
</html>
