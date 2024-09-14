<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Check-in and Check-out Form</title>
      <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
      <style>
         body {
         background-image: url('http://127.0.0.1:8000/picture/L2.jpg');
         background-size: cover; /* Makes the image cover the entire background */
         background-repeat: no-repeat; /* Prevents the image from repeating */
         background-position: center; /* Centers the image */
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
         .logo-container {
         display: flex;
         justify-content: center;
         margin-bottom: 2rem; /* Space between logo and form */
         }
         .logo {
         width: 100px; /* Adjust size as needed */
         height: 100px; /* Adjust size as needed */
         border-radius: 50%;
         overflow: hidden;
         border: 2px solid #ddd; /* Optional border */
         }
         .logo img {
         width: 100%;
         height: 100%;
         object-fit: cover; /* Ensures the image covers the circle */
         }
         .custom-confirm-button {
        background-color: #4CAF50; /* Green background */
        color: white; /* White text */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
    }

    .custom-cancel-button {
        background-color: #f44336; /* Red background */
        color: white; /* White text */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
    }

    .swal2-popup {
        font-size: 16px; /* Adjust as needed */
    }


    .custom-ok-button {
        background-color: #007bff; /* Blue background */
        color: white; /* White text */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
    }
  

      </style>
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
         function updatePhoneNumber() {
             const countryCodeSelect = document.getElementById('country-code');
             const phoneNumberInput = document.getElementById('phone');
             const hiddenPhoneInput = document.getElementById('hidden-phone');
         
             const countryCode = countryCodeSelect.value;
             const phoneNumber = phoneNumberInput.value;
         
             // Combine country code and phone number
             const combinedPhoneNumber = `+${countryCode}${phoneNumber}`;
         
             // Update hidden input field
             hiddenPhoneInput.value = combinedPhoneNumber;
         }
      </script>
   </head>
   <body >
      <div class="flex items-center justify-center min-h-screen  pt-36 ">
         <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
               <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
               <img src="https://www.lipilimatower.co.tz/assets/images/logo.jpg" class="h-8" alt="Flowbite Logo">
               <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Lipilima Tower</span>
               </a>
               <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
                  <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                     <span class="sr-only">Open main menu</span>
                     <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                     </svg>
                  </button>
               </div>
               <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                  <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                     <li>
                        <a href="#" class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-black md:p-0 md:dark:text-blue-500" >Home</a>
                     </li>
                     <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Book</a>
                     </li>
                     <li>
                        <a href="{{url('/contact')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class="w-full max-w-4xl p-8 bg-white shadow-lg rounded-lg">
            <!-- Logo Section -->
            <div class="logo-container">
               <div class="logo">
                  <img src="https://www.lipilimatower.co.tz/assets/images/logo.jpg" alt="Logo">
               </div>
            </div>
            <form id="booking-form" action="{{route('step3_book.store')}}" method="POST">
               <h2 class="text-2xl font-bold mb-4">Step 3: Personal Detail </h2>
               <!-- Firstname and Lastname -->
               <div class="mb-4 flex space-x-4">
                  <div class="w-full">
                     <label for="firstname" class="block text-lg font-medium mb-2">Firstname:</label>
                     <input type="text" id="firstname" name="firstname" class="w-full border border-gray-300 rounded-lg p-4" placeholder="eg. John" required>
                  </div>
                  <div class="w-full">
                     <label for="lastname" class="block text-lg font-medium mb-2">Lastname:</label>
                     <input type="text" id="lastname" name="lastname" class="w-full border border-gray-300 rounded-lg p-4" placeholder="eg. Doe"  required>
                  </div>
               </div>
               <!-- Email -->
               <div class="mb-4">
                  <label for="email" class="block text-lg font-medium mb-2">Email:</label>
                  <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg p-3" placeholder="eg. username@email.com"  required>
               </div>
               @csrf
               <!-- Phone Number with Country Code -->
               <div class="mb-4 flex space-x-4 items-center">
                  <div class="w-1/4">
                     <label for="country-code" class="block text-lg font-medium mb-2">Country:</label>
                     <select id="country-code" name="country-code" class="w-full border mySelectClass border-gray-300 rounded-lg p-5 h-10"  onchange="updatePhoneNumber()">
                        <option value="1">+1</option>
                        <option value="44">+44 </option>
                        <option value="255">+255 </option>
                        <option value="254">+254 </option>
                     </select>
                  </div>
                  <div class="w-3/4">
                     <label for="phone" class="block text-lg font-medium mb-2">Phone Number:</label>
                     <input type="tel" id="phone" name="phone" class="w-full border  border-gray-300 rounded-lg p-4"   placeholder="eg. 700-000-000"  oninput="updatePhoneNumber()" required>
                  </div>
               </div>
               <!-- Hidden Phone Number Input -->
               <input type="hidden" id="hidden-phone" name="hidden-phone">
               <input type="hidden" name="checkin_date" value="{{$checkin_date}}">
               <input type="hidden" name="checkout_date" value="{{$checkout_date}}">
               <input type="hidden" name="room_number" value="{{$room_number}}">
               <input type="hidden" name="number_of_days" value="{{$days_stayed}}">
               <input type="hidden" name="number_of_guest" value="{{$number_of_guest}}">
               <input type="hidden" name="total_amount" value="{{$total_amount}}">
               <!-- Submit Button -->
               <button type="submit" id="book-button" class="bg-blue-500 text-white py-3  px-3 rounded-lg">Book</button>
            </form>
         </div>
      </div>
      <!-- flexx -->
      @if (session('success'))
      <script>
         document.addEventListener('DOMContentLoaded', function() {
             Swal.fire({
                 title: 'Success!',
                 text: '{{ session('success') }}',
                 icon: 'success',
                 confirmButtonText: 'OK',
                 customClass: {
                    confirmButton: 'custom-ok-button' // Apply the custom class to the confirm button
                }
             }).then((result) => {
                 if (result.isConfirmed) {
                     // Redirect or perform another action if needed
                     window.location.href = '/'; // Replace with your desired URL
                 }
             });
         });
      </script>
      @endif
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script>
         $(document).ready(function() {
           $('.mySelectClass').select2();
         });
      </script>
      <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
      <script>
   document.addEventListener('DOMContentLoaded', function() {
      const bookButton = document.getElementById('book-button');
      bookButton.addEventListener('click', function() {
         Swal.fire({
            title: 'Are you sure?',
            text: 'Do you want to proceed with the booking?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, book it!',
            cancelButtonText: 'No, cancel',
            reverseButtons: true,
            customClass: {
                confirmButton: 'custom-confirm-button',
                cancelButton: 'custom-cancel-button'
            }
         }).then((result) => {
            if (result.isConfirmed) {
               // Show loading state
               Swal.fire({
                  title: 'Processing...',
                  text: 'Please wait a moment.',
                  icon: 'info',
                  allowOutsideClick: false,
                  showConfirmButton: false,
                  customClass: {
                      container: 'custom-loading-container'
                  }
               });

               // Wait for 2 seconds before submitting the form
               setTimeout(() => {
                  document.getElementById('booking-form').submit();
               }, 2000);
            }
         });
      });
   });
</script>
   </body>
</html>