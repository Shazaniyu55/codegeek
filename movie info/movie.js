
//? Toggle the dropdown
var togglebtn = document.getElementsByClassName('toggle-button')[0]
var brandlink = document.getElementsByClassName('brand-links')[0]

    togglebtn.addEventListener('click', ()=>{
        brandlink.classList.toggle('active')
    })


const API_KEY = "e4a7d726956a33773e8f99997ad8633b"
let movieContainer = document.getElementById('moviesCon')


    
document.getElementById("search").onclick = function(event){
        event.preventDefault()
        let inpu = document.getElementById('movieSearch').value
        
        const url =`https://api.themoviedb.org/3/search/movie?api_key=${API_KEY}&include_adult=false&query=${inpu}`
        
        //! check to see if a value is beigned entered
            if(inpu  === ""){
                alert("Type in some words");
            }else{
                //*Fetch request to the API
                fetch(url)
                
                .then(response => {
                    if (response.ok) {
                //! Parse the response JSON data
                    return response.json();
                } else {
                    throw new Error(`Error ${response.status}: ${response.statusText}`);
                }
                })
                .then(data  => {
                    //! grabing the results from the api
                    let res = data.results
                   
                    
    
                     console.log(data)
    
                     for (let i = 0; i < res.length; i++) {
                        const poster_path = res[i].poster_path
                        const overview = res[i].overview
                        const original_title = res[i].original_title
                        const release_date = res[i].release_date
                        const movieId = res[i].id
                        const movieVid = res[i].video
                        const imbdRating = res[i].vote_average

                        console.log(movieVid)
    
    
    
    
    
                        
                        let fullPath = "https://image.tmdb.org/t/p/w500/" + poster_path
                        //let videoPath = `https://api.themoviedb.org/3/movie/${movieId}/videos?api_key=${API_KEY}&&append_to_response=${movieVid}`
        
                     
                      
                        let movieDiv = document.createElement('div')
                        movieDiv.setAttribute('id', 'movies')
                        movieContainer.append(movieDiv)
                        //console.log(movieContainer)
    
                        
    
                        //! To crate an img
                           let posterImg = document.createElement('img')
                           posterImg.setAttribute('src', fullPath)
                           posterImg.setAttribute('data-id', movieId)
                           let id = posterImg.getAttribute('data-id')
                           let imgSrc = posterImg.getAttribute('src')
                           posterImg.classList.add('Img')
    
    
    
                           //! when the image is clicked 
                           posterImg.addEventListener('click', ()=>{
    
                            //! for each click we are storing the id and img path in an js object
                            const Data = {
                                movie_id: id,
                                movie_img: imgSrc,
                                movie_title: original_title,
                                movie_vid: movieVid,
                                movie_view: overview,
                                movie_rating: imbdRating,
                                movie_releas: release_date


    
    
                            }
                            localStorage.setItem("Data", JSON.stringify(Data))
                             
                            //! encoding the url
                            let uri = `?id=${Data.movie_id}`;
                            let encoded = encodeURI(uri);
                            window.location.href = 'movies.html' + encoded
    
    
                           })
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
                     
                    
                     
                    
    
    
                      
                        
                    
                    
                        
                        
                   
                     
    
                    
    
                    
                    
                } )
                .catch(error => {
                    alert(`Check internet connection ${error}`)
    
                })
    
            }
            
            }
            





        


        
    