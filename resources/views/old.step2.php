<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-in and Check-out Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-lg p-8 bg-white shadow-lg rounded-lg">
        <form id="booking-form" action="{{route('step2_book.store')}}" method="POST">
            <!-- Check-in Date -->
            <div class="mb-4">
                <label for="checkin-date" class="block text-lg font-medium mb-2">Check-in Date:</label>
                <input type="date" id="checkin-date" name="checkin_date" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            <!-- Check-out Date -->
            <div class="mb-4">
                <label for="checkout-date" class="block text-lg font-medium mb-2">Check-out Date:</label>
                <input type="date" id="checkout-date" name="checkout_date" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>
            @csrf

            <div class="mb-4">
                    <label class="block text-lg font-medium mb-2" for="roomType">Room </label>
                    <select id="roomType" name="room_number" class="w-full border border-gray-300 rounded-lg p-2" onchange="showRoomImage()" required>
                 
                    <option value="" selected disabled>Select a Room</option>
                    @foreach($rooms as $room)
                        <option value="{{$room['id']}}">{{$room['room_number']}}</option>
                     @endforeach
                    </select>
            </div>


            <div class="mb-4">
                    <label class="block text-lg font-medium mb-2" for="roomType">Guest</label>
                    <select id="number_of_guest" name="number_of_guest" class="w-full border border-gray-300 rounded-lg p-2"  required>
                 
                    <option value="" selected disabled>Select a Number of Guest</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
            </div>

            <!-- Days Stayed -->
            <div class="mb-4">
                <label for="days-stayed" class="block text-lg font-medium mb-2">Days Stayed:</label>
                <input type="text" id="days-stayed" name="days_stayed" class="w-full border border-gray-300 rounded-lg p-2" value="1" readonly>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Next</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkinDateInput = document.getElementById('checkin-date');
            const checkoutDateInput = document.getElementById('checkout-date');
            const daysStayedInput = document.getElementById('days-stayed');

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
                } else {
                    daysStayedInput.value = '';
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
        });
    </script>
</body>
</html>
