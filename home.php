<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Travels Renggo </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="./css/style.css">
    </head>
<body>

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo"><span>Travels Renggo</span></a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#products">Places</a>
        <a href="./Login/login.php">Login/Signup</a>
        <a href="./admin/adminlogin.php">Admin</a>
        <a href="./staff/stafflogin.php">Staff</a>
    </nav>

    <div class="icons">
        <span data-tooltip="Favourites" data-flow="top"> <a href="#" class="fas fa-heart"></a></span>
        <span data-tooltip="Cart" data-flow="top"> <a href="#" class="fas fa-shopping-cart"></a></span>
        <span data-tooltip="Profile" data-flow="top"> <a href="#" class="fas fa-user"></a></span>
    </div>

</header>

<section class="home" id="home">

    <div class="content">
    <span> Menjelajahi dunia </span>
        <p>Temukan terbaik untuk mengenang momen-momen bersama keluarga anda.</p>
        <a href="#products" class="btn">Travel Now</a>
    </div>

</section>


<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="./images/about-vid.mp4" loop autoplay muted></video>
            <h3>Best Places</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
<p> "Temukan keindahan yang belum pernah Anda bayangkan dengan perjalanan kami! Mari jelajahi dunia bersama-sama dan rasakan pesonanya dalam
     setiap langkah. Dari pantai pasir putih hingga puncak gunung yang menakjubkan, kami siap mengantarkan Anda pada petualangan tak terlupakan. 
     Bersiaplah untuk melangkah ke dunia baru yang penuh dengan kejutan dan kenangan yang tak terlupakan. Bergabunglah dengan kami dan buatlah momen-momen magis dalam perjalanan hidup Anda!"</p>
            <a href="#review" class="btn">learn more</a>
        </div>

    </div>

</section> 

<section class="products" id="products">

    <h1 class="heading"> Popular <span>Places</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./images/tokyo.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="./cities.php" class="cart-btn">Visit Us</a>
                    <a href="./cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Jepang</h3>
                <div class="price">Rp 9.800.000</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./images/france.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="./cities.php" class="cart-btn">Visit Us</a>
                    <a href="./cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Prancis</h3>
                <div class="price">Rp 15.000.000</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./images/thailand.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="./cities.php" class="cart-btn">Visit Us</a>
                    <a href="./cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Thailand</h3>
                <div class="price">Rp 1.900.000</div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./images/korsel.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="./cities.php" class="cart-btn">Visit Us</a>
                    <a href="./cities.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Korea Selatan</h3>
                <div class="price">Rp 3.500.000</div>
            </div>
        </div>

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="./images/contact-img.svg" alt="">
        </div>

    </div>

</section>


<section class="footer">

    <div class="box-container">

    <div class="credit">&copy;Travels Renggo</div>

</section>

</body>
</html>