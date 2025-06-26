<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujjain Tourism Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>U</span>jjain yatra</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="book.php">Book</a>
            <a href="packages.php">packages</a>
            <a href="#services">Services</a>
            <a href="gallery.php">Gallery</a>
            <a href="#review">Review</a>
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


    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>
        <form action="">
            <h3>login</h3>
            <input type="email" class="box" placeholder="enter your email">
            <input type="password" class="box" placeholder="enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have any account? <a href="#">register now</a></p>

        </form>
    </div>

    <section class="home" id="home">
        <div class="content">
            <h3>Welcome to Ujjain:</h3>
            <p>Journey to the Heart of Spirituality!</p>
            <a href="#" class="btn">discover more</a>
        </div>

        <!-- <div class="controls"> 
        <span class="image-btn active" data-src="images/Mahakaleshwar-Temple-History.jpg"></span>
        <span class="image-btn" data-src="images/Mahakal.webp"></span>
        <span class="image-btn" data-src="images/harsidhi.webp"></span>
        <span class="image-btn" data-src="images/shri-ram-ghat.png"></span>
    </div> 

    <div class="image-container">
        <img src="images/Mahakaleshwar-Temple-History.jpg" id="image-slider">
    </div> -->
    </section>

    <section class="services" id="services">
        <h1 class="heading">our services</h1>
        <div class="box-container">
            <div class="box2">
                <img style="height: 6rem; width: 6rem;" src="./images/tour-icon-3.jpg" alt>
                <h3>tour guide</h3>
            </div>

            <div class="box2">
                <img style="height:6rem; width: 6rem;" src="./images/puja.png" alt>
                <h3>puja services</h3>
            </div>

            <div class="box2">
                <img style="height:6rem; width: 6rem;" src="./images/cal.png" alt>
                <h3>event calender</h3>
            </div>

            <div class="box2">
                <img style="height:6rem; width: 6rem;" src="./images/emg.png" alt>
                <h3>emergency services</h3>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="./images/mata.jpeg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste temporibus fuga eligendi quae dolor cumque
                sed voluptatem a fugiat deleniti, qui voluptate itaque corrupti minima, soluta labore quibusdam alias
                totam.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <section class="home-packages">
        <h1 class="heading">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/bhasmarti.jpg" alt="">
                </div>
                <div class="content">
                    <h3>bhasma aarti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/corridor.webp" alt="">
                </div>
                <div class="content">
                    <h3>Mahakal corridor</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Siddhavat.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Siddhavat Spiritual Journey</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="packages.php" class="btn">load more</a></div>
    </section>

    <section class="reviews" id="review">
        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>
        <div class="swiper-container reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img style="height: 120px; width: 120px;" src="images/johan.png">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cumque, officia earum
                            corporis sit minima dolorum ea soluta nam fugit dolore consequatur quod. Maiores, minus at.
                            Ducimus saepe dolores quam?</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img style="height: 120px; width: 120px;" src="images/Kayla.jpg">
                        <h3>Kayla</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugiat porro dolores
                            quibusdam laudantium inventore? Nisi incidunt sunt mollitia odit?</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img style="height: 120px; width: 120px;" src="images/jack.jpeg">
                        <h3>jack nicholson</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempora dignissimos
                            eligendi cumque, esse asperiores culpa nisi id cupiditate tenetur illo quidem consectetur
                            perferendis quasi.</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img style="height: 120px; width: 120px;" src="images/sophia.jpeg">
                        <h3>Sophia</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cumque, officia earum
                            corporis sit minima dolorum ea soluta nam fugit dolore consequatur quod. Maiores, minus at.
                            Ducimus saepe dolores quam?</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="box">
                        <img style="height: 120px; width: 120px;" src="images/pers.jpg">
                        <h3>henry hamrich</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, voluptatibus.</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="js/script.js" ></script>
</body>

</html>