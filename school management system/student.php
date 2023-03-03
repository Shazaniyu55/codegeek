<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W-school</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
">
<link rel="icon" href="wschool.png">

<style>


.register{
    margin: 20px;
    padding: 20px;
}

</style>


</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">W-school</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admission
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login_form.php">Login</a></li>
            <li><a class="dropdown-item" href="student.php">Register</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>



<?php
    error_reporting(0);
        @include 'config.php';

        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $dob = $_POST['DOB'];
            $image = $_FILES['image']['name'];


            if(empty($image)){
                echo "<script>
                alert('Insert image');
                </script>";
            }

            $sql = "INSERT INTO student(firstname, lastname, email, DOB, image) VALUES('$firstname', '$lastname', '$email', '$dob', '$image')";
            if(mysqli_query($conn, $sql)){
                echo "New details inserted successfully";
               
                
            }
            

            
        }
    
    
    ?>
    
            

            <div class="register">







                <form action="student.php" method="POST" enctype="multipart/form-data">

                    <label for="firstname">firstname</label>
                    <input type="text" name="firstname" class="form-control" required><br><br>

                    
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" required><br><br>


                    
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required><br><br>


                    
                    <label for="DOB">DOB</label>
                    <input type="text" name="DOB" placeholder="YYYY/DD/MM" class="form-control"  required><br><br>

                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control"><br><br>
                    
                   <input type="submit" name="submit" vlaue="submit" class="btn btn-success">

                </form>
            </div>
                
            
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>