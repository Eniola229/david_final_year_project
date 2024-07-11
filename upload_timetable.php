<?php
  include "includes/check_admin.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Timetable</title>
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
    <h1>Upload Timetable</h1>
    <form>
      <div class="form-group">
        <label for="timetable-file">Upload Timetable</label>
        <input type="file" class="form-control-file" id="timetable-file">
      </div>
      <button type="submit" class="btn btn-primary">Upload Timetable</button>
    </form>
  </div>
</body>
</html>
