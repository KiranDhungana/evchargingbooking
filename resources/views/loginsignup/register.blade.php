<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <title>Signup</title>
</head>
<style>
  .sm\:max-w-sm {
    max-width:35rem;
  }
</style>
<body>
  {{-- @if($errors->any())
    @foreach($errors->all() as $error)
    <p style="color:red;">{{ $error }}</p>
    @endforeach
@endif

@if(Session::has('error'))
    <p style="color:red;">{{ Session::get('error') }}</p>
@endif --}}
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
  <form action="{{ route('studentRegister') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
   @csrf
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
        <div class="mt-2.5">
          <input type="text" name="fname" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        @error('fname')
                    <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                @enderror
        </div>
      </div>
      <div>
        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
        <div class="mt-2.5">
          <input type="text" name="lname" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('title')
                    <div id="lname" style="color:red" class="form-text">{{ $message }}</div>
                @enderror
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="DOB" class="block text-sm font-semibold leading-6 text-gray-900">DOB</label>
        <div class="mt-2.5">
          <input type="date" name="dob" id="DOB" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
         @error('dob')
                    <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                @enderror
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="gender" class="block text-sm font-semibold leading-6 text-gray-900">Gender</label>
        <div class="mt-2.5">
        <div class="container flex flex-auto">
          <div class="px-5">
          <input type='radio' id='male' name="gender" value="male" checked  >
          <label for='male'>Male</label>
          </div>
          <div>
          <input type='radio' id='female' name="gender" value="female">
          <label for='female'>Female</label>
          </div>
                            
                         
                        </div>
          
        </div>
      </div>
      <div >
        <label for="Address" class="block text-sm font-semibold leading-6 text-gray-900">Address</label>
        <div class="mt-2.5">
          <input type="text" name="address" id="Address" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('address')
                    <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                @enderror
        </div>
      </div>
      <div >
        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
        <div class="mt-2.5">
          <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('email')
                    <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                @enderror
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone number</label>
        <div class="relative mt-2.5">
          <div class="absolute inset-y-0 left-0 flex items-center">
            <label for="country" class="sr-only">Country</label>
         
         
          </div>
          <input type="tel" value="+977" name="pnumber" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('pnumber')
                    <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                @enderror
        </div>
      </div>
      
      <div class="sm:col-span-2">
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('password')
                    <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                @enderror
          </div>
        </div>
      <div class="sm:col-span-2">
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
            
          </div>
          <div class="mt-2">
            <input  name="password_confirmation" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
           @error('password_confirmation')
                    <div id="emailHelp" style="color:red" class="form-text">{{ $message }}</div>
                @enderror
          </div>
        </div>
      
      
    </div>
    <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">SignUp</button>
    </div>
  </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Already have an account?
      <a  href="/login" class="font-semibold leading-6 text-indigo hover:text-indigo">Login</a>
    </p>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
  $(document).ready(function() {
  
         toastr.options.timeOut = 1000;
           @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error($error);
    <p style="color:red;">{{ $error }}</p>
    @endforeach
@endif
        //  @if (Session::has('error'))
        //      toastr.error('{{ Session::get('error') }}');
        //  @elseif(Session::has('success'))
        //      toastr.success('{{ Session::get('success') }}');
        //  @endif
  }
  )

</script>

</body>
</html>