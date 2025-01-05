<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Hadis Hafez">
    <link rel="stylesheet" href="style.css">
    <title>TuneHub | Cart</title>
</head>
<body>

    <?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];


    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    exit("Your Email is not in an EMAIL format!");
    }


    ?>



    <div class="panels">
        <div class="left-panel">

            <h3><span style="color: #FFF078;">Tune</span>Hub</h3>

            <div class="dashboard-items">
                <div style="background-color: #FFF078; color: #000;">
                    <h4>Dashboard</h4>
                </div>
                <div><h4>Popular</h4></div>
                <div><h4>Favorites</h4></div>
                <div><h4>Inbox</h4></div>
                <div><h4>Order Lists</h4></div>
                <div><h4>Product Stock</h4></div>

                <hr>

                <div><h4>Pricing</h4></div>
                <div><h4>Calender</h4></div>
                <div><h4>Contact</h4></div>
                <div><h4>Team</h4></div>
                <div><h4>Table</h4></div>

                <hr>

                <div><h4>Setting</h4></div>
                <div><h4>Logout</h4></div>
            </div>
        </div>

        <div class="right-panel">
            <header>
                <div class="search-box">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="right-items-header">
                    <nav>
                        <a href="./form.php" target="_blank">Concerts</a>
                        <a href="#">Community</a>
                        <a href="./index.php">Songs</a>
                    </nav>
                </div>
            </header>

            <div class="invoice">
                <p style="font-size: 20px; font-family: 'bold'; margin-top: 0;">Invoice | Concert Ticket</p>
                <p style="font-size: 14px; font-family: 'light';">The Weeknd Global Concert</p>
                <p style="font-size: 14px; font-family: 'light';">Title: BLINDING LIGHTS</p>
                <hr>
                <div class="invoice-table">
                    <div>
                        <p>First Name</p>
                        <p>Last Name</p>
                        <p>Email</p>
                    </div>
                    <div class="inputs-disabled">
                        <input style="color: #FFF; font-family: 'light'; letter-spacing: 1px;" disabled value="<?php echo htmlspecialchars($fname); ?>"><br>
                        <input style="color: #FFF; font-family: 'light'; letter-spacing: 1px;" disabled value="<?php echo htmlspecialchars($lname); ?>"><br>
                        <input style="color: #FFF; font-family: 'light'; letter-spacing: 1px;" disabled value="<?php echo htmlspecialchars($email); ?>"><br>
                    </div>
                </div>

                <div class="purchase">
                    <p style="font-size: 14px; font-family: 'light';">Jan 25, 2025</p>
                    <p style="font-size: 14px; font-family: 'light';">Saturday, 18:00 p.m</p>
                    <p style="font-size: 14px; font-family: 'light';">Chair Number: 566</p><br>
                    <p style="font-size: 20px; font-family: 'bold';">Total Payment: 569,458$</p>
                </div>

                <button onclick="">PAY AND FINISH</button>

            </div>

        </div>
    </div>
</body>
</html>