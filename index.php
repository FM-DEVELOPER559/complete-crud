<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Show</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
        <div class="col">
          <button class="btn btn-primary px-5 m-3"><a href="insert.php" class="text-white text-decoration-none">Insert</a></button>
        </div>
        </div>
          <div class="row">
              <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <!-- <th scope="col">Password</th> -->
                        <th scope="col">Gender</th>
                        <th scope="col">Country</th>
                        <th scope="col">Hobby</th>
                        <th>Operations</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    require "conn.php";
                    $query = mysqli_query($conn,"select * from users");
                    $i = 0;
                    while($row = mysqli_fetch_array($query)){
                      ?>
                      <tr>
                        <td><?php echo ++$i ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <!-- <td><?php echo $row['password'] ?></td> -->
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['country'] ?></td>
                        <td><?php echo $row['hobby'] ?></td>
                        <td><button  class="btn btn-secondary px-4"><a href="update.php?id=<?php echo $row['id']?>" class="text-white text-decoration-none">Edit</a></button>
                        <button class="btn btn-secondary px-3"><a href="delete.php?id=<?php echo $row['id']?>" class="text-white text-decoration-none">Delete</a></button></td>
                      </tr>
                      <?php
                    }
                    ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    <!-- Option: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>