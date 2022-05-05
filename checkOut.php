 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Checkout</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <header>
        <h2 class="logo">The Book Pantry</h2>
        <nav>
            <ul class="nav-list">
                <li> <a href="/CSC-Projects//welcome.php">Home</a> </li>
                <li> <a href="/CSC-Projects//turnbookin.php">Check In A Book</a> </li>
                <li> <a href="/CSC-Projects//locations.php">Locations</a> </li>
                <li> <a href="/CSC-Projects//homepage.php">Book List</a> </li>
            </ul>
        </nav>

    </header>

    <h1 id="location-title">Check Out </h1>

    <div class="bookDetails">
        
        <div class="bookImg">
            <img src="/img//inSearch.jpg" alt="Book">
        </div>

        <div class="bookInfo">
            <h2>Title: In Search Of Lost Time</h2>
            <h2>Author: Marcel Proust</h2>
            <h2>Availability: Yes, currently available</h2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a class="confirm-btn" href="/CSC-Projects//comfirmation.php">Confirm</a>
        </div>


    </div>

    <scritpt>
        document.getElementById("confirm-btn").onclick = function() {
            myFunction();
    </scritpt>
 </body>
 </html>