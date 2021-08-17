
<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student1";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 


    include("config.php");
    if(isset($_POST['submit']))
    {
      $firstName=$_POST['firstname'];
      $lastName=$_POST['lastname'];
      $email=$_POST['email'];
      $gender=$_POST['gender'];
      $dob=$_POST['dob'];
      $mobile=$_POST['mobile'];
      $designation=$_POST['designation'];
      $hobbies=$_POST['hobbies'];


      echo "".$conn->connect_error;

      $result=mysqli_query($conn, "INSERT INTO user_info (firstname,lastname,email,gender,dob,mobile,designation,hobbies) VALUES('$firstname','$lastname','$email','$gender','$dob','$mobile','$designation','$hobbies')");

      if($result)
      {
        echo "Data Insert Successfully";
      }
      else{
        echo "Failed";
      }
    }

    ?>
