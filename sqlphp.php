<?php  
echo "file called<br>";

$name = $email = $course = "";
$emid = $emname = $ememail = $emcourse = "";

// Validate only if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$emname = "<div class='error'>Name required</div>";
} else {
  $name = check_validation($_POST["name"]);
  }

if (empty($_POST["Email"])) {
$ememail = "<div class='error'>Email required</div>";
 } else {
 $email = check_validation($_POST["Email"]);
  }

 if (empty($_POST["course"])) {
$emcourse = "<div class='error'>Course required</div>";
  } 
  else {
$course = check_validation($_POST["course"]);
  }

if ($name && $email && $course) {
save($name, $email, $course);
  }
}

function check_validation($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}

function save($namep, $emailp, $coursep) {
  $name = $namep;
  $email = $emailp;
  $course = $coursep;

  $obj = mysqli_connect("localhost", "root", "", "webteam_db");

  if (!$obj) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $query1 = "INSERT INTO student (name, email, course) VALUES (?, ?, ?)";

  $finalquery = $obj->prepare($query1);
  $finalquery->bind_param("sss", $name, $email, $course);
  $finalquery->execute();

  echo "<br>Data Inserted Successfully";
}
?>
