var APPID = "fd9d818453d62030f4c0fe62894e0460";
var loc;
var wind;
var humidity;
var temp;
var direction;
var icon;

function updateByZip(zip){
  var url = "https://api.openweathermap.org/data/2.5/weather?" +
    "zip=" + zip +
    "&APPID=" + APPID;
  sendRequest(url);
}

function updateByGeo(lat,lon){
    var url = "https://api.openweathermap.org/data/2.5/weather?" +
    "lat=" + lat +
    "&lon=" + lon +
    "&APPID=" + APPID;
  sendRequest(url);
}

function sendRequest(url){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
        var data = JSON.parse(xmlhttp.responseText);
        var weather = {};
        weather.icon = data.weather[0].id;
        weather.humidity = data.main.humidity;
        weather.wind = data.wind.speed;
        weather.direction = degreesToDirection(data.wind.deg);
        weather.loc = data.name;
        weather.temp = K2F(data.main.temp);
        update(weather);
    }
  };
  xmlhttp.open("GET",url,true)
  xmlhttp.send();
}

function degreesToDirection(degrees){
  var range = 360/16;
  var low = 360-range/2;
  var high = (low + range) % 360;
  var angles = ["N","NNE","ENE","E","ESE","SE","SSE","S","SSW","SW","WSW","W","WNW","NW","NNW"]
  for(i in angles){

      if(degrees>=low && degrees < high)

          return angles[i];

    low = (low+range) % 360;
    high = (high + range) % 360;
  }
  return "N";
}

function K2C(k){
  return Math.round(k - 273.15);
}

function K2F(k){
  return Math.round(k*(9/5)-459.67);
}

function update(weather){
loc.innerHTML = weather.loc;
wind.innerHTML = weather.wind;
humidity.innerHTML = weather.humidity;
temp.innerHTML = weather.temp;
direction.innerHTML = weather.direction;
icon.src = "imgs/codes/" + weather.icon + ".png";

}

function showPosition(position){
  updateByGeo(position.coords.latitude, position.coords.longitude);
}


window.onload = function() {

loc = document.getElementById("location");
wind = document.getElementById("wind");
humidity = document.getElementById("humidity1");
temp = document.getElementById("temperature");
direction = document.getElementById("direction");
icon = document.getElementById("icon");

    if(!navigator.geolocation){
      navigator.geolocation.getCurrentPosition(showPosition);
    } else{
      var zip = window.prompt("could not discover your location. what is your zip code?");
      updateByZip(zip);
}
}
