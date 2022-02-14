
<!DOCTYPE html>
<html>
  
  <head>
    <title>Registration Form Result</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <?php include 'style.php';?>
  </head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password =>
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "customer");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $gender =  $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $name =  $_REQUEST['name'];
        $password = $_REQUEST['password'];
        $birthday = $_REQUEST['birthday'];
        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO details VALUES ('$gender', 
            '$email','$name','$password','$birthday')";
          
        if(mysqli_query($conn, $sql)){
            echo "<div class='main-block'> <h1>Data Subbmited ✓</h1>"; 
  
            echo nl2br("\nName: $name\n Email: $email\n "
                . "Gender: $gender\n Password: $password\n Date of birth: $birthday");

        } else{
            echo "ERROR: $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>