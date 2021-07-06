<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>
<?php require 'conn.php'; ?>
<?php


$query = "SELECT * FROM survey";
$result = mysqli_query($conn, $query);

echo "<div class='container'>";
echo " <div class='row'>";
echo "<div class='.col-xs-6 .col-md-4'>";
echo "<div class='panel panel-success'>";
echo "<div class='panel-heading'>";
echo "<h2>Show User Survey data</h2>"."</div>";
echo "<div class='panel-body'>";
echo "<table class='table'>";


            echo "<thead><th>"."Name"."</th><th>"."Age"."</th><th>"."Image"."</th><th>"."User hopes"."</th></thead>";

            while($row = $result->fetch_assoc()) {
              echo "<tbody><tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td><td>"."<img src= 'images/".$row['image']."'>"."</td><td>".$row['user_hopes']."</td></tr>";  //$row['index'] the index here is a field name
                           }

            echo "</tbody></table>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";


    $conn->close();





?>
