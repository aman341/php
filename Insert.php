<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <form action="function.php" method="POST">
     <label> First Name: </label>
      <input type="text" name="firstname"><br><br>

      <label> Last Name:</label>
      <input type="text" name="lastname"><br><br>

     <label> Email:</label>
      <input type="email" name="email"><br><br>

      <label> Date Of Birth:</label>
      <input type="date" name="dob"><br><br>


      <label> Mobile:</label>
      <input type="number" name="mobile"><br><br>


      <label> Designation:</label>
      <input type="text" name="designation"><br><br>

      <label>Gender:</label>
      <input type="radio" name="gender" value="Male">Male
      <input type="radio" name="gender" value="Female">Female<br><br>


      <label>Hobbies:</label>
      <input type="checkbox" name="hobbies">Singing
      <input type="checkbox" name="hobbies">Dancing
      <input type="checkbox" name="hobbies">Reading
      <input type="checkbox" name="hobbies">Playing
<br><br>
      <input type="submit" name="submit">
    </form>
  </body>
</html>