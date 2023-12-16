<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    <title>Document</title>
</head>
<style>
    /* .profile-container .profile-picture img{
        width:300px;

    } */
    .profile-container{
        display:flex;
    }
    body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  margin: 0;
  padding: 0;
}

.container {
    width:30% !important;
  max-width: 500px;
  margin: 0;
  padding: 20px;
}

.card {
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.profile-picture {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  overflow: hidden;
  margin: 0 auto 20px;
}

.profile-picture img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.name {
  font-size: 24px;
  margin: 0;
}

.phonenumber {
  font-size: 18px;
  color: #777;
  margin: 10px 0;
}

.email {
  color: #555;
  margin: 10px 0;
}

.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.button:hover {
  background-color: #0056b3;
}

.profile-right-section{
    width:60%;
}
.profile-right-section .mini-nav{
    margin:1rem 0;
}
.profile-right-section .mini-card{
    margin:10px;
}
.profile-post-cards{
    display:flex;
    flex-wrap:wrap;
}
.profile-post-cards .max-w-sm{
   max-width:17rem;
}
</style>
<body>
    @include('reusecomp.navbar')
    <div class="profile-container">
<div class="container">
    <div class="card">
      <div class="profile-picture">
        <img src="https://img.freepik.com/premium-photo/cartoon-game-avatar-logo-gaming-brand_902820-465.jpg" alt="Profile Picture">
      </div>
      <h2 class="name">{{Str::title(Auth::user()->fname) }} {{ Str::title(Auth::user()->lname)}}</h2>
      <h3 class="phonenumber">{{(Auth::user()->pnumber)  }}|</h3>
      <p class="email">{{(Auth::user()->email)  }}</p>
      <a href="/setting/{{Auth::user()->id}}/{{Auth::user()->fname}}" class="button">Edit Profile</a>
    </div>
</div>

<div class="profile-right-section">

<div class="mini-nav">
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
        <li class="me-2">
            <a href="#" aria-current="page" class="inline-block p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">Profile</a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Dashboard</a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Settings</a>
        </li>
        
    </ul>

</div>

<div class="profile-post-cards">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mini-card">
        <a href="#">
            <img class="rounded-t-lg" src="https://sensordynamics.com.au/wp-content/uploads/2023/06/smart-parking.jpeg" alt="" />
        </a>
        <div class="p-5">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Rs.100
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mini-card">
        <a href="#">
            <img class="rounded-t-lg" src="https://sensordynamics.com.au/wp-content/uploads/2023/06/smart-parking.jpeg" alt="" />
        </a>
        <div class="p-5">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Rs.100
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mini-card">
        <a href="#">
            <img class="rounded-t-lg" src="https://sensordynamics.com.au/wp-content/uploads/2023/06/smart-parking.jpeg" alt="" />
        </a>
        <div class="p-5">
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Rs.100
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
   

</div>





</div>

    </div>
</body>
</html>