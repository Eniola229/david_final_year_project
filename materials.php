

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materials</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="materials.css">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" href="courses.css">
    
</head>
<body>
    <!-- Top navigation bar that contains links to different sections -->
    <div class="navbar">
         <?php include 'components/header.php'; ?>
    </div>
    
     <!-- Materials section -->
      <section id="courses" class="courses">
        <h2>Materials</h2>
        <!-- Grid layout for courses -->
        <div class="course-grid">
            <a style="color: white; text-decoration: none;" href="#course1"><div class="course-item">ND1</div></a>
            <a style="color: white; text-decoration: none;" href="#course2"><div class="course-item">ND2</div></a>
        </div>
    </section>
    

    <!------This is for the table----->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Table</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container" id="course1">
        <h1>Material Table For ND1</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Course Code</th>
                    <th>PDF</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($materialsLists as $material): ?>
                <tr>
                  <th scope="row">#</th>
                  <th ><?php echo htmlspecialchars($material['course_code']); ?></th>
                  <th ><iframe src="./material_uploads/<?php echo htmlspecialchars($material['file_path']); ?>"  style="width:200px; height:60px;" frameborder="0"></iframe></th>
                  <th >
                    <a href="./material_uploads/<?php echo htmlspecialchars($material['file_path']); ?>" Download>
                    <button style="background: blue; color: white; border: none; height: 50px; width: 100px; cursor: pointer; border-radius: 5px; font-weight: bolder;" class="btn btn-danger">Download</button>
                </a>
                </th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="container" id="course2">
        <h1>Material Table For ND2</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Course Code</th>
                    <th>PDF</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($materialsLists_ND2 as $material_ND2): ?>
                <tr>
                  <th scope="row">#</th>
                  <th ><?php echo htmlspecialchars($material_ND2['course_code']); ?></th>
                  <th ><iframe src="./material_uploads/<?php echo htmlspecialchars($material_ND2['file_path']); ?>"  style="width:200px; height:60px;" frameborder="0"></iframe></th>
                  <th >
                    <a href="./material_uploads/<?php echo htmlspecialchars($material_ND2['file_path']); ?>" Download>
                    <button style="background: blue; color: white; border: none; height: 50px; width: 100px; cursor: pointer; border-radius: 5px; font-weight: bolder;" class="btn btn-danger">Download</button>
                </a>
                </th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>

    
    <!-- Footer section at the bottom -->
    <div class="footer">
        <p>&copy; 2024 Rectem Computer Science Department. All rights reserved.</p>
    </div>
</body>
</html>