<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Room Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      background-image: url('{{asset('picture/L2.jpg')}}');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh; /* Ensure body takes full height */
      margin: 0;

    
    }

    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: inherit; /* Use the same background image */
      filter: blur(8px); /* Adjust the blur radius */
      z-index: -1; /* Place behind the content */
      pointer-events: none; /* Ensure it does not interfere with user interactions */
    }




    .room-images .room-image-group {
      display: none; /* Initially hide all image groups */
      grid-template-columns: repeat(2, 1fr); /* Two columns */
      gap: 10px; /* Space between images */
    }
    .room-images img {
     /* width: 100%;  */
     /* height: auto; */
      object-fit: cover; /* Ensures images cover the grid cell without distortion */
    }
    .logo-container {
      display: flex;
      justify-content: center;
      margin-bottom: 2rem;
    }
    .logo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      overflow: hidden;
      border: 2px solid #ddd;
    }
    .logo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>

<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://www.lipilimatower.co.tz" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{asset('logo.jpeg')}}" class="h-8" alt="lipilima logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-blacke">Lipilima Tower</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800           ">Book</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white 0  dark:border-gray-700">
      <li>
        <a href="{{url('/')}}" class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-black md:p-0 " >Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700  " aria-current="page">Book</a>
      </li>
     
      <li>
        <a href="{{url('/contact')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>




<div class="w-full max-w-4xl p-4 mx-auto bg-white rounded-lg shadow-lg mt-4">
    <!-- Logo Section -->
    <div class="logo-container">
        <div class="logo">
            <img src="{{asset('logo.jpeg')}}" alt="Logo">
        </div>
    </div>

    <form id="multiStepForm" action="{{url('/start_book')}}" method="POST">
        @csrf
        <!-- Step 1 -->
        <div class="step step-active" id="step1">
            <h2 class="text-2xl font-bold mb-4 text-center">  Room Type </h2>
            <div class="mb-4">
                <label class="block text-lg font-medium mb-2" for="roomType">Select Room Type then proceed below</label>
                <select id="roomType" name="roomType" class="w-full border border-gray-300 rounded-lg p-2" onchange="showRoomImages()" required>
                    <option value="" selected disabled>Select a Room Type</option>
                    <option value="standard">Standard Room </option>
                    <option value="deluxe">Deluxe Room </option>
                    <option value="executive">Executive </option>
                </select>
            </div>
            <div class="room-images">
                <!-- Standard Room Images -->
                <div id="standardImages" class="room-image-group">
                    <img src="{{asset('room_type/standard1.jpg')}}" class="w-auto"  alt="Standard Room 1">
                    <img src="{{asset('room_type/standard2.jpg')}}" class="w-auto" alt="Standard Room 2">
                    <img src="{{asset('room_type/standard3.jpg')}}" class="w-auto" alt="Standard Room 3">
                    <img src="{{asset('room_type/standard4.jpg')}}" class="w-auto" alt="Standard Room 4">
                </div>

                <!-- Deluxe Room Images -->
                <div id="deluxeImages" class="room-image-group">
                    <img src="{{asset('room_type/deluxe4.jpg')}}" alt="Deluxe Room 4">
                    <img src="{{asset('room_type/deluxe2.jpg')}}" alt="Deluxe Room 2">
                    <img src="{{asset('room_type/deluxe3.jpg')}}" alt="Deluxe Room 3">
                    <img src="{{asset('room_type/deluxe1.jpg')}}" alt="Deluxe Room 1">
                    
                </div>

                <!-- Suite Room Images -->
                <div id="executiveImages" class="room-image-group">
                    <img src="{{asset('room_type/executive1.jpg')}}" alt="Extended 1">
                    <img src="{{asset('room_type/executive2.jpg')}}" alt="Extended 2">
                    <img src="{{asset('room_type/executive3.jpg')}}" alt="Extended 3">
                    <img src="{{asset('room_type/executive4.jpg')}}" alt="Extended 4">
                </div>
            </div>

            <!-- START -->
            <div class="container mx-auto p-4">
        <ul>
           <H3 class="text-3xl">Services</H3>
            <li class='flex items-center space-x-3'>
                <span class="text-gray-950 flex items-center text-sm">
                <i class="fa-solid fa-check text-green-600"></i>
                    Free Wifi
                    <i class="fa-solid fa-wifi ml-2 text-gray-950"></i>
                </span>
            </li>
            <li class='flex items-center space-x-3'>
                <span class="text-gray-950 flex items-center text-sm">
                <i class="fa-solid fa-check text-green-600"></i>
                    Breakfast
                    <i class="fa-solid fa-mug-saucer"></i>
                </span>
            </li>
            <li class='flex items-center space-x-3'>
                <span class="text-gray-950 flex items-center text-sm">
                <i class="fa-solid fa-check text-green-600"></i>
                    Parking
                    <i class="fa-solid fa-car ml-2 text-gray-950"></i>
                </span>
            </li>
            <li class='flex items-center space-x-3'>
                <span class="text-gray-950 flex items-center text-sm">
                <i class="fa-solid fa-check text-green-600"></i>
                    Apartment
                    <i class="fa-solid fa-building ml-2 text-gray-950"></i>
                </span>
            </li>
            <li class='flex items-center space-x-3'>
                <span class="text-gray-950 flex items-center text-sm">
                <i class="fa-solid fa-check text-green-600"></i>
                    Bathroom
                    <i class="fa-solid fa-bath ml-2 text-gray-950"></i>
                </span>
            </li>
            <li class='flex items-center space-x-3'>
                <span class="text-gray-950 flex items-center text-sm">
                <i class="fa-solid fa-check text-green-600"></i>
                    Kitchen
                    <i class="fa-solid fa-utensils ml-2 text-gray-950"></i>
                </span>
            </li>
        </ul>
    </div>
    <!-- END -->
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4">Proceed</button>
        </div>
    </form>
</div>

<script>
    function showRoomImages() {
        // Hide all room image groups
        document.querySelectorAll('.room-image-group').forEach(group => {
            group.style.display = 'none';
        });

        // Get selected room type
        const roomType = document.getElementById('roomType').value;

        // Show the selected room images
        if (roomType) {
            const roomImageGroup = document.getElementById(roomType + 'Images');
            if (roomImageGroup) {
                roomImageGroup.style.display = 'grid'; // Display in 2x2 grid layout
            }
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>
