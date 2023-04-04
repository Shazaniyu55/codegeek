const API_KEY = "6530ff0e049d8f4b75a21ee0a8f613c9";



function getWeather(){
    const location = document.getElementById("location").value;

    const url = `https://api.openweathermap.org/data/2.5/weather?q=${location}&appid=${API_KEY}`;
    fetch(url)
    .then(response =>response.json())
    .then(data => {
        const temp = data.main.temp;
        const description = data.weather[0].description;
        document.getElementById("temp").innerHTML = `Temperature: ${temp}°C`;
      document.getElementById("description").innerHTML = `Description: ${description}`;
    })
    .catch(error => alert(`${location} is not a valid state name ${error}`));
     
}