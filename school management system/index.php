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
    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');


    .body-home{
        background: url(Garden.jpg);
        background-size: cover;
        background-attachment: fixed;
    }
    .welcome-text{
        min-height: 80vh;
        border-radius: 10px;
        margin: auto;
    }
    .welcome-text img{
        width: 100px;
    }
    .welcome-text h2{
        color: #eee;
        font-size: 15px;
        font-family: 'Lobster', cursive;
    }

    .welcome-text p{
        color: #222;
        background: rgba(255, 255,255, 0.5);
        padding: 5px;
        border-radius: 4px; 
        font-size: 24px;
        font-family: 'Lobster', cursive;
    }
    #about{
        min-height: 100vh;
    }
    #about .card-1{
        max-width: 600px;
        width: 90%;
    }
    #contact{
        min-height: 100vh;
    }
    #contact form{
        max-width: 600px;
        width: 90%;
        background: rgba(255, 255,255, 0.5);
        padding: 20px;
    }
    textarea{
        resize: none;
    }
</style>

</head>
<body  class="body-home">


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="wschool.png" width="30">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admission
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login_form.php">Login</a></li>
            <li><a class="dropdown-item" href="student.php">Register</a></li>
         
            
          </ul>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>

<section class="welcome-text d-flex justify-content-center align-items-center flex-column">
    <img src="wschool.png">
    <h2>Welcome to w-school</h2>
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

</section>


<section id="about"
class=" d-flex justify-content-center align-items-center flex-column">
<div class="card mb-3 card-1" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="wschool.png" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">About</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">W-school</small></p>
      </div>
    </div>
  </div>
</div>

</section>



<section id="contact"
class=" d-flex justify-content-center align-items-center flex-column">


<form>
    <h3>contact</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <textarea  class="form-control" rows="4"> </textarea>
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</section>

<div class="text-center text-light">
    <h4>copyright &copy; codegeek 2023 All right reserved.</h4>
</div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js
">


</script>


</body>
</html>