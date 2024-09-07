<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Step Indicator</title>
    <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* Optional: Custom styles for positioning step labels */
    .step-label {
      top: 3rem;
      left: 50%;
      transform: translateX(-50%);
    }
  </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="flex justify-between items-center w-full max-w-4xl px-4">
    <!-- Step 1 -->
    <div class="relative flex-1 text-center">
      <div class="w-12 h-12 mx-auto bg-blue-500 text-white rounded-full flex items-center justify-center">
        <span class="text-xl font-bold">1</span>
      </div>
      <div class="absolute step-label text-gray-600">Step 1</div>
    </div>

    <!-- Connector -->
    <div class="flex-1 flex items-center">
      <div class="w-full h-1 bg-gray-300"></div>
    </div>

    <!-- Step 2 -->
    <div class="relative flex-1 text-center">
      <div class="w-12 h-12 mx-auto bg-blue-500 text-white rounded-full flex items-center justify-center">
        <span class="text-xl font-bold">2</span>
      </div>
      <div class="absolute step-label text-gray-600">Step 2</div>
    </div>

    <!-- Connector -->
    <div class="flex-1 flex items-center">
      <div class="w-full h-1 bg-gray-300"></div>
    </div>

    <!-- Step 3 -->
    <div class="relative flex-1 text-center">
      <div class="w-12 h-12 mx-auto bg-blue-500 text-white rounded-full flex items-center justify-center">
        <span class="text-xl font-bold">3</span>
      </div>
      <div class="absolute step-label text-gray-600">Step 3</div>
    </div>

    <!-- Connector -->
    <div class="flex-1 flex items-center">
      <div class="w-full h-1 bg-gray-300"></div>
    </div>

    <!-- Step 4 -->
    <div class="relative flex-1 text-center">
      <div class="w-12 h-12 mx-auto bg-blue-500 text-white rounded-full flex items-center justify-center">
        <span class="text-xl font-bold">4</span>
      </div>
      <div class="absolute step-label text-gray-600">Step 4</div>
    </div>
  </div>

</body>
</html>
