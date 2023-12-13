<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    erokjadsflkjds
<form action="/setnewpassword" method="post">
    @csrf
    <input hidden type="email" name="email" value="{{$email}}">
    <label for="passwords">Password</label>
    <input type="password"  name="password"><br><br>
    <input type="submit" value="Submit">
</form>
    
</body>
</html>