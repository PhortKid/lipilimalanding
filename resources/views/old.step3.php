<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-in and Check-out Form</title>
    <style>
        body{
  background-image: url('path/to/your/image.jpg');
  background-size: cover; /* Optional: makes the image cover the entire element */
  background-repeat: no-repeat; /* Optional: prevents the image from repeating */
  background-position: center; /* Optional: centers the image in the element */
}
    </style>
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
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<?php /*
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="bg-red-500 text-white p-4 rounded-md mb-4">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded-md mb-4">
        {{ session('success') }}

  <a href="/">
      
        <span class="ml-1 font-bold text-lg"> click Back</span>
    </a>
 
    </div>
@endif

@if(session('error'))
    <div class="bg-red-500 text-white p-4 rounded-md mb-4">
        {{ session('error') }}
    </div>
@endif

@if(isset($success_message))

@else
@endif
*/

?>
    <div class="w-full max-w-lg p-8 bg-white shadow-lg rounded-lg">
      
        <form id="booking-form" action="{{route('step3_book.store')}}" method="POST">
            <!-- Firstname and Lastname -->
            <div class="mb-4 flex space-x-4">
                <div class="w-full">
                    <label for="firstname" class="block text-lg font-medium mb-2">Firstname:</label>
                    <input type="text" id="firstname" name="firstname" class="w-full border border-gray-300 rounded-lg p-2" required>
                </div>
                <div class="w-full">
                    <label for="lastname" class="block text-lg font-medium mb-2">Lastname:</label>
                    <input type="text" id="lastname" name="lastname" class="w-full border border-gray-300 rounded-lg p-2" required>
                </div>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-lg font-medium mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>
            @csrf

            <!-- Phone Number with Country Code -->
            <div class="mb-4 flex space-x-4 items-center">
                <div class="w-1/4">
                    <label for="country-code" class="block text-lg font-medium mb-2">Country:</label>
                    <select id="country-code" name="country-code" class="w-full border border-gray-300 rounded-lg p-2" onchange="updatePhoneNumber()">
                        <option value="1">+1 (USA)</option>
                        <option value="44">+44 (UK)</option>
                        <option value="255">+255 (Tanzania)</option>
                        <option value="254">+254 (Kenya)</option>
                      
                    </select>
                </div>
                <div class="w-3/4">
                    <label for="phone" class="block text-lg font-medium mb-2">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-lg p-2" oninput="updatePhoneNumber()" required>
                </div>
            </div>

            <!-- Hidden Phone Number Input -->
            <input type="hidden" id="hidden-phone" name="hidden-phone">
 
            <input type="hidden" name="checkin_date"  value="{{$checkin_date}}">
            <input type="hidden" name="checkout_date"  value="{{$checkout_date}}">
            <input type="hidden" name="room_number"  value="{{$room_number}}">
            <input type="hidden" name="number_of_days"  value="{{$days_stayed}}">
            <input type="hidden" name="number_of_guest"  value="this is {{$number_of_guest}}">
            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Book</button>
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
                        // For example, you can redirect to another page here
                         window.location.href = '/'; // Replace with your desired URL
                    }
                });
            });
        </script>
    @endif
</body>
</html>
