<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-in and Check-out Form</title>
    <style>
        body {
            background-image: url('http://127.0.0.1:8000/picture/L2.jpgg');
            background-size: cover; /* Makes the image cover the entire background */
            background-repeat: no-repeat; /* Prevents the image from repeating */
            background-position: center; /* Centers the image */
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

<body class="flex items-center justify-center min-h-screen ">



    <div class="w-full max-w-lg p-8 bg-white shadow-lg rounded-lg">
        <!-- Logo Section -->
        <div class="logo-container">
            <div class="logo">
                <img src="https://www.lipilimatower.co.tz/assets/images/logo.jpg" alt="Logo">
            </div>
        </div>

        <form id="booking-form" action="{{route('step3_book.store')}}" method="POST">
        <h2 class="text-2xl font-bold mb-4">Step 3: Person Detail </h2>
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
                    <select id="country-code" name="country-code" class="w-full border mySelectClass border-gray-300 rounded-lg p-5"  onchange="updatePhoneNumber()">
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
            
            <!-- Submit Button -->
   
            <button type="submit" class="bg-blue-500 text-white py-3  px-3 rounded-lg">Book</button>
        </form>
    </div>

  
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
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
</body>
</html>
