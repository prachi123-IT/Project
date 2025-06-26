<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>T</span>ravel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="book.php">Book</a>
            <a href="packages.php">packages</a>
            <a href="gallery.php">Gallery</a>
           

        </nav>
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>

    <section class="booking">
        <h1 class="heading">Book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span> name: </span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <div class="inputbox">
                    <span> email: </span>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>
                <div class="inputbox">
                    <span> phone: </span>
                    <input type="number" placeholder="Enter your number " name="phone">
                </div>
                <div class="inputbox">
                    <span>address: </span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
                <div class="inputbox">
                    <span> where to: </span>
                    <input type="text" placeholder="Place you want to visit" name="location">
                </div>
                <div class="inputbox">
                    <span> how many: </span>
                    <input type="number" placeholder="Number of guests" name="guests">
                </div>

                <div class="inputbox">
                    <span> arrivals: </span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputbox">
                    <span> leaving: </span>
                    <input type="date" name="leaving">
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>





    <section class="footer">
        <div class="box-container">
        <div class="box2">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
                <a href="#services"><i class="fas fa-angle-right"></i>Services</a>
                <a href="gallery.php"><i class="fas fa-angle-right"></i>Gallery</a>
                <a href="#review"><i class="fas fa-angle-right"></i>Review</a>
                <a href="contact.php"><i class="fas fa-angle-right"></i>Contact</a>
            </div>

            <div class="box2">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>term of use</a>
            </div>

            <div class="box2">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
                <a href="#"><i class="fas fa-envelope"></i>prachijoshi@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>ujjain,india-456061</a>
            </div>

            <div class="box2">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
        </div>

        <div class="credit">created by <span> ujjain yatra team </span> | all rights reserved</div>

    </section>
    <script src="js/script.js"></script>
</body>

</html>