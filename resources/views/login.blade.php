<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>
    
<h1 class="text-red">Login</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
    <p style="color:red;">{{ $error }}</p>
    @endforeach
@endif

@if(Session::has('error'))
    <p style="color:red;">{{ Session::get('error') }}</p>
@endif
<h1>this is login form</h1>
<form action="{{ route('userLogin') }}" method="POST">
    @csrf

    <input type="email" name="email" placeholder="Enter Email">
    <br><br>
    <input type="password" name="password" placeholder="Enter Password">
    <br><br>
    <input type="submit" value="Login">

</form>
</body>
</html>

