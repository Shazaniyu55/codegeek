
//! API key

const API_KEY = "e4a7d726956a33773e8f99997ad8633b"
//let movieCon = document.querySelector("#container ")
let cover = document.querySelectorAll('.child')

const link = `https://api.themoviedb.org/3/discover/movie?api_key=${API_KEY}&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_watch_monetization_types=flatrate`
fetch(link)
.then(response => response.json())
.then(data => {
        let result = data.results  
        console.log(result)
        for (let i = 0; i < result.length; i++) {
         
        for (let i = 0; i < cover.length; i++) {
            

            const poster_path =result[i].poster_path
            const movie_name = result[i].original_title
           
            let fullPath = "https://image.tmdb.org/t/p/w500/" + poster_path


            //!Create an image tag
            let img = document.createElement('img')
            img.setAttribute('src', fullPath)
            img.setAttribute('class', 'child-img')
            cover[i].append(img)

          
        }
            
            


            
                       
                        
               
             

        }   
    

})

.catch(err => console.log(err))