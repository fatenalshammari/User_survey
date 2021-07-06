<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Survey</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
     integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
     <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <?php include "navbar.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2>User Survey</h2>
                    </div>

    <form action="controller.php" method="post" enctype="multipart/form-data">
           <div class="panel-body">
               <label for="name">Name:</label>
               <input type="text" name="name" id="name" class="form-control" minlength="3" placeholder="Enter your name" required>

               <br>

               <label for="age" class="mt-10">Age:</label>
               <input type="number" name="age" id="age" class="form-control" placeholder="Enter your age" required>

               <br>

               <label for="image" class="mt-10">Personal Image:</label>
               <input type="file" name="image" id="image" class="form-control" accept="image/*" required>

               <br>

               <label for="hopes">User hopes(select one):</label>
                   <select class="form-control" id="hopes" name="hopes" required>
                     <option value="">None</option>
                     <option>Reading books</option>
                     <option>Traveling</option>
                     <option>Swimming</option>
                     <option>other</option>
                   </select>

               <br>

            </div>
            <div class="panel-footer">
            <button type="submit" class="btn btn-success btn-block" name="submit" id="submit">Submit</button>



          </div>
      </form>
  </div>
</div>
</div>
</div>

  </body>
</html>
