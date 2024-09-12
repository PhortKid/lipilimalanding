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
                   <!-- <img id="standardImage" src="path/to/standard-room.jpg" alt="Standard Room" class="w-full">-->


<div class="standard-image" id="standardImage" >        
 <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
  <div>
    <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
      src="https://images.unsplash.com/photo-1499696010180-025ef6e1a8f9?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1470&amp;q=80"
      alt="gallery-photo" />
  </div>
  <div>
    <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
      src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
      alt="gallery-photo" />
  </div>
  <div>
    <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
      src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2560&amp;q=80"
      alt="gallery-photo" />
  </div>
  <div>
    <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
      src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2940&amp;q=80"
      alt="gallery-photo" />
  </div>
  <div>
    <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
      src="https://images.unsplash.com/photo-1518623489648-a173ef7824f3?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2762&amp;q=80"
      alt="gallery-photo" />
  </div>
  <div>
    <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
      src="https://images.unsplash.com/photo-1682407186023-12c70a4a35e0?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2832&amp;q=80"
      alt="gallery-photo" />
  </div>
  <div>
    <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
      src="https://demos.creative-tim.com/material-kit-pro/assets/img/examples/blog5.jpg" alt="gallery-photo" />
  </div>
  <div>
    <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
      src="https://material-taillwind-pro-ct-tailwind-team.vercel.app/img/content2.jpg" alt="gallery-photo" />
  </div>
  <div>
    <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
      src="https://images.unsplash.com/photo-1620064916958-605375619af8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1493&amp;q=80"
      alt="gallery-photo" />
  </div>
</div>

</div>


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
            0768473356 
            // Show the selected room image
            if (roomType) {
                document.getElementById(roomType + 'Image').style.display = 'block';
            }
        }

     
    </script>
</body>
</html>