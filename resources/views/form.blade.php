<!DOCTYPE html>
<html>

<head>
    <script defer src="teest.js"></script>
    <title>Room Reservation Confirmation</title>
    <!-- Add your CSS stylesheets and scripts here if needed -->
</head>

<body>
    <div id="reservation-confirmation">
        <h2>Your Room Reservation</h2>
        <p>Your room has been reserved successfully!</p>

        <h3>Invoice</h3>
<<<<<<< HEAD
        <!-- Replace the placeholder values with the actual room information retrieved from the database -->
        {{-- <p>Room Number: $user->id</p>
        <p>Check-in Date: {{checkInDate}}</p>
        <p>Check-out Date: {{checkOutDate}}</p>
        <p>Total Amount: {{totalAmount}}</p> --> --}}
        
=======
        <!-- Replace the placeholder values with the actual room information retrieved from the database 
        <p>Room Number: {{roomNumber}}</p> 
        <p>Check-in Date: {{checkInDate}}</p>
        <p>Check-out Date: {{checkOutDate}}</p>
        <p>Total Amount: {{totalAmount}}</p> -->

>>>>>>> 8a27e40268186dd67568ee107b6968172217a758
        <!-- You can add additional details to the invoice as needed -->
    </div>
    <!-- Add your JavaScript code here if needed -->

    @if (session()->has('success'))
    <div onload="test()" onclick="test()" style="position: absolute; bottom: 20px; left: 40%;   align-items: center; width:300px; height: 50px; background: blue; color: white; border-radius: 500px;font-family: sans-serif;" id="popup">
        <p style="text-align: center;">Succesfully reaerves!</p>
    </div>
    @endif






</body>

</html>