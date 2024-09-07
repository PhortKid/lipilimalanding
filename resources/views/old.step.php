<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .room-images img {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-lg p-8 bg-white shadow-lg rounded-lg">
        <form id="multiStepForm" action="{{route('start_book.store')}}" method="POST">
            <!-- Step 1 -->
            <div class="step step-active" id="step1">
                <h2 class="text-2xl font-bold mb-4">Step 1: Select Room Type </h2>
                <div class="mb-4">
                    <label class="block text-lg font-medium mb-2" for="roomType">Room Type</label>
                    <select id="roomType" name="roomType" class="w-full border border-gray-300 rounded-lg p-2" onchange="showRoomImage()" required>
                        <option value="" selected disabled>Select a Room</option>
                        <option value="standard">Standard Room - $80,000</option>
                        <option value="deluxe">Deluxe Room - $100,000</option>
                        <option value="suite">Suite - $150,000</option>
                    </select>
                </div>
                @csrf
                <div class="room-images">
                    <img id="standardImage" src="path/to/standard-room.jpg" alt="Standard Room" class="w-full">
                    <img id="deluxeImage" src="path/to/deluxe-room.jpg" alt="Deluxe Room" class="w-full">
                    <img id="suiteImage" src="path/to/suite-room.jpg" alt="Suite Room" class="w-full">
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4">Next</button>
            </div>
        </form>
    </div>

    <script>
        function showRoomImage() {
            // Hide all room images
            document.querySelectorAll('.room-images img').forEach(img => {
                img.style.display = 'none';
            });

            // Get selected room type
            const roomType = document.getElementById('roomType').value;

            // Show the selected room image
            if (roomType) {
                document.getElementById(roomType + 'Image').style.display = 'block';
            }
        }

     
    </script>
</body>
</html>