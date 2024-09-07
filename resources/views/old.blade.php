<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        .hidden {
            display: none;
        }

        body{
            background-image: url('https://lipilima.tehama.website/assets/img/banner/2024-05-20/L2.jpg')
        }
    </style>
</head>
<body>
<ul class="flex">
  <li class="mr-6">
  <a href="/"
        class="inline-flex items-center border border-indigo-300 px-3 py-1.5 rounded-md text-indigo-500 hover:bg-indigo-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18">
            </path>
        </svg>
        <span class="ml-1 font-bold text-lg">Back</span>
    </a>
  </li>
  
</ul>
    <div class="max-w-md mx-auto p-4 border-slate-950 bg-white shadow-lg rounded-lg">
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
        <h1 class="text-2xl font-bold mb-4">Room Booking Form</h1>


        <form id="booking-form" action="{{route('booking_process.store')}}" class="space-y-4" method="POST">
        <div class="flex space-x-4 mb-5">
                <div class="w-1/2">
                    <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900">Firstname</label>
                    <input type="text" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Firstname" required name="firstname"/>
                </div>
                @csrf
                <div class="w-1/2">
                    <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900">Lastname</label>
                    <input type="text" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Lastname" required name="lastname"/>
                </div>
            </div>

              <div class="flex space-x-4 mb-5">
                <div class="w-1/2">
                    <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Email" required name="email"/>
                </div>
                @csrf
                <div class="w-1/2">
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">Phone number
                    <input type="text" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="+255-000-000-000" required name="phone_number"/>
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Reservation  Type:</label>
                <select id="booking-type" name="reservation_type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                    <option value="long">For (30 days)</option>
                    <option value="short">Short Booking</option>
                    <option value="custom">Custom Booking</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Room Price:</label>
                <select id="room-type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" name="room_type">
                    <option value="60000">Tsh 60,000</option>
                    <option value="80000">Tsh 80,000</option>
                    <option value="100000">Tsh 100,000</option>
                </select>
            </div>

            <div id="custom-days-container" class="hidden">
                <label class="block text-sm font-medium text-gray-700">Number of Days:</label>
                <input type="number" id="number-of-days" min="1" placeholder="Enter number of days" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50"/>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Date:</label>
                <input type="date" min="1" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" name="booking_date"/>
            </div>

            <div id="short-days-container" class="hidden">
                <label class="block text-sm font-medium text-gray-700">Number of Days:</label>
                <div class="flex items-center space-x-2">
                    <input type="number" id="number-of-days-short" min="1" placeholder="Enter number of days" class="mt-1 block w-1/2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" name="number_of_days" value="30"/>
                    <button type="button" id="increment-days" class="px-3 py-1 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700">+</button>
                    <button type="button" id="decrement-days" class="px-3 py-1 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700">-</button>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Number of Guests:</label>
                <select id="extra-guests" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" name="number_of_guest">
                    <option value="1">1 (default)</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>

            <input type="hidden" id="total-cost" readonly class="mt-1 block w-1/2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" name="total_cost"/>

            <button type="button" id="calculate-total" class="w-full py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700">Next </button>

            <div id="payment-container" class="hidden mt-4 p-4 bg-gray-50 border border-gray-300 rounded-md">
                <p id="total-cost-display"  class="text-lg font-semibold">Total Cost: Tsh 0</p>
                <input type="submit" value="Pay Now" class="mt-2 w-full py-2 bg-green-600 text-white rounded-md shadow-sm hover:bg-green-700"/>
            </div>
        </form>
    </div>
  
@endif

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const bookingTypeSelect = document.getElementById('booking-type');
    const roomTypeSelect = document.getElementById('room-type');
    const numberOfDaysInput = document.getElementById('number-of-days');
    const numberOfDaysShortInput = document.getElementById('number-of-days-short');
    const extraGuestsSelect = document.getElementById('extra-guests');
    const totalCostInput = document.getElementById('total-cost');
    const calculateTotalButton = document.getElementById('calculate-total');
    const paymentContainer = document.getElementById('payment-container');
    const totalCostDisplay = document.getElementById('total-cost-display');
    const customDaysContainer = document.getElementById('custom-days-container');
    const shortDaysContainer = document.getElementById('short-days-container');
    const incrementDaysButton = document.getElementById('increment-days');
    const decrementDaysButton = document.getElementById('decrement-days');

    const roomPrices = {
        60000: 'Tsh 60,000',
        80000: 'Tsh 80,000',
        100000: 'Tsh 100,000',
    };

    const handleBookingTypeChange = () => {
        const bookingType = bookingTypeSelect.value;
        if (bookingType === 'long') {
            customDaysContainer.classList.add('hidden');
            shortDaysContainer.classList.add('hidden');
            numberOfDaysInput.value = '30';
        } else if (bookingType === 'short') {
            customDaysContainer.classList.add('hidden');
            shortDaysContainer.classList.remove('hidden');
            numberOfDaysShortInput.value = '1';
        } else {
            customDaysContainer.classList.remove('hidden');
            shortDaysContainer.classList.add('hidden');
            numberOfDaysInput.value = '';
        }
    };

    const handleCalculateTotal = () => {
        const bookingType = bookingTypeSelect.value;
        let days = 0;
        if (bookingType === 'short') {
            days = parseInt(numberOfDaysShortInput.value) || 0;
        } else if (bookingType === 'long') {
            days = 30;
        } else if (bookingType === 'custom') {
            days = parseInt(numberOfDaysInput.value) || 0;
        }

        const roomPrice = parseInt(roomTypeSelect.value) || 0;
        const extraGuests = parseInt(extraGuestsSelect.value) || 0;
        
        let totalCost = roomPrice * days;

        if (extraGuests > 1) {
            totalCost += (extraGuests - 1) * 25000 * days;
        }

        totalCostInput.value = `Tsh ${totalCost.toLocaleString()}`;
        totalCostDisplay.textContent = `Total Cost: Tsh ${totalCost.toLocaleString()}`;
        paymentContainer.classList.remove('hidden');
         
    };

 

    bookingTypeSelect.addEventListener('change', handleBookingTypeChange);
    calculateTotalButton.addEventListener('click', handleCalculateTotal);

    incrementDaysButton.addEventListener('click', () => {
        const currentValue = parseInt(numberOfDaysShortInput.value) || 0;
        numberOfDaysShortInput.value = currentValue + 1;
    });

    decrementDaysButton.addEventListener('click', () => {
        const currentValue = parseInt(numberOfDaysShortInput.value) || 0;
        if (currentValue > 1) {
            numberOfDaysShortInput.value = currentValue - 1;
        }
    });

    handleBookingTypeChange(); // Set initial state
});

    </script>
</body>
</html>
