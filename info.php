<?php
  
  include("config.php");
  $use = $_GET['name'];
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

    <title>Book Inventory Management</title>
  </head>
  <body>
   <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">Book Inventory Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
            <li class="nav-item active">
              <a class="nav-link"> <?php echo $use;?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>

<div style="position: absolute; top:65px;" class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">Category</th>
      <th scope="col">Stock</th>
      <th scope="col">Edit</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <?php
  $query="SELECT * FROM books_details where active = 0 and  user_id=$id ";
  $sd=mysqli_query($conn,$query);
  while ($row=mysqli_fetch_array($sd))
  {
    ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['Id'];?></th>
      <td><?php echo $row['title'];?></td>
      <td><?php echo $row['author'];?></td>
      <td><?php echo $row['publisher'];?></td>
      <td><?php echo $row['Category'];?></td>
      <td><?php echo $row['stock'];?></td>
      <td><a href="edit.php?ids=<?php echo $row['Id'];?>&&id=<?php echo $id;?>"><?php echo $row['title'];?></a></td>
      <td><form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
         <input type="submit" name="submit" class="btn btn-primary" value="Remove">
      </form></td>

    </tr>
    <tr>
      <td><?php } ?></td>
    </tr>
    <tr>
    </tr>
  </tbody>
</table>



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

<?php
if(isset($_POST['submit']))
{
  $ids=$_POST['id'];
 
$is='1';
{
$query="UPDATE books_details SET active='$is' where  Id='$ids' ";
mysqli_multi_query($conn, $query);
}
}
?>