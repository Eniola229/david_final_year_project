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
    <h1>Upload Materials</h1>
    <p><?php include "components/messages.php" ?></p>

   <div class="container">
        <form action="includes/uploadmaterial.inc.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="course_code">Course Code</label>
                <input type="text" class="form-control" name="course_code" id="course_code" placeholder="Enter course code">
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="text" class="form-control" name="level" id="level" placeholder="Enter level">
            </div>
            <div class="form-group">
                <label for="file_path">Upload Material (PDF Only)</label>
                <input type="file" class="form-control" name="file_path" id="file_path" accept=".pdf">
            </div>
            <button type="submit" class="btn btn-primary">Upload Course</button>
        </form>
    </div>

  </div>
</body>
</html>
