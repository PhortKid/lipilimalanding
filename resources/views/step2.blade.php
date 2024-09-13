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
    </style>
</head>
<body>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://www.lipilimatower.co.tz/assets/images/logo.jpg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Lipilima Tower</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book</button>
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
                        <a href="{{url('/')}}" class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-black md:p-0 md:dark:text-blue-500">Home</a>
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
    <div class="flex items-center justify-center min-h-screen pt-36">
        <div class="w-full max-w-4xl p-5 bg-white shadow-lg rounded-lg">
            <!-- Logo Section -->
            <div class="logo-container">
                <div class="logo">
                    <img src="https://www.lipilimatower.co.tz/assets/images/logo.jpg" alt="Logo">
                </div>
            </div>
            <form id="booking-form" action="{{route('step2_book.store')}}" method="POST">
                <h2 class="text-2xl font-bold mb-4">Step 2: Select Booking Detail</h2>
                <div class="flex space-x-4 mb-4">
                    <!-- Check-in Date -->
                    <div class="flex-1">
                        <label for="checkin-date" class="block text-lg font-medium mb-2">Check-in Date:</label>
                        <input type="date" id="checkin-date" name="checkin_date" class="w-full border border-gray-300 rounded-lg p-2" required>
                    </div>
                    <!-- Check-out Date -->
                    <div class="flex-1">
                        <label for="checkout-date" class="block text-lg font-medium mb-2">Check-out Date:</label>
                        <input type="date" id="checkout-date" name="checkout_date" class="w-full border border-gray-300 rounded-lg p-2" required>
                    </div>
                </div>
                @csrf
                <div class="flex space-x-4 mb-4">
                    <!-- Room Selection -->
                    <div class="flex-1">
                        <label for="roomType" class="block text-lg font-medium mb-2">Room</label>
                        <select id="roomType" name="room_number" class="w-full border border-gray-300 rounded-lg p-2" required>
                            <option value="" selected disabled>Select a Room</option>
                            @foreach($rooms as $room)
                            <option value="{{$room['id']}}" data-cost="{{$room['cost']}}">{{$room['room_number']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Number of Guests -->
                    <div class="flex-1">
                        <label for="number_of_guest" class="block text-lg font-medium mb-2">Guest</label>
                        <select id="number_of_guest" name="number_of_guest" class="w-full border border-gray-300 rounded-lg p-2" required>
                            <option value="" selected disabled>Select a Number of Guests</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>
                <!-- Container for form fields -->
                <div class="flex mb-4 space-x-4">
                    <!-- Days Stayed -->
                    <div class="flex-1">
                        <label for="days-stayed" class="block text-lg font-medium mb-2">Days Stayed:</label>
                        <input type="text" id="days-stayed" name="days_stayed" class="w-full border border-gray-300 rounded-lg p-2" value="1" readonly>
                    </div>
                    <input type="hidden" id="room_cost" name="room_cost" value="0"> <!-- Initialize with a default value -->
                    <!-- Total Amount -->
                    <div class="flex-1">
                        <label for="total_amount" class="block text-lg font-medium mb-2">Total Amount:</label>
                        <input type="text" id="total_amount" name="total_amount" class="w-full border border-gray-300 rounded-lg p-2" readonly>
                    </div>
                </div>
                <!-- Submit Button -->
                <button type="submit" class="bg-blue-500 text-white py-2 px-5 rounded-lg">Proceed</button>
            </form>
        </div>
    </div>
    <!-- JavaScript for calculations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkinDateInput = document.getElementById('checkin-date');
            const checkoutDateInput = document.getElementById('checkout-date');
            const daysStayedInput = document.getElementById('days-stayed');
            const numberOfGuestInput = document.getElementById('number_of_guest');
            const roomTypeSelect = document.getElementById('roomType');
            const totalAmountInput = document.getElementById('total_amount');
            const roomCostInput = document.getElementById('room_cost');

            function setMinDate() {
                const today = new Date();
                const todayString = today.toISOString().split('T')[0];

                checkinDateInput.min = todayString;
                checkoutDateInput.min = todayString;
            }

            function updateDateConstraints() {
                const checkinDate = new Date(checkinDateInput.value);
                checkoutDateInput.min = checkinDate.toISOString().split('T')[0];
            }

            function calculateDaysStayed() {
                const checkinDate = new Date(checkinDateInput.value);
                const checkoutDate = new Date(checkoutDateInput.value);

                if (checkinDate && checkoutDate && checkoutDate > checkinDate) {
                    const timeDifference = checkoutDate - checkinDate;
                    const daysStayed = Math.ceil(timeDifference / (1000 * 60 * 60 * 24));
                    daysStayedInput.value = daysStayed;
                    updateTotalAmount();
                } else {
                    daysStayedInput.value = '';
                    totalAmountInput.value = '';
                }
            }

            function updateTotalAmount() {
                const daysStayed = parseInt(daysStayedInput.value) || 0;
                const numberOfGuests = parseInt(numberOfGuestInput.value) || 1;
                const roomCost = parseFloat(roomCostInput.value) || 0;
                const additionalGuestCost = 25000;

                if (daysStayed > 0) {
                    const baseCost = roomCost * daysStayed;
                    const extraGuestCost = numberOfGuests > 1 ? (numberOfGuests - 1) * additionalGuestCost : 0;
                    const totalCost = baseCost + extraGuestCost;
                    totalAmountInput.value = totalCost.toFixed(2);
                }
            }

            // Initialize dates
            setMinDate();

            checkinDateInput.addEventListener('change', function() {
                updateDateConstraints();
                calculateDaysStayed();
            });

            checkoutDateInput.addEventListener('change', function() {
                calculateDaysStayed();
            });

            roomTypeSelect.addEventListener('change', function() {
                const selectedOption = roomTypeSelect.options[roomTypeSelect.selectedIndex];
                roomCostInput.value = selectedOption.getAttribute('data-cost') || 0;
                calculateDaysStayed();
            });

            numberOfGuestInput.addEventListener('change', function() {
                updateTotalAmount();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>

