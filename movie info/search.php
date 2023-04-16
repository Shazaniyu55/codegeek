<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    
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
        #container{
            margin: 30px;
            padding: 10px;
        text-align: center;
        }
        #moviesCon{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        padding: 20px 10px;
        margin: 10px;
        grid-column-gap: 10px;
        grid-row-gap: 70px;
        }

        .Img{
        width:200px;
        cursor: pointer;
        

        }

        @media (max-width: 480px){
        #moviesCon{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        padding: 20px 10px;
        margin: 10px;
        grid-column-gap: 10px;
        grid-row-gap: 70px;
        }

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

    <div id="container">
        <div id="moviesCon">

        </div>

    </div>
    

<?php 
    if (isset($_POST['submit'])) {
        # code...
        $name = $_POST['search'];
        $API_KEY = "e4a7d726956a33773e8f99997ad8633b";
        $url = "https://api.themoviedb.org/3/search/movie?api_key=" .$API_KEY. "&include_adult=false&query=.$name. ";
        



$jsCode = <<<EOD
  fetch("$url")
  .then(response => response.json())
  .then(data =>{

    let movieContainer = document.getElementById("moviesCon")

    let res = data.results
    console.log(res)
    if(res.length === 0){
        alert('No results')
        window.location.href='index.html'
    }
    for(let i = 0; i < res.length; i++){
        const original_title = res[i].original_title
        const overview = res[i].overview
        const release_date = res[i].release_date
        const poster_path = res[i].poster_path




        let fullPath = "https://image.tmdb.org/t/p/w500/" + poster_path

        let movieDiv = document.createElement('div')
        movieDiv.setAttribute('id', 'movies')
         movieContainer.append(movieDiv)


        let posterImg = document.createElement('img')
        posterImg.setAttribute('src', fullPath)
        posterImg.classList.add('Img')
        movieDiv.append(posterImg)

        let h3 = document.createElement('h3')
        h3.innerHTML = original_title
        movieDiv.append(h3)

        let h4 = document.createElement('h3')
        h4.innerHTML = release_date
        movieDiv.append(h4)
            

        let pTag = document.createElement('p')
                        pTag.innerHTML = overview
                        movieDiv.append(pTag)

    }


  })
  .catch(error => console.error(error));
EOD;

echo "<script>$jsCode</script>";



    }


?>
</body>
</html>