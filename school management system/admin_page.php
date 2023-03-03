<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
">
<link rel="icon" href="wschool.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    
    <style>
    *{
        list-style: none;
        text-decoration: none;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'open sans', sans-serif; 

    }
    .wrapper .side-bar{
            background: rgb(5,68,104);
            position: fixed;
            top: 0;
            left: 0;
            width: 225px;
            height: 100%;
            padding: 20px 0;
            transition: all 0.5s ease;
            }

            .wrapper .side-bar .profile{
                margin-bottom: 30px;
                text-align: center;
            }

            .wrapper .side-bar .profile img{
                display: center;
                width: 130px;
                height: 130px;
                border-radius: 50%;
                margin: 50px auto;
            }
            .wrapper .side-bar .profile h3{
                color: white;
                margin: 10px 0 5px;
            }

            .wrapper .side-bar .profile p{
                color: rgb(206, 204, 253);
                font-size: 16px;
            }

            .wrapper .side-bar ul li a{
                display: block;
                padding: 13px 30px;
                border-bottom: 1px solid #10558d;
                color: rgb(241, 237,237);
                font-size: 16px;
                position: relative;
            }

            .wrapper .side-bar ul li a:hover,
            .wrapper .side-bar ul li a.active{
                color: #0c7db1;
                background: white;
                border-right: 2px solid rgb(5, 68, 104);
            }

            .wrapper .side-bar ul li a:hover::before,
            .wrapper .side-bar ul li a.active::before{
                display: block;
            }
            .wrapper .section{
                width: calc(100% - 225px);
                margin-left: 225px;
                transition: all 0.5s ease;
            }

            .wrapper .section .top-nav{
                background: rgb(7, 105, 185);
                height: 60px;
                display: flex;
                align-items: center; 
                padding: 0 30px;
            }

            .top-nav h1{
                color: white;
                transform: translateX(450px);
            }

            .wrapper .section .top-nav .hamburg a{
                font-size: 30px;
                color: white;
            }

            body.active .wrapper .side-bar{
                left: -225px;
            }
            body.active .wrapper .section{
                margin-left: 0;
                width: 100%;
            }

            

        #container{
           
            padding: 50px;
            display: grid;
            border-radius: 20px 10px;
            background: rgb(213,221,222);
            background: linear-gradient(90deg, rgba(213,221,222,1) 0%, rgba(225,236,236,1) 10%, rgba(216,226,228,1) 66%);
            width:900px;
            height: 300px;
            grid-template-columns: 300px 1fr;
            grid-gap: 10px;
            padding: 10px;
            margin-top: 50px;
            margin: 50px;
            transform: translateX(200px);
        }
        #container img{
            padding: 20px;
        }


        
</style>
</head>
<body>
                <div class="wrapper">
                    <div class="side-bar">
                        <div class="profile">
                            <img src="user1.png">
                            
                        </div>
                        <ul>
            
            <li> <a href="home.php"> 
               <span class="item"> <i class="fa fa-home">&ensp;Dashboard</i></span> 
            </a> </li>
            <li> <a href="about.php">
                <span class="item"> <i class="fas fa-qrcode">&ensp;About</i></span>
             </a>
                 </li>
            <li> <a href="articles.php">
                <span class="item"> <i class="fa fa-book">&ensp;Articles</i></span>
                 </a> 
                </li>
        </ul>

                    </div>

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

        <li class="nav-item">
          <a class="nav-link" href="logout.php">log out</a>
        </li>

       
         
            
          </ul>
        </li>
        
      </ul>-
     
    </div>
  </div>
</nav>


                    </div>





    

    <main>
        <div id="container">
        <h3>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h3>

        </div>


        
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js
">


</script>

    <script>
        var hamburg = document.querySelector(".hamburg");
        hamburg.addEventListener('click', function(){
            document.querySelector("body").classList.toggle("active")
        });
    </script>



    
</body>
</html>