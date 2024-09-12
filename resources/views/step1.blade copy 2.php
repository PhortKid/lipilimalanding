<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Room Booking</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-image: url('https://www.lipilimatower.co.tz/assets/images/bg.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
    .room-images .room-image-group {
      display: none; /* Initially hide all image groups */
      grid-template-columns: repeat(2, 1fr); /* Two columns */
      gap: 10px; /* Space between images */
    }
    .room-images img {
      width: 100%;
      height: auto;
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
<body class="items-center justify-center min-h-screen">

<div class="w-full max-w-lg p-8 mx-auto bg-white rounded-lg">
    <!-- Logo Section -->
    <div class="logo-container">
        <div class="logo">
            <img src="https://www.lipilimatower.co.tz/assets/images/logo.jpg" alt="Logo">
        </div>
    </div>

    <form id="multiStepForm" action="http://127.0.0.1:8000/start_book" method="POST">
        @csrf
        <!-- Step 1 -->
        <div class="step step-active" id="step1">
            <h2 class="text-2xl font-bold mb-4">Step 1: Select Room Type</h2>
            <div class="mb-4">
                <label class="block text-lg font-medium mb-2" for="roomType">Room Type</label>
                <select id="roomType" name="roomType" class="w-full border border-gray-300 rounded-lg p-2" onchange="showRoomImages()" required>
                    <option value="" selected disabled>Select a Room</option>
                    <option value="standard">Standard Room - 80,000</option>
                    <option value="deluxe">Deluxe Room - 100,000</option>
                    <option value="suite">Executive - 150,000</option>
                </select>
            </div>
            <div class="room-images">
                <!-- Standard Room Images -->
                <div id="standardImages" class="room-image-group">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L1.jpg" alt="Standard Room 1">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L2.jpg" alt="Standard Room 2">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L3.jpg" alt="Standard Room 3">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L4.jpg" alt="Standard Room 4">
                </div>

                <!-- Deluxe Room Images -->
                <div id="deluxeImages" class="room-image-group">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L22_1.jpg" alt="Deluxe Room 1">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L22_2.jpg" alt="Deluxe Room 2">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L22_3.jpg" alt="Deluxe Room 3">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L22_4.jpg" alt="Deluxe Room 4">
                </div>

                <!-- Suite Room Images -->
                <div id="suiteImages" class="room-image-group">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L3_1.jpg" alt="Suite Room 1">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L3_2.jpg" alt="Suite Room 2">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L3_3.jpg" alt="Suite Room 3">
                    <img src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L3_4.jpg" alt="Suite Room 4">
                </div>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4">Next</button>
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

</body>
</html>
