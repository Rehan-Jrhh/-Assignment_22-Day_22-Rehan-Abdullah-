<!-- file1.php -->
<html>
<head>
<title>form</title>
<style>
.error {
  color: red;
}
</style>
</head>
<body>

<?php 
$emname = $ememail = $emcourse = ""; 
?>

<form method="POST" action="sqlphp.php">
  <label> NAME:
    <input type="text" name="name">
    <span class="error">* <?php echo $emname; ?></span>
  </label>
  <br>

  <label> Email:
    <input type="text" name="Email">
    <span class="error">* <?php echo $ememail; ?></span>
  </label>
  <br>

  <label>Phone :
    <input type="text" name="course">
    <span class="error">* <?php echo $emcourse; ?></span>
  </label>
  <br>

  <button type="submit">submit</button>
</form>

</body>
</html>
