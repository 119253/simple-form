<!DOCTYPE html>
<html>

  <head>
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <?php include 'style.php';?>
  </head>

  <body>
    <div class="main-block">
      <h1>Registration</h1>
      <form action="insert.php" method="post">
        <hr>
        <div class="gender">
          <input type="radio" value="male" id="male" name="gender" checked/>
          <label for="male" class="radio">Male</label>
          <input type="radio" value="female" id="female" name="gender" />
          <label for="female" class="radio">Female</label>
        </div>
        <hr>
        <label id="icon" for="email"><i class="fas fa-envelope"></i></label>
        <input type="text" name="email" id="email" placeholder="Email" required/>
        <label id="icon" for="name"><i class="fas fa-user"></i></label>
        <input type="text" name="name" id="name" placeholder="Name" required/>
        <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
        <input type="password" name="password" id="password" placeholder="Password" required/>
        <label id="icon" for="birthday"><i class="fas fa-calendar"></i></label>
        <input type="date" name="birthday" id="birthday" required/>


        <div class="btn-block">
          <p>By clicking Register, you agree on our <a href="https://drive.google.com/file/d/1DMiWe7wJ4qiogx1g2QI3-Zih5_pnn3fA/view" target="_blank">Privacy Policy for Shipley College</a>.</p>
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>