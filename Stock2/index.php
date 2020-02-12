<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CURD</title>
  </head>
  <body>
      <div class="container mt-2 mb-4 p-2 shadow bg-white">
        <form action="process.php" method="POST">
          <div class="form-row justify-content-center">
              <div class="col-auto">
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
              </div>
              <div class="col-auto">
                <input type="text" name="location" class="form-control" id="location" placeholder="Enter your location">
              </div>
              <div class="col-auto">
                <button type="submit" name="save" class="btn btn-info">save</button>
              </div>
          </div>
        </form>
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Location</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            #codeing for  display users data
            $sql = "SELECT id, name, location FROM data";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){

              # data of each row
              while($row = $result->fetch_assoc()){
                echo"<br> id:".$row["id"]." name: ".$row["name"].
                "location:".$row["location"]."</br>";
              }
            }
              else
              {
                echo "0 results";

              }
              $conn->close();
              ?>


           </tbody>
        </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  </body>
</html>
