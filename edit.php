<?php 
include "config.php";
$ids = $_GET['id'];
$id = $_GET['id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Navbar scroll</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
      </nav>

<div style="position: absolute; top:75px; left: 30%;">
<form action="Update_boos.php" method="post">
    <?php
  $query="SELECT * FROM books_details where Id = $ids ";
  $sd=mysqli_query($conn,$query);
  while ($row=mysqli_fetch_array($sd))
  {
    ?>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title</label>
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Author</label>
      <input type="text" class="form-control" name="author" value="<?php echo $row['author'];?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Publisher</label>
      <input type="text" class="form-control" name="Publisher" value="<?php echo $row['publisher'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Category</label>
      <input type="text" class="form-control" name="Category" value="<?php echo $row['Category'];?>">
    </div>
  </div>
    <div class="form-group">
    <label for="inputAddress2">Quenty</label>
    <input type="text" class="form-control" name="Quenty" value="<?php echo $row['stock'];?>" placeholder="Apartment, studio, or floor">
  </div>

  <?php } ?>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <input type="submit" name="submit" class="btn btn-primary">
</form>
 
  <a href="info.php?id=<?php echo $id;?>">Back</a>
  


</div>

 <div class="card-footer text-muted text-center">
    2 days ago
  </div>

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>