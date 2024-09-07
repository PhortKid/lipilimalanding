<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Animation</title>
  <style>body {
    margin: 0;
    font-family: Arial, sans-serif;
    overflow: hidden;
}

.app {
    position: relative;
    height: 100vh;
    width: 100vw;
}

.loader-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #1a202c; /* Tailwind bg-gray-900 */
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10; /* Ensure loader is above other content */
}

.lds-ripple {
    position: relative;
    width: 80px;
    height: 80px;
}

.lds-ripple div {
    position: absolute;
    border: 4px solid #ddd;
    border-radius: 50%;
    animation: lds-ripple 1s infinite;
}

.lds-ripple div:nth-child(2) {
    animation-delay: -0.5s;
}

@keyframes lds-ripple {
    0% {
        top: 36px;
        left: 36px;
        width: 0;
        height: 0;
        opacity: 1;
    }
    100% {
        top: 0;
        left: 0;
        width: 72px;
        height: 72px;
        opacity: 0;
    }
}

.content {
    display: none; /* Initially hidden */
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 2rem;
    z-index: 1; /* Ensure content is below the loader initially */
}
</style>
</head>
<body>
    <div class="app">
        <div class="loader-container">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="content">
            <!-- Content after loading -->
            <h1>Content after loaded</h1>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script >$(document).ready(function() {
    setTimeout(function() {
        $('.loader-container').fadeOut('slow', function() {
            $('.content').fadeIn('slow');
        });
    }, 2000); // Duration for the loader to show
});
</script>
</body>
</html>
