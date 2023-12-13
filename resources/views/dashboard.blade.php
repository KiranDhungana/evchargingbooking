<h1>Hii {{ auth()->user()->fname }}
     {{ auth()->user()->lname }}
      {{ auth()->user()->address }}
       {{ auth()->user()->dob }}
        {{ auth()->user()->email }}
        {{ auth()->user()->pnumber }}
    <button type="button" onclick="window.location='{{ url("logout") }}'">Button</button>


</h1>
