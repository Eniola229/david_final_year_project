<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>   
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
    <!-- Top navigation bar that contains links to different sections -->
    <div class="navbar">
         <?php include 'components/header.php'; ?>
    </div>
            <!-- Timetable section -->
            <section id="timetable" class="timetable">
                <!-- Table to display the timetable -->
                <div class="container" id="course1">
        <h1>TIME TABLE</h1>
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
    </div>
            </section>
          
            <!-- Footer section at the bottom -->
    <div class="footer">
        <p>&copy; 2024 Rectem Computer Science Department. All rights reserved.</p>
    </div>
</body>
</html>
