<!DOCTYPE html>
<html>

<head>
    <script defer src="teest.js"></script>
    <title>Room Reservation Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        #reservation-confirmation {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
        }

        h3 {
            color: #555;
            margin-top: 20px;
        }

        p {
            color: #666;
            margin-bottom: 10px;
        }

        .success-popup {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            width: 300px;
            height: 50px;
            background-color: #2196F3;
            color: #fff;
            border-radius: 25px;
            font-family: sans-serif;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .success-popup.show {
            opacity: 1;
        }

        .success-popup p {
            text-align: center;
            margin: 0;
        }
    </style>
</head>

<body>
    <div id="reservation-confirmation">
        <h2>Your Room Reservation</h2>
        <p>Your room has been reserved successfully!</p>

        <h3>Invoice</h3>
        <p>Phone Number: {{$reserv->phone_number}}</p>
        <p>Check-in Date: {{$reserv->check_in_date}}</p>
        <p>Check-out Date: {{$reserv->check_out_date}}</p>
        <p>Amount Adults: {{$reserv->amount_adults}}</p>
        <p>Amount Children: {{$reserv->amount_children}}</p>

        <!-- You can add additional details to the invoice as needed -->
    </div>

    @if (session()->has('success'))
    <div class="success-popup">
        <p>Succesfully reserved!</p>
    </div>
    @endif

    <script>
        window.onload = function() {
            var popup = document.querySelector('.success-popup');
            popup.classList.add('show');
        };

        // You can add your JavaScript code here if needed
    </script>
</body>

</html>
