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
    <p><?php include 'components/messages.php'; ?></p>
  <div class="container mt-5">
        <form class="form-group" action="includes/uploadtimetable.inc.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="timetable-file">Upload Timetable (Only PDF can be uploaded)</label>
                <input type="file" class="form-control-file" name="file_path" id="timetable-file">
            </div>
            <div class="form-group">
                <label for="level">Select Level</label>
                <select name="level" class="form-control" id="level">
                    <option>ND1</option>
                    <option>ND2</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Upload Timetable</button>
        </form>
    </div>

   <div class="container" id="course1">
        <h4>Time Table For ND1</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Level</th>
                    <th>PDF</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($timetableLists as $timetable): ?>
                <tr>
                  <th scope="row">#</th>
                  <th ><?php echo htmlspecialchars($timetable['level']); ?></th>
                  <th ><iframe src="./timetable_uploads/<?php echo htmlspecialchars($timetable['file_path']); ?>"  style="width:200px; height:60px;" frameborder="0"></iframe></th>
                  <th >
                    <a href="./timetable_uploads/<?php echo htmlspecialchars($timetable['file_path']); ?>" Download>
                    <button style="background: blue; color: white; border: none; height: 50px; width: 100px; cursor: pointer; border-radius: 5px; font-weight: bolder;" class="btn btn-danger">Download</button>
                    <a href="">
                    <button class="btn btn-danger">Delete</button>
                    </a>
                </a>
                </th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

         <h4>TableTable For ND2</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Level</th>
                    <th>PDF</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($timetableLists_ND2 as $timetable_ND2): ?>
                <tr>
                  <th scope="row">#</th>
                  <th ><?php echo htmlspecialchars($timetable_ND2['course_code']); ?></th>
                  <th ><iframe src="./material_uploads/<?php echo htmlspecialchars($timetable_ND2['file_path']); ?>"  style="width:200px; height:60px;" frameborder="0"></iframe></th>
                  <th >
                    <a href="./timetable_uploads/<?php echo htmlspecialchars($timetable_ND2['file_path']); ?>" Download>
                    <button style="background: blue; color: white; border: none; height: 50px; width: 100px; cursor: pointer; border-radius: 5px; font-weight: bolder;" class="btn btn-danger">Download</button>
                </a>
                </th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

  </div>

</body>
</html>
