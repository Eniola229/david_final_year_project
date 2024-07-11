<?php
  include "includes/check_admin.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View All Courses</title>
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
    <h1>View All Courses</h1>
    <p> <?php include "components/messages.php" ?> </p>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Course Title</th>
          <th scope="col">Course Code</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($coursesLists as $course): ?>
        <tr>
          <th scope="row"><?php echo htmlspecialchars($course['id']); ?></th>
          <td><?php echo htmlspecialchars($course['course_name']); ?></td>
          <td><?php echo htmlspecialchars($course['course_code']); ?></td>
          <td>
            <a href="includes/delete_course.inc.php?id=<?php echo htmlspecialchars($course['id']); ?>">
            <button class="btn btn-danger btn-sm" onclick="">Delete</button>
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
