<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turn In A Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h2 class="logo">The Book Pantry</h2>
        <nav>
            <ul class="nav-list">
                <li> <a href="/CSC-Projects//welcome.php">Home</a> </li>                
                <li> <a href="/CSC-Projects//locations.php">Find One Near You</a> </li>

                
            </ul>
        </nav>

    </header>
    <h1 id="location-title">Submit Your Book </h1>
    <div class="bookForm">
        <form class="bookTurnIn">
            <label for="bookName">Book Name:</label>
            <input type="text" name="bookName" id="bookName">
            <br>
            <br>
            <br>
            <label for="author"> Author:</label>
            <input type="text" name="author" id="author">
            <br>
            <br>
            <br>
            <label for="issueNumber"> Issue Number: </label>
            <input type="text" name="issueNumber" id="issueNumber">
            <br>
            <br>
            <br>
            <a href="/CSC-Projects//homepage.php"> <input type="submit" id="turnIn-Btn"> </a>
        </form>

    </div>

    <script>
          document.getElementById("turnIn-Btn").onclick = function() {
            myFunction();
        }
        function myFunction() {
            alert("Your book has been submitted successfully :)");
        }
    </script>
</body>
</html>