<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="courses.css">
    <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
    <!-- Top navigation bar that contains links to different sections -->
    <div class="navbar">
         <?php include 'components/header.php'; ?>
    </div>
    
     <!-- Courses section -->
     <section id="courses" class="courses">
        <h2>Courses</h2>
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
        <h1>Course Table For ND1</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Course Name</th>
                    <th>Course Code</th>
                    <th>Lecturer</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($coursesLists as $course): ?>
                <tr>
                  <th scope="row"><?php echo htmlspecialchars($course['id']); ?></th>
                  <td><?php echo htmlspecialchars($course['course_name']); ?></td>
                  <td><?php echo htmlspecialchars($course['course_code']); ?></td>
                  <td><?php echo htmlspecialchars($course['lecturer']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="container" id="course2">
        <h1>Course Table For ND2</h1>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Course Name</th>
                    <th>Course Code</th>
                    <th>Lecturer</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($coursesLists_2 as $course_2): ?>
                <tr>
                  <th scope="row"><?php echo htmlspecialchars($course_2['id']); ?></th>
                  <td><?php echo htmlspecialchars($course_2['course_name']); ?></td>
                  <td><?php echo htmlspecialchars($course_2['course_code']); ?></td>
                  <td><?php echo htmlspecialchars($course_2['lecturer']); ?></td>
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