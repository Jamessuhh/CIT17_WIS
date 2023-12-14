<?php
@include 'setup.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information System Setup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

    .btn-primary {
        background-color: #f5f5dc; 
        border-color: #f0e68c; 
        color: #333;
    }

    .btn-primary:hover {
        background-color: #f0e68c; 
        border-color: #e6e600; 
        color: #333;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5dc; 
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f0e68c; 
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="number"] {
        width: 100%;
        padding: 8px;
        margin: 5px 0 15px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 4px;
        background-color: #f5f5dc; 
    }

    code {
        background-color: #f8f8f8;
        padding: 2px 4px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .details-form {
        display: none;
    }
</style>
</head>
<body>
<div class="container">
    <h2 class="text-center">Student Information System Setup</h2>
    <div class="text-center">
        <button class="btn btn-primary" onclick="showForm('user-details-form')">User</button>
        <button class="btn btn-primary" onclick="showForm('student-details-form')">Student</button>
        <button class="btn btn-primary" onclick="showForm('course-details-form')">Course</button>
        <button class="btn btn-primary" onclick="showForm('instructor-details-form')">Instructor</button>
    </div>

        <div id="user-details-form" class="details-form" style="display: block;">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Create User</h3>
                <label for="username">Username:</label>
                <input type="text" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <br>
                <input type="submit" name="create_user" value="Create User" class="btn btn-primary">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Delete User by ID</h3>
                <label for="delete_user_id">User ID:</label>
                <input type="number" name="delete_user_id" required>
                <input type="submit" name="delete_user_by_id" value="Delete User by ID" class="btn btn-primary">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>View User Details</h3>
                <label for="view_username">Username:</label>
                <input type="text" name="view_username" required>
                <input type="submit" name="view_user" value="View User Details" class="btn btn-primary">
            </form>
        </div>

        <div id="student-details-form" class="details-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Add New Student Profile</h3>
                <label for="newstud">New Student Name:</label>
                <input type="text" name="new_student_name" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <br>
                <input type="submit" name="create_new_student_profile" value="Create New Student Profile" class="btn btn-primary">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Delete Student Profile by ID</h3>
                <label for="delete_student_id">Student Profile ID:</label>
                <input type="number" name="delete_student_id" required>
                <input type="submit" name="delete_student_by_id" value="Delete Student Profile by ID" class="btn btn-primary">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>View Student Details</h3>
                <label for="view_student">Student Name:</label>
                <input type="text" name="view_student" required>
                <input type="submit" name="view_student" value="View Student Details" class="btn btn-primary">
            </form>
        </div>

        <div id="course-details-form" class="details-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Add New Course</h3>
                <label for="course_name">Course Name:</label>
                <input type="text" name="course_name" required>
                <br>
                <label for="credits">Credits:</label>
                <input type="number" name="credits" required>
                <br>
                <input type="submit" name="create_course" value="Create Course" class="btn btn-primary">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Delete Course by Name</h3>
                <label for="delete_course_name">Course Name:</label>
                <input type="text" name="delete_course_name" required>
                <input type="submit" name="delete_course_by_name" value="Delete Course" class="btn btn-primary">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>View Course</h3>
                <label for="view_course">Course Name:</label>
                <input type="text" name="view_course" required>
                <input type="submit" name="view_course" value="View Course" class="btn btn-primary">
            </form>
        </div>

        <div id="instructor-details-form" class="details-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Add New Instructors</h3>
                <label for="instructor_name">Instructor Name:</label>
                <input type="text" name="instructor_name" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <br>
                <input type="submit" name="create_instructor" value="Create New Instructor" class="btn btn-primary">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Delete Instructor by ID</h3>
                <label for="delete_instructor_id">Instructor ID:</label>
                <input type="number" name="delete_instructor_id" required>
                <input type="submit" name="delete_instructor_by_id" value="Delete Instructor by ID" class="btn btn-primary">
            </form>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>View Instructor Details</h3>
                <label for="view_instructor">Instructor:</label>
                <input type="text" name="view_instructor" required>
                <input type="submit" name="view_instructor" value="View Instructor Details" class="btn btn-primary">
            </form>
        </div>
        
        <script>
            function showForm(formId) {
                var forms = document.getElementsByClassName('details-form');
                for (var i = 0; i < forms.length; i++) {
                    forms[i].style.display = 'none';
                }

                document.getElementById(formId).style.display = 'block';
            }
            function showForm(formId) {
            var forms = document.getElementsByClassName('details-form');
            for (var i = 0; i < forms.length; i++) {
                forms[i].style.display = 'none';
            }

            document.getElementById(formId).style.display = 'block';
        }
        </script>
    </div>
</body>
</html>