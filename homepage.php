<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Pantry</title>
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
            </ul>
        </nav>

    </header>
    <div class="img">
        <h1 id="location-title">Book List</h1>    
    </div>
    <table id="bookTable">
        <tr>
            <th>Book Name:</th>
            <th>Author:</th>
            <th>Available:</th>
        </tr>

        <tr>
            <td> <a href="/CSC-Projects//checkOut.php" id="selectedbook">In Search Of Lost Time</a> </td>
            <td>Marcel Proust</td>
            <td>Yes</td>
        </tr>

        <tr>
            <td>The Divine Comedy</td>
            <td>Danre Alighieri</td>
            <td>Yes</td>
        </tr>

        <tr>
            <td>Lolita</td>
            <td>Vladmir Nabokov</td>
            <td>No</td>
        </tr>

        <tr>
            <td>Ulysses</td>
            <td>James Joyce</td>
            <td>Yes</td>
        </tr>

        <tr>
            <td>Don Quixote</td>
            <td>Miguel de Cervantes</td>
            <td>No</td>
        </tr>
        <tr>
            <td>One Hundred Years of Solitude</td>
            <td>Grabriel Garcia Marquez</td>
            <td>No</td>
        </tr>
        <tr>
            <td>The Great Gatsby</td>
            <td>F. Scott Fitzgerald</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Moby Dick</td>
            <td>Herman Melville</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>War and Peace</td>
            <td>Leo Tolstoy</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Hamlet</td>
            <td>William Shakespare</td>
            <td>No</td>
        </tr>
        <tr>
            <td>The Odyssey</td>
            <td>Homer</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Madame Bovary</td>
            <td>Gustave Flaubert</td>
            <td>Yes</td>
        </tr>

    </table>
</body>
</html>
