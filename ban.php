<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ban!</title>
</head>
<body >
     <style>
          body {
               display: flex;
               justify-content: center;
               align-items: center;
               min-height: 100vh;
               margin: 0;
               padding: 0;
          }

          h1{
               font-size: 2rem;
               color: red;
               margin: 0;
               padding: 15px;
               text-align: center;
          } 
          p {
               font-size: 1rem;
               color: red;
               margin: 0;
               padding: 15px;
               text-align: center;
          }

          .clock {
               position: absolute;
               bottom: 15px;
               left: 50%;
               transform: translate(-50%);
            font-family: 'Arial', sans-serif;
            color: red;
            font-size: 19px;
            font-weight: bold;
            text-align: center;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
     </style>
     
    <div class="center">
          <h1>You just got banned from this webbank</h1>
          <div class="clock">
               <div class="date" id="date"></div>
               <div id="clock"></div>
          </div>
          
          <p>Please contact admin to unban or <a href="./action/logout.php">logout</a></p>
    </div>
     

    <script>
        function updateClock() {
            const now = new Date();

            // Format time
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const timeString = `${hours}:${minutes}:${seconds}`;

            // Format date
            const day = String(now.getDate()).padStart(2, '0');
            const month = String(now.getMonth() + 1).padStart(2, '0'); // Months are 0-indexed
            const year = now.getFullYear();
            const dateString = `${day}/${month}/${year}`;

            // Update the clock and date on the page
            document.getElementById('clock').textContent = timeString;
            document.getElementById('date').textContent = dateString;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initial call to display the clock immediately on page load
        updateClock();
    </script>
</body>
</html>