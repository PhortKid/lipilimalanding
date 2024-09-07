<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-in and Check-out Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

    <div class="w-full max-w-lg p-8 bg-white shadow-lg rounded-lg">
        <form id="booking-form">
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

            <!-- Phone Number with Country Code -->
            <div class="mb-4 flex space-x-4 items-center">
                <div class="w-1/4">
                    <label for="country-code" class="block text-lg font-medium mb-2">Country Code:</label>
                    <select id="country-code" name="country-code" class="w-full border border-gray-300 rounded-lg p-2" onchange="updatePhoneNumber()">
                        <option value="1">+1 (USA)</option>
                        <option value="44">+44 (UK)</option>
                        <option value="91">+91 (India)</option>
                        <!-- Add more country codes as needed -->
                    </select>
                </div>
                <div class="w-3/4">
                    <label for="phone" class="block text-lg font-medium mb-2">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded-lg p-2" oninput="updatePhoneNumber()" required>
                </div>
            </div>

            <!-- Hidden Phone Number Input -->
            <input type="hidden" id="hidden-phone" name="hidden-phone">

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Submit</button>
        </form>
    </div>

</body>
</html>
