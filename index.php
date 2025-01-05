<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Hadis Hafez">
    <link rel="stylesheet" href="style.css">
    <title>TuneHub</title>
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
                        <a href="./form.php" target="_blank">Concerts</a>
                        <a href="#">Community</a>
                        <a href="#">Songs</a>
                    </nav>
                </div>
            </header>

            <article>
                <div class="concert-info">
                    <p style="font-family: 'bold';">TOP CONCERT</p>
                    <h1>BLINDING LIGHTS</h1>
                    <p style="line-height: 1.5;">BOOK A TICKET NOW AND HAVE FUN WITH YOUR FAVORITE<br> TRACKS IN THE MOST POPULAR CONCERT!</p>
                    <br>
                    <button onclick="location.href = './form.php'">BOOK NOW!</button>
                </div>
                <div style="margin-bottom: -4.5px; ">
                    <img src="./assets/theWeeknd.svg" alt="theWeeknd" style="border-bottom-right-radius: 22px;">
                </div>
            </article>

            <h2 style="margin: 40px; letter-spacing: 1px;">Top Artists</h2>

            <div class="slider">
                <div><img src="./assets/STARBOY 1.svg">
                    <p>The Weeknd</p>
                </div>
                <div><img src="./assets/Billie Eilish 1.svg">
                    <p>Billie Eilish</p>
                </div>
                <div><img src="./assets/ed(1) 1.svg">
                    <p>Ed Sheeran</p>
                </div>
                <div><img src="./assets/maroon2) 1.svg">
                    <p>Maroon 5</p>
                </div>
                <div><img src="./assets/The NBHD wallpaper 1.svg">
                    <p>The Neighbourhood</p>
                </div>
                <div><img src="./assets/dua1.svg">
                    <p>Dua Lipa</p>
                </div>
            </div>

        </div>
    </div>
</body>
</html>