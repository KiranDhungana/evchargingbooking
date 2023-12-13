<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
 <div class="container">
    <iframe
    width="600"
    height="450"
    frameborder="0"
    style="border:0"
<<<<<<< HEAD
    src="https://www.google.com/maps/embed/v1/place?q=27.6770765,85.3327415&key=AIzaSyDqRk8ooQjKQgueGWQ485IjEO9t0-Y0CSQ"
=======
    src="https://www.google.com/maps/embed/v1/place?q=27.6928433,85.3239504&key=AIzaSyDqRk8ooQjKQgueGWQ485IjEO9t0-Y0CSQ"
>>>>>>> 42a93db7813014ff677a02df90691c5b5bc61e1b
    allowfullscreen
></iframe> 

    <h1>How to Get Current User Location with Laravel - ItSolutionStuff.com</h1>
    <button>Send Data</button>
    
    <form action="/location" method="post" >
    @csrf
<input hidden id="latitude" name="latitude" type="int" value="afdsf" >    
<input hidden id="longitude" name="longitude" type="int" value="fasdg" >    
<button   type="submit"></button>
</form>

<button  id="sendButton" >
Send
</button>
    {{-- <div class="card">
        <div class="card-body">
            @if($currentUserInfo)
                <h4>IP: {{ $currentUserInfo->ip }}</h4>
                <h4>Country Name: {{ (int)$currentUserInfo->countryName-0.02418 }}</h4>
                <h4>Country Code: {{ (int)$currentUserInfo->countryCode+0.00415 }}</h4>
                <h4>Region Code: {{ $currentUserInfo->regionCode }}</h4>
                <h4>Region Name: {{ $currentUserInfo->regionName }}</h4>
                <h4>City Name: {{ $currentUserInfo->cityName }}</h4>
                <h4>Zip Code: {{ $currentUserInfo->zipCode }}</h4>
                <h4>Latitude: {{ $currentUserInfo->latitude }}</h4>
                <h4>Longitude: {{ $currentUserInfo->longitude }}</h4>
            @endif
        </div>
    </div> --}}
</div>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    

  const successCallback = (position) => {

var lat   =document.getElementById("latitude");
var long   =document.getElementById("longitude");
lat.value =position.coords.latitude;
long.value=position.coords.longitude;
  console.log(position.coords.latitude);
  console.log(position.coords.longitude);
};

const errorCallback = (error) => {
  console.log(error);
};

navigator.geolocation.getCurrentPosition(successCallback, errorCallback);

</script>
  
</body>

