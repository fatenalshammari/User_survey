<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>
<?php require 'conn.php'; ?>

<?php

if(!isset($_GET['submit'])) {
    $query = "SELECT * FROM survey";
    $result = mysqli_query($conn, $query);
    if (!$result)
        die("Query error.");
} else {
    $search = $_GET['search'];
    $query = "SELECT * FROM survey WHERE name LIKE '%$search%' OR age LIKE '%$search%' OR image LIKE '%$search%' OR user_hopes LIKE '%$search%'";
    if($search !== '')
        $color = 'red';
    else
        $color = '';
    $result = mysqli_query($conn, $query);
    if (!$result)
        die("Query error.");

    header("location: search.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<div class="container">
  <form class="form-inline" method="get" action="search.php">

    <div class='container'>
    <div class='row'>
    <div class='.col-xs-6 .col-md-4'>
    <div class='panel panel-success'>
    <div class='panel-heading'>
    <h2>Search page</h2>
        <div style="float: right;">
          <input type="text" class="form-control" id="search" placeholder="Enter keyword" >

         <button type="submit" name="submit" class="btn btn-success" >Search</button>

  </div></div>
    <div class='panel-body'>
    <table class='table'>
                <thead>
                  <th>Name"</th>
                  <th>Age</th>
                  <th>Image</th>
                  <th>User hopes</th>
                </thead>
                <?php

                while($row = mysqli_fetch_assoc($result)) {
                  echo "
                               <tr>
                                   <td>" . $row['name'] . "</td>
                                   <td>" . $row['age'] . "</td>
                                   <td>" . "<img src= 'images/".$row['image']."'>". "</td>
                                   <td>" . $row['user_hopes'] . "</td>
                                   <td></td>
                                   <td> </td>
                                    </tr>
                                ";
                               }

                               ?>
              </tbody></table>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
  </form>
</div>
</body>
</html>
