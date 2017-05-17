
<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chapter 8</title>

   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
</head>
<?php include 'book-data.php';?>
<?php
$nameErr = $emailErr = $passwordErr = "";
$name = $email = $password = $err1 = $err2 = "" ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
      $emailErr = "Email is required";
      $err1 = "has-error";
    }
  if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
      $err2 = "has-error";
    }
}
?>
<body>
<div class="container">
   <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
         <div id="login">
            <div class="page-header">
               <h2>Login</h2>
            </div>
            <form method="post" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="form-group <?php echo $err1 ?>">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo htmlentities($email) ?>">
                <p class="help-block"><?php echo $emailErr; ?></p>
              </div>
              <div class="form-group <?php echo $err2 ?>">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo htmlentities($password) ?>">
                <p class="help-block"><?php echo $passwordErr; ?></p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Server</label>
                <select name="server" class="form-control">
                <?php
                   for($i=1; $i<=4; $i++)
                       {
                           echo "<option value=".$i.">".$i."</option>";
                       }
               ?>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
      <div class="col-md-3">
      </div>
   </div>
</div>
<script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
<script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>
</body>
</html>
