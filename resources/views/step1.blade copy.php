@extends('book_layout.app')

@section('content')




    <div class="w-full max-w-lg p-8 mx-auto   bg-white   rounded-lg">
        <!-- Logo Section -->
        <div class="logo-container">
            <div class="logo">
                <img src="https://www.lipilimatower.co.tz/assets/images/logo.jpg" alt="Logo">
            </div>
        </div>

        <form id="multiStepForm" action="{{route('start_book.store')}}" method="POST">
            <!-- Step 1 -->
            <div class="step step-active " id="step1">
                <h2 class="text-2xl font-bold mb-4">Step 1: Select Room Type </h2>
                <div class="mb-4">
                    <label class="block text-lg font-medium mb-2" for="roomType">Room Type</label>
                    <select id="roomType" name="roomType" class="w-full border border-gray-300 rounded-lg p-2" onchange="showRoomImage()" required>
                        <option value="" selected disabled>Select a Room</option>
                        <option value="standard">Standard Room - 80,000</option>
                        <option value="deluxe">Deluxe Room - 100,000</option>
                        <option value="suite">Excutive- 150,000</option>    
                    </select>
                </div>
                @csrf
                <div class="room-images">
                    <img id="standardImage" src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L.jpg" alt="Standard Room" class="w-full h-48">
                    <img id="deluxeImage" src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L22.jpg" alt="Deluxe Room" class="w-full h-48">
                    <img id="suiteImage" src="https://lipilima.tehama.website/assets/img/banner/2024-05-20/L.jpg" alt="Suite Room" class="w-full h-48">
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


@endsection