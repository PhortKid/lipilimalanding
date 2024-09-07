<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-in and Check-out Form</title>

</head>
<body>
    <form id="booking-form">
        <div class="form-group">
            <label for="checkin-date">Check-in Date:</label>
            <input type="date" id="checkin-date" name="checkin-date" required>
        </div>

        <div class="form-group">
            <label for="checkout-date">Check-out Date:</label>
            <input type="date" id="checkout-date" name="checkout-date" required>
        </div>

        <input type="text" id="days-stayed" name="days-stayed">

        <button type="submit">Submit</button>
    </form>

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
