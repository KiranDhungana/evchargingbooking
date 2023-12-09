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
    src="https://www.google.com/maps/embed/v1/place?q={{ $currentUserInfo->latitude }},{{ $currentUserInfo->longitude }}&key=AIzaSyDqRk8ooQjKQgueGWQ485IjEO9t0-Y0CSQ"
    allowfullscreen
></iframe>

    <h1>How to Get Current User Location with Laravel - ItSolutionStuff.com</h1>
    <div class="card">
        <div class="card-body">
            @if($currentUserInfo)
                <h4>IP: {{ $currentUserInfo->ip }}</h4>
                <h4>Country Name: {{ $currentUserInfo->countryName }}</h4>
                <h4>Country Code: {{ $currentUserInfo->countryCode }}</h4>
                <h4>Region Code: {{ $currentUserInfo->regionCode }}</h4>
                <h4>Region Name: {{ $currentUserInfo->regionName }}</h4>
                <h4>City Name: {{ $currentUserInfo->cityName }}</h4>
                <h4>Zip Code: {{ $currentUserInfo->zipCode }}</h4>
                <h4>Latitude: {{ $currentUserInfo->latitude }}</h4>
                <h4>Longitude: {{ $currentUserInfo->longitude }}</h4>
            @endif
        </div>
    </div>
</div>
  
</body>

