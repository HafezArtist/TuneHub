<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Hadis Hafez">
    <link rel="stylesheet" href="style.css">
    <title>TuneHub | Booking</title>
</head>
<body>
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
                        <a href="#">Concerts</a>
                        <a href="#">Community</a>
                        <a href="./index.php">Songs</a>
                    </nav>
                </div>
            </header>

            <div class="banner">
                <div class="left-banner">
                    <img src="./assets/the weeknd _ icon 1.svg">
                </div>
                <div class="right-banner">
                    <h2 style="letter-spacing: 1px;">The Weeknd Global<br> Concert</h2>
                    <p>Title: BLINDING LIGHTS <br>Jan 25, 2025</p>
                    <br>
                    <div class="buttons">
                        <button onclick="">BOOK NOW!</button>
                        <button onclick="" style="border: 0.2px solid #FFF078; color: #FFF; background-color: #000;">SEE FULL CHART</button>
                    </div>
                </div>
            </div>

            <main>
                <div class="form-div">

                    <h2 style="margin: 0 0 10px 0;">Complete Booking Now</h2>

                    <form method="POST" action="./action.php" id="registerForm">
                        <input style="color: #FFF; font-family: 'regular'; letter-spacing: 1px;" id="fname" name="fname" placeholder="Enter Your First Name:"><br>
                        <input style="color: #FFF; font-family: 'regular'; letter-spacing: 1px;" id="lname" name="lname" placeholder="Enter Your Last Name:"><br>
                        <input style="color: #FFF; font-family: 'regular'; letter-spacing: 1px;" id="email" name="email" placeholder="Enter Your Email:"><br>
                        <input type="password" style="color: #FFF; font-family: 'regular'; letter-spacing: 1px;" id="pass" name="pass" placeholder="Enter Your Password:"><br>
                        <input type="password" style="color: #FFF; font-family: 'regular'; letter-spacing: 1px;" id="passc" name="passc" placeholder="Enter Your Password Confirmation:"><br>

                        <div class="buttons" style="margin-top: 20px;">

                            <button onclick="validation(event)" type="button">SUBMIT</button>

                            <button onclick="" style="border: 0.2px solid #FFF078; color: #FFF; background-color: #000;">GO TO CART</button>

                        </div>

                    </form>
                </div>


                <div class="chart">
                    <h2>Other Top Concerts</h2>
                    <div class="flex-chart">
                        <img src="./assets/concert/Billie Eilish 1.svg" alt="">
                        <div>
                            <h4>Billie Eilish's World <br>Tour</h4>
                            <p>Jan 31, 2025</p>
                        </div>
                    </div>
                    <div class="flex-chart">
                        <img src="./assets/concert/maroon2.svg" alt="">
                        <div>
                            <h4>The Stage of <br>Maroon 5</h4>
                            <p>Jul 2, 2025</p>
                        </div>
                    </div>
                    <div class="flex-chart" style="margin-bottom: 8px;">
                        <img src="./assets/concert/ed.svg" alt="">
                        <div>
                            <h4>Ed Sheeran's<br> Concert</h4>
                            <p>Jul 15, 2025</p>
                        </div>
                    </div>

                </div>
            </main>

        </div>
    </div>
    <script src="./JS/script.js"></script>
</body>
</html>