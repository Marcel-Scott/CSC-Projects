<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <script src="/CSC-Projects//login.js"></script>
</head>
<body>
    <header>
        <h2 class="logo">The Book Pantry</h2>
        <nav>
            <ul class="nav-list">
                <li><a href="#">Sign Up</a> </li>
            </ul>
        </nav>

    </header>
    <section class="login-info">
        <h3 id="login-title">Login </h3>
        <div> 
            <form action="login.php" method="post" id="loginForm">
                
                <table>
                    <tr>
                        <td>Username:</td>
                        <td>
                            <input type="text" name="user" id="username" required>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Password:</td>
                        <td>
                            <input type="password" name="password" id="password" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="/CSC-Projects//welcome.php"><input type="button" value="Login" name="submit" id="submit-Btn">
                            </a>
                            
                        </td>

                        <td>
                            Become a member today by <a href="#">Signing Up</a>
                        </td>
                    </tr>
                </table>
                
            </form>
        </div>
    </section>

    <script>
        document.getElementById("submit-Btn").onclick = function() {
            myFunction();
        }
        function myFunction() {
            alert("Login Was Successful, Welcome Marcel");
        }
    </script>
</body>
</html>