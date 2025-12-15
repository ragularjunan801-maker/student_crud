<?php
include "db.php";

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while ($row = mysqli_fetch_assoc($result)) {

    echo "
    <p>
      <b>Name:</b> {$row['name']} <br>
      <b>Email:</b> {$row['email']} <br>
      <b>Phone:</b> {$row['phone']} <br>
      <b>Course:</b> {$row['course']} <br>

      <a href='edit.php?id={$row['id']}'>Edit</a> |
      <a href='delete.php?id={$row['id']}'
         onclick=\"return confirm('Are you sure?')\">Delete</a>
    </p>
    <hr>
    ";
  }

} else {
  echo "No students found";
}
?>
