<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Registration Form</h2>

<form method="POST" action="insert.php">
  <input type="text" name="name" placeholder="Student Name" required><br><br>
  <input type="email" name="email" placeholder="Email" required><br><br>
  <input type="text" name="phone" placeholder="Phone"><br><br>
  <input type="text" name="course" placeholder="Course"><br><br>

  <button type="submit">Save Student</button>
</form>

<hr>

<h3>Student List</h3>

<?php
include "fetch.php";
?>

</body>
</html>
