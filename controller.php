<?php require 'conn.php'; ?>

<?php

$msg = "";

if(isset($_POST['submit'])) {
  $target = "images/".basename($_FILES['image']['name']);
  //$target = "images/";
  $image = $_FILES['image']['name'];
//  $image = $_POST['image'];
  $name = $_POST['name'];
  $age= $_POST['age'];
  $hopes= $_POST['hopes'];

  $query = "INSERT INTO survey (name, age, image,user_hopes)
            VALUES ('$name', '$age', '$image','$hopes')";

  $result = mysqli_query($conn,$query);

    if($result == true){
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      $msg = "Submit successfully";
      echo "<p class='bg-success'>".$msg."</p>";
    }else{
      $msg = "There was a problem";
      echo "<p class='bg-danger'>".$msg."</p>";
    }
}
}
header("location: index.php");

    $conn->close();




?>
