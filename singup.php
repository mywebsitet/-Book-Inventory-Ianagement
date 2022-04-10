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
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Abaout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="singup.php">Sing Up</a>
            </li>
          </ul>
          <form class="d-flex" action="login.php" method="post">
      <input class="form-control mr-2" type="text" name="name" placeholder="User Name" aria-label="Search">
      <input class="form-control mr-2" type="test" name="pass" placeholder="Password" aria-label="Search">
      <input class="btn btn-outline-success" type="submit" name="submit">
    </form>
        </div>
      </nav>

<div style="position: absolute; top:65px; left: 30%;">
<form action="user_ins.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" name="f_name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" name="l_name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">PassWord</label>
      <input type="password" class="form-control" name="pass">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Re-Password</label>
      <input type="password" class="form-control" name="re_pass">
    </div>
  </div>
    <div class="form-group">
    <label for="inputAddress2">Email Id</label>
    <input type="text" class="form-control" name="Email" placeholder="Apartment, studio, or floor">
  </div>
 
    <div class="form-group">
      <label for="inputCity">Phone No</label>
      <input type="text" class="form-control" name="p_no">
    </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <input type="submit" class="btn btn-primary" name="submit">Sign in
</form>

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