<?php
include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        nav{
            background-color: #2877A0;
            text-align: center;
           }
           nav ul{
                display: inline-flex;
                list-style: none;
                color: white;
                
            }
            nav ul li{
                
               width: 50px;
               padding: 15px;
               margin: 15px;
                
            }
            nav ul li a{
                text-decoration: none;
                color: white;
            }
            .comment-display{
                margin: 20px;
                padding: 10px;
            }
            .comments{
                background-color: #E9E4E4 ;
            }
            .comments p{
                margin: 20px;

            }
            .comments img{
                margin: 20px;
            }


    </style>
</head>


<body>

<nav>
        <ul>
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="comment.php"><i class="fa fa-bell"></i></a></li>
            <li><a href="#"><i class="fa fa-search" id="search"></i></a></li>
            
        </ul>
    </nav>




<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $sql_comment = "INSERT INTO user(name, comment) VALUES('$name', '$comment')";

        if(mysqli_query($conn, $sql_comment)){
            header("Location:index.html?message sent successfully");
        }

    }


?>

<div class="comment-display">
    <?php
         $sql = " SELECT * FROM  user";
         $result = mysqli_query( $conn, $sql);
         $queryResult = mysqli_num_rows($result);
    
         if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='comments'>
                    <img src='user1.png' style='width: 50px;'>
                    <div class='texts'>
                       <p> Name: ".$row['name']."<br></p>
                       <p>Comment: ".$row['comment']."</p>
                       <p> Date: ".$row['date']."</p>
                       
                       
                    </div>

                    

                </div>";
               

            }
            

        }
    
    
    ?>


</div>
    
</body>
</html>