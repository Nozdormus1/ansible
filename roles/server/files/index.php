<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">

<title>test</title>


</head>
<body>

<?php
  $conn=mysqli_connect("10.0.1.13","task_user","hard_password","task_db");

  if(!$conn)
  {
    die("Connection failed: " . mysqli_connect_error());
  }


  if(isset($_POST['save']))
  {
    $sql = "INSERT INTO pet (date, text)
    VALUES (now(),'".$_POST["text"]."')";

    $result = mysqli_query($conn,$sql);
  }

?>

<form action="index.php" method="post">
<label id="first"> Text:</label><br/>
<input type="text" name="text"><br/>

<button type="submit" name="save">save</button>

</form>

</body>
</html>
